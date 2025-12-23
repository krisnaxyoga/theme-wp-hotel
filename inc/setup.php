<?php
/**
 * inc/setup.php
 * Semua setup dasar theme
 */

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
1. Theme setup
2. Custom image sizes
3. JPEG quality
4. Nav menu attributes (smooth-scroll anchor fix)
--------------------------------------------------------------*/

/*--------------------------------------------------------------
1. Theme setup
--------------------------------------------------------------*/
add_action('after_setup_theme', 'theme_setup');
function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => __('Primary Menu', 'textdomain'),
        'footer'  => __('Footer Menu', 'textdomain'),
    ]);
}

/*--------------------------------------------------------------
2. Custom image sizes
--------------------------------------------------------------*/
add_action('init', 'theme_image_sizes');
function theme_image_sizes() {
    add_image_size('blog-thumbnail', 800, 450, true); // 16:9
    add_image_size('blog-single',    1200, 630, true); // 1.91:1
}

/*--------------------------------------------------------------
3. JPEG quality
--------------------------------------------------------------*/
add_filter('jpeg_quality', fn() => 95);
add_filter('wp_editor_set_quality', fn() => 95);

/*--------------------------------------------------------------
4. Nav menu attributes
   Ubah href="/#section" menjadi full URL
--------------------------------------------------------------*/
add_filter('nav_menu_link_attributes', 'theme_fix_anchor_links', 10, 3);
function theme_fix_anchor_links($atts, $item, $args) {
    if (!isset($atts['href'])) return $atts;

    $href = $atts['href'];
    $hashPos = strpos($href, '#');

    if ($hashPos !== false) {
        $hash = substr($href, $hashPos);
        $href = home_url() . $hash;
    }

    $atts['href'] = $href;

    return $atts;
}

/*--------------------------------------------------------------
5. Calculate reading time
--------------------------------------------------------------*/
function calculate_reading_time($post_id) {
    $post = get_post($post_id);
    if (!$post) return 0;

    $content = strip_tags($post->post_content);
    $word_count = str_word_count($content);
    $reading_time = ceil($word_count / 200); // 200 words per minute

    return max(1, $reading_time); // minimum 1 minute
}


// 1. Proper 404 Headers
function custom_404_headers() {
    if (is_404()) {
        status_header(404);
        nocache_headers();
    }
}
add_action('wp', 'custom_404_headers');

// 2. 404 Analytics Tracking
function track_404_errors() {
    if (is_404()) {
        $requested_url = $_SERVER['REQUEST_URI'];
        $referer = wp_get_referer();
        
        // Log ke database (opsional)
        error_log("404 Error: $requested_url | Referer: $referer");
        
        // Google Analytics 4 tracking
        ?>
        <script>
        if (typeof gtag !== 'undefined') {
            gtag('event', 'page_not_found', {
                'event_category': 'Error',
                'event_label': '<?php echo esc_js($requested_url); ?>',
                'custom_map.dimension1': '<?php echo esc_js($referer); ?>'
            });
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'track_404_errors');

// 3. Custom 404 Page Title
function custom_404_title($title) {
    if (is_404()) {
        return 'Halaman Tidak Ditemukan - ' . get_bloginfo('name');
    }
    return $title;
}
add_filter('wp_title', 'custom_404_title');
add_filter('document_title_parts', function($title_parts) {
    if (is_404()) {
        $title_parts['title'] = 'Halaman Tidak Ditemukan';
    }
    return $title_parts;
});

// 4. Redirect Common Typos (Opsional)
function handle_common_404_redirects() {
    if (is_404()) {
        $requested_url = $_SERVER['REQUEST_URI'];
        
        // Contoh redirects untuk typos umum
        $redirects = array(
            '/blog/' => '/blog',
            '/contac/' => '/contact',
            '/abou/' => '/about',
        );
        
        foreach ($redirects as $wrong => $correct) {
            if (strpos($requested_url, $wrong) !== false) {
                wp_redirect(home_url($correct), 301);
                exit;
            }
        }
    }
}
add_action('template_redirect', 'handle_common_404_redirects');

// 5. 404 Monitoring (Log ke Database)
function log_404_to_database() {
    if (is_404()) {
        global $wpdb;
        
        $table_name = $wpdb->prefix . '404_logs';
        
        // Buat table jika belum ada
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            url varchar(255) NOT NULL,
            referer varchar(255),
            user_agent text,
            ip_address varchar(45),
            date_time datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        
        // Insert log
        $wpdb->insert(
            $table_name,
            array(
                'url' => $_SERVER['REQUEST_URI'],
                'referer' => wp_get_referer(),
                'user_agent' => $_SERVER['HTTP_USER_AGENT'],
                'ip_address' => $_SERVER['REMOTE_ADDR']
            )
        );
    }
}
add_action('wp', 'log_404_to_database');

// 6. Suggested Content untuk 404
function get_suggested_content_for_404() {
    // Cari posts berdasarkan URL yang diminta
    $requested_url = $_SERVER['REQUEST_URI'];
    $keywords = explode('/', trim($requested_url, '/'));

    $search_terms = array();
    foreach ($keywords as $keyword) {
        if (strlen($keyword) > 3) {
            $search_terms[] = sanitize_text_field($keyword);
        }
    }

    if (!empty($search_terms)) {
        $search_query = implode(' ', $search_terms);

        $posts = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            's' => $search_query,
            'post_status' => 'publish'
        ));

        return $posts;
    }

    return false;
}

/*--------------------------------------------------------------
7. Custom Nav Walker for Kempinski Header
--------------------------------------------------------------*/
class Kempinski_Nav_Walker extends Walker_Nav_Menu {

    // Start Level - for submenus (ul)
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="absolute top-full left-0 mt-2 bg-[#514d32] min-w-48 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 shadow-lg">';
    }

    // End Level
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }

    // Start Element - for each menu item (li)
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        // Li classes
        $li_class = $depth === 0 ? '' : '';
        if ($has_children && $depth === 0) {
            $li_class = 'group relative';
        }

        $output .= '<li class="' . esc_attr($li_class) . '">';

        // Link classes based on depth
        if ($depth === 0) {
            $link_class = 'header-link text-sm uppercase tracking-[0.15em] font-medium transition-colors duration-300 hover:text-[#b5a191] inline-flex items-center gap-1';
        } else {
            $link_class = 'block px-4 py-2 text-sm text-white/80 hover:text-[#b5a191] hover:bg-white/5 transition-colors';
        }

        // Build the link
        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['class'] = $link_class;

        if (!empty($item->target)) {
            $atts['target'] = $item->target;
        }
        if ($item->target === '_blank') {
            $atts['rel'] = 'noopener';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $output .= '<a' . $attributes . '>';
        $output .= esc_html($item->title);

        // Add dropdown arrow for parent items
        if ($has_children && $depth === 0) {
            $output .= '<svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>';
        }

        $output .= '</a>';
    }

    // End Element
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}

/*--------------------------------------------------------------
8. Custom Nav Walker for Mobile Menu
--------------------------------------------------------------*/
class Kempinski_Mobile_Nav_Walker extends Walker_Nav_Menu {

    // Start Level - for submenus
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="pl-4 mt-2 space-y-2 border-l border-white/20">';
    }

    // End Level
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }

    // Start Element
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<li>';

        // Link classes based on depth
        if ($depth === 0) {
            $link_class = 'text-white/80 hover:text-[#b5a191] text-sm uppercase tracking-[0.15em] font-medium transition-colors mobile-menu-link';
        } else {
            $link_class = 'text-white/60 hover:text-[#b5a191] text-sm transition-colors mobile-menu-link';
        }

        // Build the link
        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['class'] = $link_class;

        if (!empty($item->target)) {
            $atts['target'] = $item->target;
        }
        if ($item->target === '_blank') {
            $atts['rel'] = 'noopener';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $output .= '<a' . $attributes . '>' . esc_html($item->title) . '</a>';
    }

    // End Element
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}
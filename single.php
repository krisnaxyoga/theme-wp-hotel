<?php
/**
 * Single Post Template
 * Author: Yoga Krisna
 * @package PenidaTripGo
 */

get_template_part('template-parts/header'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
$post_id = get_the_ID();
$reading_time = calculate_reading_time($post_id);
$categories = get_the_category();
$tags = get_the_tags();
$post_url = get_permalink();
$post_title = get_the_title();
$thumbnail_url = get_the_post_thumbnail_url(null, 'large');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-white'); ?> itemscope itemtype="https://schema.org/BlogPosting">
    <!-- Enhanced Schema.org JSON-LD for better SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": <?php echo json_encode(get_the_title()); ?>,
        "description": <?php echo json_encode(wp_trim_words(get_the_excerpt(), 30, '...')); ?>,
        "datePublished": "<?php echo get_the_date('c'); ?>",
        "dateModified": "<?php echo get_the_modified_date('c'); ?>",
        "wordCount": "<?php echo str_word_count(strip_tags(get_the_content())); ?>",
        <?php if (has_post_thumbnail()) : ?>
        "image": {
            "@type": "ImageObject",
            "url": "<?php echo esc_url($thumbnail_url); ?>",
            "width": 1200,
            "height": 630
        },
        <?php endif; ?>
        "author": {
            "@type": "Person",
            "name": "<?php echo esc_js(get_the_author_meta('display_name')); ?>",
            "url": "<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
        },
        "publisher": {
            "@type": "Organization",
            "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url(get_site_icon_url()); ?>"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo esc_url($post_url); ?>"
        },
        "articleBody": <?php echo json_encode(wp_strip_all_tags(get_the_content())); ?>
    }
    </script>

    <!-- Breadcrumb Navigation with Brand Colors -->
    <nav class="bg-gradient-to-r from-gray-50 to-white border-b-2 border-[#f59e42]/20" aria-label="Breadcrumb">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="<?php echo esc_url(home_url()); ?>" class="hover:text-[#f59e42] transition-colors font-semibold" itemprop="item">
                        <i class="ti ti-home text-[#4db8b8]"></i>
                        <span itemprop="name" class="ml-1">Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                </li>
                <li><i class="ti ti-chevron-right text-gray-400"></i></li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" class="hover:text-[#f59e42] transition-colors" itemprop="item">
                        <span itemprop="name">Blog</span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
                <?php if (!empty($categories)) : ?>
                <li><i class="ti ti-chevron-right text-gray-400"></i></li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="hover:text-[#f59e42] transition-colors" itemprop="item">
                        <span itemprop="name"><?php echo esc_html($categories[0]->name); ?></span>
                    </a>
                    <meta itemprop="position" content="3">
                </li>
                <?php endif; ?>
                <li><i class="ti ti-chevron-right text-gray-400"></i></li>
                <li class="text-[#1e3a5f] font-semibold" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <span itemprop="name"><?php echo wp_trim_words($post_title, 8, '...'); ?></span>
                    <meta itemprop="position" content="4">
                </li>
            </ol>
        </div>
    </nav>

    <!-- Article Header -->
    <div class="bg-gradient-to-b from-white to-gray-50 py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <!-- Categories with Brand Colors -->
            <?php if (!empty($categories)) : ?>
            <div class="mb-6 flex flex-wrap gap-2">
                <?php foreach ($categories as $category) : ?>
                <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                   class="inline-flex items-center gap-1 bg-gradient-to-r from-[#f59e42] to-[#e88d2f] text-white text-sm font-bold px-4 py-2 rounded-full hover:from-[#e88d2f] hover:to-[#f59e42] transition-all hover:scale-105 shadow-md">
                    <i class="ti ti-tag"></i>
                    <span><?php echo esc_html($category->name); ?></span>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#1e3a5f] leading-tight mb-6" itemprop="headline">
                <?php the_title(); ?>
            </h1>

            <!-- Excerpt/Description -->
            <?php if (has_excerpt()) : ?>
            <div class="text-xl text-gray-600 leading-relaxed mb-8 border-l-4 border-[#4db8b8] pl-6 italic" itemprop="description">
                <?php the_excerpt(); ?>
            </div>
            <?php endif; ?>

            <!-- Meta Information with Brand Colors -->
            <div class="flex flex-wrap items-center gap-4 md:gap-6 text-sm text-gray-600 mb-8 pb-8 border-b-2 border-[#f59e42]/20">
                <div class="flex items-center gap-3">
                    <?php echo get_avatar(get_the_author_meta('ID'), 48, '', '', array('class' => 'w-12 h-12 rounded-full object-cover border-2 border-[#4db8b8]')); ?>
                    <div>
                        <div class="font-bold text-[#1e3a5f]" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <span itemprop="name"><?php echo esc_html(get_the_author_meta('display_name')); ?></span>
                        </div>
                        <div class="text-xs text-gray-500">Author</div>
                    </div>
                </div>
                <div class="flex items-center gap-2 text-[#4db8b8]">
                    <i class="ti ti-calendar text-lg"></i>
                    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                        <?php echo get_the_date('F j, Y'); ?>
                    </time>
                </div>
                <?php if (get_the_date() !== get_the_modified_date()) : ?>
                <div class="flex items-center gap-2 text-[#f59e42]">
                    <i class="ti ti-refresh text-lg"></i>
                    <time datetime="<?php echo get_the_modified_date('c'); ?>" itemprop="dateModified">
                        Updated: <?php echo get_the_modified_date('M j, Y'); ?>
                    </time>
                </div>
                <?php endif; ?>
                <div class="flex items-center gap-2 text-[#8bc53f]">
                    <i class="ti ti-clock text-lg"></i>
                    <span><?php echo $reading_time; ?> min read</span>
                </div>
            </div>

            <!-- Featured Image -->
            <?php
            $custom_image_url = get_post_meta(get_the_ID(), '_custom_link_url', true);
            if ($custom_image_url || has_post_thumbnail()) :
                $image_url = $custom_image_url ? $custom_image_url : $thumbnail_url;
                $image_alt = $custom_image_url ? $post_title : get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
            ?>
            <figure class="relative mb-8 rounded-2xl overflow-hidden shadow-2xl border-4 border-white" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                <img class="w-full h-64 md:h-96 lg:h-[500px] object-cover"
                     src="<?php echo esc_url($image_url); ?>"
                     alt="<?php echo esc_attr($image_alt ?: $post_title); ?>"
                     itemprop="url"
                     loading="eager">
                <meta itemprop="width" content="1200">
                <meta itemprop="height" content="630">
            </figure>
            <?php endif; ?>
        </div>
    </div>

    <!-- Social Share Buttons Section -->
    <div class="sticky top-24 z-40 bg-white shadow-lg border-b-2 border-[#f59e42]/20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-4">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2 text-[#1e3a5f] font-bold">
                    <i class="ti ti-share text-2xl text-[#4db8b8]"></i>
                    <span>Share This Article:</span>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/?text=<?php echo urlencode($post_title . ' - ' . $post_url); ?>"
                       target="_blank" rel="noopener"
                       class="group flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2.5 rounded-xl font-bold transition-all hover:scale-105 shadow-md"
                       aria-label="Share on WhatsApp">
                        <i class="ti ti-brand-whatsapp text-xl"></i>
                        <span class="hidden sm:inline">WhatsApp</span>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($post_url); ?>"
                       target="_blank" rel="noopener"
                       class="group flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl font-bold transition-all hover:scale-105 shadow-md"
                       aria-label="Share on Facebook">
                        <i class="ti ti-brand-facebook text-xl"></i>
                        <span class="hidden sm:inline">Facebook</span>
                    </a>

                    <!-- X (Twitter) -->
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($post_url); ?>&text=<?php echo urlencode($post_title); ?>"
                       target="_blank" rel="noopener"
                       class="group flex items-center gap-2 bg-black hover:bg-gray-800 text-white px-4 py-2.5 rounded-xl font-bold transition-all hover:scale-105 shadow-md"
                       aria-label="Share on X">
                        <i class="ti ti-brand-x text-xl"></i>
                        <span class="hidden sm:inline">X</span>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($post_url); ?>"
                       target="_blank" rel="noopener"
                       class="group flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white px-4 py-2.5 rounded-xl font-bold transition-all hover:scale-105 shadow-md"
                       aria-label="Share on LinkedIn">
                        <i class="ti ti-brand-linkedin text-xl"></i>
                        <span class="hidden sm:inline">LinkedIn</span>
                    </a>

                    <!-- Threads -->
                    <a href="https://threads.net/intent/post?text=<?php echo urlencode($post_title . ' - ' . $post_url); ?>"
                       target="_blank" rel="noopener"
                       class="group flex items-center gap-2 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-4 py-2.5 rounded-xl font-bold transition-all hover:scale-105 shadow-md"
                       aria-label="Share on Threads">
                        <i class="ti ti-brand-threads text-xl"></i>
                        <span class="hidden sm:inline">Threads</span>
                    </a>

                    <!-- Copy Link -->
                    <button onclick="copyToClipboard('<?php echo esc_js($post_url); ?>')"
                            class="group flex items-center gap-2 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2.5 rounded-xl font-bold transition-all hover:scale-105 shadow-md"
                            aria-label="Copy link">
                        <i class="ti ti-copy text-xl"></i>
                        <span class="hidden sm:inline">Copy</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Content -->
    <div class="bg-white py-12 md:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <!-- Main Article Content with Enhanced Table Styling -->
            <div class="prose prose-lg max-w-none
                    prose-headings:text-[#1e3a5f] prose-headings:font-extrabold prose-headings:tracking-tight
                    prose-h1:text-4xl prose-h1:mt-10 prose-h1:mb-6 prose-h1:border-b-4 prose-h1:border-[#f59e42] prose-h1:pb-4
                    prose-h2:text-3xl prose-h2:mt-10 prose-h2:mb-5 prose-h2:border-b-2 prose-h2:border-[#4db8b8] prose-h2:pb-3
                    prose-h3:text-2xl prose-h3:mt-8 prose-h3:mb-4 prose-h3:text-[#4db8b8]
                    prose-h4:text-xl prose-h4:mt-6 prose-h4:mb-3 prose-h4:text-[#f59e42]
                    prose-h5:text-lg prose-h5:mt-5 prose-h5:mb-2
                    prose-h6:text-base prose-h6:mt-4 prose-h6:mb-2
                    prose-p:text-gray-700 prose-p:leading-relaxed prose-p:mb-5
                    prose-a:text-[#4db8b8] prose-a:no-underline prose-a:font-semibold hover:prose-a:text-[#3a9898] hover:prose-a:underline prose-a:transition-colors
                    prose-strong:text-[#1e3a5f] prose-strong:font-bold
                    prose-em:text-gray-600 prose-em:italic
                    prose-ul:my-6 prose-ul:pl-6
                    prose-ol:my-6 prose-ol:pl-6
                    prose-li:text-gray-700 prose-li:my-2 prose-li:leading-relaxed marker:prose-li:text-[#f59e42]
                    prose-blockquote:border-l-4 prose-blockquote:border-[#4db8b8] prose-blockquote:bg-gradient-to-r prose-blockquote:from-[#4db8b8]/10 prose-blockquote:to-transparent prose-blockquote:px-6 prose-blockquote:py-4 prose-blockquote:italic prose-blockquote:my-6 prose-blockquote:rounded-r-xl prose-blockquote:text-gray-700
                    prose-img:rounded-2xl prose-img:shadow-xl prose-img:my-8 prose-img:border-4 prose-img:border-white
                    prose-figure:my-10
                    prose-figcaption:text-center prose-figcaption:text-sm prose-figcaption:text-gray-600 prose-figcaption:mt-3 prose-figcaption:italic
                    prose-code:bg-[#f59e42]/10 prose-code:px-2 prose-code:py-1 prose-code:rounded prose-code:text-sm prose-code:font-mono prose-code:text-[#1e3a5f] prose-code:font-semibold
                    prose-pre:bg-[#1e3a5f] prose-pre:text-gray-100 prose-pre:rounded-xl prose-pre:p-6 prose-pre:overflow-x-auto prose-pre:my-8 prose-pre:shadow-xl prose-pre:border-4 prose-pre:border-[#4db8b8]/30
                    prose-hr:border-[#f59e42] prose-hr:my-10 prose-hr:border-t-2"
                id="article-content"
                itemprop="articleBody">
                <?php
                // Proper content rendering for Gutenberg blocks
                $content = get_the_content();
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                ?>
            </div>

            <!-- Enhanced Table Styling via CSS -->
            <style>
            /* Gutenberg Table Styling with Brand Colors */
            #article-content table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
                margin: 2rem 0;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }

            #article-content thead {
                background: linear-gradient(to right, #1e3a5f, #2a5080);
            }

            #article-content thead th {
                color: white;
                font-weight: 700;
                text-align: left;
                padding: 1rem 1.25rem;
                border: none;
                font-size: 0.95rem;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            #article-content tbody tr {
                transition: background-color 0.2s ease;
            }

            #article-content tbody tr:nth-child(odd) {
                background-color: #f9fafb;
            }

            #article-content tbody tr:nth-child(even) {
                background-color: white;
            }

            #article-content tbody tr:hover {
                background-color: rgba(77, 184, 184, 0.1);
            }

            #article-content tbody td {
                padding: 1rem 1.25rem;
                border-bottom: 1px solid #e5e7eb;
                color: #374151;
                font-size: 0.95rem;
            }

            #article-content tbody tr:last-child td {
                border-bottom: none;
            }

            /* Striped table variant */
            #article-content .is-style-stripes tbody tr:nth-child(odd) {
                background-color: rgba(245, 158, 66, 0.05);
            }

            #article-content .is-style-stripes tbody tr:nth-child(even) {
                background-color: white;
            }

            /* Responsive tables */
            @media (max-width: 768px) {
                #article-content table {
                    display: block;
                    overflow-x: auto;
                    white-space: nowrap;
                }
            }
            </style>

            <!-- Tags Section -->
            <?php if (!empty($tags)) : ?>
            <div class="mt-12 pt-8 border-t-2 border-[#f59e42]/20">
                <div class="flex items-center gap-2 mb-4">
                    <i class="ti ti-tags text-2xl text-[#4db8b8]"></i>
                    <h3 class="text-lg font-bold text-[#1e3a5f]">Tags</h3>
                </div>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($tags as $tag) : ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                       class="inline-flex items-center gap-1 bg-white border-2 border-[#4db8b8] text-[#1e3a5f] text-sm px-4 py-2 rounded-full hover:bg-[#4db8b8] hover:text-white transition-all hover:scale-105 font-semibold">
                        <i class="ti ti-hash text-xs"></i>
                        <span><?php echo esc_html($tag->name); ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Author Bio with Brand Colors -->
            <div class="mt-12 pt-8 border-t-2 border-[#f59e42]/20">
                <div class="flex flex-col sm:flex-row items-start gap-6 bg-gradient-to-r from-[#f59e42]/5 to-transparent p-6 md:p-8 rounded-2xl border-l-4 border-[#f59e42]">
                    <?php echo get_avatar(get_the_author_meta('ID'), 100, '', '', array('class' => 'w-24 h-24 rounded-full object-cover border-4 border-[#4db8b8] shadow-lg')); ?>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-3">
                            <i class="ti ti-user text-2xl text-[#4db8b8]"></i>
                            <h3 class="text-2xl font-extrabold text-[#1e3a5f]">
                                About <?php echo esc_html(get_the_author_meta('display_name')); ?>
                            </h3>
                        </div>
                        <?php if (get_the_author_meta('description')) : ?>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            <?php echo esc_html(get_the_author_meta('description')); ?>
                        </p>
                        <?php endif; ?>
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                           class="inline-flex items-center gap-2 text-[#4db8b8] hover:text-[#3a9898] font-bold transition-colors">
                            <span>View all posts by <?php echo esc_html(get_the_author_meta('display_name')); ?></span>
                            <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related Articles Section with Brand Colors -->
<section class="bg-gradient-to-b from-gray-50 to-white py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-[#f59e42]/10 px-5 py-2 rounded-full mb-4">
                <i class="ti ti-article text-[#f59e42] text-xl"></i>
                <span class="text-sm md:text-base font-bold text-[#1e3a5f] uppercase tracking-wide">Related</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#1e3a5f]">
                You May Also <span class="text-[#f59e42]">Like</span>
            </h2>
        </div>

        <?php
        if ($categories) {
            $category_ids = wp_list_pluck($categories, 'term_id');
            $related_query = new WP_Query(array(
                'category__in' => $category_ids,
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1,
                'orderby' => 'rand',
            ));

            if ($related_query->have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <?php while ($related_query->have_posts()) {
                        $related_query->the_post();
                        $custom_image_url = get_post_meta(get_the_ID(), '_custom_link_url', true);
                    ?>
                        <article class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-transparent hover:border-[#f59e42]">
                            <a href="<?php the_permalink(); ?>" class="block">
                                <?php if ($custom_image_url || has_post_thumbnail()) : ?>
                                    <div class="relative aspect-video overflow-hidden">
                                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                             src="<?php echo $custom_image_url ? esc_url($custom_image_url) : get_the_post_thumbnail_url(); ?>"
                                             alt="<?php the_title(); ?>" loading="lazy">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a5f]/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </div>
                                <?php else: ?>
                                    <div class="aspect-video bg-gradient-to-br from-[#4db8b8] to-[#3a9898] flex items-center justify-center">
                                        <i class="ti ti-photo text-white text-6xl opacity-30"></i>
                                    </div>
                                <?php endif; ?>

                                <div class="p-6">
                                    <h3 class="text-xl font-extrabold text-[#1e3a5f] mb-3 line-clamp-2 group-hover:text-[#f59e42] transition-colors leading-tight">
                                        <?php the_title(); ?>
                                    </h3>

                                    <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>

                                    <div class="flex items-center justify-between text-xs text-gray-500 border-t border-gray-100 pt-4">
                                        <div class="flex items-center gap-1">
                                            <i class="ti ti-calendar text-[#4db8b8]"></i>
                                            <time datetime="<?php echo get_the_date('c'); ?>">
                                                <?php echo get_the_date('M j, Y'); ?>
                                            </time>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <i class="ti ti-clock text-[#f59e42]"></i>
                                            <span><?php echo calculate_reading_time(get_the_ID()); ?> min</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php } ?>
                </div>
            <?php
                wp_reset_postdata();
            else : ?>
                <div class="text-center py-12 bg-white rounded-2xl shadow-md">
                    <i class="ti ti-article-off text-6xl text-gray-300 mb-4"></i>
                    <p class="text-gray-600">No related articles found.</p>
                </div>
            <?php endif;
        } ?>
    </div>
</section>

<?php endwhile; endif; ?>

<!-- Copy to Clipboard Script -->
<script>
function copyToClipboard(text) {
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text).then(function() {
            // Show success message
            const btn = event.target.closest('button');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<i class="ti ti-check text-xl"></i><span class="hidden sm:inline">Copied!</span>';
            btn.classList.add('bg-green-600');
            btn.classList.remove('bg-gray-600');

            setTimeout(function() {
                btn.innerHTML = originalHTML;
                btn.classList.remove('bg-green-600');
                btn.classList.add('bg-gray-600');
            }, 2000);
        }).catch(function(err) {
            console.error('Failed to copy: ', err);
            fallbackCopyToClipboard(text);
        });
    } else {
        fallbackCopyToClipboard(text);
    }
}

function fallbackCopyToClipboard(text) {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    textArea.style.position = 'fixed';
    textArea.style.top = '-9999px';
    textArea.style.left = '-9999px';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        document.execCommand('copy');
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="ti ti-check text-xl"></i><span class="hidden sm:inline">Copied!</span>';
        btn.classList.add('bg-green-600');
        btn.classList.remove('bg-gray-600');

        setTimeout(function() {
            btn.innerHTML = originalHTML;
            btn.classList.remove('bg-green-600');
            btn.classList.add('bg-gray-600');
        }, 2000);
    } catch (err) {
        console.error('Fallback: Failed to copy', err);
        alert('Failed to copy link. Please copy manually: ' + text);
    }

    document.body.removeChild(textArea);
}
</script>

<?php get_template_part('template-parts/footer'); ?>

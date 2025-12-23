<?php
/**
 * Customizer Settings untuk Terra Eden Bali Front Page
 * Luxury Wooden Villa Investment in Nusa Dua, Bali
 *
 * @package TerraEdenBali
 */

function terra_eden_customize_register($wp_customize) {

    // ========================================
    // PANEL: TERRA EDEN FRONT PAGE
    // ========================================
    $wp_customize->add_panel('terra_eden_panel', array(
        'title'       => __('Terra Eden Bali', 'terraeden'),
        'description' => __('Customize konten dan gambar di halaman depan Terra Eden Bali', 'terraeden'),
        'priority'    => 25,
    ));

    // ========================================
    // SECTION: LOGO & BRANDING
    // ========================================
    $wp_customize->add_section('te_branding', array(
        'title'    => __('Logo & Branding', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 5,
    ));

    // Header Logo
    $wp_customize->add_setting('header_logo', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/terra-eden-logo.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'       => __('Header Logo', 'terraeden'),
        'description' => __('Logo untuk header. Rekomendasi: 56x56px', 'terraeden'),
        'section'     => 'te_branding',
    )));

    // Header Logo Alt
    $wp_customize->add_setting('header_logo_alt', array(
        'default'           => 'Terra Eden Bali',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_logo_alt', array(
        'label'   => __('Header Logo Alt Text', 'terraeden'),
        'section' => 'te_branding',
        'type'    => 'text',
    ));

    // Brand Name (Header Text)
    $wp_customize->add_setting('brand_name', array(
        'default'           => 'Terra Eden',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('brand_name', array(
        'label'       => __('Brand Name', 'terraeden'),
        'description' => __('Nama brand yang tampil di header', 'terraeden'),
        'section'     => 'te_branding',
        'type'        => 'text',
    ));

    // Brand Tagline (Header Subtext)
    $wp_customize->add_setting('brand_tagline', array(
        'default'           => 'Nusa Dua, Bali',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('brand_tagline', array(
        'label'       => __('Brand Tagline', 'terraeden'),
        'description' => __('Tagline/lokasi di bawah brand name', 'terraeden'),
        'section'     => 'te_branding',
        'type'        => 'text',
    ));

    // Header CTA Button Text
    $wp_customize->add_setting('header_cta_text', array(
        'default'           => 'Book Now',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('header_cta_text', array(
        'label'       => __('Header CTA Button Text', 'terraeden'),
        'description' => __('Text untuk tombol CTA di header', 'terraeden'),
        'section'     => 'te_branding',
        'type'        => 'text',
    ));

    // WhatsApp Number
    $wp_customize->add_setting('whatsapp_number', array(
        'default'           => '6281234567890',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('whatsapp_number', array(
        'label'       => __('WhatsApp Number', 'terraeden'),
        'description' => __('Format: 6281234567890 (dengan kode negara)', 'terraeden'),
        'section'     => 'te_branding',
        'type'        => 'text',
    ));

    // ========================================
    // SECTION: HERO
    // ========================================
    $wp_customize->add_section('te_hero', array(
        'title'    => __('Hero Section', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 10,
    ));

    // Hero Background Desktop
    $wp_customize->add_setting('hero_bg_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/terra-eden-hero.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg_image', array(
        'label'       => __('Hero Background (Desktop)', 'terraeden'),
        'description' => __('Rekomendasi: 1920x1080px', 'terraeden'),
        'section'     => 'te_hero',
    )));

    // Hero Background Mobile
    $wp_customize->add_setting('hero_bg_image_mobile', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/terra-eden-hero-mobile.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg_image_mobile', array(
        'label'       => __('Hero Background (Mobile)', 'terraeden'),
        'description' => __('Rekomendasi: 640x960px', 'terraeden'),
        'section'     => 'te_hero',
    )));

    // Hero Tagline
    $wp_customize->add_setting('hero_tagline', array(
        'default'           => 'Luxury Wooden Villa Investment in Nusa Dua, Bali',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_tagline', array(
        'label'   => __('Hero Tagline', 'terraeden'),
        'section' => 'te_hero',
        'type'    => 'text',
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Terra Eden Bali',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'terraeden'),
        'section' => 'te_hero',
        'type'    => 'text',
    ));

    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Fully Managed Resort-Style Villas with High ROI & Passive Income',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'terraeden'),
        'section' => 'te_hero',
        'type'    => 'textarea',
    ));

    // ========================================
    // SECTION: WELCOME / ABOUT
    // ========================================
    $wp_customize->add_section('te_welcome', array(
        'title'    => __('Welcome Section', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 20,
    ));

    // Welcome Image
    $wp_customize->add_setting('welcome_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/terra-eden-villa.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'welcome_image', array(
        'label'       => __('Welcome Section Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_welcome',
    )));

    // ========================================
    // SECTION: LOCATION
    // ========================================
    $wp_customize->add_section('te_location', array(
        'title'    => __('Location Section', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 25,
    ));

    // Location Image
    $wp_customize->add_setting('location_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/nusa-dua-location.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'location_image', array(
        'label'       => __('Location Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x600px (square)', 'terraeden'),
        'section'     => 'te_location',
    )));

    // ========================================
    // SECTION: VILLA TYPES
    // ========================================
    $wp_customize->add_section('te_villas', array(
        'title'    => __('Villa Types', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 30,
    ));

    // Daisy Homes Image
    $wp_customize->add_setting('villa_daisy_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/daisy-homes.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'villa_daisy_image', array(
        'label'       => __('Daisy Homes Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_villas',
    )));

    // Jasmine Homes Image
    $wp_customize->add_setting('villa_jasmine_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/jasmine-homes.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'villa_jasmine_image', array(
        'label'       => __('Jasmine Homes Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_villas',
    )));

    // Lotus Homes Image
    $wp_customize->add_setting('villa_lotus_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/lotus-homes.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'villa_lotus_image', array(
        'label'       => __('Lotus Homes Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_villas',
    )));

    // Lily Homes Image
    $wp_customize->add_setting('villa_lily_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/lily-homes.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'villa_lily_image', array(
        'label'       => __('Lily Homes Image (Premium)', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_villas',
    )));

    // ========================================
    // SECTION: FACILITIES
    // ========================================
    $wp_customize->add_section('te_facilities', array(
        'title'    => __('Facilities Section', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 40,
    ));

    // Restaurant Image
    $wp_customize->add_setting('facility_restaurant_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/facility-restaurant.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facility_restaurant_image', array(
        'label'       => __('Restaurant Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_facilities',
    )));

    // Wellness Image
    $wp_customize->add_setting('facility_wellness_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/facility-wellness.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facility_wellness_image', array(
        'label'       => __('Wellness Center Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_facilities',
    )));

    // Co-Working Image
    $wp_customize->add_setting('facility_coworking_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/facility-coworking.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facility_coworking_image', array(
        'label'       => __('Co-Working Hub Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_facilities',
    )));

    // Spa Image
    $wp_customize->add_setting('facility_spa_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/facility-spa.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facility_spa_image', array(
        'label'       => __('Spa & Massage Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_facilities',
    )));

    // Pool Image
    $wp_customize->add_setting('facility_pool_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/facility-pool.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facility_pool_image', array(
        'label'       => __('Swimming Pool Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_facilities',
    )));

    // Kids Area Image
    $wp_customize->add_setting('facility_kids_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/facility-kids.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'facility_kids_image', array(
        'label'       => __('Kids & Family Area Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x750px (4:5 ratio)', 'terraeden'),
        'section'     => 'te_facilities',
    )));

    // ========================================
    // SECTION: ECO DESIGN
    // ========================================
    $wp_customize->add_section('te_eco_design', array(
        'title'    => __('Eco-Luxury Design', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 50,
    ));

    // Eco Design Image 1
    $wp_customize->add_setting('eco_design_image_1', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/eco-design-1.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'eco_design_image_1', array(
        'label'       => __('Eco Design Image 1 (Left)', 'terraeden'),
        'description' => __('Rekomendasi: 450x600px (3:4 ratio)', 'terraeden'),
        'section'     => 'te_eco_design',
    )));

    // Eco Design Image 2
    $wp_customize->add_setting('eco_design_image_2', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/eco-design-2.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'eco_design_image_2', array(
        'label'       => __('Eco Design Image 2 (Right)', 'terraeden'),
        'description' => __('Rekomendasi: 450x600px (3:4 ratio)', 'terraeden'),
        'section'     => 'te_eco_design',
    )));

    // ========================================
    // SECTION: NEARBY ATTRACTIONS
    // ========================================
    $wp_customize->add_section('te_attractions', array(
        'title'    => __('Nearby Attractions', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 60,
    ));

    // Pandawa Beach Image
    $wp_customize->add_setting('attraction_pandawa_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/pandawa-beach.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'attraction_pandawa_image', array(
        'label'       => __('Pandawa Beach Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_attractions',
    )));

    // Melasti Beach Image
    $wp_customize->add_setting('attraction_melasti_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/melasti-beach.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'attraction_melasti_image', array(
        'label'       => __('Melasti Beach Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_attractions',
    )));

    // Pandawa Golf Image
    $wp_customize->add_setting('attraction_golf_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/pandawa-golf.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'attraction_golf_image', array(
        'label'       => __('Pandawa Golf Image', 'terraeden'),
        'description' => __('Rekomendasi: 600x450px (4:3 ratio)', 'terraeden'),
        'section'     => 'te_attractions',
    )));

    // ========================================
    // SECTION: CTA / CONTACT
    // ========================================
    $wp_customize->add_section('te_cta', array(
        'title'    => __('Contact CTA Section', 'terraeden'),
        'panel'    => 'terra_eden_panel',
        'priority' => 70,
    ));

    // CTA Background Image
    $wp_customize->add_setting('cta_bg_image', array(
        'default'           => home_url() . '/wp-content/uploads/2025/09/terra-eden-cta.webp',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cta_bg_image', array(
        'label'       => __('CTA Background Image', 'terraeden'),
        'description' => __('Rekomendasi: 1920x800px', 'terraeden'),
        'section'     => 'te_cta',
    )));

    // Contact Email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'info@terraedenbali.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Contact Email', 'terraeden'),
        'section' => 'te_cta',
        'type'    => 'email',
    ));

    // Contact Address
    $wp_customize->add_setting('contact_address', array(
        'default'           => 'Jalan Palapa, Nusa Dua, Bali',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address', array(
        'label'   => __('Contact Address', 'terraeden'),
        'section' => 'te_cta',
        'type'    => 'text',
    ));

}
add_action('customize_register', 'terra_eden_customize_register');

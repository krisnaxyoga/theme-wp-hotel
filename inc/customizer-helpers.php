<?php
/**
 * Helper Functions untuk Customizer
 */

// Helper function untuk get theme mod dengan escape
function ptg_get($key, $default = '') {
    return esc_html(get_theme_mod($key, $default));
}

// Helper function untuk get theme mod dengan wp_kses_post (allow HTML)
function ptg_get_html($key, $default = '') {
    return wp_kses_post(get_theme_mod($key, $default));
}

// Helper function untuk WhatsApp link
function ptg_wa_link($text = '') {
    $number = get_theme_mod('whatsapp_number', '6285121102295');
    $message = urlencode($text);
    return "https://wa.me/{$number}?text={$message}";
}

<?php
add_action('wp_enqueue_scripts', 'theme_enqueue');
function theme_enqueue() {
    $ver = wp_get_theme()->get('Version');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/main.css', [], $ver);
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/dist/css/customs.css', [], $ver);
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/dist/js/main.js', [], $ver, true);
}
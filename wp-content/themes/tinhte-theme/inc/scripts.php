<?php
add_action('wp_enqueue_scripts', 'wp_tinhte_theme_register_styles');
function wp_tinhte_theme_register_styles()
{
    global $theme_prefix, $theme_uri, $theme_version;
    wp_enqueue_style($theme_prefix . '-styles', $theme_uri, [], $theme_version, 'all');

    wp_enqueue_style($theme_prefix . '-style-css', $theme_uri . '/css/style.css');

    //đăng ký style css bổ sung các css thiếu 
    wp_enqueue_style($theme_prefix . '-custom-css', $theme_uri . '/custom.css');

}
//Đăng ký javascript cho theme
add_action('wp_enqueue_scripts', 'wp_tinhte_theme_register_scripts');
function wp_tinhte_theme_register_scripts()
{
    global $theme_prefix, $theme_uri, $theme_version;
    wp_enqueue_script($theme_prefix . '-tinhte-js', $theme_uri . '/js/tinhte.js', [], $theme_version, true);

    //đăng ký style css bổ sung các js thiếu 
    wp_enqueue_script($theme_prefix . '-custom-js', $theme_uri . '/custom.js', [], $theme_version, true);

}
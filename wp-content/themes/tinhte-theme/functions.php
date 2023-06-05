<?php
global $theme_prefix, $theme_uri;
$theme_prefix = 'wp_tinhte_theme';
//luu tru duong dan toi thu muc tuyet doi
$theme_uri = get_template_directory_uri() . '/assets';
$theme_version = '1.0';

//Đăng ký các thành phần hỗ trợ cho theme
add_action('after_setup_theme', 'wp_tinhte_theme_support');

function wp_tinhte_theme_support()
{
    //đăng ký menu 
    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
    //đăng ký hinh ảnh cho bài viết 
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats');
}

// Đăng ký style cho theme
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
<?php


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
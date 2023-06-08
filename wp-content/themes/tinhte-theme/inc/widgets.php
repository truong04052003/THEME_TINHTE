<?php
global $theme_dir;
include_once $theme_dir . 'inc/widgets/WP2023_Recent_News.php';

add_action('widgets_init', 'wp2023_register_widgets');

function wp2023_register_widgets()
{
    //Đăng ký sidebar 
    // register_sidebar(
    //     array(
    //         'id' => 'primary',
    //         'name' => __('Primary Sidebar','tinhte-theme'),
    //         'description' => __('A short description of the sidebar.','tinhte-theme'),
    //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
    //         'after_widget' => '</div>',
    //         'before_title' => '<h3 class="widget-title">',
    //         'after_title' => '</h3>',
    //     )
    // );
    //Đăng ký widget 
    register_widget('WP2023_Recent_News');

    // register_widget( 'WP2023_Tags' );
}
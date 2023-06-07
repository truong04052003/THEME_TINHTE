<?php
global $theme_prefix, $theme_uri;
$theme_prefix = 'wp_tinhte_theme';
//luu tru duong dan toi thu muc tuyet doi
$theme_uri = get_template_directory_uri() . '/assets';
$theme_dir = get_template_directory();
$theme_version = '1.0';

//Đăng ký các thành phần hỗ trợ cho theme : menu , post thumbnail ...
include_once $theme_dir . '/inc/theme_support.php';

// Đăng ký style , scripts cho theme : css , js 
include_once $theme_dir . '/inc/scripts.php';

//đăng ký sidebar ,  widgets
include_once $theme_dir . '/inc/widgets.php';

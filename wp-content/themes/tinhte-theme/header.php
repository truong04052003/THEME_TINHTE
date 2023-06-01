<?php
global $theme_uri;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinh Tế</title>
    <!-- gọi style css đã được đăng ký function.php -->
    <?php wp_head(); ?>


</head>

<body>
    <!-- phân tách header ra nhiều đoạn  -->
    <?php get_template_part('/header/header', 'tinhte'); ?>
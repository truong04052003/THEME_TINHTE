<?php
global $theme_uri;
?>
<div class="main-page">
    <div class="container">
        <div class="wrapper">

            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'menu-wrapper',
                'container_class' => 'main-page',
                'container' => true,
                'items_wrap' => '<ul class="menu-page" id="primary-menu-ul">%3$s</ul>',
                'fallback_cb' => false
            ]);
            ?>
            
            <!-- <ul class="menu-page">
                <li class="li-main active">
                    <a href="" class="name-menu-page">Home</a>
                </li>
                <li class="li-main">
                    <a href="" class="name-menu-page">#spacex</a>
                </li>
                <li class="li-main">
                    <a href="" class="name-menu-page">#trên tay</a>
                </li>
                <li class="li-main">
                    <a href="" class="name-menu-page">#ai</a>
                </li>
                <li class="li-main">
                    <a href="" class="name-menu-page">#thủ thuật</a>
                </li>
                <li class="li-main">
                    <a href="" class="name-menu-page">#dịch vụ công</a>
                </li>
            </ul> -->
        </div>
    </div>
</div>
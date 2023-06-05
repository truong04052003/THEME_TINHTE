<?php
global $theme_uri;
$post_id = isset($args['post_id']) ? $args['post_id'] : get_the_ID();
?>
<article class="article">
    <div class="">
        <a href="" class="article-wrapper">
            <div class="img-wrapper">
                <div class="lazyload">
                    <div class="thumb-wrapper">
                        <div class="thumb-no-hd no-border">
                            <?= get_the_post_thumbnail($post_id, 'medium') ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?= get_the_permalink($post_id) ?>" class="article-wrapper">
            <h4 class="thread-title-wp">
                <?= get_the_title($post_id) ?>
            </h4>
        </a>
        <a href="" class="article-wrapper">
            <p class="excerpt hidden-wp">
                <?= get_the_excerpt($post_id) ?>
            </p>
        </a>
        <div class="info-avt">
            <div class="left-avt">
                <a href="" class="avatar-avt">
                    <span class="image-loader-avt">
                        <span class="spacer"></span>
                        <img src="<?= $theme_uri; ?>/img/avt1.jpg" alt="" class="image-avt">
                    </span>
                </a>
                <span class="author">
                    <?= get_the_author($post_id) ?>
                </span>
            </div>
        </div>
    </div>
</article>
<?php
global $theme_uri;
?>
<article class="article">
    <div class="">
        <a href="" class="article-wrapper">
            <div class="img-wrapper">
                <div class="lazyload">
                    <div class="thumb-wrapper">
                        <div class="thumb-no-hd no-border">
                            <?= get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?= get_the_permalink() ?>" class="article-wrapper">
            <h4 class="thread-title-wp">
                <?= get_the_title() ?>
            </h4>
        </a>
        <a href="" class="article-wrapper">
            <p class="excerpt hidden-wp">
                <?= get_the_excerpt() ?>
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
                    <?= get_the_author() ?>
                </span>
            </div>
        </div>
    </div>
</article>
<?php

class WP2023_Recent_News extends WP_Widget
{
    public function __construct()
    {
        //khai báo cá thong tin widgets
        parent::__construct(
            // Base ID
            'wp2023_recent_news',
            // Name
            'WP2023_Recent_News',

            [
                'description' => __('Widget hiển thị các bài viết mới nhất', 'tinhte-theme')

            ] // Args
        );
    }

    public function widget($args, $instance)
    {
        // hiển thị ra phần giao diện widgets
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        echo __('Hello, World!', 'text_domain');
        echo $after_widget;
    }

    public function form($instance)
    {
        // hiển thị ra phần cài đặt trong admin
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        //xử lý khi chun
    }
}
new WP2023_Recent_News();
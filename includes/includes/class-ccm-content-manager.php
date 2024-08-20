<?php

class CCM_Content_Manager {

    public function __construct() {
        add_action('init', [$this, 'register_custom_post_type']);
    }

    public function register_custom_post_type() {
        $labels = [
            'name' => _x('Custom Posts', 'Post type general name', 'custom-content-manager'),
            'singular_name' => _x('Custom Post', 'Post type singular name', 'custom-content-manager'),
            'menu_name' => _x('Custom Posts', 'Admin Menu text', 'custom-content-manager'),
            'name_admin_bar' => _x('Custom Post', 'Add New on Toolbar', 'custom-content-manager'),
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'author', 'thumbnail'],
            'rewrite' => ['slug' => 'custom-posts'],
        ];

        register_post_type('custom_post', $args);
    }
}

new CCM_Content_Manager();

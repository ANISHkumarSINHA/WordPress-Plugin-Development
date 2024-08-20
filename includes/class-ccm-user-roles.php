<?php

class CCM_User_Roles {

    public function __construct() {
        add_action('init', [$this, 'add_custom_roles']);
    }

    public function add_custom_roles() {
        add_role('custom_editor', __('Custom Editor'), [
            'read' => true,
            'edit_posts' => true,
            'edit_pages' => true,
            'edit_others_posts' => true,
            'publish_posts' => true,
            'manage_categories' => true,
        ]);

        // Add additional capabilities to an existing role
        $role = get_role('editor');
        $role->add_cap('manage_options');
    }
}

new CCM_User_Roles();

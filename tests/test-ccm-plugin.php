<?php

class CCM_Plugin_Tests extends WP_UnitTestCase {

    function test_custom_role_exists() {
        $role = get_role('custom_editor');
        $this->assertNotNull($role, 'Custom Editor role does not exist');
    }

    function test_custom_post_type_exists() {
        $post_type = get_post_type_object('custom_post');
        $this->assertNotNull($post_type, 'Custom Post type does not exist');
    }
}

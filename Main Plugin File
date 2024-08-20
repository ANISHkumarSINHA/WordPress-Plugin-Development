<?php
/*
Plugin Name: Custom Content Manager
Plugin URI: https://yourwebsite.com/custom-content-manager
Description: A custom plugin to manage content and user roles.
Version: 1.0.0
Author: Anish Kumar Sinha
Author URI: https://yourwebsite.com
License: GPL2
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define Plugin Path
define('CCM_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Include necessary files
require_once(CCM_PLUGIN_PATH . 'includes/class-ccm-user-roles.php');
require_once(CCM_PLUGIN_PATH . 'includes/class-ccm-content-manager.php');

// Activation Hook
function ccm_activate_plugin() {
    // Actions to perform on plugin activation, such as setting default options
    add_role('custom_role', 'Custom Role', ['read' => true, 'edit_posts' => true]);
}
register_activation_hook(__FILE__, 'ccm_activate_plugin');

// Deactivation Hook
function ccm_deactivate_plugin() {
    // Actions to perform on plugin deactivation, such as removing roles
    remove_role('custom_role');
}
register_deactivation_hook(__FILE__, 'ccm_deactivate_plugin');



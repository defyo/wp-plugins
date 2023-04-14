<?php

/*
    Plugin Name: Prop Search
    Plugin URI: https://ssdserver9.com/plugins/prop-search
    Description: Plugin to add wordpress posts search bars with different style options
    Author: ssdserver9
    Author URI: https://ssdserver9.com/
    Version: 1.0.0
    Text Domain: prop-search
 	Domain Path: /i18n/
	License: GPLv2 or later
      License URI: https://www.gnu.org/licenses/gpl-2.0.html

    Tested up to: 6.2

 */

// Exit if accessed directly
if (!defined("ABSPATH")) {
    exit();
}

// Function to execute on plugin activation
register_activation_hook(__FILE__, function () {
    if (!current_user_can("activate_plugins")) {
        return;
    }

    $plugin = isset($_REQUEST["plugin"]) ? $_REQUEST["plugin"] : null;
    check_admin_referer("activate-plugin_" . $plugin);
});

// Function to execute on plugin deactivation
register_deactivation_hook(__FILE__, function () {
    if (!current_user_can("activate_plugins")) {
        return;
    }

    $plugin = isset($_REQUEST["plugin"]) ? $_REQUEST["plugin"] : null;
    check_admin_referer("deactivate-plugin_" . $plugin);

    /* Code here */
});

define("PROP_SEARCH_BASE", plugin_dir_path(__FILE__));
include_once PROP_SEARCH_BASE . "/front-end/search-form.php";

define("PROP_SEARCH_ADMIN", plugin_dir_path(__FILE__));
include_once PROP_SEARCH_ADMIN . "/admin/admin.php";

function ps_plugin_style()
{
    wp_enqueue_style(
        "stylesheet",
        plugins_url("/front-end/style.css", __FILE__)
    );
}

add_action("wp_enqueue_scripts", "ps_plugin_style", 9999);

wp_enqueue_style( 'ps-googlefonts', 'https://fonts.googleapis.com/css?family=Nunito', array(), null );
wp_enqueue_style( 'ps-fa-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null );

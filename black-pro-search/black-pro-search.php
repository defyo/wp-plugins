<?php

/*
    Plugin Name: Black Pro Search
    Plugin URI: https://ssdserver9.com/plugins/black-pro-search
    Description: Plugin to add woocommerce search bars with different style options
    Author: ssdserver9
    Author URI: https://ssdserver9.com/
    Version: 1.0.0
    Text Domain: black-pro-search
 	Domain Path: /i18n/
	License: GPLv2 or later
      License URI: https://www.gnu.org/licenses/gpl-2.0.html

    Tested up to: 6.2
    WC requires at least: 2.0
    WC tested up to: 7.5.1
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

define("BLACK_PRO_SEARCH_BASE", plugin_dir_path(__FILE__));
include_once BLACK_PRO_SEARCH_BASE . "/front-end/search-form.php";

define("BLACK_PRO_SEARCH_ADMIN", plugin_dir_path(__FILE__));
include_once BLACK_PRO_SEARCH_ADMIN . "/admin/admin.php";

function bps_plugin_style()
{
    wp_enqueue_style(
        "stylesheet",
        plugins_url("/front-end/style.css", __FILE__)
    );
}

add_action("wp_enqueue_scripts", "bps_plugin_style", 9999);

wp_enqueue_style( 'bsp-googlefonts', 'https://fonts.googleapis.com/css?family=Nunito', array(), null );
wp_enqueue_style( 'bsp-fa-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array(), null );

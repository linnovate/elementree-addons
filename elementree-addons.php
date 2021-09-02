<?php

/*
 * Plugin Name: Elementree Addons
 * # Plugin URI: https://linnovate.net/
 * Description: Manage Elementree for Elementor builder. 
 * Version: 1.0.3
 * Author: Linnovate
 * Author URI: https://linnovate.net/
 * License: GPLv2 or later
 * Text Domain: elementree-addons
 */
if (!defined('ABSPATH')) {
    exit('Press Enter to proceed...');
}
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( !is_plugin_active('elementree/elementree.php') || !is_plugin_active('elementor/elementor.php') ) {
	add_action( 'admin_notices', function() {
		printf('<div class="notice notice-error"><p>
			<strong>Elementree-Addons</strong> plugin is <strong>deactivate</strong> (elementree & elementor plugins is Required) !
		<p></div>');
  });
	deactivate_plugins( plugin_basename( __FILE__ ) );
} else {
  require __DIR__ . '/plugin.php';
}

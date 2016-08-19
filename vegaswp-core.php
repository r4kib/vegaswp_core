<?php
/*
Plugin Name: Vegas WP Core
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.1.0
Author: The Health Check Team
Author URI: http://health-check-team.example.com
Text Domain: health-check
Domain Path: /vegaswp-core
*/
//included the redux framework
include "redux/admin-init.php";

//Automated updating setup and config
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'r4kib' );
$updater->set_repository( 'vegaswp-core' );
//$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
$updater->initialize();

//make this plugin to load first of all plugin
function veagswp_this_plugin_first() {
	// ensure path to this file is via main wp plugin path
	$wp_path_to_this_file = preg_replace('/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR."/$2", __FILE__);
	$this_plugin = plugin_basename(trim($wp_path_to_this_file));
	$active_plugins = get_option('active_plugins');
	$this_plugin_key = array_search($this_plugin, $active_plugins);
	if ($this_plugin_key) { // if it's 0 it's the first plugin already, no need to continue
		array_splice($active_plugins, $this_plugin_key, 1);
		array_unshift($active_plugins, $this_plugin);
		update_option('active_plugins', $active_plugins);
	}
}
add_action("init", "veagswp_this_plugin_first");

//ading custom css
function vegaswp_add_custom_admin_css() {
	wp_register_style(
			'vegaswp-custom-css',
			plugins_url('/vegaswp_core/templates/style.css'),
				time(),
			'all'
	);
	wp_enqueue_style('vegaswp-custom-css');
}
// This example assumes your opt_name is set to redux_demo, replace with your opt_name value
add_action( 'redux/page/vegaswp/enqueue', 'vegaswp_add_custom_admin_css');

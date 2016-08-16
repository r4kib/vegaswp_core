<?php
/**
 * Created by PhpStorm.
 * User: Preview ICT
 * Date: 8/14/2016
 * Time: 5:34 PM
 */

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

include "redux/options-init.php";


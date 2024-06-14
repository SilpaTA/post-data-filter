<?php 
/*
Plugin Name: Post Content Filter
Description: A WordPress react plugin to filter post data and display filtered output.
Version: 1.0
Author: Silpa TA
*/


define( 'POSTDATAFILTER_PLUGIN', __FILE__ );
define( 'POSTDATAFILTER_PLUGIN_BASENAME', plugin_basename( POSTDATAFILTER_PLUGIN ) );
define( 'POSTDATAFILTER_PLUGIN_NAME', trim( dirname( POSTDATAFILTER_PLUGIN_BASENAME ), '/' ) );
define( 'POSTDATAFILTER_PLUGIN_DIR', untrailingslashit( dirname( POSTDATAFILTER_PLUGIN ) ) );
define( 'POSTDATAFILTER_PLUGIN_CLASSES_DIR', POSTDATAFILTER_PLUGIN_DIR . '/classes' );
define( 'POSTDATAFILTER_PLUGIN_ASSETS_DIR', POSTDATAFILTER_PLUGIN_DIR . '/assets' );


// //Front end file
require_once POSTDATAFILTER_PLUGIN_CLASSES_DIR . '/class-post-filter.php';

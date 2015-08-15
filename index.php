<?php
/**
* Plugin Name: 		Restrict Content Pro - Easy Digital Downloads Addon
* Plugin URI:		https://wordpress.org/plugins/restrict-content-pro-edd-add-on/
* Description:		Integrates Restrict Content Pro with Easy Digital Downloads
* Version: 			1.0.0
* Author:			Hannan Ebrahimi Setoodeh
* Author URI: 		http://www.webforest.ir
* Text Domain:		edd_rcp
* Domain Path: 		/lang/
*/
if ( ! defined( 'ABSPATH' ) ) {die('Hi Pippin'); exit;}
add_action( 'init', function(){ load_plugin_textdomain( 'edd_rcp', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' ); } );
add_action( 'admin_notices', function () {
	
		if( ! function_exists( 'rcp_is_active' ) && ! class_exists( 'Easy_Digital_Downloads' ) ) {
			echo '<div class="error"><p>' . __( ' Restrict Content Pro - EDD Add On requires Easy Digital Downloads and Restrict Content Pro. Please install or activate them to continue.' , 'edd_rcp') . '</p></div>';
		}
		else if(  ! class_exists( 'Easy_Digital_Downloads' ) ) {
			echo '<div class="error"><p>' . __( ' Restrict Content Pro - EDD Add On requires Easy Digital Downloads. Please install or activate it to continue.' , 'edd_rcp') . '</p></div>';
		}
		else if( ! function_exists( 'rcp_is_active' )  ) {
			echo '<div class="error"><p>' . __( ' Restrict Content Pro - EDD Add On requires Restrict Content Pro. Please install or activate it to continue.' , 'edd_rcp') . '</p></div>';
		}
	
	}
);
include_once( 'edd_hooks.php' );
include_once( 'rcp_hooks.php' );
<?php 
/* 
Plugin Name: Localhost Body Class
Description: A simple and lightweight plugin that adds the "localhost" class name to the opening body tag of your WordPress theme.
Author: TanManWeb
Author URI: https://github.com/TanManWeb/
Version: 1.0.0
Text Domain: localhost-body-class
*/

if ( ! function_exists( 'localhost_body_class' ) ) {	
	function localhost_body_class($add_class) {
		
		$server_name = $_SERVER['SERVER_NAME'];
		$server_addr = $_SERVER['SERVER_ADDR'];
		
		if ( strpos( $server_name, 'localhost' ) !== false || 
			 strpos( $server_addr, '::1' ) !== false || 
			 strpos( $server_addr, '127.0.0.1' ) !== false ) {
		     $add_class[] = 'localhost';
		}
		return $add_class;
	}
}

add_filter('body_class', 'localhost_body_class');

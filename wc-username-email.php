<?php
/*
Plugin Name: Set the username as the actual email address, on WooCommerce account creation
Plugin URI: http://wordpress.org/extend/plugins/wc-username-email
Description: Set the username as the actual email address, on WooCommerce account creation
Version: 1.0.0
Author: Darren Lambert
Author URI: http://darrenlambert.com
License: GPL2
*/

if( !defined( 'ABSPATH' ) )
	exit;

// Add filter to do the work
function wue_new_customer_data($new_customer_data){

	// login becomes email	
  $new_customer_data['user_login'] = $new_customer_data['user_email'];

  return $new_customer_data;
}
add_filter( 'woocommerce_new_customer_data', 'wue_new_customer_data');	
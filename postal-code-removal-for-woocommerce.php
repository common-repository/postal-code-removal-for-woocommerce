<?php
/*
Plugin Name: Postal Code Removal For WooCommerce
Plugin URI: 
Description: This Is A Lightweight Plugin That Removes The Postal Code Field Present In The Checkout Page Of WooCommmerce
Author: Abid Waqar
Author URI: https://www.linkedin.com/in/abid-waqar/
Version: 1.0.0
*/

/**
 * This snippet removes the postal code field on the WooCommmerce Checkout
*/
 
add_filter( 'woocommerce_checkout_fields' , 'remove_billing_postcode_checkout' );
 
function remove_billing_postcode_checkout( $fields ) {
  unset($fields['billing']['billing_postcode']);
  return $fields;
}
<?php
/**
* Plugin Name: Display Custom text
* Plugin URI: https://in.linkedin.com/
* Description: Display content using a shortcode to insert in a page or post
* Version: 0.1
* Author: Nima
* Author URI: https://twitter.com/?lang=en
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( !class_exists( 'WpDemo' )) {
	class WpDemo{
		public function __construct(){
			add_shortcode('welcome', array($this, 'wpb_demo_shortcode'));
		}
		/** 
		 *create short code to display a text using multiple attributes
		 *@return type text
		*/
		public function wpb_demo_shortcode($atts) { 
			$set_attributes = shortcode_atts( array(
	      	'name' => '',
	      	'color' => 'blue',
	      	'position' =>'center'), $atts );
	      	$value	= '<h1 style="color:'.$set_attributes['color'].';text-align:'.$set_attributes['position'].';">Welcome '.$set_attributes['name'].'</h1>';
	   		return $value;
		} 
	}
	$objdemo	= new WpDemo();
}else{
	exit();
}

?>
<?php
/**
* Plugin Name: Test plugin
* Plugin URI: https://in.linkedin.com/
* Description: Display content using a shortcode to insert in a page or post
* Version: 0.1
* Author: Nima
* Author URI: https://twitter.com/?lang=en
**/


class Wpdemo{
	public function __construct(){
		add_shortcode('welcome', array($this, 'wpb_demo_shortcode'));
	}
	public function wpb_demo_shortcode($atts) { 
		$a = shortcode_atts( array(
      	'name' => ''), $atts );
   		return 'Hello ' . $a['name'] ;
	} 
}
$objdemo	= new Wpdemo();

?>
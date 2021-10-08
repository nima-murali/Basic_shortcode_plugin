<?php
/**
* Plugin Name: Basic Shortcode plugin
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
      	'name' => '',
      	'color' => 'blue',
      	'position' =>'center'), $atts );
      	$value	= '<h1 style="color:'.$a['color'].';text-align:'.$a['position'].';">Welcome '.$a['name'].'</h1>';
   		return $value;
	} 
}
$objdemo	= new Wpdemo();

?>
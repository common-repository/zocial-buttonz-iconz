<?php
/*
Plugin Name: Zocial Buttonz & Iconz
Plugin Script: zocial.php
Description: The idea behind this project was to produce a consistent set of buttons that could be used for the range of social actions frequently taken in Web applications. These actions are often important goals for users, such as connecting third-party accounts or sharing content to third-party platforms, so their appearance has to be attractive and clear
Version: 1.0
License: GPL 2.0
Author: AhmedAG
Author URI: http://www.ahmedag.com
*/

/*  Copyright 2012  AhmedAG  (email : me@ahmedag.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function zocialiconz($atts, $name = null) {  
  		extract(shortcode_atts(array(    
			'class' => 'caption',
				), $atts));  
        return '<span class="' . esc_attr($class) . '">' . $name . '</span>';  
    }  
	add_shortcode("zocialiconz", "zocialiconz"); 

function wptuts_styles_with_the_lot()  
    {  
    wp_register_style( 'custom-style', plugins_url( '/zocial.css', __FILE__ ), array(), '20120208', 'all' );  
       
   wp_enqueue_style( 'custom-style' );  
    }  
    add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );  
		?>
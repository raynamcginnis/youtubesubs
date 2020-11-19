<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://www.raynamcginnis.com
Description: Display Youtube sub button and count
Version: 1.0.0
Author: Rayna McGinnis
Author URI: https://www.raynamcginnis.com
*/

//Exit if aaccessed directly
if(!defined('ABSPATH')){
    exit;
}

// load scripts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// load class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// register widget

function register_youtubesubs() {
    register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_youtubesubs');
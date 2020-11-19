<?php

// Add Scripts
function yts_add_scripts() {
    // Add main CSS
    wp_enqueue_style('yts-main-style', plugins_url(). '/youtubesubs/css/style.css');
    // Add main JS 
    wp_enqueue_script('yts-main-script', plugins_url(). '/youtubesubs/js/main.js');

    // Add Google Script
    wp_register_script('google', 'https://apis.google.com/js/platform.js' );
    // load google script by passing through handle from above script
    wp_enqueue_script('google');

}

add_action('wp_enqueue_scripts', 'yts_add_scripts');
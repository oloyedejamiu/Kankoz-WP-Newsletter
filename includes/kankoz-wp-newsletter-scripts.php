<?php 

// Load scripts
function kankozwpnewsletter_add_scripts(){
	wp_enqueue_style('kankozwpnewsletter-main-style',  plugins_url( 'css/styles.css', dirname(__FILE__) ) );
	wp_enqueue_script('kankozwpnewsletter-main-script',  plugins_url( 'js/main.js', dirname(__FILE__) ) );
}

// Enqueue the script
add_action( 'wp_enqueue_scripts', 'kankozwpnewsletter_add_scripts' );
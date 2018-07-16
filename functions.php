<?php

require_once( get_stylesheet_directory() . '/includes.php');

// Add child theme style enqueue
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

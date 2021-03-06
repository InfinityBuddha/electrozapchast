<?php

// Set Up
add_theme_support ('menus');
add_theme_support ('post-thumbnails');

// Includes
include (get_template_directory() . '/includes/front/enqueue.php');
include (get_template_directory() . '/includes/setup.php');

// Action & Filter Hooks
add_action ('wp_enqueue_scripts', 'ju_enqueue');
add_action ('after_setup_theme', 'ju_setup_theme');
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
// Remove default woocommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

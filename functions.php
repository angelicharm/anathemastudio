<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'zerif_bootstrap_style','zerif_fontawesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// LA ADDED THE FOLLOWING FUNCTION TO LOCATE CHILD STYLESHEET DIRECTORY
function my_child_theme_setup() {
    load_child_theme_textdomain( 'zerif-lite-child', get_stylesheet_directory() );
}

// END ENQUEUE PARENT ACTION

// BEGIN CTC ENQUEUE PLUGIN ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below
if ( !function_exists( 'chld_thm_cfg_plugin_css' ) ):
    function chld_thm_cfg_plugin_css() {
        wp_enqueue_style( 'chld_thm_cfg_pro', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-plugins.css' );
    }
endif;
// using high priority so plugin custom styles load last. 
add_action( 'wp_print_styles', 'chld_thm_cfg_plugin_css', 9999 );

// END CTC ENQUEUE PLUGIN ACTION

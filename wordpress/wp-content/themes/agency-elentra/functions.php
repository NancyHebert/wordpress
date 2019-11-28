<?php 
/*This file is part of Elentra child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function agency_elentra_enqueue_child_styles() {
   wp_enqueue_style( 'agency-elentra-parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style('agency-elentra-main',get_stylesheet_directory_uri() . '/assets/css/main.css',array(), '', 'all');
}
add_action( 'wp_enqueue_scripts', 'agency_elentra_enqueue_child_styles');
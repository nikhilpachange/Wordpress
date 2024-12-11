<?php
/**
 *
 *
 *
 */


 function anquila_enqueue_scripts(){
    wp_enqueue_style('stylesheet',get_stylesheet_uri())
    wp_enqueue_script('main.js',get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'),true);
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',['jqery'],false,true)
 }
 add_action('wp_enqueue_scripts','wpdocs_theme_name_scripts');?>
<?php 
function blog_home(){
    add_theme_support('title-tag');
    add_theme_support( 'header' );
    add_theme_support('background');
    
    register_nav_menu('main_menu','Mani Menu');
    
    
   
    
}
add_action('after_setup_theme','blog_home');

function style_and_script_add(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('homestyle',get_template_directory_uri().'/css/blog-home.css');
    wp_register_style('style',get_template_directory_uri().'/style.css');
    
    wp_enqueue_style(array('bootstrap','homestyle','style'));
   
}
add_action('wp_enqueue_scripts','style_and_script_add');


require_once('navwalker/wp-bootstrap-navwalker.php');
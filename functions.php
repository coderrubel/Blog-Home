<?php 
function blog_home(){
    add_theme_support('title-tag');
    add_theme_support( 'header' );
    add_theme_support('background');
    add_theme_support('post-thumbnails');
    
    register_nav_menu('main_menu','Mani Menu');
    
}
add_action('after_setup_theme','blog_home');

function sidebar(){
    register_sidebar(array(
        'name'=>'Right Sigebar',
        'id'=>'rightsidebar',
        'desc'=>'You Can Add Right Sidebar Widget Here',
        'before_widget'=>'<div class="well">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ));
}
add_action('widgets_init','sidebar');



function customize_services($serviecs) {
    $serviecs->add_section('copyright', array(
        'title' => 'CopyRight'
    ));
    $serviecs->add_setting('copyright_text', array(
        'default' => 'rubel',
        'transport' => 'refresh',
    ));
    $serviecs->add_control('copyright_text', array(
        'label' => 'Copy Right',
        'section'=>'copyright',
        'setting'=>'copyright_text',
        'type'=>'text',
    ));
}
add_action('customize_register', 'customize_services');

function style_and_script_add(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_register_style('homestyle',get_template_directory_uri().'/css/blog-home.css');
    wp_register_style('style',get_template_directory_uri().'/style.css');
    
    wp_enqueue_style(array('bootstrap','homestyle','style'));
   
}
add_action('wp_enqueue_scripts','style_and_script_add');

<?php
/*
* My Theme Function
*/


// Theme Title
add_theme_support('title-tag');

// Theme CSS and jQuery File calling
function flora_css_js_file_calling(){
    wp_enqueue_style('flora-style', get_stylesheet_uri());

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
  
  
    //jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );
  
       
   
  
  }
  add_action('wp_enqueue_scripts', 'flora_css_js_file_calling');
   

  //Theme Function
function flora_customizar_register($wp_customize){
  $wp_customize->add_section('flora_header_area', array(
    'title' =>__('Header Area', 'flora-theme'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('flora_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'flora_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'flora_logo',
    'section' => 'flora_header_area',
  ) ));

  // Menu Position Option
  $wp_customize->add_section('flora_menu_option', array(
    'title' => __('Menu Position Option', 'flora-theme'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('flora_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('flora_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'flora_menu_position',
    'section' => 'flora_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));






}

add_action('customize_register', 'flora_customizar_register');
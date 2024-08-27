<?php

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
  
  
  
  // Footer Option
  $wp_customize->add_section('flora_footer_option', array(
    'title' => __('Footer Option', 'flora-theme'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));
  
  $wp_customize->add_setting('flora_copyright_section', array(
    'default' => '&copy; Copyright 2021 | wahid sadik',
  ));
  
  $wp_customize-> add_control('flora_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'flora_copyright_section',
    'section' => 'flora_footer_option',
  ));
  
  
  }
  
  add_action('customize_register', 'flora_customizar_register');
  
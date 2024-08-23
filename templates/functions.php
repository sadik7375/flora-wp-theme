<?php

function my_theme_scripts() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

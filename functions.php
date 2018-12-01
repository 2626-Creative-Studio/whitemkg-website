<?php

// Theme Support
function white_theme_support(){
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
  ));
}

add_action('after_setup_theme', 'white_theme_support');

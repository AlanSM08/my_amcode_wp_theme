<?php

function amcode_files() {
  wp_enqueue_style('amcode_main_files', get_theme_file_uri() . '/src/css/style.css');
  wp_enqueue_style('amcode_bootstrap_files', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
  wp_enqueue_script('amcode_main_js', get_theme_file_uri() . '/src/js/scripts.js', ['jquery']);
  wp_enqueue_script('amcode_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['jquery']);


  
}

add_action('wp_enqueue_scripts', 'amcode_files');
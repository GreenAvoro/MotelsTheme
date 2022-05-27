<?php
add_action('wp_enqueue_scripts', 'weka_enqueue_styles');
function weka_enqueue_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri().'/script.js');
}


add_action('init', function() {
    add_theme_support('post-thumbnails');
});
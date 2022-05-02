<?php
add_action('wp_enqueue_scripts', 'weka_enqueue_styles');
function weka_enqueue_styles(){
    wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('init', function() {
    add_theme_support('post-thumbnails');
});
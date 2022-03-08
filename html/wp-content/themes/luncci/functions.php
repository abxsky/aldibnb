<?php

function luncci_theme_support(){
    add_theme_support('title-tag');
}
function luncci_bootstrap5(){
    wp_enqueue_style('bootstrap_css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"');
    wp_enqueue_scripts('bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
    [], false, true);
}
function add_hearts($text){
    return ' <3 '.$text.' <3 ';
}

add_filter('admin_footer_text','add_hearts');
add_action('after_setup_theme','luncci_theme_support');
add_action('after_setup_theme','luncci_bootstrap5');

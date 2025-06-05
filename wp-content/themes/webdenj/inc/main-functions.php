<?php
// add style and script files to theme
function webdenj_style_script(){

    //enqueue styles
    wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css', array(), '5.3.6', 'all');
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/main-style.css', array('Bootstrap'), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'webdenj_style_script');
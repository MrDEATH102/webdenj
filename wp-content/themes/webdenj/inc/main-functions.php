<?php
// add style and script files to theme
function webdenj_style_script(){

    //enqueue styles
    wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css', array(), '5.3.6', 'all');
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/main-style.css', array('Bootstrap'), '1.0.0', 'all');

    //enqueue scripts
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'webdenj_style_script');

//Register Nav Menus
if( !function_exists('webdenj_nav_menus') ){

    function webdenj_nav_menus(){
        register_nav_menus(
            array(
                'header_menu' => 'Header Menu',
                'footer_menu' => 'Footer Menu'
            )
            );
    }

    add_action('after_setup_theme', 'webdenj_nav_menus');
}
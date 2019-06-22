<?php 

function skilltest_files() {
     wp_enqueue_script('main_skilltest_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, 1.0, 'true');
     wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
     wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
     wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
     wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
     wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css?family=Montserrat|Satisfy');
     wp_enqueue_style('fontawesome_link', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
     wp_enqueue_style('skilltest_main_styles', get_stylesheet_uri(), NULL, 1.0); 
 }

add_action('wp_enqueue_scripts', 'skilltest_files');

function add_custom_scripts() {
    wp_register_script('custom_scripts', home_url() .'/wp-content/themes/skilltestfolder/js/custom_scripts.js', array( 'jquery' ));
    wp_enqueue_script('custom_scripts');
    wp_enqueue_script('main_skilltest_js', get_theme_file_uri('/js/scripts.js'), NULL, 1.0, 'true');
    }  

add_action( 'wp_enqueue_scripts', 'add_custom_scripts');

function skilltest_features() {
        // register_nav_menu('headerMenuLocation', 'Navigation Top Menu');
    }

add_action( 'after_setup_theme', 'skilltest_features');

?>
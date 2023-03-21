<?php
// Add support for highlighted images
add_theme_support( 'post-thumbnails' );
// customise the size of the images
add_image_size('my-size', 320, 150, true);

// Automatically add the site title to the site header
add_theme_support( 'title-tag' );

// SCRIPT LOADS
// ############
function wpdocs_theme_name_scripts() {
    wp_register_script( 'script-js', get_template_directory_uri() . '/js/script.js', [], false, true); // false : version number added automatically : current version of wordpress
    wp_enqueue_script('script-js');
}
// wp_enqueue_scripts is the hook to use when enqueuing scripts and styles on the front end - used for enqueuing both scripts and styles.
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


// SETUP
// #####
function edn_theme_setup() {
    // navbars
    register_nav_menus(
     array(
           'nav' => __( 'navbar'),
           'nav_footer_one' => __('navbar_footer_one'),
           'nav_footer_two' => __('navbar_footer_two')
     )
    );
   }
// after_setup_theme / hook call during each page load, after the theme is initialized
   add_action( 'after_setup_theme', 'edn_theme_setup' );

// add file contact-info
require_once('options/contact-infos.php');

InfosContactPage:: register();


//######################################################
//ADD ITEM TRAINING IN MENU
//#####################################################
function new_type_publication()
{
//ateliers
    
    $ateliers = array
    (
        'name' => 'Ateliers',
        'all_items' => 'Tous les ateliers',
    );
    // definer parameters
    $args = array
    (
        'labels' => $ateliers,
        'public' => true,
        'menu_icon' => 'dashicons-admin-home',
        'menu_position' => 2,
        'show_in_rest' => true, 
        'supports' => array('title', 'editor'), 
    );
    register_post_type('maison', $args);
}

add_action('init', 'new_type_publication');




    
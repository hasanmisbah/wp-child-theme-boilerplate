<?php
function child_loader() {
    
    /*
     * Child Boilerplate's Basic functions and definitions
     *
     * @package Child Boilerplate theme
     * @since Child Boilerplate theme 1.0
     *
     */
    
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
    add_action( 'wp_enqueue_scripts', 'child_loader' );


/*
*loading some other functionality,
*you can skip this if you don't need this
*you can also remove some specific feature by removing code from /core-data/module/loader.php file
*/
require('core-data/module/loader.php');

?>
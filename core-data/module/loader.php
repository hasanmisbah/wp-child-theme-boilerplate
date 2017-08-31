<?
if ( ! function_exists( 'child-plate' ) ) :

/**
 * Child Boilerplate's functions and definitions
 *
 * @package Child Boilerplate theme
 * @since Child Boilerplate theme 1.0
 *
 */


function child-plate() {
    
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

  // Add Menu Support
    add_theme_support('menus');

    // Localisation Support
    load_theme_textdomain('boilerplate', get_template_directory() . '/core-data/module/languages');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');


    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));


    // Add Support for Custom Header - Uncomment below if you're going to use
    add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));

    //Enable support for the following post formats: aside, gallery, quote, image, and video
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    
    
    // Disable XML-RPC in WordPress
    add_filter('xmlrpc_enabled', '__return_false');
    
    
  // hide wp login error
    function no_wordpress_errors(){
        
      return 'Something is wrong!';
    }
    add_filter( 'login_errors', 'no_wordpress_errors' );

    }
endif; // child-plate
add_action( 'after_setup_theme', 'child-plate' );

?>
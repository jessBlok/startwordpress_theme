<?php

function socent_theme_support() {
// Adding theme support for post formats and post thumbnails

add_theme_support ('post-formats', array('aside', 'quotes'));

add_theme_support ('post-thumbnails', array ('post', 'page'));

/* HTML5 */
  add_theme_support( 'html5' );

  /* automatic feed links */
  add_theme_support( 'automatic-feed-links' );



}

/*Call Function */
add_action ('after_setup_theme', 'socent_theme_support');



/*SET THUMBNAIL DEFAULT SIZE*/
//  set_post_thumbnail_size (380, 190);

/*SET ALL POST IMAGES TO BOOTSTRAP RESPONSIVE CLASS*/

function add_image_responsive_class($content) {
  global $post;
  $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
  $replacement = '<img$1class="$2 img-responsive"$3>';
  $content = preg_replace($pattern, $replacement, $content);
  return $content;
}
add_filter('the_content', 'add_image_responsive_class');



/* Add translation file locations*/


    load_theme_textdomain ('startwordpress', get_template_directory().'/languages');



/* REGISTER NAVIGATION LOCATIONS */

function socent_nav_menus() {

  register_nav_menus( array(
	  'primary' => __( 'Primary Navigation', 'startwordpress' ),
	) );
	
}
add_action( 'after_setup_theme', 'socent_nav_menus' );


if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'FooterWidgetAreaOne',
'before_widget' => '<li class="widget">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'FooterWidgetAreaTwo',
'before_widget' => '<li class="widget">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h3>',
));
register_sidebar(array('name'=>'FooterWidgetAreaThree',
'before_widget' => '<li class="widget">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h3>',
));

/*Make Bootstrap Navbor compaitble with Wordpress Menus*/

// Register custom navigation walker

  require_once('wp_bootstrap_navwalker.php');



/* LINK TO STYLESHEETS, BOOTPRESS SCRIPTS */

function theme_add_bootstrap() {
  wp_enqueue_script ('jquery', 'https://code.jquery.com/jquery-3.0.0.min.js');
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0' );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('jquery'));
  
  
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


 function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Oswald|Open+Sans|Impact');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');
  
  

function enqueue_our_required_stylesheets() {
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');


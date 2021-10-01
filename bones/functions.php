<?php
/**
 * @package WordPress
 * @subpackage bones
 */
/**
 * --------------------------------------------------------------------------------
 * Theme Customization Options
 * --------------------------------------------------------------------------------
 */
 
require_once ( get_template_directory() . '/theme-settings.php' );

//Drag and drop menu support
register_nav_menu( 'primary', 'Primary Menu' );
//This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );
//Apply do_shortcode() to widgets so that shortcodes will be executed in widgets
add_filter( 'widget_text', 'do_shortcode' );

//Widget support for a right sidebar
register_sidebar( array(
	'name' => 'Right Sidebar',
	'id' => 'right-sidebar',
	'description' => 'Widgets in this area will be shown on the right-hand side.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Widget support for the footer
register_sidebar( array(
	'name' => 'Footer Sidebar',
	'id' => 'footer-sidebar',
	'description' => 'Widgets in this area will be shown in the footer.',
	'before_widget' => '<div id="%1$s">',
	'after_widget'  => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));

//Enqueue_styles
if ( ! function_exists( 'Wps_load_styles' ) ) {
function Wps_load_styles() {

	wp_register_style( 'bones-style', get_template_directory_uri() . '/style.css');
	wp_register_style( 'bones-base', get_template_directory_uri() . '/stylesheets/base.css');
	wp_register_style( 'bones-layout', get_template_directory_uri() . '/stylesheets/layout.css');

	wp_enqueue_style( 'bones-base' );
	wp_enqueue_style( 'bones-style' );
	wp_enqueue_style( 'bones-layout' );

}
add_action('wp_enqueue_scripts', 'Wps_load_styles');
add_action( 'customize_preview_init', 'bones_customizer' );

function bones_customize_css()
{
?>
<style type="text/css">
p { color:<?php echo get_theme_mod('header_color', '#fff'); ?>; }
a { color:<?php echo get_theme_mod('link_color', '#fff'); ?>; }
h1 { color:<?php echo get_theme_mod('h1_color', '#fff'); ?>; }
h2 { color:<?php echo get_theme_mod('h2_color', '#fff'); ?>; }
h3 { color:<?php echo get_theme_mod('h3_color', '#fff'); ?>; }
h4 { color:<?php echo get_theme_mod('h4_color', '#fff'); ?>; }
h5 { color:<?php echo get_theme_mod('h5_color', '#fff'); ?>; }
h6 { color:<?php echo get_theme_mod('h61_color', '#fff'); ?>; }

</style>
<?php
} 
add_action( 'wp_head', 'bones_customize_css');
function theme_support_options() {
 $defaults = array(
 'height'      => 150,
 'width'       => 250,
 'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
 'flex-width'  => false
 );
 add_theme_support( 'custom-logo', $defaults );
}
// call the function in the hook
add_action( 'after_setup_theme', 'theme_support_options' );


// I'm not a big fan of the 'header-text' setting to hide elements by class name if a logo exists. You can simple use a condition statement in your header.php to accomplish the same thing, and it's more clear what is occurring.

} // endif
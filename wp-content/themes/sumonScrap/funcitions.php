<?php
/**
 * Sumon Scrap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Sumon_Scrap
 * @since 1.0
 */

/**
 * Sumon Screap only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
//change header file with action hook
$name = 'header_new';
do_action('get_header', $name);
/**
 * Add  Title tag and meta description through filter hook
 */

$tagname = "I am the new blog for Sumon Scrap";
apply_filters('get_bloginfo', $tagname);
/* 
 * Add blog title
 */
function shortcode_myblogtitle(){
    return get_bloginfo("name");
}
 
add_shortcode("MyBlogTitle","shortcode_myblogtitle");


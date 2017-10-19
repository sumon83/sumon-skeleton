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
if(!function_exists('sumonScrap_setup')):
    /**
     * Sets up different default feature before init hook so that all the functionality 
     * could be initialize when theme is  activated. 
     */
    function sumonScrap_setup(){
    //load_textdomain('sumonscrap');
    }
    add_action('after_setup_theme', 'suonScrap_setup');
endif;
//change header file with action hook
$name = 'header_new';
do_action('get_header', $name);
/**
 * Add  Title tag and meta description through filter hook
 */

$tagname = "Home | Risto's Place | Food & Spirits";
apply_filters('get_bloginfo', $tagname);
/* 
 * Add blog title
 */
function shortcode_myblogtitle(){
    //return get_bloginfo("name");
    return "Home | Risto's Place | Food & Spirits";
}
 
add_shortcode("MyBlogTitle","shortcode_myblogtitle");


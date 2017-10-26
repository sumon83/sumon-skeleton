<?php
/**
 * Ristos Place functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Risto's_Place
 * @since 1.0
 */

/**
 * Ristos Place only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
/* get header css and js file */
require get_parent_theme_file_path('inc/header-functions.php');
/* Theme setup functions*/
require get_parent_theme_file_path('inc/theme_setup_functions.php');
/* Template tags functions*/
require get_parent_theme_file_path('inc/template_tags.php');
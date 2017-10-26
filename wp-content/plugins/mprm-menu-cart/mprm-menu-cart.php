<?php
/**
 * Plugin Name: Restaurant Menu Cart
 * Plugin URI: http://www.getmotopress.com
 * Description: Displays a shopping cart of Restaurant Menu plugin in your menu bar.
 * Version: 1.0.2
 * Author: MotoPress
 * Author URI: http://www.getmotopress.com
 * License: GPLv2 or later
 * Text Domain: mprm-menu-cart
 * Domain Path: /languages
 */

define('MP_MENU_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('MP_MENU_MEDIA_URL', plugins_url(plugin_basename(__DIR__) . '/media/'));
define('MP_MENU_JS_URL', MP_MENU_MEDIA_URL . 'js/');
define('MP_MENU_CSS_URL', MP_MENU_MEDIA_URL . 'css/');
define('MP_MENU_ASSETS_URL', plugins_url(plugin_basename(__DIR__) . '/assets/'));
define('MP_MENU_TEMPLATES_PATH', MP_MENU_PLUGIN_PATH . 'templates/');
define('MP_MENU_PLUGIN_NAME', str_replace('-', '_', dirname(plugin_basename(__FILE__))));
define('MP_MENU_LANG_PATH', MP_MENU_PLUGIN_PATH . 'languages/');
define('MP_MENU_DEBUG', FALSE);

register_activation_hook(__FILE__, array(MP_menu_cart_plugin::init(), 'on_activation'));
register_deactivation_hook(__FILE__, array('MP_menu_cart_plugin', 'on_deactivation'));
register_uninstall_hook(__FILE__, array('MP_menu_cart_plugin', 'on_uninstall'));
add_action('plugins_loaded', array('MP_menu_cart_plugin', 'init'));

use mprm_menu_cart\classes\Core;
use mprm_menu_cart\classes\misc\Loader;

/**
 * Class MP_menu_cart_plugin
 */
class MP_menu_cart_plugin {

	protected static $instance;

	/**
	 * MP_menu_cart_plugin constructor.
	 */
	public function __construct() {
		$this->include_all();
		Loader::get_instance()->init_loader();

		if (class_exists('\mp_restaurant_menu\classes\Core')) {
			Core::get_instance()->init_plugin(MP_MENU_PLUGIN_NAME);
		}
		if (!defined('MP_MENU_TEMPLATE_PATH')) {
			define('MP_MENU_TEMPLATE_PATH', $this->template_path());
		}
	}

	/**
	 * Include files
	 */
	public function include_all() {
		require_once $this->get_plugin_path() . 'classes/misc/class-loader.php';
	}

	/**
	 * Get plugin path
	 */
	public function get_plugin_path() {
		return plugin_dir_path(__FILE__);
	}

	/**
	 * Get the template path.
	 * @return string
	 */
	public function template_path() {
		return apply_filters('mprm_template_path', 'mprm-menu-cart/');
	}

	/**
	 * @return MP_menu_cart_plugin
	 */
	public static function init() {
		if (null === self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * On activation plugin
	 */
	public static function on_activation() {
	}

	/**
	 * On deactivation plugin
	 */
	public static function on_deactivation() {
	}

	/**
	 * On uninstall
	 */
	public static function on_uninstall() {

	}
}

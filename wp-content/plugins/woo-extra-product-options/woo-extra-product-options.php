<?php
/**
 * Plugin Name: Woo Extra Product Options
 * Description: Add extra product options in product page.
 * Author:      ThemeHiGH
 * Version:     1.1.5
 * Author URI:  http://www.themehigh.com
 * Plugin URI:  http://www.themehigh.com
 * Text Domain: woo-extra-product-options
 * Domain Path: /languages
 */
 
if(!defined('ABSPATH')){ exit; }

if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
	if(!class_exists('WEPOF_Extra_Product_Options')){	
		class WEPOF_Extra_Product_Options {	
			public function __construct(){
				add_action('init', array($this, 'init'));
			}		

			public function init() {		
				$this->load_plugin_textdomain();

				!defined('TH_WEPOF_PATH') && define('TH_WEPOF_PATH', plugin_dir_path( __FILE__ ));
				!defined('TH_WEPOF_URL') && define('TH_WEPOF_URL', plugins_url( '/', __FILE__ ));
				!defined('TH_WEPOF_ASSETS_URL') && define('TH_WEPOF_ASSETS_URL', TH_WEPOF_URL .'assets/');
				
				require_once( TH_WEPOF_PATH . 'classes/class-wepof-settings.php' );

				WEPOF_Settings::instance();					
			}

			public function load_plugin_textdomain(){							
				load_plugin_textdomain('woo-extra-product-options', FALSE, dirname(plugin_basename( __FILE__ )) . '/languages/');
			}
		}	
	}
	new WEPOF_Extra_Product_Options();
}
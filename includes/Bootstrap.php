<?php
namespace Sachyya\ShowUserID;

use Sachyya\ShowUserID\ShowId;

final class Bootstrap {
	public static $_instance = null;

	/**
	 * @return Bootstrap|null
	 */
	public static function getInstance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self:: $_instance;
	}

	public function __construct() {

		$this->autoload();

		add_action( 'plugins_loaded', [ $this, 'initPugin' ] );
		register_activation_hook( SHOW_USER_ID_FILE_PATH, [ $this, 'pluginActivated' ] );
		register_deactivation_hook( SHOW_USER_ID_FILE_PATH, [ $this, 'pluginDeactivated' ] );
	}

	public function pluginActivated() {
		//other plugins can get this option and check if plugin is activated
		update_option( 'show_user_id_plugin_activate', 'activated' );
	}

	public function pluginDeactivated() {
		delete_option( 'show_user_id_plugin_activate' );
	}

	/**
	 * Autoload - PSR 4 Compliance
	 */
	public function autoload() {
		require_once SHOW_USER_ID_ROOT_DIR_PATH . '/vendor/autoload.php';
	}

	public function initPugin() {
		ShowId::getInstance();
	}

}

Bootstrap::getInstance();
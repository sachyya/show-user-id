<?php
/**
 * Plugin Name:       Show User ID
 * Plugin URI:        
 * Description:       Show unique user ID for logged in users.
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      7.2
 * Author:            Sachyya
 * Author URI:        https://sachyya.github.io/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       show-user-id
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) or die( 'Script Kiddies Go Away' );

if ( ! defined( 'SHOW_USER_ID_FILE_PATH' ) ) {
    define( 'SHOW_USER_ID_FILE_PATH', __FILE__ );
}

if ( ! defined( 'SHOW_USER_ID_ROOT_DIR_PATH' ) ) {
    define( 'SHOW_USER_ID_ROOT_DIR_PATH', DIRNAME( __FILE__ ) );
}

if ( ! defined( 'SHOW_USER_ID_ROOT_URI_PATH' ) ) {
    define( 'SHOW_USER_ID_ROOT_URI_PATH', plugin_dir_url( __FILE__ ) );
}

require_once SHOW_USER_ID_ROOT_DIR_PATH . '/includes/Bootstrap.php';
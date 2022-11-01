<?php

namespace Sachyya\ShowUserID;

class ShowId {
	public static $instance = null;

	public static function getInstance() {
		return is_null( self::$instance ) ? self::$instance = new self() : self::$instance;
	}

    public function __construct() {
        add_shortcode( 'show_user_id', [ $this, 'render_user_id' ] );
	}

	public static function render_user_id() {
		if( is_user_logged_in() ) {
			return get_current_user_id();
		}
	}

}
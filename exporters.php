<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
add_action( 'underpin/before_setup', function ( $file ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Exporter.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Exporter_Instance.php' );
		Underpin\underpin()->get( $file )->loaders()->add( 'exporters', [
			'instance' => 'Underpin_Exporters\Abstracts\Exporter',
			'default'  => 'Underpin_Exporters\Factories\Exporter_Instance',
		] );
} );
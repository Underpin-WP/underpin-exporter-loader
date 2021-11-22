<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observer( 'exporters', [
	'update' => function ( Underpin $plugin ) {
		require_once( plugin_dir_path( __FILE__ ) . 'Exporter.php' );
		require_once( plugin_dir_path( __FILE__ ) . 'Exporter_Instance.php' );
		$plugin->loaders()->add( 'exporters', [
			'instance' => 'Underpin_Exporters\Abstracts\Exporter',
			'default'  => 'Underpin_Exporters\Factories\Exporter_Instance',
		] );
	},
] ) );
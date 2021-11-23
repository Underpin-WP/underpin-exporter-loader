<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'exporters', [
	'instance' => 'Underpin\Exporters\Abstracts\Exporter',
	'default'  => 'Underpin\Exporters\Factories\Exporter_Instance',
] ) );
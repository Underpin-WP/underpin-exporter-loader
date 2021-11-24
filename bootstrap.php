<?php

use Underpin\Abstracts\Underpin;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Add this loader.
Underpin::attach( 'setup', new \Underpin\Factories\Observers\Loader( 'exporters', [
	'abstraction_class' => 'Underpin\Exporters\Abstracts\Exporter',
	'default_factory'  => 'Underpin\Exporters\Factories\Exporter_Instance',
] ) );
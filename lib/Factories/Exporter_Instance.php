<?php

namespace Underpin\Exporters\Factories;


use Underpin\Traits\Instance_Setter;
use Underpin\Exporters\Abstracts\Exporter;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Exporter_Instance extends Exporter {

	use Instance_Setter;

	protected $get_items_callback;
	protected $get_data_callback;

	public function __construct( $args ) {
		$this->set_values( $args );
	}

	public function get_items( $email, $page ) {
		return $this->set_callable( $this->get_items_callback, $email, $page );
	}

	function get_data( $item ) {
		return $this->set_callable( $this->get_data_callback, $item );
	}

}
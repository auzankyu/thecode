<?php 

namespace HOSTLAZ\Facades;

use Illuminate\Support\Facades\Facade;

class HOSTLAZ extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'hostlaz'; }
}
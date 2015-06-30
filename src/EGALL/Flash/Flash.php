<?php

namespace EGALL\Flash;

use Illuminate\Support\Facades\Facade;

/**
 * Flash Facade
 *
 * @package EGALL\Flash
 */
class Flash extends Facade {

	/**
	 * Get the IoC container binding
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return 'flash';
	}
}
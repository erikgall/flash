<?php

if (!function_exists('flash')) {

	/**
	 * Arrange for a flash message.
	 *
	 * @param  string|null $message
	 * @return \EGALL\Flash\FlashNotifier
	 */
	function flash($message = null)
	{
		$notifier = app('flash');

		if ( ! is_null($message)) {
			return $notifier->info($message);
		}

		return $notifier;
	}

}
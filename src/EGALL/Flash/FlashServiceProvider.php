<?php

namespace EGALL\Flash;

use Illuminate\Support\ServiceProvider;

/**
 * Class FlashServiceProvider
 *
 * @package EGALL\Flash
 */
class FlashServiceProvider extends ServiceProvider {


	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = FALSE;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {

		$this->app->bind('EGALL\Flash\SessionStore', 'EGALL\Flash\LaravelSessionStore');

		$this->app->bindShared('flash', function () {
			return $this->app->make('EGALL\Flash\FlashNotifier');
		});

	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {

		$this->loadViewsFrom($this->getViewPath(), 'flash');

		$this->publishes([
			$this->getViewPath() => base_path('resources/views/vendor/flash')
		]);
	}

	/**
	 * Get the views path
	 *
	 * @return string
	 */
	protected function getViewPath() {
		return __DIR__ . '/../../views';
	}

}
<?php

namespace HOSTLAZ;

use Illuminate\Support\ServiceProvider;

class HOSTLAZServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        //
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('hostlaz', function($app) {
		    return new HOSTLAZ;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('HOSTLAZ', 'HOSTLAZ\Facades\HOSTLAZ');
		});

		$this->publishes([
			dirname(__FILE__).'/config/hostlaz.php' => config_path('hostlaz.php')
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('hostlaz');
	}

}

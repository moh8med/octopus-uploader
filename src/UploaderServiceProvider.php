<?php namespace Moh8med\Uploader;

use Illuminate\Support\ServiceProvider;
use Moh8med\Uploader\Uploader;

class UploaderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('uploader', function () {
			return new Uploader;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('uploader');
	}

}

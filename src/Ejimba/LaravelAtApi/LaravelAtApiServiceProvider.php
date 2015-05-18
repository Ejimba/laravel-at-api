<?php namespace Ejimba\LaravelAtApi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LaravelAtApiServiceProvider extends ServiceProvider {

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
		$this->package('ejimba/laravel-at-api');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		AliasLoader::getInstance()->alias('LaravelAtApi', 'Ejimba\LaravelAtApi\Facades\LaravelAtApi');
		$this->app->bind('laravel-at-api', function ()
        {
        	return new LaravelAtApi;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}

<?php namespace Rafpro\EmbedlyL4;

use Illuminate\Support\ServiceProvider;
use Rafpro\EmbedlyL4\EmbedlyL4 as Embedly;

class EmbedlyL4ServiceProvider extends ServiceProvider {

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
		$this->package('rafpro/embedly-l4');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Register 'embedly' instance container to our EmbedlyL4 object
		$this->app['embedly'] = $this->app->share(function($app) {
			return new Embedly;
		});

		// Shortcut for aliasing Facade
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Embedly', 'Rafpro\EmbedlyL4\Facades\Embedly');
		});

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('embedly');
	}

}
<?php namespace Packettide\BreeColorpicker;

use Illuminate\Support\ServiceProvider;
use Packettide\Bree\FieldSetProvider as FieldSetProvider;

class BreeColorpickerServiceProvider extends ServiceProvider {

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
		$this->package('packettide/bree-colorpicker');

		FieldSetProvider::attachFields('basic', array('Colorpicker' => 'Packettide\BreeColorpicker\BreeColorpicker'));
		FieldSetProvider::attachFields('advanced', array('Colorpicker' => 'Packettide\BreeColorpicker\BreeColorpickerAdvanced'));
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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
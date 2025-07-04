<?php namespace Dev3bdulrahman\TranslationDashboard;

use Illuminate\Support\ServiceProvider;

class ManagerServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Register the config publish path
        $configPath = __DIR__ . '/../config/translation-manager.php';
        $this->mergeConfigFrom($configPath, 'translation-manager');
        $this->publishes([$configPath => config_path('translation-manager.php')], 'config');

        $this->app->singleton('translation-manager', function ($app) {
            $manager = $app->make('Dev3bdulrahman\TranslationDashboard\Manager');
            return $manager;
        });

        $this->app->singleton('command.translation-manager.reset', function ($app) {
            return new Console\ResetCommand($app['translation-manager']);
        });
        $this->commands('command.translation-manager.reset');

        $this->app->singleton('command.translation-manager.import', function ($app) {
            return new Console\ImportCommand($app['translation-manager']);
        });
        $this->commands('command.translation-manager.import');

        $this->app->singleton('command.translation-manager.find', function ($app) {
            return new Console\FindCommand($app['translation-manager']);
        });
        $this->commands('command.translation-manager.find');

        $this->app->singleton('command.translation-manager.export', function ($app) {
            return new Console\ExportCommand($app['translation-manager']);
        });
        $this->commands('command.translation-manager.export');

        $this->app->singleton('command.translation-manager.clean', function ($app) {
            return new Console\CleanCommand($app['translation-manager']);
        });
        $this->commands('command.translation-manager.clean');

        $this->app->singleton('command.translation-manager.publish-assets', function () {
            return new Console\PublishAssetsCommand();
        });
        $this->commands('command.translation-manager.publish-assets');

        $this->app->singleton('command.translation-manager.publish-config', function () {
            return new Console\PublishConfigCommand();
        });
        $this->commands('command.translation-manager.publish-config');

        $this->app->singleton('command.translation-manager.publish-migrations', function () {
            return new Console\PublishMigrationsCommand();
        });
        $this->commands('command.translation-manager.publish-migrations');

        $this->app->singleton('command.translation-manager.publish-translations', function () {
            return new Console\PublishTranslationsCommand();
        });
        $this->commands('command.translation-manager.publish-translations');
	}

    /**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        $viewPath = __DIR__.'/../resources/views';
        $this->loadViewsFrom($viewPath, 'translation-manager');
        $this->publishes([
            $viewPath => base_path('resources/views/vendor/translation-manager'),
        ], 'views');

        $migrationPath = __DIR__.'/../database/migrations';
        $this->publishes([
            $migrationPath => base_path('database/migrations'),
        ], 'migrations');

        // Publish assets
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('translation-dashboard'),
        ], 'assets');

        $this->loadRoutesFrom(__DIR__.'/routes.php');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('translation-manager',
            'command.translation-manager.reset',
            'command.translation-manager.import',
            'command.translation-manager.find',
            'command.translation-manager.export',
            'command.translation-manager.clean',
            'command.translation-manager.publish-assets',
            'command.translation-manager.publish-config',
            'command.translation-manager.publish-migrations',
            'command.translation-manager.publish-translations'
        );
	}

}

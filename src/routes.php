<?php

declare(strict_types=1);

$config = array_merge(config('translation-manager.route'), ['namespace' => 'Dev3bdulrahman\TranslationDashboard']);
Route::group($config, function ($router) {
    // Specific routes first
    $router->post('/groups/add', 'Controller@postAddGroup');
    $router->post('/import', 'Controller@postImport');
    $router->post('/find', 'Controller@postFind');
    $router->post('/locales/add', 'Controller@postAddLocale');
    $router->post('/locales/remove', 'Controller@postRemoveLocale');
    $router->post('/translate-missing', 'Controller@postTranslateMissing');

    // JSON translations specific route (more specific route first)
    $router->post('/delete/_json/{translationKey}', function ($translationKey) {
        return app('\Dev3bdulrahman\TranslationDashboard\Controller')->postDelete('_json', $translationKey);
    })->where('translationKey', '.*');

    // Regular group translations
    $router->post('/delete/{groupKey}/{translationKey}', 'Controller@postDelete')
        ->where('groupKey', '[a-zA-Z0-9_-]+')
        ->where('translationKey', '.*');

    $router->post('/add/{groupKey}', 'Controller@postAdd')->where('groupKey', '.*');
    $router->post('/edit/{groupKey}', 'Controller@postEdit')->where('groupKey', '.*');
    $router->post('/publish/{groupKey}', 'Controller@postPublish')->where('groupKey', '.*');

    // View routes last
    $router->get('view/{groupKey?}', 'Controller@getView')->where('groupKey', '.*');
    $router->get('/{groupKey?}', 'Controller@getIndex')->where('groupKey', '.*');
});

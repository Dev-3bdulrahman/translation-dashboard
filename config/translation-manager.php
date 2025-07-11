<?php

/**
 * Translation Dashboard Configuration
 *
 * This file contains the configuration for the Translation Dashboard package.
 *
 * @author Abdulrahman <contact@3bdulrahman.com>
 * @link https://3bdulrahman.com
 * @link https://github.com/Dev-3bdulrahman/translation-dashboard
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */
    'route' => [
        'prefix' => 'translations',
        'middleware' => [
            'web',
            'auth',
        ],
    ],

    /*
     * Enable deletion of translations
     *
     * @type boolean
     */
    'delete_enabled' => true,

    /*
     * Exclude specific groups from Laravel Translation Manager.
     * This is useful if, for example, you want to avoid editing the official Laravel language files.
     *
     * @type array
     *
     *    array(
     *        'pagination',
     *        'reminders',
     *        'validation',
     *    )
     */
    'exclude_groups' => [],

    /*
     * Exclude specific languages from Laravel Translation Manager.
     *
     * @type array
     *
     *    array(
     *        'fr',
     *        'de',
     *    )
     */
    'exclude_langs' => [],

    /*
     * Export translations with keys output alphabetically.
     */
    'sort_keys' => false,

    'trans_functions' => [
        'trans',
        'trans_choice',
        'Lang::get',
        'Lang::choice',
        'Lang::trans',
        'Lang::transChoice',
        '@lang',
        '@choice',
        '__',
        '$trans.get',
    ],

    /*
     * Database connection name to allow for different db connection for the translations table.
     */
    'db_connection' => env('TRANSLATION_MANAGER_DB_CONNECTION', null),
];

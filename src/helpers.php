<?php

if (!function_exists('translation_dashboard_trans')) {
    /**
     * Translate the given message for Translation Dashboard.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return string
     */
    function translation_dashboard_trans($key, $replace = [], $locale = null)
    {
        // Get the current locale or use the app locale
        $locale = $locale ?: app()->getLocale();
        
        // Define the translation files path
        $translationPath = __DIR__ . '/../resources/lang/' . $locale . '/dashboard.php';
        
        // Fallback to English if the locale file doesn't exist
        if (!file_exists($translationPath)) {
            $translationPath = __DIR__ . '/../resources/lang/en/dashboard.php';
        }
        
        // Load the translation file
        $translations = [];
        if (file_exists($translationPath)) {
            $translations = include $translationPath;
        }
        
        // Get the translation value
        $value = data_get($translations, $key, $key);
        
        // Replace placeholders
        foreach ($replace as $search => $replacement) {
            $value = str_replace(':' . $search, $replacement, $value);
        }
        
        return $value;
    }
}

if (!function_exists('translation_dashboard_asset')) {
    /**
     * Generate an asset path for the Translation Dashboard.
     *
     * @param  string  $path
     * @return string
     */
    function translation_dashboard_asset($path)
    {
        // Check if local assets exist
        $localPath = public_path('translation-dashboard/' . $path);
        
        if (file_exists($localPath)) {
            return asset('translation-dashboard/' . $path);
        }
        
        // Fallback to CDN
        $cdnMap = [
            'css/bootstrap.min.css' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
            'css/font-awesome.min.css' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
            'js/jquery.min.js' => 'https://code.jquery.com/jquery-3.7.1.min.js',
            'js/bootstrap.min.js' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
            'js/bootstrap-editable.min.js' => 'https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js',
            'js/sweetalert2.all.min.js' => 'https://cdn.jsdelivr.net/npm/sweetalert2@11',
        ];
        
        return $cdnMap[$path] ?? asset('translation-dashboard/' . $path);
    }
}

if (!function_exists('translation_dashboard_locale')) {
    /**
     * Get the current locale for Translation Dashboard.
     *
     * @return string
     */
    function translation_dashboard_locale()
    {
        // Check if Laravel app is available
        if (function_exists('app') && app()->bound('config')) {
            return app()->getLocale();
        }
        
        // Fallback to English
        return 'en';
    }
}

if (!function_exists('translation_dashboard_is_rtl')) {
    /**
     * Check if the current locale is RTL.
     *
     * @return bool
     */
    function translation_dashboard_is_rtl()
    {
        $rtlLocales = ['ar', 'he', 'fa', 'ur'];
        return in_array(translation_dashboard_locale(), $rtlLocales);
    }
}

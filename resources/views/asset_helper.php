<?php

/**
 * Helper function to get the asset URL with fallback to CDN
 *
 * @param string $path The path to the asset
 * @return string The URL to the asset
 */
function translation_dashboard_asset($path)
{
    $localPath = 'translation-dashboard/' . $path;

    // Check if the file exists in the public directory
    if (file_exists(public_path($localPath))) {
        return asset($localPath);
    }

    // If not, return the CDN URL as a fallback
    $cdnUrls = [
        'css/bootstrap.min.css' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
        'css/bootstrap-editable.css' => 'https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css',
        'css/all.min.css' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        'css/glyphicons.css' => 'https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
        'css/sweetalert2.min.css' => 'https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css',
        'css/animate.min.css' => 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        'js/jquery-1.11.0.min.js' => 'https://code.jquery.com/jquery-1.11.0.min.js',
        'js/bootstrap.min.js' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',
        'js/bootstrap-editable.min.js' => 'https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js',
        'js/jquery.cookie.js' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js',
        'js/sweetalert2.all.min.js' => 'https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js',
    ];

    return $cdnUrls[$path] ?? asset($localPath);
}

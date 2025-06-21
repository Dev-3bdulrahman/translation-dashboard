<?php

return [
    // Header
    'title' => 'Translation Dashboard',
    'powered_by' => 'Powered by',
    
    // Warning Messages
    'export_warning' => 'Warning, translations are not visible until they are exported back to the app/lang file, using <code>php artisan translation:export</code> command or publish button.',
    
    // Import Section
    'import_translations' => 'Import Translations',
    'import_mode' => 'Import Mode',
    'append_translations' => 'Append new translations',
    'replace_translations' => 'Replace existing translations',
    'import_groups' => 'Import Groups',
    
    // Find Section
    'find_translations' => 'Find Translations',
    'find_description' => 'Scan your application folder to find all translation keys and add them to the database.',
    'find_in_files' => 'Find Translations in Files',
    'find_confirm' => 'Are you sure you want to scan you app folder? All found translation keys will be added to the database.',
    
    // Publish Section
    'publish_translations' => 'Publish Translations',
    'publish_description' => 'Export translations back to your Laravel application files.',
    'publish_confirm' => 'Are you sure you want to publish the translations group \':group\'? This will overwrite existing language files.',
    'back' => 'Back',
    
    // Groups Section
    'translation_groups' => 'Translation Groups',
    'select_group' => 'Select Translation Group',
    'select_group_description' => 'Choose a group to display the group translations. If no groups are visible, make sure you have run the migrations and imported the translations.',
    'choose_group' => 'Choose a group',
    'create_new_group' => 'Create New Group',
    'create_group_description' => 'Enter a new group name and start editing translations in that group.',
    'new_group_placeholder' => 'Enter new group name...',
    'add_group' => 'Add Group',
    
    // Add Keys Section
    'add_new_keys' => 'Add New Keys',
    'translation_keys' => 'Translation Keys',
    'keys_description' => 'Add one key per line, without the group prefix. For example: "welcome_message" instead of "auth.welcome_message"',
    'keys_placeholder' => "welcome_message\nlogin_button\nlogout_text",
    'add_keys' => 'Add Keys',
    'use_auto_translate' => 'Use Auto Translate',
    
    // Auto Translate Section
    'base_locale' => 'Base Locale',
    'target_locale' => 'Target Locale',
    'enter_target_locale' => 'Enter target locale key',
    'google_translate_note' => 'If you would like to use Google Translate API, install tanmuhittin/laravel-google-translate and enter your Google Translate API key to config file laravel_google_translate',
    'auto_translate' => 'Auto Translate',
    
    // Table Section
    'translation_keys_table' => 'Translation Keys',
    'total' => 'Total',
    'changed' => 'Changed',
    'key' => 'Key',
    'actions' => 'Actions',
    'delete_confirm' => 'Are you sure you want to delete the translations for \':key\'?',
    
    // Locales Section
    'supported_locales' => 'Supported Locales',
    'current_locales' => 'Current supported locales:',
    'remove_locale_confirm' => 'Are you sure to remove this locale and all of data?',
    'enter_new_locale' => 'Enter new locale key:',
    'add_new_locale' => 'Add new locale',
    
    // Export Section
    'export_all' => 'Export all translations',
    'publish_all' => 'Publish all',
    'publish_all_confirm' => 'Are you sure you want to publish all translations group? This will overwrite existing language files.',
    
    // Status
    'loading' => 'Loading...',
    'searching' => 'Searching..',
    'publishing' => 'Publishing..',
    'adding' => 'Adding..',
    
    // Success Messages
    'success' => 'Success!',
    'deleted' => 'Deleted!',
    'published' => 'Published!',
    'import_success' => 'Done importing, processed :count items!',
    'find_success' => 'Done searching for translations, found :count items!',
    'publish_success' => 'Done publishing the translations for group ":group"!',
    'publish_all_success' => 'Done publishing the translations for all groups!',
    'delete_success' => 'The translation has been deleted.',
    'reload_page' => 'Reload Page',
    
    // Scroll
    'scroll_to_top' => 'Scroll to top',
];

<h1 align="center">لوحة تحكم الترجمة | Translation Dashboard</h1>

<p align="center">
  <img src="resources/assets/images/package-bg.webp" alt="Translation Dashboard">
</p>

<p align="center">
  <a href="https://travis-ci.org/dev-3bdulrahman/translation-dashboard"><img src="https://travis-ci.org/dev-3bdulrahman/translation-dashboard.svg?branch=master" alt="Build Status"></a>
  <a href="http://choosealicense.com/licenses/mit/"><img src="https://poser.pugx.org/dev-3bdulrahman/translation-dashboard/license.png" alt="Packagist License"></a>
  <a href="https://packagist.org/packages/dev-3bdulrahman/translation-dashboard"><img src="https://poser.pugx.org/dev-3bdulrahman/translation-dashboard/version.png" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/dev-3bdulrahman/translation-dashboard"><img src="https://poser.pugx.org/dev-3bdulrahman/translation-dashboard/d/total.png" alt="Total Downloads"></a>
  <a href="https://3bdulrahman.com"><img src="https://img.shields.io/badge/Developer-Abdulrahman-blue.svg" alt="Developer"></a>
</p># Translation Dashboard

A user-friendly dashboard for managing Laravel application translations.

## Installation

1. Add the package to your Laravel application:

```bash
composer require dev-3bdulrahman/translation-dashboard
```

**العربية:**
عند تثبيت الباكج، سيتم تنفيذ جميع الأوامر التالية تلقائيًا:
- نشر ملفات الإعدادات (`php artisan translations:publish-config`)
- نشر الأصول (`php artisan translation:publish-assets`)
- تشغيل الترحيلات (`php artisan migrate`)
- استيراد الترجمات الموجودة (`php artisan translation:import`)
- البحث عن مفاتيح الترجمة في التطبيق (`php artisan translation:find`)

لا تحتاج إلى تنفيذ أي أوامر يدويًا، فقط قم بتثبيت الباكج وستكون جاهزًا للاستخدام مباشرة!

**English:**
When installing the package, all of the following commands will be executed automatically:
- Publish configuration files (`php artisan translations:publish-config`)
- Publish assets (`php artisan translations:publish-assets`)
- Run migrations (`php artisan migrate`)
- Import existing translations (`php artisan translation:import`)
- Find translation keys in your application (`php artisan translation:find`)

You don't need to run any commands manually - just install the package and you're ready to go!

> **Note:** If you need to re-run any of these commands later, you can execute them manually:
> ```bash
> php artisan translations:publish-config
> php artisan translations:publish-assets
> php artisan migrate
> php artisan translation:import
> php artisan translation:find
> ```
>
> The assets will be copied to the `public/translation-dashboard` directory. The package will automatically use these local assets instead of loading them from CDN.

## Usage

1. Visit `/translations` in your browser to access the dashboard.

2. Import existing translations:
   - Click on "Import Groups" to import existing translations from your Laravel application.

3. Find translations:
   - Click on "Find Translations in Files" to scan your application for translation keys.

4. Edit translations:
   - Select a group from the dropdown menu.
   - Click on any translation to edit it.
   - Click "OK" to save the translation.

5. Add new translation keys:
   - Enter new keys in the "Add New Keys to Group" section.
   - Click "Add Keys" to add them to the selected group.

6. Publish translations:
   - Click "Publish Translations" to export the translations back to your Laravel application.

## Commands

- `php artisan translation:import`: Import translations from the application.
- `php artisan translation:find`: Find translations in the application.
- `php artisan translation:export`: Export translations to the application.
- `php artisan translation:clean`: Clean the translation database.
- `php artisan translation:reset`: Reset the translation database.
- `php artisan translation:publish-assets`: Publish assets for the Translation Dashboard.
- `php artisan translation:publish-config`: Publish the configuration file.

## Configuration

You can configure the package by editing the `config/translation-manager.php` file.

## Troubleshooting

### Assets not loading

If you're having issues with assets not loading:

1. Make sure you've published the assets:
   ```bash
   php artisan translation:publish-assets
   ```

2. Check that the assets exist in the `public/translation-dashboard` directory.

3. If the assets still don't load, the package will automatically fall back to CDN resources.

4. If you're using a custom public path, make sure to update your asset URLs accordingly.

### Missing translations

If translations are not showing up:

1. Make sure you've run the migrations:
   ```bash
   php artisan migrate
   ```

2. Import your existing translations:
   ```bash
   php artisan translation:import
   ```

3. Check the database to ensure the translations were imported correctly.

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<h1 align="center">لوحة تحكم الترجمة | Translation Dashboard</h1>

<p align="center">
  <img src="resources/assets/images/package-bg.webp" alt="Translation Dashboard">
</p>

<p align="center">
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
- نشر الأصول (`php artisan translations:publish-assets`)
- نشر ملفات الترحيلات (`php artisan translations:publish-migrations`)
- تشغيل الترحيلات (`php artisan migrate`)
- استيراد الترجمات الموجودة (`php artisan translation:import`)
- البحث عن مفاتيح الترجمة في التطبيق (`php artisan translation:find`)

لا تحتاج إلى تنفيذ أي أوامر يدويًا، فقط قم بتثبيت الباكج وستكون جاهزًا للاستخدام مباشرة!

**English:**
When installing the package, all of the following commands will be executed automatically:
- Publish configuration files (`php artisan translations:publish-config`)
- Publish assets (`php artisan translations:publish-assets`)
- Publish migration files (`php artisan translations:publish-migrations`)
- Run migrations (`php artisan migrate`)
- Import existing translations (`php artisan translation:import`)
- Find translation keys in your application (`php artisan translation:find`)

You don't need to run any commands manually - just install the package and you're ready to go!

> **Note:** If you need to re-run any of these commands later, you can execute them manually:
> ```bash
> php artisan translations:publish-config
> php artisan translations:publish-assets
> php artisan translations:publish-migrations
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
- `php artisan translations:publish-assets`: Publish assets for the Translation Dashboard.
- `php artisan translations:publish-config`: Publish the configuration file.
- `php artisan translations:publish-migrations`: Publish migration files.
- `php artisan translations:publish-translations`: Publish translation files for the dashboard interface.

## 🎨 Features

### Premium Design
- **Modern UI**: Beautiful gradient-based design with smooth animations
- **Custom SVG Logo**: Professional branding with floating animation effects
- **Responsive Layout**: Optimized for all devices and screen sizes
- **Dark Theme Elements**: Elegant dark header with gradient accents

### Multilingual Support
- **Complete Translation System**: All interface text is translatable
- **English & Arabic Support**: Full RTL (Right-to-Left) compatibility
- **Auto-Detection**: Automatic locale detection and direction support
- **Easy Localization**: Simple translation file management

### Professional Branding
- **Custom Favicon**: Translation-themed SVG icon for browser tabs
- **Developer Attribution**: "Powered by Abdulrahman" with link to [3bdulrahman.com](https://3bdulrahman.com)
- **Visual Identity**: Consistent branding throughout the interface

## 📋 Changelog

### v2.1.2 (Latest) - 2024-12-21
- 🚨 **Critical Fix**: Removed duplicate helper file causing function redeclaration errors
- 🔧 **Code Cleanup**: Consolidated all helper functions to single location
- ✅ **Stability**: Eliminated all function conflict issues

### v2.1.1 - 2024-12-21
- 🐛 **Bug Fixes**: Enhanced error handling in helper functions
- 🔧 **Compatibility**: Better Laravel integration and fallback mechanisms
- 🛡️ **Safety**: Improved exception handling with Throwable

### v2.1.0 - 2024-12-21
- 🎨 **Premium Header**: Custom SVG logo with professional gradient effects
- 🌐 **Multilingual Interface**: Complete English/Arabic translation system
- 🏷️ **Branding**: Developer attribution with website link
- 📱 **Custom Favicon**: Translation-themed browser icon
- 🔧 **Auto-Setup**: Automatic translation file publishing

### v2.0.2 - 2024-12-21
- 📏 **Compact Header**: Significantly reduced header size (50px/45px mobile)
- 📝 **Better Typography**: Increased font sizes for improved readability
- 📱 **Mobile Optimized**: Enhanced responsive design
- 🔧 **Version Fix**: Resolved Packagist version mismatch

### v2.0.0 - 2024-12-21
- 🎨 **Complete UI Overhaul**: Modern design with gradients and animations
- 📝 **Enhanced Typography**: Inter font and improved text hierarchy
- 🎭 **Advanced Animations**: Smooth transitions and hover effects
- 📱 **Responsive Design**: Mobile-first approach with device optimization

## 🚀 Installation & Updates

### Fresh Installation
```bash
composer require dev-3bdulrahman/translation-dashboard
```

### Update to Latest Version
```bash
composer update dev-3bdulrahman/translation-dashboard
```

### Specific Version
```bash
composer require dev-3bdulrahman/translation-dashboard:^2.1.2
```

## 📋 Requirements

- **PHP**: 7.4 or higher
- **Laravel**: 8.0 or higher
- **Database**: MySQL, PostgreSQL, SQLite, or SQL Server
- **Extensions**: PDO, Mbstring, OpenSSL, Tokenizer, XML

## 🔧 Compatibility

| Laravel Version | Package Version | Status |
|----------------|----------------|---------|
| 11.x | 2.1.x | ✅ Fully Supported |
| 10.x | 2.1.x | ✅ Fully Supported |
| 9.x | 2.1.x | ✅ Fully Supported |
| 8.x | 2.1.x | ✅ Fully Supported |

## 🌟 What's New in v2.1.2

### 🚨 Critical Fixes
- **Function Conflict Resolution**: Completely eliminated the "Cannot redeclare function" error
- **Code Consolidation**: All helper functions now properly organized in single location
- **Package Stability**: Zero conflicts with existing Laravel installations

### 🎨 Premium Features (Since v2.1.0)
- **Custom SVG Logo**: Professional gradient logo with smooth animations
- **Multilingual Interface**: Complete English/Arabic support with RTL layout
- **Developer Branding**: Attribution link to [3bdulrahman.com](https://3bdulrahman.com)
- **Custom Favicon**: Translation-themed browser icon
- **Modern Typography**: Enhanced readability with Inter font family

### 🔧 Technical Improvements
- **Auto-Translation Setup**: Automatic publishing of translation files
- **Enhanced Error Handling**: Robust exception management
- **Better Laravel Integration**: Improved compatibility across versions
- **Responsive Design**: Optimized for all devices and screen sizes

## 🤝 Support & Contributing

### 🐛 Found a Bug?
If you discover any issues, please [create an issue](https://github.com/Dev-3bdulrahman/translation-dashboard/issues) with:
- Laravel version
- PHP version
- Package version
- Detailed error description
- Steps to reproduce

### 💡 Feature Requests
We welcome feature suggestions! Please [open an issue](https://github.com/Dev-3bdulrahman/translation-dashboard/issues) with the `enhancement` label.

### 🔧 Contributing
1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📞 Contact & Links

- **Developer**: [Abdulrahman](https://3bdulrahman.com)
- **GitHub**: [Dev-3bdulrahman](https://github.com/Dev-3bdulrahman)
- **Package Repository**: [translation-dashboard](https://github.com/Dev-3bdulrahman/translation-dashboard)
- **Packagist**: [dev-3bdulrahman/translation-dashboard](https://packagist.org/packages/dev-3bdulrahman/translation-dashboard)

## 📄 License

This package is open-sourced software licensed under the [MIT license](LICENSE).

---

<div align="center">

**Made with ❤️ by [Abdulrahman](https://3bdulrahman.com)**

*If this package helped you, please consider giving it a ⭐ on [GitHub](https://github.com/Dev-3bdulrahman/translation-dashboard)!*

</div>

## Configuration

You can configure the package by editing the `config/translation-manager.php` file.

## Troubleshooting

### Assets not loading

If you're having issues with assets not loading:

1. Make sure you've published the assets:
   ```bash
   php artisan translations:publish-assets
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

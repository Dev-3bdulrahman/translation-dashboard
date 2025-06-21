# Changelog

All notable changes to the Translation Dashboard package will be documented in this file.

## [2.0.0] - 2024-12-21

### Major UI/UX Overhaul
- **Complete Design Redesign**: Modern, professional interface with gradient backgrounds
- **Enhanced Typography**: Added Inter font from Google Fonts for better readability
- **Advanced Animations**: Smooth transitions, hover effects, and interactive elements
- **Responsive Design**: Optimized for all devices with mobile-first approach
- **Visual Improvements**:
  - Gradient buttons with shine effects
  - Animated background with color shifting
  - Enhanced form sections with better organization
  - Improved table design with hover effects
  - Custom scrollbar styling
  - Floating action button for better navigation
  - Status indicators and badges
  - Enhanced visual hierarchy and spacing

### Technical Improvements
- **CSS Variables**: Better color management and theming
- **Performance Optimizations**: Optimized animations and transitions
- **Accessibility**: Improved focus states and keyboard navigation
- **Code Organization**: Better structured CSS with modern practices

### Maintained Features
- All existing functionality preserved
- Backward compatibility maintained
- jQuery compatibility preserved for older versions

## [0.1.0] - 2025-05-01

### Added
- Initial release of the Translation Dashboard package
- Modern UI with responsive design
- Support for importing and exporting translations
- Group management for translations
- Search functionality for translation keys
- Automatic command execution on package installation
- Support for Laravel 9, 10, 11, and 12

### Commands
- `php artisan translation:import` - Import translations from the application
- `php artisan translation:find` - Find translations in the application
- `php artisan translation:export` - Export translations to the application
- `php artisan translation:clean` - Clean the translation database
- `php artisan translation:reset` - Reset the translation database
- `php artisan translations:publish-assets` - Publish assets for the Translation Dashboard
- `php artisan translations:publish-config` - Publish the configuration file

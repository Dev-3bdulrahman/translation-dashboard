# Changelog

All notable changes to the Translation Dashboard package will be documented in this file.

## [2.1.3] - 2024-12-21

### Enhanced Typography & RTL Support
- **Improved Font Sizes**: Increased base font size to 17px for better readability
- **Enhanced Button Typography**: Improved button font size to 1.1rem
- **Better Form Elements**: Enhanced form control and label font sizes to 1.1rem
- **Improved Table Typography**: Increased table and header font sizes
- **Enhanced Alert Messages**: Improved alert and helper text font sizes

### Complete RTL Layout Fix
- **Fixed Logo Positioning**: Removed float:left to enable proper RTL positioning
- **Correct Logo Placement**: Logo now appears on right side for Arabic (RTL) languages
- **Enhanced Navbar Layout**: Improved flex-direction control for RTL languages
- **Better Brand Credit**: Moved "Powered by Abdulrahman" to appear beside logo
- **Responsive RTL Design**: Enhanced mobile layout for RTL languages

### Complete SweetAlert Translation
- **Full Translation Support**: All SweetAlert messages now translatable
- **Confirmation Dialogs**: Translated "Are you sure?", "Yes, delete!", "Cancel" buttons
- **Success Messages**: Translated all success notifications (Published!, Deleted!, etc.)
- **Dynamic Content**: Support for variable replacement (:count, :group placeholders)
- **Consistent Messaging**: Unified user experience across English and Arabic

### Technical Improvements
- **Better Flex Layout**: Enhanced navbar-header alignment for both LTR and RTL
- **Improved Responsive Design**: Better mobile experience with proper font scaling
- **Enhanced Visual Hierarchy**: Improved font sizes across all interface elements
- **Better Accessibility**: Larger, more readable fonts throughout the interface

## [2.1.2] - 2024-12-21

### Critical Bug Fix
- **Removed Duplicate Helper File**: Deleted `resources/views/asset_helper.php` that was causing function redeclaration
- **Fixed Function Conflict**: Resolved "Cannot redeclare translation_dashboard_asset()" error completely
- **Cleaned Up Includes**: Removed obsolete include statement from index.php
- **Consolidated Helper Functions**: All helper functions now properly loaded from `src/helpers.php` only

### Technical Improvements
- **Single Source of Truth**: Helper functions now exist in one location only
- **Better Code Organization**: Eliminated duplicate function definitions
- **Improved Package Stability**: No more function redeclaration conflicts

## [2.1.1] - 2024-12-21

### Bug Fixes
- **Fixed Helper Functions Conflict**: Resolved "Cannot redeclare function" error
- **Enhanced Error Handling**: Improved exception handling in helper functions
- **Better Laravel Integration**: More robust Laravel function availability checks
- **Safer Function Loading**: Added proper existence checks for all helper functions

### Technical Improvements
- **Exception Safety**: Using Throwable instead of Exception for better compatibility
- **Fallback Mechanisms**: Enhanced fallback logic for non-Laravel environments
- **Code Stability**: Improved error handling and function declarations

## [2.1.0] - 2024-12-21

### Premium Header Design & Multilingual Support
- **Custom SVG Logo**: Professional gradient logo with floating animation effects
- **Branding Integration**: "Powered by Abdulrahman" credit with link to 3bdulrahman.com
- **Custom Favicon**: Translation-themed SVG favicon for browser tabs
- **Enhanced Visual Identity**: Professional appearance with improved brand recognition

### Complete Multilingual Interface
- **Full Translation System**: All dashboard text now translatable
- **English & Arabic Support**: Complete language files with RTL compatibility
- **Automatic Translation Publishing**: New command for seamless translation setup
- **Dynamic Locale Detection**: Automatic language and direction detection
- **Helper Functions**: Comprehensive translation management utilities

### Technical Enhancements
- **Auto-loading Translation Files**: Composer integration for automatic setup
- **Responsive Logo Design**: Optimized scaling for all device sizes
- **Enhanced CSS Animations**: Improved visual effects and hover states
- **Professional Typography**: Better font hierarchy and spacing
- **RTL Layout Support**: Full right-to-left language compatibility

### New Commands
- **translations:publish-translations**: Automatic translation file publishing
- **Enhanced Installation**: Automatic translation setup during package installation

## [2.0.2] - 2024-12-21

### Header Size Optimization
- **Significantly Reduced Header Height**: From default to 50px (45px on mobile)
- **Compact Navigation**: Optimized padding and spacing for minimal header footprint
- **Better Space Utilization**: More content visible on screen
- **Mobile Optimization**: Even smaller header on mobile devices
- **Improved Toggle Button**: Better sizing and positioning

### Version Management
- **Fixed Packagist Version Mismatch**: Resolved composer.json version conflicts
- **Proper Semantic Versioning**: Aligned all version files

## [2.0.1] - 2024-12-21

### Typography & UI Improvements
- **Enhanced Font Sizes**: Increased base font size to 16px for better readability
- **Improved Text Hierarchy**: Better font sizing across all components
- **Responsive Typography**: Optimized font sizes for mobile devices

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

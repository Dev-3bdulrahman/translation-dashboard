<h1 align="center">لوحة تحكم الترجمة | Translation Dashboard</h1>

<p align="center">
  <img src="public/assets/package-bg.webp" alt="Translation Dashboard">
</p>

<p align="center">
  <a href="https://travis-ci.org/dev-3bdulrahman/translation-dashboard"><img src="https://travis-ci.org/dev-3bdulrahman/translation-dashboard.svg?branch=master" alt="Build Status"></a>
  <a href="http://choosealicense.com/licenses/mit/"><img src="https://poser.pugx.org/dev-3bdulrahman/translation-dashboard/license.png" alt="Packagist License"></a>
  <a href="https://packagist.org/packages/dev-3bdulrahman/translation-dashboard"><img src="https://poser.pugx.org/dev-3bdulrahman/translation-dashboard/version.png" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/dev-3bdulrahman/translation-dashboard"><img src="https://poser.pugx.org/dev-3bdulrahman/translation-dashboard/d/total.png" alt="Total Downloads"></a>
  <a href="https://3bdulrahman.com"><img src="https://img.shields.io/badge/Developer-Abdulrahman-blue.svg" alt="Developer"></a>
</p>

**العربية:**
هذه لوحة تحكم حديثة لإدارة ملفات ترجمة لارافيل.
لا تحل محل نظام الترجمة، بل تقوم فقط باستيراد/تصدير ملفات PHP إلى قاعدة بيانات وجعلها قابلة للتحرير من خلال واجهة ويب جميلة ومتجاوبة مع تأثيرات حركية.

**English:**
This is a modern dashboard to manage Laravel translation files.
It does not replace the Translation system, only imports/exports PHP files to a database and makes them editable through a beautiful and responsive web interface with animations.
**العربية:**
سير العمل سيكون كالتالي:

-   استيراد الترجمات: قراءة جميع ملفات الترجمة وحفظها في قاعدة البيانات
-   البحث عن جميع الترجمات في مصادر PHP/Twig
-   تحرير الترجمات من خلال واجهة الويب الجميلة
-   تصدير الترجمات مرة أخرى إلى ملفات PHP

**English:**
The workflow would be:

-   Import translations: Read all translation files and save them in the database
-   Find all translations in PHP/Twig sources
    -   Optionally: Listen to missing translation with the custom Translator
    -   Translate all keys through the webinterface
    -   Export: Write all translations back to the translation files.

**العربية:**
بهذه الطريقة، يمكن حفظ الترجمات في تاريخ Git ولا يتم إدخال أي عبء إضافي في بيئة الإنتاج.

**English:**
This way, translations can be saved in git history and no overhead is introduced in production.

![Screenshot](https://raw.githubusercontent.com/Dev-3bdulrahman/translation-dashboard/main/screenshot.png)

## التثبيت | Installation

**العربية:**
قم بإضافة هذه الحزمة في ملف composer.json الخاص بك وقم بتشغيل composer update (أو قم بتشغيل `composer require dev-3bdulrahman/translation-dashboard` مباشرة):

```bash
composer require dev-3bdulrahman/translation-dashboard
```

**English:**
Require this package in your composer.json and run composer update (or run `composer require dev-3bdulrahman/translation-dashboard` directly):

```bash
composer require dev-3bdulrahman/translation-dashboard
```

**العربية:**
تحتاج إلى تشغيل الترحيلات (migrations) لهذه الحزمة.

```bash
php artisan vendor:publish --provider="Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider" --tag=migrations
php artisan migrate
```

**English:**
You need to run the migrations for this package.

```bash
php artisan vendor:publish --provider="Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider" --tag=migrations
php artisan migrate
```

**العربية:**
تحتاج إلى نشر ملف الإعدادات لهذه الحزمة. سيضيف هذا الملف `config/translation-manager.php`، حيث يمكنك تكوين هذه الحزمة.

```bash
php artisan vendor:publish --provider="Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider" --tag=config
```

**English:**
You need to publish the config file for this package. This will add the file `config/translation-manager.php`, where you can configure this package.

```bash
php artisan vendor:publish --provider="Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider" --tag=config
```

In order to edit the default template, the views must be published as well. The views will then be placed in `resources/views/vendor/translation-manager`.

```
php artisan vendor:publish --provider="Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider" --tag=views
```

Routes are added in the ServiceProvider. You can set the group parameters for the routes in the configuration.
You can change the prefix or filter/middleware for the routes. If you want full customisation, you can extend the ServiceProvider and override the `map()` function.

This example will make the translation manager available at `http://yourdomain.com/translations`

```

**ملاحظة:** *هذا مطلوب فقط في لارافيل 8 (وما فوق!)*

**NOTE:** *This is only needed in Laravel 8 (and up!)*

## طريقة الاستخدام | Usage

### واجهة الويب | Web Interface

**العربية:**
بعد استيراد الترجمات (عبر الأزرار أو الأوامر)، يمكنك عرضها في واجهة الويب (على الرابط الذي حددته مع وحدة التحكم).
يمكنك النقر على أي ترجمة وسيظهر حقل التحرير. ما عليك سوى النقر على حفظ وسيتم حفظها :)
عندما لا تكون الترجمة موجودة بعد في لغة مختلفة، يمكنك أيضًا تحريرها لإنشائها.

باستخدام الأزرار في واجهة الويب، يمكنك استيراد/تصدير الترجمات. لنشر الترجمات، تأكد من أن تطبيقك يمكنه الكتابة في دليل اللغة.

يمكنك أيضًا استخدام الأوامر أدناه.

**English:**
After importing your translations (via buttons or commands), you can view them in the web interface (at the URL you defined with the controller).
You can click on any translation and an edit field will appear with a smooth animation. Just click save and it's saved instantly!
When a translation doesn't exist yet in a different locale, you can simply edit it to create it.

Using the intuitive buttons on the web interface, you can import/export translations. For publishing translations, ensure your application has write permissions to the language directory.

You can also use the commands described below.

### أمر الاستيراد | Import Command

**العربية:**
سيقوم أمر الاستيراد بالبحث في app/lang وتحميل جميع النصوص في قاعدة البيانات، حتى تتمكن من إدارتها بسهولة.

```

php artisan translations:import

```

سيتم استيراد سلاسل الترجمة من ملفات app/lang/locale.json إلى مجموعة __json_.

ملاحظة: بشكل افتراضي، تتم إضافة النصوص الجديدة فقط. يتم الاحتفاظ بالترجمات الموجودة بالفعل في قاعدة البيانات كما هي. إذا كنت ترغب في استبدال جميع القيم بتلك الموجودة في الملفات،
أضف خيار `--replace` (أو `-R`): `php artisan translations:import --replace`

**English:**
The import command scans through app/lang and loads all strings into the database, allowing you to manage them easily through the dashboard.

```

php artisan translations:import

```

Translation strings from app/lang/locale.json files will be imported to the __json_ group.

Note: By default, only new strings are added while existing translations in the database remain unchanged. If you want to replace all values with those from the files,
add the `--replace` (or `-R`) option: `php artisan translations:import --replace`

### البحث عن الترجمات في المصدر | Find Translations in Source

**العربية:**
سيبحث أمر/زر البحث عن جميع ملفات php/twig في دليل التطبيق، للتحقق مما إذا كانت تحتوي على وظائف ترجمة، وسيحاول استخراج أسماء المجموعة/العنصر.
ستتم إضافة المفاتيح التي تم العثور عليها إلى قاعدة البيانات، حتى يمكن ترجمتها بسهولة.
يمكن القيام بذلك من خلال واجهة الويب، أو عبر أمر Artisan.

```

php artisan translations:find

```

إذا كان مشروعك يستخدم سلاسل الترجمة كمفاتيح، فسيتم تخزينها في مجموعة __json_.

**English:**
The Find command/button scans all PHP/Twig files in your app directory to detect translation functions and extract group/item names.
The discovered keys are added to the database, making them available for translation through the dashboard.
This can be done through the web interface or via an Artisan command.

```

php artisan translations:find

```

If your project uses translation strings as keys, these will be stored in the __json_ group.

### أمر التصدير | Export Command

**العربية:**
سيقوم أمر التصدير بكتابة محتويات قاعدة البيانات مرة أخرى إلى ملفات php في app/lang.
سيؤدي هذا إلى استبدال الترجمات الموجودة وإزالة جميع التعليقات، لذا تأكد من عمل نسخة احتياطية من بياناتك قبل الاستخدام.
قم بتوفير اسم المجموعة لتحديد المجموعات التي تريد نشرها.

```

php artisan translations:export <group>

```

على سبيل المثال، `php artisan translations:export reminders` عندما يكون لديك لغتان (en/nl)، سيكتب إلى `app/lang/en/reminders.php` و `app/lang/nl/reminders.php`

لتصدير سلاسل الترجمة كمفاتيح إلى ملفات JSON، استخدم خيار `--json` (أو `-J`): `php artisan translations:export --json`. سيقوم هذا باستيراد كل الإدخالات من مجموعة __json_.

**English:**
The export command writes the database contents back to app/lang PHP files.
This overwrites existing translations and removes all comments, so be sure to backup your data before using this command.
Specify the group name to define which translation groups you want to publish.

```

php artisan translations:export <group>

```

For example, `php artisan translations:export reminders` with two locales (en/nl) will write to `app/lang/en/reminders.php` and `app/lang/nl/reminders.php`

To export translation strings as keys to JSON files, use the `--json` (or `-J`) option: `php artisan translations:export --json`. This exports all entries from the __json_ group.

### أمر التنظيف | Clean Command

**العربية:**
سيبحث أمر التنظيف عن جميع الترجمات التي تكون NULL ويحذفها، بحيث تكون واجهتك أكثر نظافة. ملاحظة: لا يتم تصدير الترجمات الفارغة أبدًا.

```

php artisan translations:clean

```

**English:**
The clean command finds all NULL translations and removes them, keeping your interface cleaner. Note: empty translations are never exported.

```

php artisan translations:clean

```

### أمر إعادة التعيين | Reset Command

**العربية:**
يقوم أمر إعادة التعيين ببساطة بمسح جميع الترجمات في قاعدة البيانات، حتى تتمكن من البدء من جديد (عن طريق استيراد جديد). تأكد من تصدير عملك إذا لزم الأمر قبل القيام بذلك.

```

php artisan translations:reset

```

**English:**
The reset command clears all translations in the database, allowing you to start fresh (with a new import). Make sure to export your work if needed before running this command.

```

php artisan translations:reset

```


### اكتشاف الترجمات المفقودة | Detect Missing Translations

Most translations can be found by using the Find command (see above), but in case you have dynamic keys (variables/automatic forms etc), it can be helpful to 'listen' to the missing translations.
To detect missing translations, we can swap the Laravel TranslationServiceProvider with a custom provider.
In your `config/app.php`, comment out the original TranslationServiceProvider and add the one from this package:

    //'Illuminate\Translation\TranslationServiceProvider',
    'Dev3bdulrahman\TranslationDashboard\TranslationServiceProvider',

This will extend the Translator and will create a new database entry, whenever a key is not found, so you have to visit the pages that use them.
This way it shows up in the webinterface and can be edited and later exported.
You shouldn't use this in production, just in development to translate your views, then just switch back.

## TODO

This package is still very alpha. Few things that are on the todo-list:

    - Add locales/groups via webinterface
    - Improve webinterface (more selection/filtering, behavior of popup after save etc)
    - Seed existing languages (https://github.com/caouecs/Laravel-lang)
    - Suggestions are welcome :)
```

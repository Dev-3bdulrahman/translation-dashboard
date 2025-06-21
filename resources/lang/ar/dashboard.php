<?php

return [
    // Header
    'title' => 'لوحة تحكم الترجمة',
    'powered_by' => 'مقدم من',

    // Warning Messages
    'export_warning' => 'تحذير، الترجمات غير مرئية حتى يتم تصديرها إلى ملف app/lang، باستخدام الأمر <code>php artisan translation:export</code> أو زر النشر.',

    // Import Section
    'import_translations' => 'استيراد الترجمات',
    'import_mode' => 'وضع الاستيراد',
    'append_translations' => 'إضافة ترجمات جديدة',
    'replace_translations' => 'استبدال الترجمات الموجودة',
    'import_groups' => 'استيراد المجموعات',

    // Find Section
    'find_translations' => 'البحث عن الترجمات',
    'find_description' => 'فحص مجلد التطبيق للعثور على جميع مفاتيح الترجمة وإضافتها إلى قاعدة البيانات.',
    'find_in_files' => 'البحث عن الترجمات في الملفات',
    'find_confirm' => 'هل أنت متأكد من أنك تريد فحص مجلد التطبيق؟ سيتم إضافة جميع مفاتيح الترجمة الموجودة إلى قاعدة البيانات.',

    // Publish Section
    'publish_translations' => 'نشر الترجمات',
    'publish_description' => 'تصدير الترجمات إلى ملفات تطبيق Laravel الخاص بك.',
    'publish_confirm' => 'هل أنت متأكد من أنك تريد نشر مجموعة الترجمات ":group"؟ سيؤدي هذا إلى استبدال ملفات اللغة الموجودة.',
    'back' => 'رجوع',

    // Groups Section
    'translation_groups' => 'مجموعات الترجمة',
    'select_group' => 'اختيار مجموعة الترجمة',
    'select_group_description' => 'اختر مجموعة لعرض ترجمات المجموعة. إذا لم تكن هناك مجموعات مرئية، تأكد من تشغيل الترحيلات واستيراد الترجمات.',
    'choose_group' => 'اختر مجموعة',
    'create_new_group' => 'إنشاء مجموعة جديدة',
    'create_group_description' => 'أدخل اسم مجموعة جديد وابدأ في تحرير الترجمات في تلك المجموعة.',
    'new_group_placeholder' => 'أدخل اسم المجموعة الجديدة...',
    'add_group' => 'إضافة مجموعة',

    // Add Keys Section
    'add_new_keys' => 'إضافة مفاتيح جديدة',
    'translation_keys' => 'مفاتيح الترجمة',
    'keys_description' => 'أضف مفتاحاً واحداً في كل سطر، بدون بادئة المجموعة. على سبيل المثال: "welcome_message" بدلاً من "auth.welcome_message"',
    'keys_placeholder' => "welcome_message\nlogin_button\nlogout_text",
    'add_keys' => 'إضافة مفاتيح',
    'use_auto_translate' => 'استخدام الترجمة التلقائية',

    // Auto Translate Section
    'base_locale' => 'اللغة الأساسية',
    'target_locale' => 'اللغة المستهدفة',
    'enter_target_locale' => 'أدخل مفتاح اللغة المستهدفة',
    'google_translate_note' => 'إذا كنت تريد استخدام Google Translate API، قم بتثبيت tanmuhittin/laravel-google-translate وأدخل مفتاح Google Translate API في ملف التكوين laravel_google_translate',
    'auto_translate' => 'ترجمة تلقائية',

    // Table Section
    'translation_keys_table' => 'مفاتيح الترجمة',
    'total' => 'المجموع',
    'changed' => 'المتغير',
    'key' => 'المفتاح',
    'actions' => 'الإجراءات',
    'delete_confirm' => 'هل أنت متأكد من أنك تريد حذف الترجمات لـ ":key"؟',

    // Locales Section
    'supported_locales' => 'اللغات المدعومة',
    'current_locales' => 'اللغات المدعومة حالياً:',
    'remove_locale_confirm' => 'هل أنت متأكد من إزالة هذه اللغة وجميع البيانات؟',
    'enter_new_locale' => 'أدخل مفتاح اللغة الجديدة:',
    'add_new_locale' => 'إضافة لغة جديدة',

    // Export Section
    'export_all' => 'تصدير جميع الترجمات',
    'publish_all' => 'نشر الكل',
    'publish_all_confirm' => 'هل أنت متأكد من أنك تريد نشر جميع مجموعات الترجمة؟ سيؤدي هذا إلى استبدال ملفات اللغة الموجودة.',

    // Status
    'loading' => 'جاري التحميل...',
    'searching' => 'جاري البحث..',
    'publishing' => 'جاري النشر..',
    'adding' => 'جاري الإضافة..',

    // Success Messages
    'success' => 'نجح!',
    'deleted' => 'تم الحذف!',
    'published' => 'تم النشر!',
    'import_success' => 'تم الاستيراد بنجاح، تمت معالجة :count عنصر!',
    'find_success' => 'تم البحث بنجاح، تم العثور على :count عنصر!',
    'publish_success' => 'تم نشر الترجمات للمجموعة ":group" بنجاح!',
    'publish_all_success' => 'تم نشر الترجمات لجميع المجموعات بنجاح!',
    'delete_success' => 'تم حذف الترجمة.',
    'reload_page' => 'إعادة تحميل الصفحة',

    // Scroll
    'scroll_to_top' => 'التمرير إلى الأعلى',

    // SweetAlert Messages
    'confirm_title' => 'هل أنت متأكد؟',
    'confirm_text' => 'لن تتمكن من التراجع عن هذا الإجراء!',
    'yes_delete' => 'نعم، احذف!',
    'yes_publish' => 'نعم، انشر!',
    'yes_continue' => 'نعم، تابع!',
    'cancel' => 'إلغاء',
    'error_title' => 'خطأ!',
    'error_text' => 'حدث خطأ ما!',
    'success_title' => 'نجح!',
    'warning_title' => 'تحذير!',
    'info_title' => 'معلومات',
    'deleted' => 'تم الحذف!',
    'delete_success' => 'تم حذف الترجمة بنجاح.',
    'import_success' => 'تم الاستيراد بنجاح، تمت معالجة :count عنصر!',
    'find_success' => 'تم البحث عن الترجمات، تم العثور على :count عنصر!',
    'publish_success' => 'تم نشر الترجمات للمجموعة ":group" بنجاح!',
    'publish_all_success' => 'تم نشر الترجمات لجميع المجموعات بنجاح!',
    'reload_page' => 'إعادة تحميل الصفحة',
    'published' => 'تم النشر!',
];

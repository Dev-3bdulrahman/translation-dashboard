<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Translation Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- X-editable -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap5-editable@0.0.1/css/bootstrap-editable.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap5-editable@0.0.1/js/bootstrap-editable.min.js"></script>
    <!-- jQuery Cookie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <!-- Animation library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script>//https://github.com/rails/jquery-ujs/blob/master/src/rails.js
        (function(e,t){if(e.rails!==t){e.error("jquery-ujs has already been loaded!")}var n;var r=e(document);e.rails=n={linkClickSelector:"a[data-confirm], a[data-method], a[data-remote], a[data-disable-with]",buttonClickSelector:"button[data-remote], button[data-confirm]",inputChangeSelector:"select[data-remote], input[data-remote], textarea[data-remote]",formSubmitSelector:"form",formInputClickSelector:"form input[type=submit], form input[type=image], form button[type=submit], form button:not([type])",disableSelector:"input[data-disable-with], button[data-disable-with], textarea[data-disable-with]",enableSelector:"input[data-disable-with]:disabled, button[data-disable-with]:disabled, textarea[data-disable-with]:disabled",requiredInputSelector:"input[name][required]:not([disabled]),textarea[name][required]:not([disabled])",fileInputSelector:"input[type=file]",linkDisableSelector:"a[data-disable-with]",buttonDisableSelector:"button[data-remote][data-disable-with]",CSRFProtection:function(t){var n=e('meta[name="csrf-token"]').attr("content");if(n)t.setRequestHeader("X-CSRF-Token",n)},refreshCSRFTokens:function(){var t=e("meta[name=csrf-token]").attr("content");var n=e("meta[name=csrf-param]").attr("content");e('form input[name="'+n+'"]').val(t)},fire:function(t,n,r){var i=e.Event(n);t.trigger(i,r);return i.result!==false},confirm:function(e){return confirm(e)},ajax:function(t){return e.ajax(t)},href:function(e){return e.attr("href")},handleRemote:function(r){var i,s,o,u,a,f,l,c;if(n.fire(r,"ajax:before")){u=r.data("cross-domain");a=u===t?null:u;f=r.data("with-credentials")||null;l=r.data("type")||e.ajaxSettings&&e.ajaxSettings.dataType;if(r.is("form")){i=r.attr("method");s=r.attr("action");o=r.serializeArray();var h=r.data("ujs:submit-button");if(h){o.push(h);r.data("ujs:submit-button",null)}}else if(r.is(n.inputChangeSelector)){i=r.data("method");s=r.data("url");o=r.serialize();if(r.data("params"))o=o+"&"+r.data("params")}else if(r.is(n.buttonClickSelector)){i=r.data("method")||"get";s=r.data("url");o=r.serialize();if(r.data("params"))o=o+"&"+r.data("params")}else{i=r.data("method");s=n.href(r);o=r.data("params")||null}c={type:i||"GET",data:o,dataType:l,beforeSend:function(e,i){if(i.dataType===t){e.setRequestHeader("accept","*/*;q=0.5, "+i.accepts.script)}if(n.fire(r,"ajax:beforeSend",[e,i])){r.trigger("ajax:send",e)}else{return false}},success:function(e,t,n){r.trigger("ajax:success",[e,t,n])},complete:function(e,t){r.trigger("ajax:complete",[e,t])},error:function(e,t,n){r.trigger("ajax:error",[e,t,n])},crossDomain:a};if(f){c.xhrFields={withCredentials:f}}if(s){c.url=s}return n.ajax(c)}else{return false}},handleMethod:function(r){var i=n.href(r),s=r.data("method"),o=r.attr("target"),u=e("meta[name=csrf-token]").attr("content"),a=e("meta[name=csrf-param]").attr("content"),f=e('<form method="post" action="'+i+'"></form>'),l='<input name="_method" value="'+s+'" type="hidden" />';if(a!==t&&u!==t){l+='<input name="'+a+'" value="'+u+'" type="hidden" />'}if(o){f.attr("target",o)}f.hide().append(l).appendTo("body");f.submit()},formElements:function(t,n){return t.is("form")?e(t[0].elements).filter(n):t.find(n)},disableFormElements:function(t){n.formElements(t,n.disableSelector).each(function(){n.disableFormElement(e(this))})},disableFormElement:function(e){var t=e.is("button")?"html":"val";e.data("ujs:enable-with",e[t]());e[t](e.data("disable-with"));e.prop("disabled",true)},enableFormElements:function(t){n.formElements(t,n.enableSelector).each(function(){n.enableFormElement(e(this))})},enableFormElement:function(e){var t=e.is("button")?"html":"val";if(e.data("ujs:enable-with"))e[t](e.data("ujs:enable-with"));e.prop("disabled",false)},allowAction:function(e){var t=e.data("confirm"),r=false,i;if(!t){return true}if(n.fire(e,"confirm")){r=n.confirm(t);i=n.fire(e,"confirm:complete",[r])}return r&&i},blankInputs:function(t,n,r){var i=e(),s,o,u=n||"input,textarea",a=t.find(u);a.each(function(){s=e(this);o=s.is("input[type=checkbox],input[type=radio]")?s.is(":checked"):s.val();if(!o===!r){if(s.is("input[type=radio]")&&a.filter('input[type=radio]:checked[name="'+s.attr("name")+'"]').length){return true}i=i.add(s)}});return i.length?i:false},nonBlankInputs:function(e,t){return n.blankInputs(e,t,true)},stopEverything:function(t){e(t.target).trigger("ujs:everythingStopped");t.stopImmediatePropagation();return false},disableElement:function(e){e.data("ujs:enable-with",e.html());e.html(e.data("disable-with"));e.bind("click.railsDisable",function(e){return n.stopEverything(e)})},enableElement:function(e){if(e.data("ujs:enable-with")!==t){e.html(e.data("ujs:enable-with"));e.removeData("ujs:enable-with")}e.unbind("click.railsDisable")}};if(n.fire(r,"rails:attachBindings")){e.ajaxPrefilter(function(e,t,r){if(!e.crossDomain){n.CSRFProtection(r)}});r.delegate(n.linkDisableSelector,"ajax:complete",function(){n.enableElement(e(this))});r.delegate(n.buttonDisableSelector,"ajax:complete",function(){n.enableFormElement(e(this))});r.delegate(n.linkClickSelector,"click.rails",function(r){var i=e(this),s=i.data("method"),o=i.data("params"),u=r.metaKey||r.ctrlKey;if(!n.allowAction(i))return n.stopEverything(r);if(!u&&i.is(n.linkDisableSelector))n.disableElement(i);if(i.data("remote")!==t){if(u&&(!s||s==="GET")&&!o){return true}var a=n.handleRemote(i);if(a===false){n.enableElement(i)}else{a.error(function(){n.enableElement(i)})}return false}else if(i.data("method")){n.handleMethod(i);return false}});r.delegate(n.buttonClickSelector,"click.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);if(r.is(n.buttonDisableSelector))n.disableFormElement(r);var i=n.handleRemote(r);if(i===false){n.enableFormElement(r)}else{i.error(function(){n.enableFormElement(r)})}return false});r.delegate(n.inputChangeSelector,"change.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);n.handleRemote(r);return false});r.delegate(n.formSubmitSelector,"submit.rails",function(r){var i=e(this),s=i.data("remote")!==t,o,u;if(!n.allowAction(i))return n.stopEverything(r);if(i.attr("novalidate")==t){o=n.blankInputs(i,n.requiredInputSelector);if(o&&n.fire(i,"ajax:aborted:required",[o])){return n.stopEverything(r)}}if(s){u=n.nonBlankInputs(i,n.fileInputSelector);if(u){setTimeout(function(){n.disableFormElements(i)},13);var a=n.fire(i,"ajax:aborted:file",[u]);if(!a){setTimeout(function(){n.enableFormElements(i)},13)}return a}n.handleRemote(i);return false}else{setTimeout(function(){n.disableFormElements(i)},13)}});r.delegate(n.formInputClickSelector,"click.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);var i=r.attr("name"),s=i?{name:i,value:r.val()}:null;r.closest("form").data("ujs:submit-button",s)});r.delegate(n.formSubmitSelector,"ajax:send.rails",function(t){if(this==t.target)n.disableFormElements(e(this))});r.delegate(n.formSubmitSelector,"ajax:complete.rails",function(t){if(this==t.target)n.enableFormElements(e(this))});e(function(){n.refreshCSRFTokens()})}})(jQuery)
    </script>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --success-color: #2ecc71;
            --danger-color: #e74c3c;
            --warning-color: #f39c12;
            --info-color: #3498db;
        }

        body {
            background-color: #f8f9fa;
            background-image: url('/assets/package-bg.webp');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: rgba(44, 62, 80, 0.9) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn {
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-success {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .btn-info {
            background-color: var(--info-color);
            border-color: var(--info-color);
        }

        .btn-danger {
            background-color: var(--danger-color);
            border-color: var(--danger-color);
        }

        .alert {
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }

        .table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .table thead {
            background-color: rgba(44, 62, 80, 0.9);
            color: white;
            backdrop-filter: blur(5px);
        }

        .table thead th {
            font-weight: 600;
            border-bottom: none;
        }

        .table tbody tr:hover {
            background-color: rgba(52, 152, 219, 0.05);
        }

        a.status-1 {
            font-weight: bold;
            color: var(--primary-color);
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .section-title {
            border-left: 4px solid var(--primary-color);
            padding-left: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .list-locales {
            list-style: none;
            padding-left: 0;
        }

        .list-locales li {
            margin-bottom: 8px;
            background-color: #f8f9fa;
            padding: 8px 12px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .list-locales li button {
            margin-right: 10px;
        }

        fieldset {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: 600;
            font-size: 1.2rem;
            width: auto;
            padding: 0 10px;
            border-bottom: none;
        }

        .card-header {
            background-image: url('/assets/package-bg.webp');
            background-size: cover;
            background-position: center;
            color: white !important;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            border-bottom: none;
        }
    </style>
    <script>
        jQuery(document).ready(function($){

            // Add animation classes to elements when they appear in viewport
            function animateElements() {
                $('.card, .btn, fieldset, .form-control').each(function() {
                    if ($(this).visible(true)) {
                        $(this).addClass('animate__animated animate__fadeIn');
                    }
                });
            }

            // Initialize animations
            animateElements();
            $(window).scroll(function() {
                animateElements();
            });

            // Setup AJAX with CSRF token
            $.ajaxSetup({
                beforeSend: function(xhr, settings) {
                    settings.data += "&_token=<?php echo csrf_token() ?>";
                }
            });

            // Initialize Bootstrap tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });

            // Initialize editable fields with animation
            $('.editable').editable({
                mode: 'inline',
                showbuttons: true,
                inputclass: 'form-control'
            }).on('hidden', function(e, reason){
                var locale = $(this).data('locale');
                if(reason === 'save'){
                    $(this).removeClass('status-0').addClass('status-1');
                    $(this).closest('td').addClass('animate__animated animate__pulse');
                    setTimeout(function() {
                        $(this).closest('td').removeClass('animate__animated animate__pulse');
                    }, 1000);
                }
                if(reason === 'save' || reason === 'nochange') {
                    var $next = $(this).closest('tr').next().find('.editable.locale-'+locale);
                    setTimeout(function() {
                        $next.editable('show');
                    }, 300);
                }
            });

            // Group selection with animation
            $('.group-select').on('change', function(){
                var group = $(this).val();
                if (group) {
                    window.location.href = '<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getView') ?>/'+$(this).val();
                } else {
                    window.location.href = '<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex') ?>';
                }
            });

            // Delete key with confirmation and animation
            $("a.delete-key").on('click', function(e){
                e.preventDefault();
                var row = $(this).closest('tr');
                var url = $(this).attr('href');
                var id = row.attr('id');
                var confirmMsg = $(this).data('confirm');

                if (confirm(confirmMsg)) {
                    row.addClass('animate__animated animate__fadeOutRight');
                    setTimeout(function() {
                        $.post(url, {id: id}, function(){
                            row.remove();
                        });
                    }, 500);
                }
                return false;
            });

            // Form submissions with animations
            $('.form-import').on('ajax:success', function (e, data) {
                $('div.success-import strong.counter').text(data.counter);
                $('div.success-import').removeClass('d-none').addClass('animate__animated animate__fadeInDown');
                setTimeout(function() {
                    window.location.reload();
                }, 1500);
            });

            $('.form-find').on('ajax:success', function (e, data) {
                $('div.success-find strong.counter').text(data.counter);
                $('div.success-find').removeClass('d-none').addClass('animate__animated animate__fadeInDown');
                setTimeout(function() {
                    window.location.reload();
                }, 1500);
            });

            $('.form-publish').on('ajax:success', function (e, data) {
                $('div.success-publish').removeClass('d-none').addClass('animate__animated animate__fadeInDown');
            });

            $('.form-publish-all').on('ajax:success', function (e, data) {
                $('div.success-publish-all').removeClass('d-none').addClass('animate__animated animate__fadeInDown');
            });

            // Auto translate functionality with animation
            $('.enable-auto-translate-group').click(function (event) {
                event.preventDefault();
                $('.autotranslate-block-group').removeClass('hidden').addClass('animate__animated animate__fadeIn');
                $(this).addClass('animate__animated animate__fadeOut');
                setTimeout(function() {
                    $('.enable-auto-translate-group').addClass('d-none');
                }, 500);
            });

            // Base locale selection
            $('#base-locale').change(function (event) {
                $.cookie('base_locale', $(this).val());
            });

            if (typeof $.cookie('base_locale') !== 'undefined') {
                $('#base-locale').val($.cookie('base_locale'));
            }

            // Add visible plugin for animations
            $.fn.visible = function(partial) {
                var $t = $(this),
                    $w = $(window),
                    viewTop = $w.scrollTop(),
                    viewBottom = viewTop + $w.height(),
                    _top = $t.offset().top,
                    _bottom = _top + $t.height(),
                    compareTop = partial === true ? _bottom : _top,
                    compareBottom = partial === true ? _top : _bottom;
                return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
            };

        });
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark mb-4 animate__animated animate__fadeIn">
    <div class="container-fluid">
        <a href="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex') ?>" class="navbar-brand">
            <i class="fas fa-language me-2"></i> Translation Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://3bdulrahman.com" target="_blank">
                        <i class="fas fa-user me-1"></i> Developer
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="card mb-4 animate__animated animate__fadeIn">
        <div class="card-body">
            <div class="d-flex align-items-center mb-3">
                <i class="fas fa-info-circle text-primary me-2 fs-4"></i>
                <h5 class="mb-0">Important Note</h5>
            </div>
            <p class="mb-0">Translations are not visible until they are exported back to the app/lang file, using <code>php artisan translation:export</code> command or publish button.</p>
        </div>
    </div>

    <div class="alert alert-success success-import animate__animated animate__fadeInDown" style="display:none;">
        <div class="d-flex">
            <div class="me-3"><i class="fas fa-check-circle fs-4"></i></div>
            <p class="mb-0">Done importing, processed <strong class="counter">N</strong> items! Reload this page to refresh the groups!</p>
        </div>
    </div>

    <div class="alert alert-success success-find animate__animated animate__fadeInDown" style="display:none;">
        <div class="d-flex">
            <div class="me-3"><i class="fas fa-search fs-4"></i></div>
            <p class="mb-0">Done searching for translations, found <strong class="counter">N</strong> items!</p>
        </div>
    </div>

    <div class="alert alert-success success-publish animate__animated animate__fadeInDown" style="display:none;">
        <div class="d-flex">
            <div class="me-3"><i class="fas fa-upload fs-4"></i></div>
            <p class="mb-0">Done publishing the translations for group '<?php echo $group ?>'!</p>
        </div>
    </div>

    <div class="alert alert-success success-publish-all animate__animated animate__fadeInDown" style="display:none;">
        <div class="d-flex">
            <div class="me-3"><i class="fas fa-upload fs-4"></i></div>
            <p class="mb-0">Done publishing the translations for all groups!</p>
        </div>
    </div>

    <?php if(Session::has('successPublish')) : ?>
        <div class="alert alert-info animate__animated animate__fadeInDown">
            <div class="d-flex">
                <div class="me-3"><i class="fas fa-info-circle fs-4"></i></div>
                <p class="mb-0"><?php echo Session::get('successPublish'); ?></p>
            </div>
        </div>
    <?php endif; ?>
    <p>
        <?php if(!isset($group)) : ?>
        <form class="form-import" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postImport') ?>" data-remote="true" role="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="card mb-4 animate__animated animate__fadeIn">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-file-import me-2"></i> Import Translations
                </div>
                <div class="card-body">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <select name="replace" class="form-select">
                                <option value="0">Append new translations</option>
                                <option value="1">Replace existing translations</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success w-100" data-disable-with="Loading..">
                                <i class="fas fa-file-import me-2"></i> Import Groups
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form class="form-find" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postFind') ?>" data-remote="true" role="form" data-confirm="Are you sure you want to scan you app folder? All found translation keys will be added to the database.">
            <div class="card mb-4 animate__animated animate__fadeIn">
                <div class="card-header bg-info text-white">
                    <i class="fas fa-search me-2"></i> Find Translations
                </div>
                <div class="card-body">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <button type="submit" class="btn btn-info" data-disable-with="Searching..">
                        <i class="fas fa-search me-2"></i> Find Translations in Files
                    </button>
                    <small class="text-muted ms-2">This will scan your app folder for translation keys.</small>
                </div>
            </div>
        </form>
        <?php endif; ?>
        <?php if(isset($group)) : ?>
            <div class="card mb-4 animate__animated animate__fadeIn">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-upload me-2"></i> Publish Translations
                </div>
                <div class="card-body">
                    <form class="form-publish" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postPublish', $group) ?>" data-remote="true" role="form" data-confirm="Are you sure you want to publish the translations group '<?php echo $group ?>? This will overwrite existing language files.">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary" data-disable-with="Publishing..">
                                <i class="fas fa-upload me-2"></i> Publish Translations
                            </button>
                            <a href="<?= action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex') ?>" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-2"></i> Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </p>
    <div class="card mb-4 animate__animated animate__fadeIn">
        <div class="card-header bg-secondary text-white">
            <i class="fas fa-layer-group me-2"></i> Translation Groups
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAddGroup') ?>">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="mb-3">
                    <p>Choose a group to display the group translations. If no groups are visible, make sure you have run the migrations and imported the translations.</p>
                    <select name="group" id="group" class="form-select group-select">
                        <?php foreach($groups as $key => $value): ?>
                            <option value="<?php echo $key ?>"<?php echo $key == $group ? ' selected':'' ?>><?php echo $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter a new group name and start edit translations in that group</label>
                    <input type="text" class="form-control" name="new-group" placeholder="New group name" />
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" name="add-group">
                        <i class="fas fa-plus-circle me-2"></i> Add and Edit Keys
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php if($group): ?>
        <div class="card mb-4 animate__animated animate__fadeIn">
            <div class="card-header bg-success text-white">
                <i class="fas fa-key me-2"></i> Add New Keys
            </div>
            <div class="card-body">
                <form action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAdd', array($group)) ?>" method="POST" role="form">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="mb-3">
                        <label class="form-label">Add new keys to this group</label>
                        <textarea class="form-control" rows="3" name="keys" placeholder="Add 1 key per line, without the group prefix"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-plus-circle me-2"></i> Add Keys
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-grid gap-2 col-md-4 mb-4">
            <button class="btn btn-outline-primary enable-auto-translate-group animate__animated animate__pulse animate__infinite">
                <i class="fas fa-language me-2"></i> Use Auto Translate
            </button>
        </div>
        <div class="card mb-4 animate__animated animate__fadeIn autotranslate-block-group hidden">
            <div class="card-header bg-info text-white">
                <i class="fas fa-language me-2"></i> Auto Translate
            </div>
            <div class="card-body">
                <form class="form-add-locale" method="POST" role="form" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postTranslateMissing') ?>">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="base-locale" class="form-label">Base Locale for Auto Translations</label>
                                <select name="base-locale" id="base-locale" class="form-select">
                                    <?php foreach ($locales as $locale): ?>
                                        <option value="<?= $locale ?>"><?= $locale ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="new-locale" class="form-label">Enter target locale key</label>
                                <input type="text" name="new-locale" class="form-control" id="new-locale" placeholder="Enter target locale key" />
                            </div>
                            <?php if(!config('laravel_google_translate.google_translate_api_key')): ?>
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    If you would like to use Google Translate API, install tanmuhittin/laravel-google-translate and enter your Google Translate API key to config file laravel_google_translate
                                </div>
                            <?php endif; ?>
                            <div class="mb-3">
                                <input type="hidden" name="with-translations" value="1">
                                <input type="hidden" name="file" value="<?= $group ?>">
                                <button type="submit" class="btn btn-info w-100" data-disable-with="Translating..">
                                    <i class="fas fa-language me-2"></i> Auto Translate Missing Translations
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    <div class="card mb-4 animate__animated animate__fadeIn">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <div>
                <i class="fas fa-table me-2"></i> Translations
            </div>
            <div class="badge bg-light text-dark">
                Total: <span class="badge bg-primary"><?= $numTranslations ?></span>
                Changed: <span class="badge bg-warning"><?= $numChanged ?></span>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark" style="position: sticky; top: 0; z-index: 1;">
                    <tr>
                        <th width="15%">Key</th>
                        <?php foreach ($locales as $locale): ?>
                            <th><?= $locale ?></th>
                        <?php endforeach; ?>
                        <?php if ($deleteEnabled): ?>
                            <th width="5%"><i class="fas fa-trash"></i></th>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody class="animate__animated animate__fadeIn">

            <?php foreach ($translations as $key => $translation): ?>
                <tr id="<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>">
                    <td><?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?></td>
                    <?php foreach ($locales as $locale): ?>
                        <?php $t = isset($translation[$locale]) ? $translation[$locale] : null ?>

                        <td>
                            <a href="#edit"
                               class="editable status-<?php echo $t ? $t->status : 0 ?> locale-<?php echo $locale ?>"
                               data-locale="<?php echo $locale ?>" data-name="<?php echo $locale . "|" . htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>"
                               id="username" data-type="textarea" data-pk="<?php echo $t ? $t->id : 0 ?>"
                               data-url="<?php echo $editUrl ?>"
                               data-title="Enter translation"><?php echo $t ? htmlentities($t->value, ENT_QUOTES, 'UTF-8', false) : '' ?></a>
                        </td>
                    <?php endforeach; ?>
                    <?php if ($deleteEnabled): ?>
                        <td class="text-center">
                            <a href="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postDelete', [$group, $key]) ?>"
                               class="delete-key btn btn-sm btn-outline-danger"
                               data-bs-toggle="tooltip"
                               title="Delete this translation"
                               data-confirm="Are you sure you want to delete the translations for '<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false) ?>?'">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php else: ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 animate__animated animate__fadeIn">
                    <div class="card-header bg-primary text-white">
                        <i class="fas fa-globe me-2"></i> Supported Locales
                    </div>
                    <div class="card-body">
                        <p>Current supported locales:</p>
                        <form class="form-remove-locale" method="POST" role="form" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postRemoveLocale') ?>" data-confirm="Are you sure to remove this locale and all of data?">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="list-group mb-4">
                                <?php foreach($locales as $locale): ?>
                                    <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeIn">
                                        <span><i class="fas fa-language me-2"></i> <?php echo $locale ?></span>
                                        <button type="submit" name="remove-locale[<?php echo $locale ?>]" class="btn btn-sm btn-danger" data-disable-with="...">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </form>

                        <form class="form-add-locale" method="POST" role="form" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAddLocale') ?>">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="mb-3">
                                <label class="form-label">Enter new locale key:</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="new-locale" class="form-control" placeholder="e.g. en, fr, es" />
                                    <button type="submit" class="btn btn-primary" data-disable-with="Adding..">
                                        <i class="fas fa-plus-circle me-2"></i> Add Locale
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 animate__animated animate__fadeIn">
                    <div class="card-header bg-success text-white">
                        <i class="fas fa-file-export me-2"></i> Export All Translations
                    </div>
                    <div class="card-body">
                        <p>Export all translations to language files:</p>
                        <form class="form-publish-all" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postPublish', '*') ?>" data-remote="true" role="form" data-confirm="Are you sure you want to publish all translations group? This will overwrite existing language files.">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <button type="submit" class="btn btn-success" data-disable-with="Publishing..">
                                <i class="fas fa-file-export me-2"></i> Publish All Translations
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>
</div>

</body>
</html>

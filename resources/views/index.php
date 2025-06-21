
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo translation_dashboard_trans('title'); ?></title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+CjxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZGllbnQiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPgo8c3RvcCBvZmZzZXQ9IjAlIiBzdHlsZT0ic3RvcC1jb2xvcjojNjY3ZWVhO3N0b3Atb3BhY2l0eToxIiAvPgo8c3RvcCBvZmZzZXQ9IjUwJSIgc3R5bGU9InN0b3AtY29sb3I6Izc2NGJhMjtzdG9wLW9wYWNpdHk6MSIgLz4KPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdHlsZT0ic3RvcC1jb2xvcjojZjA5M2ZiO3N0b3Atb3BhY2l0eToxIiAvPgo8L2xpbmVhckdyYWRpZW50Pgo8L2RlZnM+CjxyZWN0IHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgcng9IjgiIGZpbGw9InVybCgjZ3JhZGllbnQpIi8+Cjx0ZXh0IHg9IjE2IiB5PSIyMiIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjE4IiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkE8L3RleHQ+CjxjaXJjbGUgY3g9IjI0IiBjeT0iOCIgcj0iNCIgZmlsbD0iI2ZmZiIgb3BhY2l0eT0iMC44Ii8+Cjx0ZXh0IHg9IjI0IiB5PSIxMSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjgiIGZvbnQtd2VpZ2h0PSJib2xkIiBmaWxsPSIjNjY3ZWVhIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj7YuTwvdGV4dD4KPC9zdmc+">
    <link rel="shortcut icon" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAzMiAzMiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGRlZnM+CjxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZGllbnQiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPgo8c3RvcCBvZmZzZXQ9IjAlIiBzdHlsZT0ic3RvcC1jb2xvcjojNjY3ZWVhO3N0b3Atb3BhY2l0eToxIiAvPgo8c3RvcCBvZmZzZXQ9IjUwJSIgc3R5bGU9InN0b3AtY29sb3I6Izc2NGJhMjtzdG9wLW9wYWNpdHk6MSIgLz4KPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdHlsZT0ic3RvcC1jb2xvcjojZjA5M2ZiO3N0b3Atb3BhY2l0eToxIiAvPgo8L2xpbmVhckdyYWRpZW50Pgo8L2RlZnM+CjxyZWN0IHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgcng9IjgiIGZpbGw9InVybCgjZ3JhZGllbnQpIi8+Cjx0ZXh0IHg9IjE2IiB5PSIyMiIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjE4IiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0id2hpdGUiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkE8L3RleHQ+CjxjaXJjbGUgY3g9IjI0IiBjeT0iOCIgcj0iNCIgZmlsbD0iI2ZmZiIgb3BhY2l0eT0iMC44Ii8+Cjx0ZXh0IHg9IjI0IiB5PSIxMSIgZm9udC1mYW1pbHk9IkFyaWFsLCBzYW5zLXNlcmlmIiBmb250LXNpemU9IjgiIGZvbnQtd2VpZ2h0PSJib2xkIiBmaWxsPSIjNjY3ZWVhIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIj7YuTwvdGV4dD4KPC9zdmc+">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo translation_dashboard_asset('css/bootstrap.min.css'); ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo translation_dashboard_asset('css/all.min.css'); ?>">
    <!-- Glyphicons CSS -->
    <link rel="stylesheet" href="<?php echo translation_dashboard_asset('css/glyphicons.css'); ?>">
    <!-- X-editable CSS -->
    <link rel="stylesheet" href="<?php echo translation_dashboard_asset('css/bootstrap-editable.css'); ?>">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="<?php echo translation_dashboard_asset('css/sweetalert2.min.css'); ?>">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo translation_dashboard_asset('css/animate.min.css'); ?>">
    <!-- jQuery -->
    <script src="<?php echo translation_dashboard_asset('js/jquery-1.11.0.min.js'); ?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo translation_dashboard_asset('js/bootstrap.min.js'); ?>"></script>
    <!-- X-editable JS -->
    <script src="<?php echo translation_dashboard_asset('js/bootstrap-editable.min.js'); ?>"></script>
    <!-- jQuery Cookie -->
    <script src="<?php echo translation_dashboard_asset('js/jquery.cookie.js'); ?>"></script>
    <!-- SweetAlert2 JS -->
    <script src="<?php echo translation_dashboard_asset('js/sweetalert2.all.min.js'); ?>"></script>
    <script>//https://github.com/rails/jquery-ujs/blob/master/src/rails.js
        (function(e,t){if(e.rails!==t){e.error("jquery-ujs has already been loaded!")}var n;var r=e(document);e.rails=n={linkClickSelector:"a[data-confirm], a[data-method], a[data-remote], a[data-disable-with]",buttonClickSelector:"button[data-remote], button[data-confirm]",inputChangeSelector:"select[data-remote], input[data-remote], textarea[data-remote]",formSubmitSelector:"form",formInputClickSelector:"form input[type=submit], form input[type=image], form button[type=submit], form button:not([type])",disableSelector:"input[data-disable-with], button[data-disable-with], textarea[data-disable-with]",enableSelector:"input[data-disable-with]:disabled, button[data-disable-with]:disabled, textarea[data-disable-with]:disabled",requiredInputSelector:"input[name][required]:not([disabled]),textarea[name][required]:not([disabled])",fileInputSelector:"input[type=file]",linkDisableSelector:"a[data-disable-with]",buttonDisableSelector:"button[data-remote][data-disable-with]",CSRFProtection:function(t){var n=e('meta[name="csrf-token"]').attr("content");if(n)t.setRequestHeader("X-CSRF-Token",n)},refreshCSRFTokens:function(){var t=e("meta[name=csrf-token]").attr("content");var n=e("meta[name=csrf-param]").attr("content");e('form input[name="'+n+'"]').val(t)},fire:function(t,n,r){var i=e.Event(n);t.trigger(i,r);return i.result!==false},confirm:function(e){return confirm(e)},ajax:function(t){return e.ajax(t)},href:function(e){return e.attr("href")},handleRemote:function(r){var i,s,o,u,a,f,l,c;if(n.fire(r,"ajax:before")){u=r.data("cross-domain");a=u===t?null:u;f=r.data("with-credentials")||null;l=r.data("type")||e.ajaxSettings&&e.ajaxSettings.dataType;if(r.is("form")){i=r.attr("method");s=r.attr("action");o=r.serializeArray();var h=r.data("ujs:submit-button");if(h){o.push(h);r.data("ujs:submit-button",null)}}else if(r.is(n.inputChangeSelector)){i=r.data("method");s=r.data("url");o=r.serialize();if(r.data("params"))o=o+"&"+r.data("params")}else if(r.is(n.buttonClickSelector)){i=r.data("method")||"get";s=r.data("url");o=r.serialize();if(r.data("params"))o=o+"&"+r.data("params")}else{i=r.data("method");s=n.href(r);o=r.data("params")||null}c={type:i||"GET",data:o,dataType:l,beforeSend:function(e,i){if(i.dataType===t){e.setRequestHeader("accept","*/*;q=0.5, "+i.accepts.script)}if(n.fire(r,"ajax:beforeSend",[e,i])){r.trigger("ajax:send",e)}else{return false}},success:function(e,t,n){r.trigger("ajax:success",[e,t,n])},complete:function(e,t){r.trigger("ajax:complete",[e,t])},error:function(e,t,n){r.trigger("ajax:error",[e,t,n])},crossDomain:a};if(f){c.xhrFields={withCredentials:f}}if(s){c.url=s}return n.ajax(c)}else{return false}},handleMethod:function(r){var i=n.href(r),s=r.data("method"),o=r.attr("target"),u=e("meta[name=csrf-token]").attr("content"),a=e("meta[name=csrf-param]").attr("content"),f=e('<form method="post" action="'+i+'"></form>'),l='<input name="_method" value="'+s+'" type="hidden" />';if(a!==t&&u!==t){l+='<input name="'+a+'" value="'+u+'" type="hidden" />'}if(o){f.attr("target",o)}f.hide().append(l).appendTo("body");f.submit()},formElements:function(t,n){return t.is("form")?e(t[0].elements).filter(n):t.find(n)},disableFormElements:function(t){n.formElements(t,n.disableSelector).each(function(){n.disableFormElement(e(this))})},disableFormElement:function(e){var t=e.is("button")?"html":"val";e.data("ujs:enable-with",e[t]());e[t](e.data("disable-with"));e.prop("disabled",true)},enableFormElements:function(t){n.formElements(t,n.enableSelector).each(function(){n.enableFormElement(e(this))})},enableFormElement:function(e){var t=e.is("button")?"html":"val";if(e.data("ujs:enable-with"))e[t](e.data("ujs:enable-with"));e.prop("disabled",false)},allowAction:function(e){var t=e.data("confirm"),r=false,i;if(!t){return true}if(n.fire(e,"confirm")){r=n.confirm(t);i=n.fire(e,"confirm:complete",[r])}return r&&i},blankInputs:function(t,n,r){var i=e(),s,o,u=n||"input,textarea",a=t.find(u);a.each(function(){s=e(this);o=s.is("input[type=checkbox],input[type=radio]")?s.is(":checked"):s.val();if(!o===!r){if(s.is("input[type=radio]")&&a.filter('input[type=radio]:checked[name="'+s.attr("name")+'"]').length){return true}i=i.add(s)}});return i.length?i:false},nonBlankInputs:function(e,t){return n.blankInputs(e,t,true)},stopEverything:function(t){e(t.target).trigger("ujs:everythingStopped");t.stopImmediatePropagation();return false},disableElement:function(e){e.data("ujs:enable-with",e.html());e.html(e.data("disable-with"));e.bind("click.railsDisable",function(e){return n.stopEverything(e)})},enableElement:function(e){if(e.data("ujs:enable-with")!==t){e.html(e.data("ujs:enable-with"));e.removeData("ujs:enable-with")}e.unbind("click.railsDisable")}};if(n.fire(r,"rails:attachBindings")){e.ajaxPrefilter(function(e,t,r){if(!e.crossDomain){n.CSRFProtection(r)}});r.delegate(n.linkDisableSelector,"ajax:complete",function(){n.enableElement(e(this))});r.delegate(n.buttonDisableSelector,"ajax:complete",function(){n.enableFormElement(e(this))});r.delegate(n.linkClickSelector,"click.rails",function(r){var i=e(this),s=i.data("method"),o=i.data("params"),u=r.metaKey||r.ctrlKey;if(!n.allowAction(i))return n.stopEverything(r);if(!u&&i.is(n.linkDisableSelector))n.disableElement(i);if(i.data("remote")!==t){if(u&&(!s||s==="GET")&&!o){return true}var a=n.handleRemote(i);if(a===false){n.enableElement(i)}else{a.error(function(){n.enableElement(i)})}return false}else if(i.data("method")){n.handleMethod(i);return false}});r.delegate(n.buttonClickSelector,"click.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);if(r.is(n.buttonDisableSelector))n.disableFormElement(r);var i=n.handleRemote(r);if(i===false){n.enableFormElement(r)}else{i.error(function(){n.enableFormElement(r)})}return false});r.delegate(n.inputChangeSelector,"change.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);n.handleRemote(r);return false});r.delegate(n.formSubmitSelector,"submit.rails",function(r){var i=e(this),s=i.data("remote")!==t,o,u;if(!n.allowAction(i))return n.stopEverything(r);if(i.attr("novalidate")==t){o=n.blankInputs(i,n.requiredInputSelector);if(o&&n.fire(i,"ajax:aborted:required",[o])){return n.stopEverything(r)}}if(s){u=n.nonBlankInputs(i,n.fileInputSelector);if(u){setTimeout(function(){n.disableFormElements(i)},13);var a=n.fire(i,"ajax:aborted:file",[u]);if(!a){setTimeout(function(){n.enableFormElements(i)},13)}return a}n.handleRemote(i);return false}else{setTimeout(function(){n.disableFormElements(i)},13)}});r.delegate(n.formInputClickSelector,"click.rails",function(t){var r=e(this);if(!n.allowAction(r))return n.stopEverything(t);var i=r.attr("name"),s=i?{name:i,value:r.val()}:null;r.closest("form").data("ujs:submit-button",s)});r.delegate(n.formSubmitSelector,"ajax:send.rails",function(t){if(this==t.target)n.disableFormElements(e(this))});r.delegate(n.formSubmitSelector,"ajax:complete.rails",function(t){if(this==t.target)n.enableFormElements(e(this))});e(function(){n.refreshCSRFTokens()})}})(jQuery)
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warning-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --danger-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --info-gradient: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);

            --primary-color: #667eea;
            --secondary-color: #2d3748;
            --success-color: #48bb78;
            --danger-color: #f56565;
            --warning-color: #ed8936;
            --info-color: #4299e1;

            --bg-primary: #f7fafc;
            --bg-secondary: #edf2f7;
            --text-primary: #2d3748;
            --text-secondary: #4a5568;
            --border-color: #e2e8f0;

            --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            font-size: 17px;
            line-height: 1.6;
            color: var(--text-primary);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            direction: <?php echo translation_dashboard_is_rtl() ? 'rtl' : 'ltr'; ?>;
        }

        /* RTL Support */
        <?php if (translation_dashboard_is_rtl()) { ?>
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Arial, sans-serif;
        }

        .navbar-brand::before {
            margin-right: 0;
            margin-left: 0.3rem;
        }

        .btn {
            gap: 0.5rem;
        }

        .form-section h3 i {
            margin-left: 0.5rem;
            margin-right: 0;
        }

        .d-flex.gap-3 {
            flex-direction: row-reverse;
        }
        <?php } ?>

        .container-fluid {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            margin: 20px;
            min-height: calc(100vh - 40px);
            box-shadow: var(--shadow-xl);
            overflow: hidden;
        }

        .navbar {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 50%, #4a5568 100%) !important;
            backdrop-filter: blur(25px);
            border-bottom: 2px solid transparent;
            border-image: linear-gradient(90deg, #667eea, #764ba2, #f093fb) 1;
            padding: 0.6rem 2rem;
            border-radius: 20px 20px 0 0;
            margin-bottom: 0;
            min-height: 55px;
            height: 55px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .navbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: navbarShine 4s ease-in-out infinite;
        }

        .navbar::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            animation: gradientMove 3s ease-in-out infinite;
        }

        @keyframes navbarShine {
            0%, 100% { left: -100%; }
            50% { left: 100%; }
        }

        @keyframes gradientMove {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .navbar-header {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 0 1rem;
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.2rem;
            margin: 0;
            padding: 0;
            line-height: 1.2;
            height: auto;
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            text-decoration: none;
            float: none !important;
            <?php if (translation_dashboard_is_rtl()) { ?>
            flex-direction: row-reverse;
            <?php } else { ?>
            flex-direction: row;
            <?php } ?>
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 0 10px rgba(102, 126, 234, 0.5));
            text-decoration: none;
            color: white !important;
        }

        .brand-logo {
            width: 32px;
            height: 32px;
            <?php if (translation_dashboard_is_rtl()) { ?>
            margin-left: 0.5rem;
            margin-right: 0;
            <?php } else { ?>
            margin-right: 0.5rem;
            margin-left: 0;
            <?php } ?>
            animation: logoFloat 3s ease-in-out infinite;
        }

        @keyframes logoFloat {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-3px); }
        }

        .brand-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .brand-credit {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
            white-space: nowrap;
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .brand-credit a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .brand-credit a:hover {
            color: #667eea;
            text-decoration: none;
            text-shadow: 0 0 5px rgba(102, 126, 234, 0.5);
        }

        .navbar-toggle {
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 6px 8px;
            border: 2px solid transparent;
            border-radius: 8px;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.2) 0%, rgba(118, 75, 162, 0.2) 100%);
            transition: all 0.3s ease;
        }

        .navbar-toggle:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.4) 0%, rgba(118, 75, 162, 0.4) 100%);
            border-color: rgba(102, 126, 234, 0.5);
            transform: scale(1.1);
        }

        .navbar-toggle .icon-bar {
            background-color: white;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .navbar-toggle:hover .icon-bar {
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .container-fluid > div:not(.navbar) {
            padding: 2rem;
            background: var(--bg-primary);
        }

        .btn {
            border-radius: 12px;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            text-decoration: none;
        }

        .btn-primary {
            background: var(--primary-gradient);
            color: white;
        }

        .btn-success {
            background: var(--success-gradient);
            color: white;
        }

        .btn-info {
            background: var(--info-gradient);
            color: white;
        }

        .btn-danger {
            background: var(--danger-gradient);
            color: white;
        }

        .btn-default {
            background: transparent;
            border: 2px solid var(--text-secondary);
            color: var(--text-secondary);
        }

        .btn-default:hover {
            background: var(--text-secondary);
            color: white;
        }

        .form-control {
            border-radius: 12px;
            border: 2px solid var(--border-color);
            padding: 0.75rem 1rem;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
            display: block;
        }

        .table {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            font-size: 1.1rem;
            background: white;
            margin-top: 2rem;
        }

        .table thead {
            background: var(--primary-gradient);
            color: white;
        }

        .table thead th {
            font-weight: 600;
            border: none;
            padding: 1rem;
            text-transform: uppercase;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid var(--border-color);
        }

        .table tbody tr {
            transition: all 0.2s ease;
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        a.status-1 {
            font-weight: 600;
            color: var(--primary-color);
            text-decoration: none;
            padding: 0.25rem 0.5rem;
            border-radius: 6px;
            background: rgba(102, 126, 234, 0.1);
            transition: all 0.2s ease;
        }

        a.status-1:hover {
            background: var(--primary-gradient);
            color: white;
            text-decoration: none;
        }

        .alert {
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
            border: none;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
        }

        .alert::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: currentColor;
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(72, 187, 120, 0.1) 0%, rgba(56, 178, 172, 0.1) 100%);
            color: var(--success-color);
            border-left: 4px solid var(--success-color);
        }

        .alert-info {
            background: linear-gradient(135deg, rgba(66, 153, 225, 0.1) 0%, rgba(102, 126, 234, 0.1) 100%);
            color: var(--info-color);
            border-left: 4px solid var(--info-color);
        }

        /* Warning message styling */
        p:first-of-type {
            background: linear-gradient(135deg, rgba(237, 137, 54, 0.1) 0%, rgba(245, 101, 101, 0.1) 100%);
            color: var(--warning-color);
            padding: 1rem 1.5rem;
            border-radius: 12px;
            border-left: 4px solid var(--warning-color);
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        /* Helper text styling */
        .text-muted {
            font-size: 1rem;
            color: var(--text-secondary) !important;
            line-height: 1.5;
        }

        /* Form styling improvements */
        .form-inline {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -0.5rem;
        }

        .col-sm-2, .col-sm-3 {
            padding: 0.5rem;
            flex: 1;
            min-width: 200px;
        }

        /* Editable fields */
        .editable-container.editable-inline {
            font-size: 1.1rem;
        }

        .editable-input textarea.form-control {
            min-height: 80px;
            font-size: 1.1rem;
            border-radius: 8px;
        }

        /* Loading states */
        .loading {
            position: relative;
            pointer-events: none;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            body {
                font-size: 16px;
            }

            .container-fluid {
                margin: 10px;
                border-radius: 16px;
                min-height: calc(100vh - 20px);
            }

            .navbar {
                padding: 0.4rem 1rem;
                border-radius: 16px 16px 0 0;
                min-height: 50px;
                height: 50px;
            }

            .navbar-brand {
                font-size: 1.1rem;
            }

            .brand-logo {
                width: 28px;
                height: 28px;
                <?php if (translation_dashboard_is_rtl()) { ?>
                margin-left: 0.3rem;
                margin-right: 0;
                <?php } else { ?>
                margin-right: 0.3rem;
                margin-left: 0;
                <?php } ?>
            }

            .brand-text {
                font-size: 1.1rem;
            }

            .brand-credit {
                display: none;
            }

            .navbar-toggle {
                margin-top: 8px;
                margin-bottom: 8px;
                padding: 4px 6px;
            }

            .container-fluid > div:not(.navbar) {
                padding: 1rem;
            }

            .btn {
                font-size: 1rem;
                padding: 0.7rem 1.3rem;
            }

            .btn:hover {
                transform: none;
            }

            .form-control {
                font-size: 1rem;
            }

            .form-group label {
                font-size: 1rem;
            }

            .table {
                font-size: 1rem;
            }

            .table tbody tr:hover {
                transform: none;
            }

            .form-inline {
                flex-direction: column;
                align-items: stretch;
            }

            .col-sm-2, .col-sm-3 {
                min-width: 100%;
            }

            .form-section h3 {
                font-size: 1.3rem;
            }

            .text-muted {
                font-size: 1rem;
            }

            .alert {
                font-size: 1rem;
            }

            .status-indicator {
                font-size: 0.95rem;
            }

            .editable-container.editable-inline {
                font-size: 1rem;
            }

            .editable-input textarea.form-control {
                font-size: 1rem;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-secondary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }

        /* Advanced table styling */
        .table-container {
            position: relative;
            overflow: hidden;
            border-radius: 16px;
            box-shadow: var(--shadow-lg);
            margin-top: 2rem;
        }

        .table-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
            z-index: 1;
        }

        .table {
            margin: 0;
            border-radius: 0;
            box-shadow: none;
        }

        .table tbody tr {
            position: relative;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .table tbody tr::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 0;
            background: var(--primary-gradient);
            transition: width 0.3s ease;
            z-index: 1;
        }

        .table tbody tr:hover::before {
            width: 4px;
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.08) 0%, rgba(118, 75, 162, 0.08) 100%);
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
        }

        /* Enhanced form styling */
        .form-section {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            position: relative;
            overflow: hidden;
        }

        .form-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--success-gradient);
        }

        .form-section h3 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 1.5rem;
            font-size: 1.4rem;
        }

        /* Enhanced button effects */
        .btn-block {
            width: 100%;
        }

        .btn:active {
            transform: translateY(0);
            box-shadow: var(--shadow-sm);
        }

        /* Status indicators */
        .status-indicator {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 1rem;
            font-weight: 500;
        }

        .status-saved {
            background: linear-gradient(135deg, rgba(72, 187, 120, 0.1) 0%, rgba(56, 178, 172, 0.1) 100%);
            color: var(--success-color);
            border: 1px solid rgba(72, 187, 120, 0.2);
        }

        .status-changed {
            background: linear-gradient(135deg, rgba(237, 137, 54, 0.1) 0%, rgba(245, 101, 101, 0.1) 100%);
            color: var(--warning-color);
            border: 1px solid rgba(237, 137, 54, 0.2);
        }

        /* Floating action button */
        .fab {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            border: none;
            box-shadow: var(--shadow-lg);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .fab:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-xl);
        }

        /* Animated background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Enhanced card hover effects */
        .form-section:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        /* Improved input focus effects */
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
            transform: scale(1.02);
        }

        /* Enhanced navbar */
        .navbar {
            position: relative;
            overflow: hidden;
        }

        .navbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: navbarShine 3s ease-in-out infinite;
        }

        @keyframes navbarShine {
            0% {
                left: -100%;
            }
            50% {
                left: 100%;
            }
            100% {
                left: 100%;
            }
        }

        /* Pulse animation for important elements */
        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(102, 126, 234, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
            }
        }
    </style>
    <script>
        jQuery(document).ready(function($){

            $.ajaxSetup({
                beforeSend: function(xhr, settings) {
                    console.log('beforesend');
                    settings.data += "&_token=<?php echo csrf_token(); ?>";
                }
            });

            $('.editable').editable().on('hidden', function(e, reason){
                var locale = $(this).data('locale');
                if(reason === 'save'){
                    $(this).removeClass('status-0').addClass('status-1');
                }
                if(reason === 'save' || reason === 'nochange') {
                    var $next = $(this).closest('tr').next().find('.editable.locale-'+locale);
                    setTimeout(function() {
                        $next.editable('show');
                    }, 300);
                }
            });

            $('.group-select').on('change', function(){
                var group = $(this).val();
                if (group) {
                    window.location.href = '<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getView'); ?>/'+$(this).val();
                } else {
                    window.location.href = '<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex'); ?>';
                }
            });

            $("a.delete-key").click(function(e){
                e.preventDefault();
                var row = $(this).closest('tr');
                var url = $(this).attr('href');
                var id = row.attr('id');
                var confirmMessage = $(this).data('confirm');

                Swal.fire({
                    title: '<?php echo translation_dashboard_trans('confirm_title'); ?>',
                    text: confirmMessage,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '<?php echo translation_dashboard_trans('yes_delete'); ?>',
                    cancelButtonText: '<?php echo translation_dashboard_trans('cancel'); ?>'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.post(url, {id: id}, function(){
                            row.addClass('animate__animated animate__fadeOutRight');
                            setTimeout(function() {
                                row.remove();
                            }, 500);

                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: '<?php echo translation_dashboard_trans('deleted'); ?>',
                                text: '<?php echo translation_dashboard_trans('delete_success'); ?>',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        });
                    }
                });

                return false;
            });

            $('.form-import').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: '<?php echo translation_dashboard_trans('success_title'); ?>',
                    text: '<?php echo str_replace(':count', '" + data.counter + "', translation_dashboard_trans('import_success')); ?>',
                    icon: 'success',
                    confirmButtonColor: '#28a745',
                    confirmButtonText: '<?php echo translation_dashboard_trans('reload_page'); ?>'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            });

            $('.form-find').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: '<?php echo translation_dashboard_trans('success_title'); ?>',
                    text: '<?php echo str_replace(':count', '" + data.counter + "', translation_dashboard_trans('find_success')); ?>',
                    icon: 'success',
                    confirmButtonColor: '#17a2b8',
                    confirmButtonText: '<?php echo translation_dashboard_trans('reload_page'); ?>'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            });

            $('.form-publish').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: '<?php echo translation_dashboard_trans('published'); ?>',
                    text: '<?php echo str_replace(':group', isset($group) ? $group : '', translation_dashboard_trans('publish_success')); ?>',
                    icon: 'success',
                    confirmButtonColor: '#17a2b8',
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            });

            $('.form-publish-all').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: '<?php echo translation_dashboard_trans('published'); ?>',
                    text: '<?php echo translation_dashboard_trans('publish_all_success'); ?>',
                    icon: 'success',
                    confirmButtonColor: '#007bff',
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            });
            $('.enable-auto-translate-group').click(function (event) {
                event.preventDefault();
                $('.autotranslate-block-group').removeClass('hidden');
                $('.enable-auto-translate-group').addClass('hidden');
            })
            $('#base-locale').change(function (event) {
                console.log($(this).val());
                $.cookie('base_locale', $(this).val());
            })
            if (typeof $.cookie('base_locale') !== 'undefined') {
                $('#base-locale').val($.cookie('base_locale'));
            }

        })
    </script>
</head>
<body>
    <div class="animated-bg"></div>
    <div class="container-fluid">
<header class="navbar navbar-static-top navbar-inverse" id="top" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex'); ?>" class="navbar-brand">
                <svg class="brand-logo" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="logoGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
                            <stop offset="50%" style="stop-color:#764ba2;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#f093fb;stop-opacity:1" />
                        </linearGradient>
                        <linearGradient id="textGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#e2e8f0;stop-opacity:1" />
                        </linearGradient>
                    </defs>
                    <!-- Main circle background -->
                    <circle cx="24" cy="24" r="22" fill="url(#logoGradient)" stroke="rgba(255,255,255,0.2)" stroke-width="2"/>
                    <!-- Globe lines -->
                    <path d="M6 24 C6 24, 12 12, 24 12 C36 12, 42 24, 42 24" stroke="url(#textGradient)" stroke-width="2" fill="none" opacity="0.8"/>
                    <path d="M6 24 C6 24, 12 36, 24 36 C36 36, 42 24, 42 24" stroke="url(#textGradient)" stroke-width="2" fill="none" opacity="0.8"/>
                    <line x1="24" y1="2" x2="24" y2="46" stroke="url(#textGradient)" stroke-width="2" opacity="0.6"/>
                    <line x1="2" y1="24" x2="46" y2="24" stroke="url(#textGradient)" stroke-width="2" opacity="0.6"/>
                    <!-- Center letter A -->
                    <text x="24" y="32" font-family="Inter, Arial, sans-serif" font-size="20" font-weight="bold" fill="url(#textGradient)" text-anchor="middle">A</text>
                    <!-- Translation symbols -->
                    <circle cx="35" cy="13" r="6" fill="rgba(255,255,255,0.9)" opacity="0.9"/>
                    <text x="35" y="17" font-family="Arial, sans-serif" font-size="8" font-weight="bold" fill="#667eea" text-anchor="middle">ع</text>
                </svg>
                <span class="brand-text"><?php echo translation_dashboard_trans('title'); ?></span>
                <div class="brand-credit">
                    <a href="https://3bdulrahman.com" target="_blank" rel="noopener"><?php echo translation_dashboard_trans('powered_by'); ?> : Abdulrahman</a>
                </div>
            </a>
        </div>
</header>
<div class="container-fluid">
    <p><?php echo translation_dashboard_trans('export_warning'); ?></p>
    <!-- Alerts are now handled by SweetAlert2 -->
    <?php if (isset($_SESSION['successPublish'])) { ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: '<?php echo translation_dashboard_trans('success_title'); ?>',
                    text: '<?php echo $_SESSION['successPublish']; ?>',
                    icon: 'success',
                    confirmButtonColor: '#3085d6'
                });
            });
        </script>
    <?php } ?>
    <?php if (!isset($group)) { ?>
    <div class="form-section">
        <h3><i class="fas fa-file-import me-2"></i> <?php echo translation_dashboard_trans('import_translations'); ?></h3>
        <form class="form-import" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postImport'); ?>" data-remote="true" role="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="replace-select"><?php echo translation_dashboard_trans('import_mode'); ?></label>
                <div class="row">
                    <div class="col-sm-8">
                        <select name="replace" id="replace-select" class="form-control">
                            <option value="0"><?php echo translation_dashboard_trans('append_translations'); ?></option>
                            <option value="1"><?php echo translation_dashboard_trans('replace_translations'); ?></option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success btn-block pulse" data-disable-with="<?php echo translation_dashboard_trans('loading'); ?>">
                            <i class="fas fa-file-import me-2"></i> <?php echo translation_dashboard_trans('import_groups'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="form-section">
        <h3><i class="fas fa-search me-2"></i> <?php echo translation_dashboard_trans('find_translations'); ?></h3>
        <form class="form-find" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postFind'); ?>" data-remote="true" role="form" data-confirm="<?php echo translation_dashboard_trans('find_confirm'); ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <p class="text-muted mb-3"><?php echo translation_dashboard_trans('find_description'); ?></p>
                <button type="submit" class="btn btn-info" data-disable-with="<?php echo translation_dashboard_trans('searching'); ?>">
                    <i class="fas fa-search me-2"></i> <?php echo translation_dashboard_trans('find_in_files'); ?>
                </button>
            </div>
        </form>
    </div>
    <?php } ?>

    <?php if (isset($group)) { ?>
    <div class="form-section">
        <h3><i class="fas fa-upload me-2"></i> <?php echo translation_dashboard_trans('publish_translations'); ?></h3>
        <form class="form-publish" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postPublish', $group); ?>" data-remote="true" role="form" data-confirm="<?php echo translation_dashboard_trans('publish_confirm', ['group' => $group]); ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <p class="text-muted mb-3"><?php echo translation_dashboard_trans('publish_description'); ?></p>
                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-info" data-disable-with="<?php echo translation_dashboard_trans('publishing'); ?>">
                        <i class="fas fa-upload me-2"></i> <?php echo translation_dashboard_trans('publish_translations'); ?>
                    </button>
                    <a href="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex'); ?>" class="btn btn-default">
                        <i class="fas fa-arrow-left me-2"></i> <?php echo translation_dashboard_trans('back'); ?>
                    </a>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
    <div class="form-section">
        <h3><i class="fas fa-layer-group me-2"></i> <?php echo translation_dashboard_trans('translation_groups'); ?></h3>
        <form role="form" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAddGroup'); ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="group-select"><?php echo translation_dashboard_trans('select_group'); ?></label>
                <p class="text-muted mb-3"><?php echo translation_dashboard_trans('select_group_description'); ?></p>
                <select name="group" id="group" class="form-control group-select">
                    <?php foreach ($groups as $key => $value) { ?>
                        <option value="<?php echo $key; ?>"<?php echo $key == $group ? ' selected' : ''; ?>><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="new-group"><?php echo translation_dashboard_trans('create_new_group'); ?></label>
                <p class="text-muted mb-3"><?php echo translation_dashboard_trans('create_group_description'); ?></p>
                <div class="row">
                    <div class="col-sm-8">
                        <input type="text" id="new-group" class="form-control" name="new-group" placeholder="<?php echo translation_dashboard_trans('new_group_placeholder'); ?>" />
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary btn-block" name="add-group">
                            <i class="fas fa-plus me-2"></i> <?php echo translation_dashboard_trans('add_group'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php if ($group) { ?>
    <div class="form-section">
        <h3><i class="fas fa-plus-circle me-2"></i> <?php echo translation_dashboard_trans('add_new_keys'); ?></h3>
        <form action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAdd', [$group]); ?>" method="POST" role="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="keys-textarea"><?php echo translation_dashboard_trans('translation_keys'); ?></label>
                <p class="text-muted mb-3"><?php echo translation_dashboard_trans('keys_description'); ?></p>
                <textarea id="keys-textarea" class="form-control" rows="4" name="keys" placeholder="<?php echo translation_dashboard_trans('keys_placeholder'); ?>"></textarea>
            </div>
            <div class="form-group">
                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i> <?php echo translation_dashboard_trans('add_keys'); ?>
                    </button>
                    <button type="button" class="btn btn-info enable-auto-translate-group">
                        <i class="fas fa-language me-2"></i> <?php echo translation_dashboard_trans('use_auto_translate'); ?>
                    </button>
                </div>
            </div>
        </form>
    </div>
        <form class="form-add-locale autotranslate-block-group hidden" method="POST" role="form" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postTranslateMissing'); ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="base-locale">Base Locale for Auto Translations</label>
                        <select name="base-locale" id="base-locale" class="form-control">
                            <?php foreach ($locales as $locale) { ?>
                                <option value="<?php echo $locale; ?>"><?php echo $locale; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="new-locale">Enter target locale key</label>
                        <input type="text" name="new-locale" class="form-control" id="new-locale" placeholder="Enter target locale key" />
                    </div>
                    <?php if (!config('laravel_google_translate.google_translate_api_key')) { ?>
                        <p>
                            <code>If you would like to use Google Translate API, install tanmuhittin/laravel-google-translate and enter your Google Translate API key to config file laravel_google_translate</code>
                        </p>
                    <?php } ?>
                    <div class="form-group">
                        <input type="hidden" name="with-translations" value="1">
                        <input type="hidden" name="file" value="<?php echo $group; ?>">
                        <button type="submit" class="btn btn-primary btn-block"  data-disable-with="Translating..."><i class="fas fa-language me-2"></i> Auto translate missing translations</button>
                    </div>
                </div>
            </div>
        </form>
    <div class="form-section">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3><i class="fas fa-table me-2"></i> Translation Keys</h3>
            <div class="status-indicator">
                <span class="badge bg-primary">Total: <?php echo $numTranslations; ?></span>
                <span class="badge bg-warning">Changed: <?php echo $numChanged; ?></span>
            </div>
        </div>

        <div class="table-container">
            <table class="table">
                <thead>
                <tr>
                    <th width="15%"><i class="fas fa-key me-2"></i>Key</th>
                    <?php foreach ($locales as $locale) { ?>
                        <th><i class="fas fa-globe me-2"></i><?php echo $locale; ?></th>
                    <?php } ?>
                    <?php if ($deleteEnabled) { ?>
                        <th width="10%"><i class="fas fa-cog me-2"></i>Actions</th>
                    <?php } ?>
                </tr>
                </thead>
            <tbody>

            <?php foreach ($translations as $key => $translation) { ?>
                <tr id="<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false); ?>">
                    <td><?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false); ?></td>
                    <?php foreach ($locales as $locale) { ?>
                        <?php $t = isset($translation[$locale]) ? $translation[$locale] : null; ?>

                        <td>
                            <a href="#edit"
                               class="editable status-<?php echo $t ? $t->status : 0; ?> locale-<?php echo $locale; ?>"
                               data-locale="<?php echo $locale; ?>" data-name="<?php echo $locale.'|'.htmlentities($key, ENT_QUOTES, 'UTF-8', false); ?>"
                               id="username" data-type="textarea" data-pk="<?php echo $t ? $t->id : 0; ?>"
                               data-url="<?php echo $editUrl; ?>"
                               data-title="Enter translation"><?php echo $t ? htmlentities($t->value, ENT_QUOTES, 'UTF-8', false) : ''; ?></a>
                        </td>
                    <?php } ?>
                    <?php if ($deleteEnabled) { ?>
                        <td>
                            <a href="<?php echo url(config('translation-manager.route.prefix', 'translations').'/delete/'.urlencode($group).'/'.urlencode($key)); ?>"
                               class="delete-key"
                               data-confirm="Are you sure you want to delete the translations for '<?php echo htmlentities($key, ENT_QUOTES, 'UTF-8', false); ?>?">
                               <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    <?php } else { ?>
    <div class="form-section">
        <h3><i class="fas fa-globe-americas me-2"></i> Supported Locales</h3>
        <p class="text-muted mb-3">Current supported locales:</p>
            <form  class="form-remove-locale" method="POST" role="form" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postRemoveLocale'); ?>" data-confirm="Are you sure to remove this locale and all of data?">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <ul class="list-locales">
                <?php foreach ($locales as $locale) { ?>
                    <li>
                        <div class="form-group">
                            <button type="submit" name="remove-locale[<?php echo $locale; ?>]" class="btn btn-danger btn-xs" data-disable-with="...">
                                <i class="fas fa-times"></i>
                            </button>
                            <?php echo $locale; ?>

                        </div>
                    </li>
                <?php } ?>
                </ul>
            </form>
            <form class="form-add-locale" method="POST" role="form" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAddLocale'); ?>">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <p>
                        Enter new locale key:
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="text" name="new-locale" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-block"  data-disable-with="Adding.."><i class="fas fa-plus me-2"></i> Add new locale</button>
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
        <fieldset>
            <legend>Export all translations</legend>
            <form class="form-inline form-publish-all" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postPublish', '*'); ?>" data-remote="true" role="form" data-confirm="Are you sure you want to publish all translations group? This will overwrite existing language files.">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit" class="btn btn-primary" data-disable-with="Publishing.." ><i class="fas fa-upload me-2"></i> Publish all</button>
            </form>
        </fieldset>

    <?php } ?>
</div>
</div>

<!-- Floating Action Button -->
<button class="fab" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="<?php echo translation_dashboard_trans('scroll_to_top'); ?>">
    <i class="fas fa-arrow-up"></i>
</button>

</body>
</html>

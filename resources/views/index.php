<?php include_once __DIR__.'/asset_helper.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Translation Dashboard</title>
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
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

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
            background: linear-gradient(135deg, rgba(45, 55, 72, 0.95) 0%, rgba(45, 55, 72, 0.98) 100%) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 0.75rem 2rem;
            border-radius: 20px 20px 0 0;
            margin-bottom: 0;
            min-height: auto;
        }

        .navbar-brand {
            font-weight: 600;
            color: white !important;
            font-size: 1.25rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: none;
            margin: 0;
            padding: 0.25rem 0;
        }

        .container-fluid > div:not(.navbar) {
            padding: 2rem;
            background: var(--bg-primary);
        }

        .btn {
            border-radius: 12px;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
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
            font-size: 1rem;
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
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
            display: block;
        }

        .table {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            font-size: 1rem;
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
            font-size: 0.9rem;
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
            font-size: 1rem;
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
            font-size: 0.95rem;
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
            font-size: 1rem;
        }

        .editable-input textarea.form-control {
            min-height: 80px;
            font-size: 1rem;
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
                font-size: 15px;
            }

            .container-fluid {
                margin: 10px;
                border-radius: 16px;
                min-height: calc(100vh - 20px);
            }

            .navbar {
                padding: 0.5rem 1rem;
                border-radius: 16px 16px 0 0;
            }

            .navbar-brand {
                font-size: 1.1rem;
            }

            .container-fluid > div:not(.navbar) {
                padding: 1rem;
            }

            .btn {
                font-size: 0.95rem;
                padding: 0.65rem 1.25rem;
            }

            .btn:hover {
                transform: none;
            }

            .table {
                font-size: 0.9rem;
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
                font-size: 1.2rem;
            }

            .text-muted {
                font-size: 0.9rem;
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
            font-size: 1.3rem;
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
            font-size: 0.9rem;
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
                    title: 'Are you sure?',
                    text: confirmMessage,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
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
                                title: 'Deleted!',
                                text: 'The translation has been deleted.',
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
                    title: 'Success!',
                    text: 'Done importing, processed ' + data.counter + ' items!',
                    icon: 'success',
                    confirmButtonColor: '#28a745',
                    confirmButtonText: 'Reload Page'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            });

            $('.form-find').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Done searching for translations, found ' + data.counter + ' items!',
                    icon: 'success',
                    confirmButtonColor: '#17a2b8',
                    confirmButtonText: 'Reload Page'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            });

            $('.form-publish').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: 'Published!',
                    text: 'Done publishing the translations for group "<?php echo isset($group) ? $group : ''; ?>"!',
                    icon: 'success',
                    confirmButtonColor: '#17a2b8',
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            });

            $('.form-publish-all').on('ajax:success', function (e, data) {
                Swal.fire({
                    title: 'Published!',
                    text: 'Done publishing the translations for all groups!',
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
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex'); ?>" class="navbar-brand">
                Translation Dashboard
            </a>
        </div>
    </div>
</header>
<div class="container-fluid">
    <p>Warning, translations are not visible until they are exported back to the app/lang file, using <code>php artisan translation:export</code> command or publish button.</p>
    <!-- Alerts are now handled by SweetAlert2 -->
    <?php if (isset($_SESSION['successPublish'])) { ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '<?php echo $_SESSION['successPublish']; ?>',
                    icon: 'success',
                    confirmButtonColor: '#3085d6'
                });
            });
        </script>
    <?php } ?>
    <?php if (!isset($group)) { ?>
    <div class="form-section">
        <h3><i class="fas fa-file-import me-2"></i> Import Translations</h3>
        <form class="form-import" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postImport'); ?>" data-remote="true" role="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="replace-select">Import Mode</label>
                <div class="row">
                    <div class="col-sm-8">
                        <select name="replace" id="replace-select" class="form-control">
                            <option value="0">Append new translations</option>
                            <option value="1">Replace existing translations</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success btn-block pulse" data-disable-with="Loading..">
                            <i class="fas fa-file-import me-2"></i> Import Groups
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="form-section">
        <h3><i class="fas fa-search me-2"></i> Find Translations</h3>
        <form class="form-find" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postFind'); ?>" data-remote="true" role="form" data-confirm="Are you sure you want to scan you app folder? All found translation keys will be added to the database.">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <p class="text-muted mb-3">Scan your application folder to find all translation keys and add them to the database.</p>
                <button type="submit" class="btn btn-info" data-disable-with="Searching..">
                    <i class="fas fa-search me-2"></i> Find Translations in Files
                </button>
            </div>
        </form>
    </div>
    <?php } ?>

    <?php if (isset($group)) { ?>
    <div class="form-section">
        <h3><i class="fas fa-upload me-2"></i> Publish Translations</h3>
        <form class="form-publish" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postPublish', $group); ?>" data-remote="true" role="form" data-confirm="Are you sure you want to publish the translations group '<?php echo $group; ?>? This will overwrite existing language files.">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <p class="text-muted mb-3">Export translations back to your Laravel application files.</p>
                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-info" data-disable-with="Publishing..">
                        <i class="fas fa-upload me-2"></i> Publish Translations
                    </button>
                    <a href="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@getIndex'); ?>" class="btn btn-default">
                        <i class="fas fa-arrow-left me-2"></i> Back
                    </a>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
    <div class="form-section">
        <h3><i class="fas fa-layer-group me-2"></i> Translation Groups</h3>
        <form role="form" method="POST" action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAddGroup'); ?>">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="group-select">Select Translation Group</label>
                <p class="text-muted mb-3">Choose a group to display the group translations. If no groups are visible, make sure you have run the migrations and imported the translations.</p>
                <select name="group" id="group" class="form-control group-select">
                    <?php foreach ($groups as $key => $value) { ?>
                        <option value="<?php echo $key; ?>"<?php echo $key == $group ? ' selected' : ''; ?>><?php echo $value; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="new-group">Create New Group</label>
                <p class="text-muted mb-3">Enter a new group name and start editing translations in that group.</p>
                <div class="row">
                    <div class="col-sm-8">
                        <input type="text" id="new-group" class="form-control" name="new-group" placeholder="Enter new group name..." />
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary btn-block" name="add-group">
                            <i class="fas fa-plus me-2"></i> Add Group
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php if ($group) { ?>
    <div class="form-section">
        <h3><i class="fas fa-plus-circle me-2"></i> Add New Keys</h3>
        <form action="<?php echo action('\Dev3bdulrahman\TranslationDashboard\Controller@postAdd', [$group]); ?>" method="POST" role="form">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                <label for="keys-textarea">Translation Keys</label>
                <p class="text-muted mb-3">Add one key per line, without the group prefix. For example: "welcome_message" instead of "auth.welcome_message"</p>
                <textarea id="keys-textarea" class="form-control" rows="4" name="keys" placeholder="welcome_message&#10;login_button&#10;logout_text"></textarea>
            </div>
            <div class="form-group">
                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i> Add Keys
                    </button>
                    <button type="button" class="btn btn-info enable-auto-translate-group">
                        <i class="fas fa-language me-2"></i> Use Auto Translate
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
<button class="fab" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Scroll to top">
    <i class="fas fa-arrow-up"></i>
</button>

</body>
</html>

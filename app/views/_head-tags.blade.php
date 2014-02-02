<meta charset="utf-8">
<title>Reece Sellars - {{ $title }}</title>
<meta name="description" content="">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<!-- Prefetch DNS for external assets -->
<link rel="dns-prefetch" href="//">

<link rel="stylesheet" href="/css/app.css">
@if (App::environment() === 'local')
    <script type="text/javascript" src="/js/vendor/modernizr-latest.js"></script>
@else
    <script type="text/javascript" src="/js/vendor/modernizr-custom.js"></script>
@endif

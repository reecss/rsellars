<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-GB">
<head>
    @section('head-tags')
        @include('_head-tags')
    @show
</head>

<body @if (isset($body_class)) class="{{ $body_class }}" @endif>
    @section('topbar')
        @include('modules/topbar')
    @show

    @section('sidebar')
        @include('modules/sidebar')
    @show

    <div class="page__content @if (isset($content_class)){{ $content_class }}@endif">
        @yield('content')
    </div>

    @section('foot-tags')
        @include('_foot-tags')
    @show
</body>
</html>


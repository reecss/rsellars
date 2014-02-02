@if (App::environment() === 'local')
    <script src="/bower_components/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/js/vendor/css3-mediaqueries.js" type="text/javascript"></script>
    <script src="/js/app.js" type="text/javascript"></script>
@else
    <script src="/bower_components/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/js/vendor/css3-mediaqueries.min.js" type="text/javascript"></script>
    <script src="/js/app.min.js" type="text/javascript"></script>
@endif

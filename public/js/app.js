// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
// $(document).foundation();

(function () {
    $('.sidebar__toggle, .topbar__toggle, .sidebar-mask').click(function () {
        $('.sidebar').toggleClass('sidebar--open');
        $('.topbar').toggleClass('topbar--open');
    });

    if (!Modernizr.csstransitions) {
        var navOpen = false;
        var sidebarWidth;
        var maskPos;
        var navSpeed = 200;

        $('.sidebar__toggle, .topbar__toggle, .sidebar-mask').click(function () {
            sidebarWidth = navOpen ? '8.33333%' : '41.66667%';
            maskPos = navOpen ? '-100%' : '0%';
            maskOpac = navOpen ? '0' : '0.8';

            $('.sidebar')
                .stop(true, false)
                .animate({
                    'width': sidebarWidth
                }, navSpeed);

            $('.sidebar-mask')
                .stop(true, false)
                .animate({
                    'right': maskPos,
                    'opacity' : maskOpac
                }, navSpeed);

            // Toggle sidebarOpen state
            navOpen = !navOpen;
        });
    }
})();

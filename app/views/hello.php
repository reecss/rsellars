<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css" />
    <script type="text/javascript" src="/js/modernizr-latest.js"></script>
</head>
<body class="page">
    <div class="sidebar">
        <div class="sidebar__portrait"></div>
        <ul>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--home">H</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--work">W</i>
                    <span>Work</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--plans">P</i>
                    <span>Plans</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--contact">C</i>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--Employ">E</i>
                    <span>Employ</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--Blog">B</i>
                    <span>Blog</span>
                </a>
            </li>
            <li>
                <a href="/">
                    <i class="sidebar__icon sidebar__icon--playground">P</i>
                    <span>Playground</span>
                </a>
            </li>
        </ul>
        <div class="sidebar__toggle"></div>
    </div>

    <div class="page__content content--home">
        <h1>
            Hi,<br/>
            I'm Reece.<br/>
            Welcome to my website.
        </h1>
        <p>
            My name is Reece and welcome to my website and Lorem tempora ipsa eligendi modi laudantium. Repudiandae nulla omnis pariatur pariatur vitae animi. Ut tenetur officia aliquid vel recusandae. Molestiae earum id exercitationem nobis similique. Aperiam laboriosam aperiam quas optio.
        </p>
    </div>
    <script src="/bower_components/jquery/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
        $('.sidebar__toggle').click(function () {
            $('.sidebar').toggleClass('sidebar--open');
        });
    </script>
</body>
</html>

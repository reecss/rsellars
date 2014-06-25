@section('content')
    <section class="content-section">
        <div class="content-section__left">
            <h1>My Work</h1>
            <p>
                Over the last couple of years working at A Shade Greener I&#38;ve
                worked on several websites doing both front- and back-end work.
            </p>
            <p>
                I started off working as a junior web developer and, with advice
                and guidance from the lead developer at the time, improved my skills and
                knowledge to the point that I am now the lead developer following
                his departure from the company.
            </p>
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2><a href="https://github.com/reecss/rsellars">This Website!</a></h2>
            <p>
                Every developer should have a home on the web, so I built myself this site.
            </p>
            <p>
                Using the <a href="http://laravel.com/" target="_blank">Laravel</a> PHP framework along with a combination of
                <a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/" target="_blank">BEM-style
                CSS</a> and the <a href="http://foundation.zurb.com/" target="_blank">Foundation framework</a>, I made this site
                as a way to show a little of what I can do - and learn a few things along the way.
            </p>
            <p>The good stuff:</p>
            <dl>
                <dt>Task automation with <a href="http://gruntjs.com/" target="_blank">Grunt</a></dt>
                <dd>JS concatenation, SCSS processing, image optimisation. All done by grunt.</dd>

                <dt>Git</dt>
                <dd>Used git throughout development of the site. Fully available on <a href="https://github.com/rsellars1/rsellars" target="_blank">GitHub</a></dd>

                <dt>Fully responsive</dt>
                <dd>Built with a mobile-first workflow which scales up to fit bigger displays</dd>

                <dt>One-step deployment</dt>
                <dd>Set up my server for one-step build/deployment via git</dd>
            </dl>
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2><a href="http://ashadegreener.co.uk/" target="_blank">A Shade Greener</a></h2>
            <p>
                The main business venture of A Shade Greener Ltd. I&#38;m responsible for maintaining and updating the website.
                If we have any new marketing ideas, changes to the application process or updates for the customer login system
                I'm the man that makes them work.
            </p>
            <p>
                I've also recently been working on a
                <a href="http://newer.ashadegreener.co.uk" target="_blank">complete overhaul</a>
                of the current <abbr title="A Shade Greener">ASG</abbr> website which has been redesigned to implement more
                up-to-date features and provide more relevant information to users.
            </p>
            <p>
                All front-end and back-end work on the updated website has been done by me. It's currently unfinished but has plans
                for full cross-device responsiveness and more social networking integration using Facebook's 
                <abbr title="Application Programming Interface">API</abbr>s.
            </p>
            <p>
                Some of the updated site's more prominent features are:
                <dl>
                    <dt>Social networking APIs</dt>
                    <dd>
                        The <a hfef="http://newer.ashadegreener.co.uk/who-we-are/" target="_blank">Who We Are</a> page
                        implements Facebook, Twitter and Google+ APIs to fetch likes, followers etc.
                    </dd>

                    <dt>Automated location finding</dt>
                    <dd>
                        When <a href="http://newer.ashadegreener.co.uk/apply-now/" target="_blank">submitting an application</a>,
                        customers' precise locations (latitude and longitude) are automatically searched for via a
                        back-end system based on their street address and postcode.
                    </dd>

                    <dt>Multi-friend referral</dt>
                    <dd>
                        Users can use the <abbr title="Asynchronous JavaScript and XML">AJAX</abbr> form to easily
                        <a href="http://newer.ashadegreener.co.uk/refer-a-friend/" target="_blank">send referral emails</a>
                        to multiple friends at once to earn rewards.
                    </dd>

                    <dt>Dynamically ranked FAQs</dt>
                    <dd>
                        Visitors to the site can give feedback on our
                        <a href="http://newer.ashadegreener.co.uk/faqs/" target="_blank">FAQs</a> page.
                        These questions are then ordered by ranking so the most useful questions appear first.
                    </dd>

                    <dt>Automatically expiring job vacancies</dt>
                    <dd>
                        Using a combination of data from a database and CSS classes dynamically set with PHP,
                        <a href="http://newer.ashadegreener.co.uk/careers/" target="_blank">job vacancies</a> automatically
                        expire and display closed by default.
                    </dd>
                </dl>
            </p>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/asg-home_thumb.jpg" alt="">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2><a href="https://asgmoney.co.uk" target="_blank">ASG Money</a></h2>
            <p>
                This is my most recent website for A Shade Greener. Built on the
                premise of crowd-funding investments for free solar
                installations with the promise of a high interest return for the customer.
            </p>
            <p>
                Front-end work on the website was mostly done by our junior
                developer, with some contributions from myself and the back-end
                was fully developed using Oject-Oriented PHP by myself with the <a href="http://www.slimframework.com/"
                target="_blank">Slim</a> micro framework that I modified to work with
                an <abbr title="Model-View-Controller">MVC</abbr> pattern.
            </p>

            <p>Interesting features include:</p>
            <dl>
                <dt>Email Confirmation</dt>
                <dd>
                    When a customer registers their interest in investing,
                    an email with attached information document is
                    automatically sent to the email address they registered
                    with.
                </dd>

                <dt>Complex and secure application process</dt>
                <dd>
                    The entire application process has been built with multiple
                    levels of security including SSL, securely hashed/encrypted
                    application data,
                    <a href="http://en.wikipedia.org/wiki/Blowfish_(cipher)"
                        target="_blank">Blowfish</a> encrypted passwords and 
                    encrypted cookies for user authorisation.
                </dd>

                <dt>Full front- and back-end validation</dt>
                <dd>
                    All user-filled forms include full JavaScript and PHP data
                    validation implemented with reusable, data-agnostic classes.
                </dd>

                <dt>Automatic identification checks</dt>
                <dd>
                    Integration of an ID/fraud checking API is in progress to
                    perform automatic checks of user-submitted applications.
                </dd>

                <dt>Payment integration</dt>
                <dd>
                    The site has a full payment system implemented via WorldPay
                    with back-end validation and authorisation of the payment
                    response.
                </dd>

                <dt>Custom built admin panel</dt>
                <dd>
                    Used to gain secure access to customers&#38; application
                    details and verify/reject application.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/money-home_thumb.jpg" alt="">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2><a href="http://everlastingboilers.co.uk/" target="_blank">Everlasting Boilers</a></h2>
            <p>
                As well as solar panels, ASG also branched out into boiler installation. I built the company website
                from scratch using HTML, CSS/SCSS and jQuery.
            </p>
            <p>
                This was the first full website I created myself and I learnt
                some interesting things during the process.
            </p>
            <p>
                Most of the website has now been rebuilt by our junior
                developer but the <a href="http://everlastingboilers.co.uk/savings/"
                target="_blank">savings page</a> is still basically
                intact as I made it.
            </p>
            <p>Goodies and cool stuff:</p>
            <dl>
                <dt>Modernizr</dt>
                <dd>
                    The site uses Modernizr as a shim for HTML5 support in
                    older versions of Internet Explorer, as well as some CSS based
                    on browser feature detection
                </dd>

                <dt>Javascript Tooltips</dt>
                <dd>
                    I created the tooltip-style enquiry form used on the top
                    'Enquire Now' button with jQuery
                </dd>

                <dt>CSS3 With Fallbacks</dt>
                <dd>
                    Some elements of the site, such as the circles on the
                    savings page will primarily use CSS3 and fall back to
                    more compatible methods in unsupported browsers.
                </dd>

                <dt>HTML5 Video</dt>
                <dd>
                    Video in the footer will play and loop in HTML5-enabled
                    browsers and fall back to a still image in non-supported
                    ones.
                </dd>

                <dt>Customer Reviews</dt>
                <dd>
                    The <a href="http://everlastingboilers.co.uk/reviews/"
                    target="_blank">reviews</a> page fetches and sorts reviews for each
                    team from a database and displays them appropriately.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/evlb-home_thumb.jpg" alt="">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2><a href="http://asgbiomass.co.uk/" target="_blank">ASG Biomass</a></h2>
            <p>
                On top of solar panels and boiler for homes, ASG provides free
                commercial biomass heating systems.
            </p>
            <p>
                This project had a very tight deadline so the initial website was created in
                just 2 weeks with all HTML and CSS and full application process
                completed.
            </p>
            <p>
                Once the core site was completed additional components and
                JavaScript enhancements were added until the site underwent a
                full redesign.
            </p>

            <p>Some of the original website features:</p>
            <dl>
                <dt>Savings counter</dt>
                <dd>
                    A dynamic counter utilising back-end data and
                    front-end functionality
                </dd>

                <dt>User-controllable webcam</dt>
                <dd>
                    Users of the site were able to remotely control a webcam
                    placed in our warehouse to view us assembling the biomass
                    units.
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="/img/biomass-home_thumb.jpg" alt="">
        </div>
    </section>

    <section class="content-section">
        <div class="content-section__left">
            <h2>Overall / Other</h2>
            <p>
                As well as my web development duties, I've also worked on
                several other projects at A Shade Greener.
            </p>

            <dl>
                <dt>Flash Animations and Video Editing</dt>
                <dd>
                    I've created several Flash animations to be used as videos on
                    our websites. DVD handed to customers by direct
                    marketing/canvassing team.
                </dd>

                <dt>Data Management/Manipulation</dt>
                <dd>
                    Head of the massive suitable house finding initiative. Responsible for collating and reporting on around 6000 records of suitable solar properties per week
                </dd>

                <dt>Automation of repetitive tasks</dt>
                <dd>
                    <p>
                        When I'm not taking care of marketing-related web
                        development I use my powers for good in other
                        departments. If I'm aware of a task that could be
                        automated or improved I'll do what I can
                        to write a program or script to take care of it.
                    </p>

                    <p>
                        One example is a slow, unreliable screen-recorded macro
                        that was run to submit and extract data from an online
                        calculator. Using PHP and cURL I wrote a script which
                        reduced this task from taking several days to being
                        completed in under an hour.
                    </p>
                </dd>
            </dl>
        </div>
        <div class="content-section__right">
            <img class="content--work__screenshot" src="http://placekitten.com/300/150" alt="">
        </div>
    </section>
@stop

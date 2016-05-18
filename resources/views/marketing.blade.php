<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ isset($title) ? $title . ' - ' : null }}LaravelPanel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="assets/css/normalize.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/queries.css">
    <link rel="stylesheet" href="assets/css/etline-font.css">
    <link rel="stylesheet" href="assets/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="#"><img src="assets/img/logo-light.png" alt="laravelpanel logo"></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li class="dropdown"><a href="{{ url('/docs') }}" >Documentation </a>
                                </li>
                                <li><a href="https://github.com/serverfireteam/panel">Github repo</a></li>
                                <li><a href="/docs/master/contributing">Contributing</a>
                            </ul>
                            <ul class="member-actions">
                                <li><a href="/docs/master/get-started" class="login">Get started</a></li>
                                <li><a href="http://demo.serverfire.net/panel" class="btn-white btn-small">Try our demo</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h2>Save Time with Rapid Development !</h2>
                        <p class="intro">LaravelPanel completes your development cycle with a set of modern toolkits</p>
                        <a href="http://demo.serverfire.net/panel" class="btn btn-fill btn-large btn-margin-right">Try our demo</a> <a href="/docs/master/get-started" class="btn btn-accent btn-large">Get started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#features"><i class="fa fa-angle-down"></i></a></div>
    </section>
    <section class="intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe031;" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>CRUD</h5>
                        <p>LaravelPanel lets you create a simple CRUD (create, read, update and delete) by just one command. It offers various field types such as text, select box, checkbox, text editor, datetime, image, autocomplete, tag, colorpicker and more.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe01d;" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Modern Admin</h5>
                        <p>It provides everything you need for administration of a website or an app such as a modern dashboard, fast and mobile-friendly interface.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe01a;" class="icon"></span>
                    </div>
                    <div class="intro-content last">
                        <h5>Extensible System</h5>
                        <p>You can have your own custom column types. You can also create LaravelPanel-based packages, for instance an e-commerce package with LaravelPanel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>Less Redundant and More Efficient Code</h3>
                        <p>Spend your time on quality code not on the same code over and over again.</p>
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe036;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Easily Customized</h5>
                                    <p>Easily customize LaravelPanel to suit the needs of your website, mobile applications or products. Take advantage of Laravel and bring your product to life.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe05a;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Import/Export</h5>
                                    <p>You can import data from Excel files and overwrite the existing data or simply keep both along with each other. You can also export to excel or other formats.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe052;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Fully Translatable</h5>
                                    <p>The LaravelPanel supports English, Italian, Spanish, French, Polish, Persian , Portuguese language. and Armenian languages and it's really easy to add support for your native language.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
                <div class="iphone-wrap wp2"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h4>Access to all your local files and your Cloud storage space</h4>
                        <p>Simply set your credentials once then you can select any of your files from your local storge or cloud storage such as Amazon S3, Rackspace, FTP, local files, Dropbox, Sftp or Azure Blob Storage.</p>
                        <a href="/docs/master/elfinder" class="btn btn-ghost btn-accent btn-small">Read about it</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="img/macbook-pro.png" alt="responsive devices"></div>
    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>" <b>Insanity</b> is doing the same thing over and over and expecting different results. "</h2>
                <small>Albert Einstein</small>
                <p>Save your time with LaravelPanel.</p>
                <a href="/docs/master/get-started" class="btn btn-ghost btn-accent btn-large">Use LaravelPanel!</a>
                <div class="logo-placeholder floating-logo"><img src="assets/img/speed.png" ></div>
            </div>
        </div>
    </section>
    <section class="blog-intro section-padding" id="blog">
        <div class="container text-center">
            <h2> <b class="counter">30</b>% Grow each months in past year</h2>
            <div class="row">
                <div class="col-md-3">
                    <h1 class="counter downloads">--</h1>
                    <span>Downloads</span>
                </div>
                <div class="col-md-3">
                    <h1 class="counter commit">--</h1>
                    <span>Commit</span>
                </div>
                <div class="col-md-3">
                    <h1 class="counter stars">--</h1>
                    <span>Github Stars</span>
                </div>
                <div class="col-md-3">
                    <h1 class="counter forks">--</h2>
                    <span>Forks</span>
                </div>
                                


            </div>
        </div>
    </section>

    <section class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our team :</h2>
                    <div class="team">Loading...</div>
                    <div class="clearfix"></div>
                    <h2>Contributors of laravelpanel : ( <a href="/docs/master/contributing">Join us</a> )</h2>
                    <div class="contributors">Loading...</div>

                    
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Newsletter</h3>
                    <p>Subscribe to  laravelPanel newsletter.</p>
                    <form class="signup-form" action="/email-support" method="POST" role="form">
                        <div class="form-input-group">
                            <i class="fa fa-male"></i><input type="text" class="" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-envelope"></i><input type="email" name="email" class="" placeholder="Enter your email" required>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn-fill sign-up-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="to-top">
        <div class="container">
            <div class="row">
                <div class="to-top-wrap">
                    <a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="footer-links">
                            <ul class="footer-group">
                                <li class="dropdown"><a href="{{ url('/docs') }}">Documentation  </a></li>
                                <li><a href="https://github.com/serverfireteam/panel">Github repo</a></li>
                                <li><a href="/docs/master/get-started">Get started</a>
                                <li><a href="/docs/master/contributing">Contributing</a>
                            </ul>
                        <p>Copyright © 2016 <a href="http://serverfire.net">Serverfire.net</a><br>
                        Template Crafted with <span class="fa fa-heart pulse2"></span> by <a href="http://www.peterfinlan.com/">Peter Finlan</a>.</p>
                    </div>
                </div>
                <div class="social-share">

                    <p>Follow LaravelPanel </p>
                    <a href="https://twitter.com/laravelpanel" class="twitter-share"><i class="fa fa-twitter"></i></a> 
                </div>
            </div>
        </div>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="assets/bower_components/retina.js/dist/retina.js"></script>
    <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/bower_components/classie/classie.js"></script>
    <script src="assets/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-60500651-1','auto');ga('send','pageview');
    </script>
</body>
</html>

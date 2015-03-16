<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{ isset($title) ? $title . ' - ' : null }}Laravel Panel</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="">
	<meta name="description" content="Laravel Panel">
	<meta name="keywords" content="laravel, php, framework, web, artisans">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
<!--favicon-->
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    
    
	
	
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
	
    
    <script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script>
        $(function(){
            $('.content-main').height($(window).height()-100);
        })
    </script>
    
    
</head>
<body class="@yield('body-class', 'docs') language-php">

                
    
    
                <nav class="navbar  navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                       <div class="logo col-xs-12 col-md-3">
                            <a href="{{ url('/') }}"><img class="logo" alt="laravel panel" src="{{ url('assets/img/laravel-panel-logo.png') }}" /></a>
                        </div>
                      </div>
                      <div id="navbar" class="navbar-collapse collapse">
                        
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="http://demo.serverfire.net" target="_blank">Demo </a></li>
                          <li><a href="{{ url('/docs') }}">Documention </a></li>
                          <li><a href="#our-team">About Us </a></li>
                        </ul>
                      </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                  </nav>

	@yield('content')
    
    <footer>
        Powered by <a href="http://www.serverfire.org">Serverfire Team</a>
    </footer>
    

	<script src="{{ url('assets/js/laravel.js') }}"></script>
	<script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('assets/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script src="{{ url('assets/js/viewport-units-buggyfill.js') }}"></script>
    
    <script type="text/javascript" src="{{ url('assets/syntaxhighlighter/scripts/shCore.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/syntaxhighlighter/scripts/shAutoloader.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/syntaxhighlighter/scripts/shBrushPhp.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/syntaxhighlighter/scripts/shBrushBash.js') }}"></script>
    <link href="{{ url('assets/syntaxhighlighter//styles/shCore.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/syntaxhighlighter//styles/shThemeDefault.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
         SyntaxHighlighter.all()
    </script>
    
    <script src="{{ url('assets/js/script.js') }}"></script>
    
	<script>window.viewportUnitsBuggyfill.init();</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60500651-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

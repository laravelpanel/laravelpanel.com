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
	<link rel="stylesheet" href="{{ url('assets/css/laravel.css') }}">
	
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

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">

			<div class="responsive-sidebar-nav">
				<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
			</div>

			@if (Request::is('docs*') && isset($currentVersion))
				@include('partials.switcher')
			@endif

			<ul class="main-nav">
				@include('partials.main-nav')
			</ul>
		</div>
	</nav>

	@yield('content')
    

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

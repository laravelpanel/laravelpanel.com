$(document).ready(function() {

	/***************** Waypoints ******************/

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});

	/***************** Initiate Flexslider ******************/
	$('.flexslider').flexslider({
		animation: "slide"
	});

	/***************** Initiate Fancybox ******************/

	$('.single_image').fancybox({
		padding: 4,
	});

	/***************** Tooltips ******************/
    $('[data-toggle="tooltip"]').tooltip();

	/***************** Nav Transformicon ******************/

	/* When user clicks the Icon */
	$('.nav-toggle').click(function() {
		$(this).toggleClass('active');
		$('.header-nav').toggleClass('open');
		event.preventDefault();
	});
	/* When user clicks a link */
	$('.header-nav li a').click(function() {
		$('.nav-toggle').toggleClass('active');
		$('.header-nav').toggleClass('open');

	});

	/***************** Header BG Scroll ******************/

	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 20) {
				$('section.navigation').addClass('fixed');
				$('header').css({
					"border-bottom": "none",
					"padding": "35px 0"
				});
				$('header .member-actions').css({
					"top": "26px",
				});
				$('header .navicon').css({
					"top": "34px",
				});
			} else {
				$('section.navigation').removeClass('fixed');
				$('header').css({
					"border-bottom": "solid 1px rgba(255, 255, 255, 0.2)",
					"padding": "50px 0"
				});
				$('header .member-actions').css({
					"top": "41px",
				});
				$('header .navicon').css({
					"top": "48px",
				});
			}
		});
	});
	/***************** Smooth Scrolling ******************/

	$(function() {

		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 2000);
					return false;
				}
			}
		});

	});
	$.when( $.ajax({
		    	url: "https://packagist.org/search.json?tags=LaravelPanel",
			    jsonp: "callback",
			    dataType: "jsonp",
			    success: function( response ) {
			    	$('.downloads').html(response.results[0].downloads);
			    }
			}), 
			$.ajax({
		    	url: "https://api.github.com/repos/serverfireteam/panel",
			    jsonp: "callback",
			    dataType: "jsonp",
			    success: function( response ) {
			    	$('.forks').html(response.data.forks_count);
			    	$('.stars').html(response.data.stargazers_count);
			    }
			}),
			$.ajax({
		    	url: "https://api.github.com/repos/serverfireteam/panel/contributors",
			    jsonp: "callback",
			    dataType: "jsonp",
			    success: function( response ) {

			    	var team = ['serverfire','alenoosh','siavash13','hamid'],
			    	commit = 0;
			    	$('.contributors,.team').html('');
			    	for( key in response.data){
			    		commit += response.data[key].contributions;
			    		if(team.indexOf(response.data[key].login ) == -1)
			    			$('.contributors').append('<a href="'+response.data[key].html_url+'"><div class="avatar"><img alt="'+response.data[key].login+'" src="'+response.data[key].avatar_url+'" /></div><p class="author">'+response.data[key].login+' ('+ response.data[key].contributions +')</p></a>')
			    		else
			    			$('.team').append('<a  href="'+response.data[key].html_url+'"><div class="avatar"><img alt="'+response.data[key].login+'" src="'+response.data[key].avatar_url+'" /></div><p class="author">'+response.data[key].login+' ('+ response.data[key].contributions +')</p></a>')
			    	}
			    	$('.commit').html(commit);
			    }
			})
	).done(function( a1, a2 ) {
  		$('.counter').counterUp();
	});


});
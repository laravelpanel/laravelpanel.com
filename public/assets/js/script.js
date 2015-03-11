$(function(){

    $('.feature-line-svg.w1').waypoint(function(direction) {
        $('.feature-line-svg.w1 .path').attr('class',' path animation');
        $('.feature-line-svg.w1 circle').attr('class',' animated fadeIn shadow');
    }, {
      offset: '75%'
    })

$('.feature-line-svg.w2').waypoint(function(direction) {
        $('.feature-line-svg.w2 .path').attr('class',' path animation');
        $('.feature-line-svg.w2 circle').attr('class',' animated fadeIn shadow');
    }, {
      offset: '75%'
    })

$('.feature-line-svg.w3').waypoint(function(direction) {
        $('.feature-line-svg.w3 .path').attr('class',' path animation');
        $('.feature-line-svg.w3 circle').attr('class',' animated fadeIn shadow');
    }, {
      offset: '75%'
    })

$('.feature-line-svg.w4').waypoint(function(direction) {
        $('.feature-line-svg.w4 .path').attr('class',' path animation');
        $('.feature-line-svg.w4 circle').attr('class',' animated fadeIn shadow');
    }, {
      offset: '75%'
    })




$('.install-page').waypoint(function(direction) {
        $('.step').addClass('fadeInUpBig').addClass('active');
    }, {
      offset: '100%'
    })


})
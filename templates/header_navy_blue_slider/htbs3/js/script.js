  
/*--------------------------------------------------------------------------*/
/*------------  Begins : Header / Header navy blue slider  -----------------*/
/*--------------------------------------------------------------------------*/  
  $('.front-page nav').removeClass('navbar-scrolled');
$(window).scroll(function() {
  if ($(document).scrollTop() > 514) {
    $('.front-page nav').addClass('navbar-scrolled');
  } else {
    $('.front-page nav').removeClass('navbar-scrolled');
  }
});

$('.carousel').carousel({
  interval: 100099999
});

  //Enable swiping...
  $(".carousel").swipe( {
  //Generic swipe handler for all directions
  swipeLeft:function(event, direction, distance, duration, fingerCount) {
  $(this).parent().carousel('next'); 
  },
  swipeRight: function() {
  $(this).parent().carousel('prev'); 
  },
  //Default is 75px, set to 0 for demo so any distance triggers swipe
  threshold:0
  });
/*--------------------------------------------------------------------------*/
/*------------  End : Header / Header navy blue slider  --------------------*/
/*--------------------------------------------------------------------------*/
			
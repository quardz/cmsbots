
/*--------------------------------------------------------------------------*/
/*------------  Begins : Header / Header menu green ------------------------*/
/*--------------------------------------------------------------------------*/
$('.front-page nav').removeClass('navbar-scrolled');
$(window).scroll(function() {
  if ($(document).scrollTop() > 514) {
    $('.front-page nav').addClass('navbar-scrolled');
  } else {
    $('.front-page nav').removeClass('navbar-scrolled');
  }
});
/*--------------------------------------------------------------------------*/
/*------------  End : Header / Header menu green  --------------------------*/
/*--------------------------------------------------------------------------*/

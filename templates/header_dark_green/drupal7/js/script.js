
/*--------------------------------------------------------------------------*/
/*------------  Begins : Header / Header dark green  -----------------------*/
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
/*------------  End : Header / Header dark green  --------------------------*/
/*--------------------------------------------------------------------------*/

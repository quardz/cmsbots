 // portfolio colorbox
  $(".colorbox-image").colorbox({rel:'colorbox-image'});
  
  //Portfolio with mix it up
  
  $('.screen-sm #mixitup-container, .screen-md #mixitup-container, .screen-lg #mixitup-container').mixItUp();  //only to bigger screen
  var $mixitup_container = $('#mixitup-container');
  /*isotope */
  $( window ).resize(function() {
   var screen_size = checkWindowSize();
   if(screen_size === 'screen-xs') {
      //check if mixitup loaded already, and destroy it
      if($mixitup_container.mixItUp('isLoaded')){
        $('#mixitup-container').mixItUp('destroy', true);
      }  
      mobile_carousel();
   }
   else {
     //recreate the mixitup for bigger screen and destroy the carousel
     if(!$mixitup_container.mixItUp('isLoaded')){
        $('#mixitup-container .filter').removeClass('active');
        $('.screen-sm #mixitup-container, .screen-md #mixitup-container, .screen-lg #mixitup-container').mixItUp(); 
        $('.mobile-carousel .mobile-carousel-inner').removeClass('carousel-inner');
      }  
   }
   
  });
  //MixitUp ends
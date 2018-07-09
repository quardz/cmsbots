  //Add padding to top for this theme home page
  var header_height = $('body.path-frontpage header#navbar').height();;
  if(header_height) {
    $('body').css('padding-top',header_height);
  }
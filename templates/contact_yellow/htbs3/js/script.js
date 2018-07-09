$('form.contact-form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    
  } else {
e.preventDefault();
    var form = $('form.contact-form');
    var formData = $(form).serialize();
       $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData,
    statusCode: {
    400: function() {
      $('form.contact-form .form-message').html("Oops! There was a problem with your submission. Please complete the form and try again.");      
    },
    200: function() {
      $('form.contact-form').addClass('form-submitted');
      $('form.contact-form .contact-form').addClass('hidden');
      $('form.contact-form .submitted-message').removeClass('hidden');      
      $('form.contact-form')[0].reset();
    },
    500: function() {
      $('form.contact-form .form-message').html("Oops! Something went wrong and we couldn't send your message.");
    
    },
    403: function() {
      $('form.contact-form .form-message').html("There was a problem with your submission, please try again.");
   
    },            
  }
})

  }
})
var submitted=false;

$('#subscribe-form').submit(function(event) 
{
  event.preventDefault();
  var email = $('#email-input').val();

  var messageBox = $('#subscribe-form > .message');
  var token = $('#subscribe-form > input[name="_token"]').val();

  if(email)
  {
    $.ajax({
      url: "/subscribe",
      type: 'POST',
      dataType : "json",
      data : ({email: email, _token: token}),
      success : function(data) {
          $('#email-input').val('');
          messageBox.hasClass('alert-danger') ? messageBox.removeClass('alert-danger') : messageBox.addClass('alert-success');
          messageBox
            .text("You're successfully subscribed!")
            .delay(4000)
            .fadeOut(2500)
            .show();
      },
      error : function(xhr) {
        var message = JSON.parse(xhr.responseText).email[0];
        messageBox.hasClass('alert-success') ? messageBox.removeClass('alert-success') : messageBox.addClass('alert-danger');
        messageBox.show().text(message).delay(2000).fadeOut(2500);
      }
    });
  }
  else
  {
    messageBox.hasClass('alert-success') ? messageBox.removeClass('alert-success') : messageBox.addClass('alert-danger');
    messageBox.show().text('Please enter a valid email').show().delay(2000).fadeOut(2500);
  }

});

//Enquiry form submission on home page
function check_submitted()
{
  if(submitted) 
  {
    $('.clearfix').remove();
    $('.signup-form > form')
      .append('<p class="lead" style="color:#999;margin-top:20px">Thank you for your interest. Our representative will get back to you within 24 hours.</p>');
  }
}

// Deferred loading of address google map on contact page
$(window).load(function(){
  $('#address-map').attr('src', "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d875.3008485265921!2d77.19210499999998!3d28.653627999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM5JzEzLjEiTiA3N8KwMTEnMzEuNiJF!5e0!3m2!1sen!2sin!4v1435763487300");
});
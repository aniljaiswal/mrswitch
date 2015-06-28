@extends('pages.default')

@section('styles')

<link rel="stylesheet" href="css/libs/flat-ui.css">
<link rel="stylesheet" href="css/libs/icon-font.css">
<link rel="stylesheet" href="css/app.css">

@stop

@section('content')

<div class="page-wrapper">
  <!-- header-6 -->
  @include('partials.nav')

  <section class="header-6-sub bg-midnight-blue">
      <div class="background">&nbsp;</div>
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <h3>You have the design, you have the code</h3>
                  <div class="row">
                      <p class="lead col-sm-10 col-sm-offset-1">
                          We’ve created the product that will help
                          your startup to look even better.
                      </p>
                  </div>
              </div>
          </div>
          <br>
          <br>
          <br>
          <div class="row">
              <div class="col-sm-10 col-sm-offset-1">
                  <div class="signup-form">
                      <form>
                          <div class="clearfix">
                              <input type="text" class="form-control" placeholder="Your E-mail">
                              <input type="password" class="form-control" placeholder="Password">
                              <input type="password" class="form-control" placeholder="Confirmation">
                              <button type="submit" class="btn btn-primary">Sign Up</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- content-3 without delimiter and 2 part -->
  <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Multi useful components</h3>
                      <p>
                          Startup Design Framework contains components and complex blocks which
                          can easily be integrated into almost any design. All of these components are made in
                          the same style.
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img src="img/ticket-green@2x.png" width="380" height="187" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- content-3 without delimiter and 2 part -->
  <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Demo version</h3>
                      <p>
                          In this demo version of Startup Framework, we show you the structure of our framework.
                          The package includes few samples that can be used to create the design.
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img width="380" height="179" alt="" src="img/map@2x.png">
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- content-3 without delimiter and 2 part -->
  <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Twenty five awesome samples</h3>
                      <p>
                          The most important part of the Startup Framework is the samples.
                          The samples form a set of 25 usable pages or you can add new blocks from UI Kit.
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img width="397" height="193" alt="" src="img/ps-wire-imac@2x.png">
                  </div>
              </div>
          </div>
      </div>
  </section>

  @include('partials.footer')

</div>

@stop


@section('scripts')

<script src="js/libs/modernizr.custom.js"></script>
<script src="js/libs/page-transitions.js"></script>
<script src="js/libs/startup-kit.js"></script>
<script>
  
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

</script>
@stop
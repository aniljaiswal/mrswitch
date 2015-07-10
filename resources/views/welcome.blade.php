@extends('pages.default')

@section('content')

<div class="page-wrapper">
  <!-- header-6 -->
  @include('partials.nav')

  <section class="header-6-sub bg-midnight-blue">
      <div class="background">&nbsp;</div>
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <h2 style="color:white;"><b>Book a service, anytime anywhere.</b></h2>
                  <div class="row">
                      <p class="lead col-sm-10 col-sm-offset-1" style="color:#fff">
                          Now find an electrician quickly, at the comfort of your own!
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
                    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="check_submitted()"></iframe>
                    <form action="https://docs.google.com/forms/d/1DvbZ4M2oeFVsV3s1ODcUL52CvJrEH95arKwxoIFifHk/formResponse" method="POST" id="ss-form" target="hidden_iframe" onsubmit="submitted=true;">
                      <div class="clearfix">
                        <input placeholder="Name" type="text" name="entry.589106005" value="" class="form-control" id="entry_589106005" dir="auto" aria-label="Name  " aria-required="true" required="" title="">
                        <input placeholder="Phone" type="text" name="entry.1689824019" value="" class="form-control" id="entry_1689824019" dir="auto" aria-label="Phone Number  Please enter a valid number." aria-required="true" required="" pattern=".*^(?:\+91(?:-)?|0\d{2,4}-|0|)\d{7,10}$.*" title="Please enter a valid number.">
                        <input placeholder="Email" type="email" name="entry.1805097311" value="" class="form-control" id="entry_1805097311" dir="auto" aria-label="Email Address  Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">                        
                        <input type="hidden" name="draftResponse" value="[,,&quot;4766546142149717159&quot;]">
                        <input type="hidden" name="pageHistory" value="0">
                        <input type="hidden" name="fbzx" value="4766546142149717159">
                        <button type="submit" class="btn btn-primary">Get Started</button>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Pricing-->
  <div id="pricing" class="pricing-page">
    <section class="content-16 v-center">
      <div>
        <div class="container">
          <h3>Simple Pricing </h3>
          <p class="lead">These plans are probably the best ones ever created.</p>
        </div>
      </div>
    </section>

  <section class="price-5">
        <div class="container">
          <div class="plans">
            <div class="plan">
              <div class="title">
                <div class="price">
                  <small>Rs.</small>
1999
                </div>
                BASIC PLAN
              </div>
              <div>
                <div class="description">
                  <div class="description-box">
                    <big>6 Visits/year</big>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </div>
                  <div class="description-box">
                    <big>1 visits free on renewal</big>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>10+ benefits</big>
                  <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a class="btn btn-primary" href="#">Get Started</a>
                </div>
              </div>
            </div>
            <div class="plan plan-2">
              <div class="title">
                <div class="price">
                  <small>Rs.</small>
3999
                </div>
                STANDARD PLAN
              </div>
              <div>
                <div class="description">
                  <div class="description-box">
                    <big>12 Visits/year</big>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </div>
                  <div class="description-box">
                    <big>2 visits free on renewal</big>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>20+ benefits</big>
                  <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a class="btn btn-primary" href="#">Get Started</a>
                </div>
              </div>
            </div>
            <div class="plan">
              <div class="title">
                <div class="price">
                  <small>Rs.</small>
7999
                </div>
                PREMIUM PLAN
              </div>
              <div>
                <div class="description">
                  <div class="description-box">
                    <big>24 Visits/year</big>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </div>
                  <div class="description-box">
                    <big>4 visits free on renewal</big>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>40+ benefits</big>
                  <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a class="btn btn-primary" href="#">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!--/.container-->

        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-wrapper well well-lg">
                <div class="col-sm-9">
                  <div class="cta-wrapper">
                    <h3>Need a bigger plan?</h3>
                    <p>Just tell us what you need and we’d be happy to help.</p>
                  </div>  
                </div>
                <div class="col-sm-3">
                  <a href="/contact" class="btn btn-default btn-lg">Contact Us</a>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <!--/.container-->
      </section>

      <hr>

    <!-- Get Started CTA -->
      <section class="content-8">
        <div>
          <div class="container">
            <h3>All Plans Include</h3>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <p>
                  24x7 Emergency Helpline<br>
                  Tele Assistance for Minor issues<br>
                </p>
                <a class="btn btn-large btn-clear" href="#">GET STARTED NOW</a>
              </div>
            </div>
          </div>
        </div>
      </section>

  </div> <!-- Pricing -->

  <hr>

  <!-- Features -->
  <div id="features">
    <section class="content-3 v-center">
      <div>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 aligment">
                      <h3>Best in class Services</h3>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Quibusdam libero officiis praesentium nesciunt? Quos ducimus optio 
                          assumenda quibusdam animi, veritatis saepe possimus, deserunt nemo ipsa tenetur!
                      </p>
                  </div>
                  <div class="col-sm-6 img">
                      <img src="/img/ticket-green@2x.png" width="380" height="187" alt="">
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
                        <h3>Awesome Pricing</h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Quibusdam libero officiis praesentium nesciunt? Quos ducimus optio 
                          assumenda quibusdam animi, veritatis saepe possimus, deserunt nemo ipsa tenetur!
                        </p>
                    </div>
                    <div class="col-sm-6 img">
                        <img width="380" height="179" alt="" src="/img/map@2x.png">
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
                        <h3>24x7 Availability</h3>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                          Quibusdam libero officiis praesentium nesciunt? Quos ducimus optio 
                          assumenda quibusdam animi, veritatis saepe possimus, deserunt nemo ipsa tenetur!
                        </p>
                    </div>
                    <div class="col-sm-6 img">
                        <img width="397" height="193" alt="" src="/img/ps-wire-imac@2x.png">
                    </div>
                </div>
            </div>
        </div>
    </section>  
  </div>

  <!-- Services -->
  <div id="services">
    
  </div>
  

  @include('partials.footer')

</div>

@stop
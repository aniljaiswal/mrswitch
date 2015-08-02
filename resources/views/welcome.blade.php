@extends('pages.default')

@section('content')

<div class="page-wrapper">
  <!-- header-6 -->
  @include('partials.nav')

  <!-- Header -->
  <section class="header-6-sub bg-midnight-blue">
      <div class="background">&nbsp;</div>
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <h2 style="color:white;"><b>Book A Service, Anytime Anywhere.</b></h2>
                  <div class="row">
                      <p class="lead col-sm-10 col-sm-offset-1" style="color:#fff">
                          Now find an electrician quickly, at the comfort of your own!
                      </p>
                  </div>
                  <h2 style="color:white;margin-top:0px;">
                    <b>CALL US AT: <a style="color:white;" href="tel:01145574846">011 - 45574846</a></b>
                  </h2>
                  <p class="h5" style="margin:5px;color:white;">OR</p>
                  <br>
              </div>
          </div>
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
                        <button type="submit" class="btn btn-primary">Book Now</button>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </section> <!-- Header -->

  <!-- Features -->
  <div id="features">
    <section class="content-3 v-center">
      <div>
          <div class="container">
              <h1 class="text-center">Why Us?</h1>
              <br/>
              <br/>
              <br/>
              <div class="row">
                  <div class="col-sm-6 aligment text-center">
                      <h3>24x7 availability</h3>
                      <p>
                          Need electrician at an absurd time and don’t know where to go?
                          Don’t worry! We will come to you, at any hour of the day or night.
                          Just let us know what you need and we will attend to you as per your convenience.
                      </p>
                  </div>
                  <div class="col-sm-6 aligment text-center">
                      <h3>Help is just a call away</h3>
                      <p>
                          We save you from the hassles of searching for an electrician, whether
                          you need AC repair or wiring change. A single phone call does it all.
                          The technician arrives at your doorstep in no time!
                      </p>
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
                    <div class="col-sm-6 aligment text-center">
                        <h3>Awesome pricing</h3>
                        <p>
                          Pay once and you are done! Subscribe to a pocket-friendly plan of your
                          choice and forget paying per service. Get a fixed number of visits free with
                          the best of our deals.
                        </p>
                    </div>
                    <div class="col-sm-6 aligment text-center">
                        <h3>Best in class services</h3>
                        <p>
                            User friendly ways to reach us. Skilled and well-equipped professionals at your service.
                            Build plans that suit your own taste and needs. Feedback facilities to get better out of the best.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div> <!-- Features -->

  <!-- Pricing-->
  <div id="pricing" class="pricing-page">
    <section class="content-16 v-center">
      <div>
        <div class="container">
          <h1 class="text-center">Simple Pricing </h1>
          <p class="lead">These plans are probably the best ones ever created.</p>
        </div>
      </div>
    </section>

    <section class="price-5">
        <!-- domestic plans -->
        <div class="container">
          <h3 class="text-center">DOMESTIC PLANS</h3>
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
                    <big>6 Service Visits</big>
                      Valid till 6 months from the date of subscription
                  </div>
                  <div class="description-box">
                      <big>90 Minutes TAT</big>
                      We make sure to reach your doorstep within 90 minutes<sup>*</sup>
                  </div>
                  <div class="description-box" style="text-align: center;">
                      <span class="fui-cross" style="font-size: x-large;"></span>
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>USE CASES</big>
                  <p class="info">Ideal for Small Flats, Apartments, Independent Homes</p>
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
                    <big>12 Service Visits</big>
                    Valid till 12 months from the date of subscription
                  </div>
                  <div class="description-box">
                      <big>90 Minutes TAT</big>
                      We strive to reach your doorstep within 90 minutes<sup>*</sup>
                  </div>
                  <div class="description-box">
                    <big>1 Free Electrical Inspection/year</big>
                    Get your electrical wiring and devices inspected, absolutely free.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>USE CASES</big>
                  <p class="info">Ideal for Medium to Large Flats, Apartments, Independent Homes</p>
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
                    <big>24 Service Visits</big>
                      Valid till 12 months from the date of subscription
                  </div>
                  <div class="description-box">
                      <big>90 Minutes TAT</big>
                      We strive to reach your doorstep within 90 minutes<sup>*</sup>
                  </div>
                  <div class="description-box">
                    <big>2 Free Electrical Inspections/year</big>
                      Get your electrical wiring and devices inspected, absolutely free.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>USE CASES</big>
                  <p class="info">Ideal for Bungalows, Villas, Farm houses</p>
                  <a class="btn btn-primary" href="#">Get Started</a>
                </div>
              </div>
            </div>
          </div>
          <small>* T & C applied</small>
        </div><!--/ domestic .container-->

        <br/>
        <br/>

        <!-- commercial plans-->
        <div class="container">
            <h3 class="text-center">CORPORATE PLANS</h3>
            <br/>
            <div class="plans">
                <div class="plan">
                    <div class="title">
                        <div class="price">
                            <small>Rs.</small>
                            2499
                        </div>
                        BASIC PLAN
                    </div>
                    <div>
                        <div class="description">
                            <div class="description-box">
                                <big>6 Service Visits</big>
                                Valid till 30 days from the starting date of the subscription
                            </div>
                            <div class="description-box">
                                <big>90 Minutes TAT</big>
                                We strive to reach your doorstep within 90 minutes<sup>*</sup>
                            </div>
                            <div class="description-box">
                                <big>1 Free Electrical Inspection/year<sup>**</sup></big>
                                Get your electrical wiring and devices inspected, absolutely free.
                            </div>
                            <small>** If plan is renewed for at least 6 months</small>
                        </div>
                        <div class="description-more">
                            <span class="fui-cmd"></span>
                            <big>USE CASES</big>
                            <p class="info">Ideal for Small Showrooms, Hotels & Restaurants, Offices</p>
                            <a class="btn btn-primary" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="plan plan-2">
                    <div class="title">
                        <div class="price">
                            <small>Rs.</small>
                            12499
                        </div>
                        STANDARD PLAN
                    </div>
                    <div>
                        <div class="description">
                            <div class="description-box">
                                <big>36 Service Visits</big>
                                Valid till 180 days from the starting date of the subscription
                            </div>
                            <div class="description-box">
                                <big>90 Minutes TAT</big>
                                We strive to reach your doorstep within 90 minutes<sup>*</sup>
                            </div>
                            <div class="description-box">
                                <big>2 Free Electrical Inspection/year</big>
                                Get your electrical wiring and devices inspected, absolutely free.
                            </div>
                        </div>
                        <div class="description-more">
                            <span class="fui-cmd"></span>
                            <big>USE CASES</big>
                            <p class="info">Ideal for Medium to Large Showrooms, Hotels & Restaurants, Offices</p>
                            <a class="btn btn-primary" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="plan">
                    <div class="title">
                        <div class="price">
                            <small>Rs.</small>
                            29999
                        </div>
                        PREMIUM PLAN
                    </div>
                    <div>
                        <div class="description">
                            <div class="description-box">
                                <big>72 Service Visits</big>
                                Valid till 365 days from the starting date of the subscription
                            </div>
                            <div class="description-box">
                                <big>90 Minutes TAT</big>
                                We strive to reach your doorstep within 90 minutes<sup>*</sup>
                            </div>
                            <div class="description-box">
                                <big>4 Free Electrical Inspections/year</big>
                                Get your electrical wiring and devices inspected, absolutely free.
                            </div>
                        </div>
                        <div class="description-more">
                            <span class="fui-cmd"></span>
                            <big>USE CASES</big>
                            <p class="info">Ideal for Banks, Hospitals, Educational Institutes and large corporate offices</p>
                            <a class="btn btn-primary" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <small>* T & C applied</small>
        </div><!--/.corporate .container-->

        <div class="container" id="custom-plans">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-wrapper well well-lg">
                <div class="col-sm-9">
                  <div class="cta-wrapper">
                    <h3>Need a custom plan?</h3>
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

  <!-- Services -->
  <div id="services">
      <div class="container">
          <h1 class="text-center">Services Offered</h1>

          <div class="row">
              <div class="col-sm-4">
                  <h5>General Electrical Work</h5>
                  <ul>
                      <li>Switch, Socket & plug repair/installation</li>
                      <li>Table lamp repair/installation</li>
                      <li>Tube light fitting</li>
                      <li>Fuse repair/installation</li>
                      <li>Doorbell repair/installation</li>
                  </ul>
              </div>
              <div class="col-sm-4">
                  <h5>
                      Ceiling, Wall or Exhaust Fan
                  </h5>
                  <ul>
                      <li>Fan installation</li>
                      <li>Fan noise reduction</li>
                      <li>Fan regulator repair/replacement</li>
                      <li>Fan not turning - on</li>
                      <li>Fan capacitor change</li>
                  </ul>

              </div>
              <div class="col-sm-4">
                  <h5>
                      MCB or Fuse Installation
                  </h5>
                  <ul>
                      <li>MCB repair/installation</li>
                      <li>Fuse change</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  

  @include('partials.footer')

</div>

@stop
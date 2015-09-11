@extends('pages.static-layout')

@section('content')

<div class="page-wrapper pricing-page custom-nav">

	@include('partials.nav', ['activeMenu' => 'PRICING'])

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
Without iconic symbolsreally finish your work - for clearly understand.
                  </div>
                  <div class="description-box">
                    <big>10 photos per month</big>
Without iconic symbolsreally finish your work - for clearly understand.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>10,000 users</big>
                  <p class="info">Without iconic symbolsreally finish your work - for clearly understand.</p>
                  <a class="btn btn-primary" href="#">Change to this Plan</a>
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
Without iconic symbolsreally finish your work - for clearly understand.
                  </div>
                  <div class="description-box">
                    <big>10 photos per month</big>
Without iconic symbolsreally finish your work - for clearly understand.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>Unlimited users</big>
                  <p class="info">Without iconic symbolsreally finish your work - for clearly understand.</p>
                  <a class="btn btn-primary" href="#">Change to this Plan</a>
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
Without iconic symbolsreally finish your work - for clearly understand.
                  </div>
                  <div class="description-box">
                    <big>50 photos per month</big>
Without iconic symbolsreally finish your work - for clearly understand.
                  </div>
                </div>
                <div class="description-more">
                  <span class="fui-cmd"></span>
                  <big>50,000 users</big>
                  <p class="info">Without iconic symbolsreally finish your work - for clearly understand.</p>
                  <a class="btn btn-primary" href="#">Change to this Plan</a>
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

		<!-- Billing Faqs -->
      <section class="content-6 v-center">
        <div>
          <div class="container">
            <h3>Pricing and Billing FAQs</h3>
            <div class="row features">
              <div class="col-sm-4 col-sm-offset-2">
                <h6>Easy to use</h6>
                <p>To get started, you select the desired sample and base the entire website on it. It’s that simple!</p>
              </div>
              <div class="col-sm-4 col-sm-offset-1">
                <h6>Variety of designs</h6>
                <p>Each of these beautiful samples you can use as-is or with new blocks from a UI Kit to make your startup.
                </p>
              </div>
            </div>
            <div class="row features">
              <div class="col-sm-4 col-sm-offset-2">
                <h6>User Guide</h6>
                <p>You’ll get a description of each component and learn how to connect and use them.</p>
              </div>
              <div class="col-sm-4 col-sm-offset-1">
                <h6>Responsive Layout</h6>
                <p>Of course we haven’t forgotten about the responsive layout. Create a website with full mobile support.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

	@include('partials.footer')
</div>

@stop

@extends('pages.static-layout')

@section('content')

<div class="page-wrapper contact-page custom-nav">

	@include('partials.nav', ['activeMenu' => 'CONTACT'])

	<section class="contacts-3">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-5">
	          <h3>Get in touch with us</h3>
	          <p>We love to hear from our customers. Call us or shoot an email.</p>
	          <div class="links">
	            <a href="tel:01145574846"><span class="fui-phone"></span> 011 - 4557 4846</a>
	            <br>
	            <a href="mailto:info@mrswitch.in"><span class="fui-mail"></span> info@mrswitch.in</a>
	          </div>
	          <h6>Where to find us</h6>
	          <p>Locate us on the map.</p>
	          <div class="map">
	            <!--map-->
	            <iframe id="address-map" src="" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	          </div>
	        </div>
	        <div class="col-sm-6 col-sm-offset-1">
	          <h3>Want to partner with us? </h3>
	          <p>Fill out the form below to submit your interest.</p>
	          	@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				@if (count($errors) > 0 )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
	          {!! Form::open(array('route' => 'contact', 'class' => 'contact-form', 'id' => 'contact-form')) !!}
	            <label class="h6">Name / Last Name</label>
	            <input type="text" class="form-control" name="name" required>
	            <label class="h6">E-mail</label>
	            <input type="email" class="form-control" name="email" required>
	            <label class="h6">How can we help you?</label>
	            <textarea rows="7" class="form-control" name="message"></textarea>
	            <button type="submit" class="btn btn-primary"><span class="fui-mail"></span></button>
	          {!! Form::close() !!}
	        </div>
	      </div>
	    </div>
	</section>

	@include('partials.footer')

</div>

@stop

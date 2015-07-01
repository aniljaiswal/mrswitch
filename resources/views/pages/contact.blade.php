@extends('pages.default')

@section('content')

<div class="page-wrapper contact-page custom-nav">

	@include('partials.nav', ['activeMenu' => 'CONTACT'])

	<section class="contacts-3">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-5">
	          <h3>Get in touch with us</h3>
	          <p>As a Harvard professor, he was one of the first to explore the relationship in equilibrium.</p>
	          <div class="links">
	            <a href="tel:09873598387"><span class="fui-phone"></span> +91 987 359 83 87</a>
	            <br>
	            <a href="mailto:help@mrswitch.in"><span class="fui-mail"></span> help@mrswitch.in</a>
	          </div>
	          <h6>Where to find us</h6>
	          <p>As a Harvard professor, he was one of the first to explore the relationship in equilibrium.</p>
	          <div class="map">
	            <!--map-->
	            <iframe id="address-map" src="" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	          </div>
	        </div>
	        <div class="col-sm-6 col-sm-offset-1">
	          <h3>You can mail us</h3>
	          <p>As a Harvard professor, he was one of the first to explore the relationship in equilibrium.</p>
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
	            <label class="h6">Message</label>
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
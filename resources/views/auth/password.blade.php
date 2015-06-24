
@extends('pages.default')


@section('content')

<!-- resources/views/auth/password.blade.php -->

<div class="container">
	<div id="passwordbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                  
        <div class="panel panel-info" >
            
            <div class="panel-heading">
                <div class="panel-title">Forgot Password?</div>
            </div>

			<div style="padding-top:30px" class="panel-body" >
				
				@if (count($errors) > 0 )
                    <div id="password-alert" class="alert alert-danger col-sm-12">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

				<form method="POST" action="/password/email" class="form-horizontal" role="form">
				    {!! csrf_field() !!}

				    <div class="form-group">
				       	<label for="email" class="col-md-3 control-label">Email</label>
			            <div class="col-md-9">
			                <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
			            </div>
				    </div>

				    <div class="form-group">
			            <!-- Button -->                                        
			            <div class="col-md-offset-3 col-md-9">
			                <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp;Send Password Reset Link</button>
			            </div>
			        </div>

				</form>
			</div>
		</div>
	</div>
</div>

@stop
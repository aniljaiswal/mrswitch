<!-- resources/views/auth/reset.blade.php -->

@extends('pages.default')


@section('content')


<div class="container">
    <div id="resetbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                  
        <div class="panel panel-info" >
            
            <div class="panel-heading">
                <div class="panel-title">Reset Password?</div>
            </div>

            <div style="padding-top:30px" class="panel-body" >
                
                @if (count($errors) > 0 )
                    <div id="reset-alert" class="alert alert-danger col-sm-12">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="/password/reset" role="form" class="form-horizontal">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email</label>
                        <div class="col-md-8">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">    
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">New Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-info">
                            Reset Password
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@stop
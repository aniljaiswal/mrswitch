<!-- resources/views/auth/login.blade.php -->

@extends('pages.default')


@section('styles')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/auth.css">

@stop


@section('content')
<div class="page-wrapper">
    
    @include('partials.nav')

    <div class="header-7-sub bg-midnight-blue">
        <div id="h-7-pt-main" class="page-transitions pt-perspective">
            <div class="pt-page">
                <section class="h-7-section-5">
                    <div>
                        <div class="background">
                            &nbsp;
                        </div>
                        <header class="header-7"></header>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <h3>Sign Up right now and get 30% off</h3>
                                    <p class="lead">
                                        We’ve created the product that will help
                                        your startup to look even better
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="signup-form">
                                        <form action="/auth/register" method="POST">
                                        {!! csrf_field() !!}
                                            @if (count($errors) > 0 )
                                                <div id="login-alert" class="alert alert-danger col-sm-12">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Your E-mail">
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div>
                                                    <input type="password" class="form-control" placeholder="Confirmation">
                                                </div>
                                            </div>
                                            <div class="additional-links">
                                                By signin up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-large btn-danger">Sign Up</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    @include('partials.footer')

</div>

@stop
<!-- <div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                  
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="/password/email">Forgot password?</a></div>
            </div>

            <div style="padding-top:30px" class="panel-body" >
                @if (count($errors) > 0 )
                    <div id="login-alert" class="alert alert-danger col-sm-12">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email">                                        
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    
                    <div class="input-group">
                      <div class="checkbox">
                        <label>
                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                        </label>
                      </div>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <button id="btn-login" type="submit"class="btn btn-success">Login  </button>
                            
                         </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account! 
                            <a href="/auth/register" >Sign Up Here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

@section('scripts')

<script src="/js/libs/modernizr.custom.js"></script>
<script src="/js/libs/page-transitions.js"></script>
<script src="/js/libs/startup-kit.js"></script>

@stop
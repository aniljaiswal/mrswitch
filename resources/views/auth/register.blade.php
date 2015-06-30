<!-- resources/views/auth/login.blade.php -->

@extends('pages.default')


@section('styles')

<link rel="stylesheet" href="/css/app.css">
<!-- <link rel="stylesheet" href="/css/auth.css"> -->

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
                        <header class="header-7">
                            <div class="container">
                                <a class="brand" href="#"><img src="/img/logo-1@2x.png" width="50" height="50" alt=""> Startup</a>
                            </div>
                        </header>

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

@section('scripts')

<script src="js/libs/modernizr.custom.js"></script>
<script src="js/libs/page-transitions.js"></script>
<script src="js/libs/startup-kit.js"></script>

@stop
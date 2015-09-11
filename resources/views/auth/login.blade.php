@extends('pages.static-layout')

@section('content')
<div class="page-wrapper custom-nav static-pages">

    @include('partials.nav', ['activeMenu' => 'LOG IN'])

    <section class="header-6 v-center">

        <div class="container">
            <div id="formbox" style="margin-top:0px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <legend>
                        Log In
                    </legend>

                    <div style="padding-top:30px" class="panel-body" >

                        @include('partials.errors')

                        <form id="formArea" class="form-horizontal" role="form" method="POST" action="/auth/login">
                            {!! csrf_field() !!}

                            <input id="login-email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Password" required>


                            <input type="submit" name="commit" value="Log In" />

                            <p>
                                <a href="/password/email">Forgot password?</a>
                            </p>
                            <p>
                                Don't have an account? <a href="/auth/register"><b>Sign Up</b></a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('partials.footer')

</div>

@stop

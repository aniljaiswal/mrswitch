@extends('pages.default')

@section('content')

<div class="page-wrapper custom-nav static-pages">
    
    @include('partials.nav')

    <section class="header-6 v-center">

        <div class="container">
            <div id="formbox" style="margin-top:0px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                  
                <div class="panel panel-info" >
                    <legend>
                        Sign Up
                    </legend>

                    <div style="padding-top:30px" class="panel-body" >
                        
                        @include('partials.errors')

                        <form id="formArea" class="form-horizontal" role="form" method="POST" action="/auth/register">
                            {!! csrf_field() !!}
                            
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
                        
                            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required>

                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmation" autocomplete="off" required>

                            <input type="submit" name="commit" value="Sign Up" />

                            <p>
                                By signin up you agree to <a href="/terms">Terms of Use</a> and <a href="/privacy">Privacy Policy</a>
                            </p>
                            <p>
                                Already have an account? <a href="/auth/login"><b>Log In</b></a>
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
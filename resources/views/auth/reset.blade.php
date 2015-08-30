@extends('pages.default')

@section('content')

<div class="page-wrapper custom-nav static-pages">
    
    @include('partials.nav')

    <section class="header-6 v-center">

        <div class="container">
            <div id="formbox" style="margin-top:0px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                  
                <div class="panel panel-info" >
                    <legend>
                        Reset Password
                    </legend>

                    <div style="padding-top:30px" class="panel-body" >
                       
                       @include('partials.errors')

                        <form id="formArea" class="form-horizontal" role="form" method="POST" action="/password/reset">
                            {!! csrf_field() !!}

                            <input type="hidden" name="token" value="{{ $token }}">
                            
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="off">
                            
                            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">

                            <input type="password" class="form-control" name="password_confirmation" autocomplete="off" placeholder="Confirmation">

                            <input type="submit" name="commit" value="Reset my password" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    
    @include('partials.footer')

</div>

@stop
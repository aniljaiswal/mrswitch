@extends('pages.static-layout')

@section('content')

    <div class="page-wrapper custom-nav static-pages">
        @include('partials.nav')

        <section class="header-6 v-center">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="text-center">ABOUT US</h3>

                    </div>
                </div>
            </div>

        </section>

        @include('partials.footer')
    </div>

@stop

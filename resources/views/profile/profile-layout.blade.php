@extends('default')

@section('styles')
  <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />
@stop

@section('scripts')
  <script src="{{ elixir('js/app.js') }}"></script>

  @yield('extra_scripts')

@stop

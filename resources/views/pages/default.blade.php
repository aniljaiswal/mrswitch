<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="nvAxuckUOzII4uyL6uFdsbzol51YQ6W4Goo4GoE8bq0" />

    <title>@if($title){{$title}} @else Mr. Switch | 24x7 Electricians in Delhi, NCR.@endif</title>
    
    <link rel="icon" type="image/ico" href="/favicon.ico">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
    <link href="https://plus.google.com/114849396444703717315" rel="publisher" />
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}" />
    
</head>
<body>

	@yield('content')
    
    @if(App::environment('production'))
        @include('partials.analytics')
    @endif

    <script src="{{ elixir('js/all.js') }}"></script>
    <script src="https://cdn.supportkit.io/supportkit.min.js"></script>
    <script type="text/javascript">
        SupportKit.init({appToken: '532kyj8cpzal6xmkcv2ep8zko'});
    </script>
</body>
</html>
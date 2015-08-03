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
	
	<script src="{{ elixir('js/all.js') }}"></script>
    <script type="text/javascript" async defer src="https://apis.google.com/js/platform.js?publisherid=114849396444703717315"></script>
    <script src="https://cdn.supportkit.io/supportkit.min.js"></script>
    <script type="text/javascript">
        SupportKit.init({appToken: '532kyj8cpzal6xmkcv2ep8zko'});
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-65895567-1', 'auto');
        ga('require', 'linkid', 'linkid.js');
        ga('send', 'pageview');
    </script>
    <!-- start Mixpanel -->
    <script type="text/javascript">
        (function(f,b){if(!b.__SV){var a,e,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
            for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=f.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";e=f.getElementsByTagName("script")[0];e.parentNode.insertBefore(a,e)}})(document,window.mixpanel||[]);
        mixpanel.init("5c5b08922e5165198e1bb03f529f811a");
    </script>
    <!-- end Mixpanel -->
</body>
</html>
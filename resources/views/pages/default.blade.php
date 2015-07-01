<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="nvAxuckUOzII4uyL6uFdsbzol51YQ6W4Goo4GoE8bq0" />

    <title>@if($title){{$title}} @else Mr. Switch @endif</title>

	<link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link href="https://plus.google.com/114849396444703717315" rel="publisher" />
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}" />
    
</head>
<body>

	@yield('content')
	
	<script src="{{ elixir('js/all.js') }}"></script>
    <script type="text/javascript" async defer src="https://apis.google.com/js/platform.js?publisherid=114849396444703717315"></script>
    <!-- Start of Inbox Widget script -->
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("//assets.zendesk.com/embeddable_framework/main.js","mrswitch.zendesk.com");/*]]>*/</script>
    <!-- End of Inbox Widget script -->
</body>
</html>
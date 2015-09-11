@extends('pages.static-layout')

@section('content')

<div class="page-wrapper custom-nav static-pages">
	@include('partials.nav')

	<section class="header-6 v-center">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="text-center">JOIN US!</h3>
					<br>
					<br>
					<div class="recruitbox">
						<script type="text/javascript" id="rbox-loader-script">
							if(!window._rbox){
							_rbox = { host_protocol:document.location.protocol, ready:function(cb){this.onready=cb;} };
							(function(d, e) {
							    var s, t, i, src=['/static/client-src-served/widget/33985/rbox_api.js', '/static/client-src-served/widget/33985/rbox_impl.js'];
							    t = d.getElementsByTagName(e); t=t[t.length - 1];
							    for(i=0; i<src.length; i++) {
							        s = d.createElement(e); s.src = _rbox.host_protocol + '//w.recruiterbox.com' + src[i];
							        t.parentNode.insertBefore(s, t.nextSibling);
							    }})(document, 'script');
							}
						</script>
					</div>
				</div>
			</div>
		</div>

	</section>

	@include('partials.footer')
</div>

@stop

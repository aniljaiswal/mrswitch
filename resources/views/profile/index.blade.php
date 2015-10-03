@extends('profile.profile-layout')

@section('content')

@include('profile.partials.nav')

<section id="mainProfileContent">
	<div class="container">
		<div class="row">
			@include('profile.partials.sidebar')
			<div class="col-main col-sm-9">
				<div class="my-account">
					<div class="dashboard">
						<div class="row">
							<div class="col-sm-7">
								<ol class="breadcrumb pull-left hidden-xs">
									<li class="Home">
										<a href="/" title="Home">Home</a>
									</li>
									<li class="Profile">
										Profile
									</li>                                                                                            </li>
								</ol>
								<div class="page-title clearfix">
									<h3><strong><u>Book Now</u></strong></h3>
								</div>
								<div class="row">
									<div class="service-form col-sm-12">
										@include('profile.partials.booking-form')
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								@include('profile.partials.address')
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<hr class="arrow-down">
								<div class="box-account box-recent">
									<div class="box-head">
										<h3><strong>Recent Bookings</strong></h3>
										<p><a href="">View All</a></p>
									</div>
									<div class="custom-table-wrapper">
										@include('profile.partials.recent-bookings')
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	@include('partials.footer')

@stop

@section('extra_scripts')
<script type="text/javascript">
	$('.datetimepicker').datetimepicker({
		format:'Y-m-d H:i:s',
		minDate:0,
		minTime:0,
		{allowTimes:[
		  '09:00', '10:00', '11:00', '12:00',
		  '13:00', '14:00', '15:00', '16:00',
		  '17:00', '18:00', '19:00', '20:00',
		  '21:00'
	  	]},
	  	todayButton: true
	});
</script>
@stop

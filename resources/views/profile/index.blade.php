@extends('profile.profile-layout')

@section('content')

@include('profile.partials.nav')

{{-- <section id="after-header">
	<div class="topic">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-8">
					<ol class="breadcrumb pull-right hidden-xs">
						<li class="Home">
							<a href="/" title="Home">Home</a>
						</li>
						<li class="Dashboard">
							Dashboard
						</li>                                                                                            </li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<section id="mainContent">
	<div class="container">
		<div class="row">
			<aside class="col-left sidebar col-sm-3">
				<div class="col-sm-11">
					<div class="user-avatar text-center">
						<img class="img-responsive center-block" src="http://localhost.mrswitch.app/skin/frontend/mrswitch/default/images/photo-1.jpg" alt="...">
						<p>{{Auth::user()->name}}</p>
					</div>
					<div class="panel panel-default">
						<ul>
							<li class="current"><strong>Account Dashboard</strong></li>
							<li><a href="">Edit Profile</a></li>
							<li><a href="">My Subscriptions</a></li>
							<li><a href="">My Requests</a></li>
							<li><a href="">Payment History</a></li>
							<li><a href=""> Help & Support</a></li>
						</ul>
					</div>
				</div>
			</aside>
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
										<form action="">
											<div class="form-group">
												<label for="service-time">Choose a time</label>
												<input type="text" placeholder="yyyy-mm-dd hh:mm" name="service-time" id="service-time" class="form-control datetimepicker">
											</div>
											<div class="form-group">
												<label for="service-type">Select service</label>
												<select data-style="selectpicker" class="selectpicker" id="service-type" name="service-type">
													<option value="0">General Electric Work</option>
													<option value="1">MCB tripping</option>
													<option value="2">Tubelight change</option>
												</select>
											</div>
											<div class="form-group">
												<label for="comments">Description(Optional):</label>
												<textarea class="form-control" name="comments" rows="5" cols="40"></textarea>
											</div>
											<button type="submit" class="btn btn-wide btn-primary mrm">Submit</button>
											<button type="reset" class="btn btn-wide btn-default">Cancel</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="box-account box-info">
									<div class="col2-set">
										<div class="box">
											<div class="box-title">
												<h3>Address Book</h3>
												<a class="btn btn-info" href="http://localhost.mrswitch.app/customer/address/">Manage Addresses</a>
												<hr/>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4>Address</h4>
												</div>
												<div class="panel-body">
													<address>
														Renuka Bazala<br/>

														D/o Rattan Lal, Village Nandpur Gujran<br />
														P/o Miran Sahib, Tehsil R. S. Pura<br />


														Jammu,  Jammu &amp; Kashmir, 181101<br/>
														India<br/>
														T: 09596058686

														<br />
														<a href="http://localhost.mrswitch.app/customer/address/edit/id/4/">Edit Address</a>
													</address>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<hr class="arrow-down">
								<div class="box-account box-recent">
									<div class="box-head">
										<h3><strong><u>Recent Visits</u></strong></h3>
										<a href="http://localhost.mrswitch.app/sales/order/history/">View All</a>    </div>
										<div class="custom-table-wrapper">
											<table class="data-table table" id="my-orders-table">
												<col width="1" />
												<col width="1" />
												<col />
												<col width="1" />
												<col width="1" />
												<col width="1" />
												<thead>
													<tr>
														<th>Order # </th>
														<th>Date</th>
														<th class="recent-order-name">Ship To</th>
														<th><span class="nobr">Order Total</span></th>
														<th>Status</th>
														<th>&nbsp;</th>
													</tr>
												</thead>
												<tbody class="text-center">
													<tr>
														<td width="15%">100000002</td>
														<td width="15%"><span class="nobr">1/4/2015</span></td>
														<td width="15%" class="recent-order-name">Renuka Bazala</td>
														<td width="15%" ><span class="price">Rs1,163.00</span></td>
														<td width="15%"><em>Delivered</em></td>
														<td class="text-left">
															<span class="nobr">
																<a href="http://localhost.mrswitch.app/sales/order/view/order_id/2/">View Order</a>
																<span class="divider">|</span> <a href="http://localhost.mrswitch.app/sales/order/reorder/order_id/2/" class="link-reorder">Reorder</a>
															</span>
														</td>
													</tr>
													<tr>
														<td width="15%">100000001</td>
														<td width="15%"><span class="nobr">1/1/2015</span></td>
														<td width="15%" class="recent-order-name">ANIL KUMAR</td>
														<td width="15%" ><span class="price">Rs1,163.00</span></td>
														<td width="15%"><em>Pending</em></td>
														<td class="text-left">
															<span class="nobr">
																<a href="http://localhost.mrswitch.app/sales/order/view/order_id/1/">View Order</a>
																<span class="divider">|</span> <a href="http://localhost.mrswitch.app/sales/order/reorder/order_id/1/" class="link-reorder">Reorder</a>
															</span>
														</td>
													</tr>
												</tbody>
											</table>
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

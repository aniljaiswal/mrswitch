@extends('profile.profile-layout')

@section('content')

@include('profile.partials.nav')

<section id="after-header">
	<div class="topic">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<!--Placeholder-->
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
</section>

<section id="mainContent">
	<div class="container">
		<div class="row">
			<aside class="col-left sidebar col-sm-4">
				<div class="col-sm-11">
					<div class="user-avatar text-center">
						<img class="img-responsive center-block" src="http://localhost.mrswitch.app/skin/frontend/mrswitch/default/images/photo-1.jpg" alt="...">
						John Doe
						<p class="text-muted">Project Manager</p>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><span>My Account</span></strong>
						</div>
						<div class="panel-body">
							<ul>
								<li class="current"><strong>Account Dashboard</strong></li>
								<li><a href="http://localhost.mrswitch.app/customer/account/edit/">Account Information</a></li>
								<li><a href="http://localhost.mrswitch.app/customer/address/">Address Book</a></li>
								<li><a href="http://localhost.mrswitch.app/sales/order/history/">My Orders</a></li>
								<li><a href="http://localhost.mrswitch.app/sales/billing_agreement/">Billing Agreements</a></li>
								<li><a href="http://localhost.mrswitch.app/sales/recurring_profile/">Recurring Profiles</a></li>
								<li><a href="http://localhost.mrswitch.app/review/customer/">My Product Reviews</a></li>
								<li><a href="http://localhost.mrswitch.app/tag/customer/">My Tags</a></li>
								<li><a href="http://localhost.mrswitch.app/oauth/customer_token/">My Applications</a></li>
								<li><a href="http://localhost.mrswitch.app/newsletter/manage/">Newsletter Subscriptions</a></li>
								<li class="last"><a href="http://localhost.mrswitch.app/downloadable/customer/products/">My Downloadable Products</a></li>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<div class="col-main col-sm-8">
				<div class="my-account"><div class="dashboard">
					<div class="row">
						<div class="col-sm-7">
							<div class="page-title">
								<h2 class="first-child">My Dashboard</h2>
							</div>
							<div class="welcome-msg">
								<div class="info-board info-board-blue">
									<h4 class="second-child">Hello, Anil Jaiswal!</h4>
									<p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
								</div>
							</div>
							<div class="box-head">
								<h2>Account Information</h2>
							</div>
							<div class="col2-set">
								<div class="col-1">
									<div class="box">
										<div class="box-title">
											<h3>Contact Information</h3>
											<a href="http://localhost.mrswitch.app/customer/account/edit/">Edit</a>
										</div>
										<div class="box-content">
											<p>
												Anil Jaiswal<br />
												er.anil.jaiswal@gmail.com<br />
												<a href="http://localhost.mrswitch.app/customer/account/edit/changepass/1/">Change Password</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-2">
									<div class="box">
										<div class="box-title">
											<h3>Newsletters</h3>
											<a href="http://localhost.mrswitch.app/newsletter/manage/">Edit</a>
										</div>
										<div class="box-content">
											<p>
												You are currently subscribed to 'General Subscription'.                                    </p>
											</div>
										</div>
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
													<h4>Default Billing Address</h4>
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
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4>Default Shipping Address</h4>
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
							<div class="col-sm-12">
								<hr class="arrow-down">
								<div class="box-account box-recent">
									<div class="box-head">
										<h2>Recent Orders</h2>
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

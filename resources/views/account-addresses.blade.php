@extends('layouts.app')
@section('title','Addresses')
@section('content')

<div class="site__body">
	<div class="block-space block-space--layout--after-header"></div>
	<div class="block">
		<div class="container container--max--xl">
			<div class="row">
				<div class="col-12 col-lg-3 d-flex">
					<div class="account-nav flex-grow-1">
						<h4 class="account-nav__title">Navigation</h4>
						<ul class="account-nav__list">
							<li class="account-nav__item"><a href="/dashboard">Dashboard</a></li>
							<li class="account-nav__item"><a href="/garage">Garage</a></li>
							<li class="account-nav__item"><a href="/account-profile">Edit Profile</a></li>
							<li class="account-nav__item"><a href="/account-orders">Order History</a></li>
							<li class="account-nav__item account-nav__item--active"><a href="/account-addresses">Addresses</a>
							</li>
							<li class="account-nav__item"><a href="/account-password">Password</a></li>
							<li class="account-nav__divider" role="presentation"></li>
							<li class="account-nav__item"><a href="/login">Logout</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-9 mt-4 mt-lg-0">
					<div class="addresses-list"><a href="#" class="addresses-list__item addresses-list__item--new">
							<div class="addresses-list__plus"></div>
							<div class="btn btn-secondary btn-sm">Add New</div>
						</a>
						<div class="addresses-list__divider"></div>
						<div class="addresses-list__item card address-card">
							<div class="address-card__badge tag-badge tag-badge--theme">Default</div>
							<div class="address-card__body">
								<div class="address-card__name">Helena Garcia</div>
								<div class="address-card__row">Random Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178
								</div>
								<div class="address-card__row">
									<div class="address-card__row-title">Phone Number</div>
									<div class="address-card__row-content">38 972 588-42-36</div>
								</div>
								<div class="address-card__row">
									<div class="address-card__row-title">Email Address</div>
									<div class="address-card__row-content">helena@example.com</div>
								</div>
								<div class="address-card__footer"><a href="#">Edit</a>&nbsp;&nbsp; <a href="#">Remove</a></div>
							</div>
						</div>
						<div class="addresses-list__divider"></div>
						<div class="addresses-list__item card address-card">
							<div class="address-card__body">
								<div class="address-card__name">Jupiter Saturnov</div>
								<div class="address-card__row">RandomLand<br>4b4f53, MarsGrad<br>Sun Orbit, 43.3241-85.239</div>
								<div class="address-card__row">
									<div class="address-card__row-title">Phone Number</div>
									<div class="address-card__row-content">ZX 971 972-57-26</div>
								</div>
								<div class="address-card__row">
									<div class="address-card__row-title">Email Address</div>
									<div class="address-card__row-content">jupiter@example.com</div>
								</div>
								<div class="address-card__footer"><a href="#">Edit</a>&nbsp;&nbsp; <a href="#">Remove</a></div>
							</div>
						</div>
						<div class="addresses-list__divider"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="block-space block-space--layout--before-footer"></div>
	@stop
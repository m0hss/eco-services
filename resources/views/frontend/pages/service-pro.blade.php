@extends('frontend.layouts.master')

@section('title','ECO-Services|| Services Pro')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Services Pro</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  <!-- main services pro -->

  <section class="services section">
		<div class="container">
			<div class="well-title center">
				<h2>our services</h2>
			</div>
			<div class="row" style="margin-top: 22px;">
				<div class="grid_6">
					<h3>Unpacking cartons and blisters</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Hard disk destruction (Type H1 - DIN 66399H)</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Floor with elevator</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Packaging</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Equipment sorting</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Preparation visit</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Creditors and banks</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
				<div class="grid_6">
					<h3>Refrigerant extraction CONVENUE</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
					<a href="#" class="btn">Read More</a>
				</div>
			</div>
		</div>
	</section>

  <section class="well9 section">
		<div class="container">
			<div class="well-title center wow bounceInDown animated">
				<h2>Primary focus on the following asset categories:</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
			</div>
			<ul class="index-list">
				<li class="wow bounceInLeft animated"><p>High quality leased office and retail portfolios</p></li>
				<li class="wow bounceInRight animated"><p>Office buildings in prime locations that can be transformed over a 2 to 6 year period into stable assets</p></li>
				<li class="wow bounceInLeft animated"><p>Existing retail centers, either shopping centers or retail parks, that can be repositioned or in which we can increase occupancy and/or annual rent through active asset management</p></li>
				<li class="wow bounceInRight animated"><p>Corporate purchases and restructuring</p></li>
			</ul>
		</div>
	</section>

	 <!-- End main services pro -->

	@include('frontend.layouts.newsletter')
@endsection

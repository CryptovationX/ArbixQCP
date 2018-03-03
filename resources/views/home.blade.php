@extends('layouts.main')

@section('stylesheets')

    <meta charset="utf-8" />
	<meta name="author" content="Pondet Ananchai" />
	<meta name="description" content="PerfectplanX">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>PerfectplanX</title>
	<link rel="shortcut icon" type="image/x-ico" href="images/logos/Token.ico" />

	<!-- Stylesheets -->

	<link href="{{ asset('/css/style2.css') }}" rel="stylesheet" title="main-css">



@endsection

@section('content')

    	<section class="background1">
		<div class="container">
			<div class="row mb30">
				<div class=" section-title text-center">
					<h2 style="margin-bottom:15px; font-size:20px;">Arbitrage Alpha Robo-advisor (Arbot)</h2>
					<p class="no-margin small" >This Arbot (beta) version is developed by Cryptovation.co specially for 'Perfect Plan' to use internally as an asset management tool</p>
					<span class="section-divider mb5"></span>
				</div>
				<!-- /.column -->
			</div>
			<!-- /.row -->

			<div class="row">
				
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 bottomReveal">
					<ul class="plan plan1">
						<img src="{{ asset('/image/Price.png') }}" class="logo-size"></img>
						<li class="plan-name">Live Price</li>
						<li class="plan-price">
							<!-- <strong>Free</strong> / month <br><br> -->
							<a class="btn btn-default btn-lg" href="#">Use Now!</a>
						</li>
						<!-- <li><strong>400GB</strong> Bandwidth</li>
						<li><strong>10</strong> Email Address</li>
						<li><strong>Forum</strong> Support</li>
						<li><strong>No</strong> Squirel</li> -->
					</ul>
				</div>


				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-xs topReveal">
					<ul class="plan plan2">
						<img src="{{ asset('/image/Oneway.png') }}" class="logo-size"></img>
						<li class="plan-name">One-way</li>
						<li class="plan-price">
							<!-- <strong>Free</strong> / month <br><br> -->
							<a class="btn btn-default btn-lg" href="#">Use Now!</a>
						</li>
						<!-- <li><strong>400GB</strong> Bandwidth</li>
						<li><strong>10</strong> Email Address</li>
						<li><strong>Forum</strong> Support</li>
						<li><strong>No</strong> Squirel</li> -->
					</ul>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs bottomReveal">
					<ul class="plan plan3">
						<img src="{{ asset('/image/Loop.png') }}" class="logo-size"></img>
						<li class="plan-name">Loop</li>
						<li class="plan-price">
							<!-- <strong>$9</strong> / month <br><br> -->
							<a class="btn btn-default btn-lg" href="#">Use Now!</a>
						</li>
						<!-- <li><strong>1024GB</strong> Bandwidth</li>
						<li><strong>Unlimited</strong> Email Address</li>
						<li><strong>Forum</strong> Support</li>
						<li><strong>Free</strong> Squirel</li> -->
					</ul>
				</div>


				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs topReveal">
					<ul class="plan plan4">
						<img src="{{ asset('/image/Tri3.png') }}" class="logo-size"></img>
						<li class="plan-name">Tri-angle</li>
						<li class="plan-price">
							<!-- <strong>$19</strong> / month <br><br> -->
							<a class="btn btn-default btn-lg" href="#">Use Now!</a>
						</li>
						<!-- <li><strong>1024GB</strong> Bandwidth</li>
						<li><strong>Unlimited</strong> Email Address</li>
						<li><strong>Forum</strong> Support</li>
						<li><strong>Free</strong> Squirel</li> -->
					</ul>
				</div>

				
				<!-- Item 1 -->
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 bottomReveal">
						<ul class="plan plan1 plan5">
							<img src="{{ asset('/image/Red2.png') }}" class="logo-size"></img>
							<li class="plan-name">Red Phoenix</li>
							<li class="plan-price">
								<!-- <strong>$29</strong> / month <br><br> -->
								<a class="btn btn-default btn-lg" href="#">Use Now!</a>
							</li>
							<!-- <li><strong>400GB</strong> Bandwidth</li>
							<li><strong>10</strong> Email Address</li>
							<li><strong>Forum</strong> Support</li>
							<li><strong>No</strong> Squirel</li> -->
						</ul>
					</div>
					<!-- /.column -->
	
					<!-- Item 2 -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-xs topReveal">
						<ul class="plan plan2 plan6">
							<img src="{{ asset('/image/Black1.png') }}" class="logo-size"></img>
							<li class="plan-name">Black Panter</li>
							<li class="plan-price">
								<!-- <strong>$39</strong> / month <br><br> -->
								<a class="btn btn-default btn-lg" href="#">Use Now!</a>
							</li>
							<!-- <li><strong>400GB</strong> Bandwidth</li>
							<li><strong>10</strong> Email Address</li>
							<li><strong>Forum</strong> Support</li>
							<li><strong>No</strong> Squirel</li> -->
						</ul>
					</div>
					<!-- /.column -->
	
					<!-- Item 3 -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs bottomReveal">
						<ul class="plan plan3 plan7">
							<img src="{{ asset('/image/Blue3.png') }}" class="logo-size"></img>
							<li class="plan-name">Whale Catcher</li>
							<li class="plan-price">
								<!-- <strong>$199</strong> / month <br><br> -->
								<a class="btn btn-default btn-lg" href="#">Use Now!</a>
							</li>
							<!-- <li><strong>1024GB</strong> Bandwidth</li>
							<li><strong>Unlimited</strong> Email Address</li>
							<li><strong>Forum</strong> Support</li>
							<li><strong>Free</strong> Squirel</li> -->
						</ul>
					</div>
					<!-- /.column -->
	
					<!-- Item 4 -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mt30-sm mt30-xs topReveal">
						<ul class="plan plan4">
							<img src="{{ asset('/image/Green1.png') }}" class="logo-size"></img>
							<li class="plan-name">Green Python</li>
							<li class="plan-price plan8">
								<!-- <strong>$999</strong> / month <br><br> -->
								<a class="btn btn-default btn-lg" href="#">Use Now!</a>
							</li>
							<!-- <li><strong>1024GB</strong> Bandwidth</li>
							<li><strong>Unlimited</strong> Email Address</li>
							<li><strong>Forum</strong> Support</li>
							<li><strong>Free</strong> Squirel</li> -->
						</ul>
					</div>
			</div>
	</section>

@endsection
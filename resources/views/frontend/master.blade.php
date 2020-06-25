<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('frontend') }}/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Home | Ruft Blog</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/linearicons.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
</head>

<body>
	<!-- Start header Area -->
	<header id="header">
		<div class="container box_1170 main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="{{ asset('frontend') }}/img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
						<li class="menu-has-children"><a href="">Category</a>
							<ul>
								<li><a href="{{ route('category.post') }}">Elements</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="{{ route('post') }}">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End header Area -->

	<!-- Start banner Area -->
	@yield('banner-section')
	<!-- End banner Area -->


	<!-- Start main body Area -->
	<div class="main-body section-gap mt--30">
		<div class="container box_1170">
			<div class="row">
				@yield('content')

				<div class="col-lg-4 sidebar">
					<div class="single-widget search-widget">
						<form class="example" action="#" style="margin:auto;max-width:300px">
							<input type="text" placeholder="Search Posts" name="search2">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					<!-- <div class="single-widget protfolio-widget">
						<img class="img-fluid" src="{{ asset('frontend') }}/img/blog/user2.png" alt="">
						<a href="#">
							<h4>Charlie ALison Barber</h4>
						</a>
						<div class="desigmation">
							<p>Senior blog writer</p>
						</div>
						<p>
							Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend
							money on boot camp whenyou can get. Boot camps have itssuppor ters andits detractors.
						</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div> -->

					<div class="single-widget popular-posts-widget">
						<h4 class="title">Popular Posts</h4>
						<div class="blog-list ">
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="{{ asset('frontend') }}/img/blog/r1.jpg" alt="">
								</div>
								<div class="popular-details">
									<a href="blog-details.html">
										<h4>Space Final Frontier</h4>
									</a>
									<p class="text-uppercase">02 hours ago</p>
								</div>
							</div>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="{{ asset('frontend') }}/img/blog/r2.jpg" alt="">
								</div>
								<div class="popular-details">
									<a href="blog-details.html">
										<h4>The Amazing Hubble</h4>
									</a>
									<p class="text-uppercase">02 hours ago</p>
								</div>
							</div>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="{{ asset('frontend') }}/img/blog/r3.jpg" alt="">
								</div>
								<div class="popular-details">
									<a href="blog-details.html">
										<h4>Astronomy Astrology</h4>
									</a>
									<p class="text-uppercase">02 hours ago</p>
								</div>
							</div>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="{{ asset('frontend') }}/img/blog/r4.jpg" alt="">
								</div>
								<div class="popular-details">
									<a href="blog-details.html">
										<h4>Asteroids telescope</h4>
									</a>
									<p class="text-uppercase">02 hours ago</p>
								</div>
							</div>
						</div>
					</div>

					<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						<ul>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Techlology</p> <span>37</span>
								</a></li>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Lifestyle</p> <span>24</span>
								</a></li>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Fashion</p> <span>59</span>
								</a></li>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Art</p> <span>29</span>
								</a></li>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Food</p> <span>15</span>
								</a></li>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Architecture</p> <span>09</span>
								</a></li>
							<li><a href="#" class="justify-content-between align-items-center d-flex">
									<p>Adventure</p> <span>44</span>
								</a></li>
						</ul>
					</div>

					<div class="single-widget newsletter-widget">
						<h4 class="title">Newsletter</h4>
						<div id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="">
								<div class="form-group" style="width: 100%">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<button class="primary-btn text-uppercase">
										Subscribe Now
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Start main body Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li><img src="{{ asset('frontend') }}/img/i1.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i2.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i3.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i4.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i5.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i6.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i7.jpg" alt=""></li>
							<li><img src="{{ asset('frontend') }}/img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{ asset('frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="{{ asset('frontend') }}/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('frontend') }}/js/easing.min.js"></script>
	<script src="{{ asset('frontend') }}/js/hoverIntent.js"></script>
	<script src="{{ asset('frontend') }}/js/superfish.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
	<script src="{{ asset('frontend') }}/js/waypoints.min.js"></script>
	<script src="{{ asset('frontend') }}/js/mail-script.js"></script>
	<script src="{{ asset('frontend') }}/js/main.js"></script>
</body>

</html>
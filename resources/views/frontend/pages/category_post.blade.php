@extends('frontend.master')

@section('banner-section')

	@include('frontend.includes._category_post_banner')
	
@endsection


@section('content')

	<div class="col-lg-8 post-list">
		<!-- Start Post Area -->
		<section class="post-area">
			<div class="row">
				<!-- Single Post Short Description -->
				<div class="col-lg-6 col-md-6">
					<div class="single-post-item short">
						<figure>
							<img class="post-img img-fluid" src="{{ asset('frontend') }}/img/category/c1.jpg" alt="">
						</figure>
						<h3>
							<a href="blog-details.html">It’s hurricane season but we are
								visiting hilton head island</a>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua.</p>
						<a href="blog-details.html" class="primary-btn text-uppercase mt-15">continue Reading</a>
						<div class="post-box">
							<div class="d-flex">
								<div>
									<a href="#">
										<img src="{{ asset('frontend') }}/img/author/a1.png" alt="">
									</a>
								</div>
								<div class="post-meta">
									<div class="meta-head">
										<a href="#">Marvel Maison</a>
									</div>
									<div class="meta-details">
										<ul>
											<li>
												<a href="#">
													<span class="lnr lnr-calendar-full"></span>
													13th Oct, 2018
												</a>
											</li>
											<li>
												<a href="#">
													<span class="lnr lnr-bubble"></span>
													03
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

	
				<!-- Pagination of Posts -->
				<div class="col-lg-12">
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-arrow-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item"><a href="#" class="page-link">01</a></li>
							<li class="page-item active"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">04</a></li>
							<li class="page-item"><a href="#" class="page-link">09</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-arrow-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<!-- Start Post Area -->
	</div>

@endsection
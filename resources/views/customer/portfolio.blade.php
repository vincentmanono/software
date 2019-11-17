@extends('layouts.customermain')

@section('content')

		<!-- Start Search Popup -->
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Portfolio</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Portfolio</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Portfolio Area -->
		<section class="wn__portfolio__area gallery__masonry__activation bg--white mt--40 pb--100">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="gallery__menu">
                            <button data-filter=".cat--1" >Products we have interracted with and sold</button>

                      	</div>
					</div>
				</div>
				<div class="row masonry__wrap">
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--1">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/1.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/1.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>Blender 3D rendering & animatioin software</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/2.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/2.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>BullGuard Internet Security 2013</h6>
								<p>BullGuard</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/3.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/3.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>CD/DVD Burner Software</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/4.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/4.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>4 Full CAD Software Programs</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--5">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/5.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/5.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>2D Computer Aided Design SOftware</h6>
								<p>Draft Sight</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/6.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/6.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>7 Electrical Training Manuals</h6>
								<p>training specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/7.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/7.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>Flight Gear Pro Simulation Software</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/8.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/8.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>4 Full CAD Suite Software Programs</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--5">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/9.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/9.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>PDF Creater Adobe Acrobat Alternative</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--2">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/10.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/10.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>Poster Maker Creation Software</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--3">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/11.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/11.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>Synfig 2D Animation Software</h6>
								<p>software specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
					<!-- Start Single Portfolio -->
					<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12 gallery__item cat--4">
						<div class="portfolio">
							<div class="thumb">
								<a href="portfolio-details.html">
									<img src="{{ asset('assets/images/portfolio/md-img/12.jpg') }}" alt="portfolio images">
								</a>
								<div class="search">
									<a href="{{ asset('assets/images/portfolio/md-img/12.jpg') }}" data-lightbox="grportimg" data-title="My caption"><i class="zmdi zmdi-search"></i></a>
								</div>

							</div>
							<div class="content">
								<h6>6 Plumbing Manual Training Software</h6>
								<p>Training specialists</p>
							</div>
						</div>
					</div>
					<!-- End Single Portfolio -->
				</div>
			</div>
		</section>
		<!-- End Portfolio Area -->

@endsection

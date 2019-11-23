@extends('layouts.customer')

@section('content')


<div class="banner">

		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner3">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			<div class="w3l_banner_nav_right_banner3_btm">
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="asset/images/13.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
						</div>
					</div>
					<h4>Utensils</h4>
					<ol>
						<li>sunt in culpa qui officia</li>
						<li>commodo consequat</li>
						<li>sed do eiusmod tempor incididunt</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="asset/images/14.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
						</div>
					</div>
					<h4>Hair Care</h4>
					<ol>
						<li>enim ipsam voluptatem officia</li>
						<li>tempora incidunt ut labore et</li>
						<li>vel eum iure reprehenderit</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="asset/images/15.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
						</div>
					</div>
					<h4>Cookies</h4>
					<ol>
						<li>dolorem eum fugiat voluptas</li>
						<li>ut aliquid ex ea commodi</li>
						<li>magnam aliquam quaerat</li>
					</ol>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid">
                <h3>Popular Brands</h3>

                @if (count($categories) > 0)

                    @foreach ($categories as $category)
                    <div class="w3ls_w3l_banner_nav_right_grid1">
                            <h6>{{ $category->name }}</h6>

                            @if (count($category->products) > 0)
                            @foreach ($category->products as $product)
                            <div class="col-md-3 w3ls_w3l_banner_left">
                                    <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid_pos">
                                            <img src="/asset/images/offer.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="single.html"><img src="/storage/images/{{ $product->image }}" alt=" " class="img-responsive" /></a>
                                                        <p>{{ $product->name }}</p>
                                                        <h4>{{ $product->price }} <span> {{ $product->price * 0.1 }}</span></h4>
                                                    </div>
                                                    <div class="snipcart-details">
                                                            <a name="" id="addcart"  class="addcart btn btn-primary btn-sm" href="{{ route('add', [ $product->getRouteKey() ]) }}" role="button">Add to cart</a>
                                                            <a name="" id="addcart" class="addcart btn-sm btn btn-primary" href="{{ route('singleproduct',$product->id) }}" role="button">View Item</a>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach

                            @else
                            <div>
                                <p class="h2 text-info text-bold" >
                                    No softwares for this category yet
                                </p>
                            </div>

                            @endif


                            <div class="clearfix"> </div>
                        </div>
                    @endforeach

                @else

                @endif










			</div>
		</div>
		<div class="clearfix"></div>
	</div>




@stop


@extends('layouts.customer')

@section('content')





<div class="w3l_banner_nav_right">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="w3l_banner_nav_right_banner">
                        <h3>All Softwares <span>You need</span> Are Available.</h3>
                        <div class="more">
                            <a href="/products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_banner_nav_right_banner1">
                        <h3>Recently <span>Updated</span>  Software .</h3>
                        <div class="more">
                            <a href="/products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3l_banner_nav_right_banner2">
                        <h3>upto <i>50%</i> off.</h3>
                        <div class="more">
                            <a href="/products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- flexSlider -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
      </script>
    <!-- //flexSlider -->
</div>
<div class="clearfix"></div>












<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{ asset('asset/images/4.jpg') }}" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4>Discount Offer <span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{ asset('asset/images/5.jpg') }}" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos">
                    <h3>introducing <span>best store</span> for <i>softwares</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="{{ asset('asset/images/6.jpg') }}" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos1">
                    <h3>Save <span>Upto</span> $10</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- top-brands -->
<div class="top-brands">
<div class="container">
    <h3>Hot Offers</h3>
    <div class="agile_top_brands_grids">

        @if (count($products) > 0)

            @foreach ($products as $product)
            <div class="col-md-6 top_brand_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid">
                            <div class="tag"><img src="{{ asset('asset/images/tag.png') }}" alt=" " class="img-responsive" /></div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block" >
                                        <div class="snipcart-thumb">
                                            <a href="{{ $product->id }}">
                                                <img title="{{ $product->name }} " alt="{{ $product->name }} " src="/storage/images/{{ $product->image }}" width="200" height="150"></a>
                                            <p>{{ $product->name }}</p>
                                            <h4>{{ "Ksh ". $product->price }} <span>{{ "Ksh ". $product->price * 0.10 }}</span></h4>
                                        </div>
                                        <div class="snipcart-details top_brand_home_details">
                                            <a name="" id="addcart"  class="addcart btn btn-primary" href="{{ route('add', [ $product->getRouteKey() ]) }}" role="button">Add to cart</a>
                                            <a name="" id="addcart" class="addcart btn btn-primary" href="{{ route('singleproduct',$product->id) }}" role="button">View Item</a>


                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @else

        @endif


        <div class="clearfix"> </div>
    </div>
</div>
</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
<div class="fresh-vegetables">
<div class="container">
    <h3>Top Products</h3>
    <div class="w3l_fresh_vegetables_grids">
        <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
            <div class="w3l_fresh_vegetables_grid2">
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i><a href="/products">All Categories</a></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><a href="/products">OS</a></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><a href="/products">IDE</a></li>
                    <li><i class="fa fa-check" aria-hidden="true"></i><a href="/products">Anti-virus</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-9 w3l_fresh_vegetables_grid_right">
            <div class="col-md-4 w3l_fresh_vegetables_grid">
                <div class="w3l_fresh_vegetables_grid1">
                    <img src="asset/images/8.jpg" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="col-md-4 w3l_fresh_vegetables_grid">
                <div class="w3l_fresh_vegetables_grid1">
                    <div class="w3l_fresh_vegetables_grid1_rel">
                        <img src="asset/images/7.jpg" alt=" " class="img-responsive" />
                        <div class="w3l_fresh_vegetables_grid1_rel_pos">
                            <div class="more m1">
                                <a href="/products" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3l_fresh_vegetables_grid1_bottom">
                    <img src="asset/images/10.jpg" alt=" " class="img-responsive" />
                    <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                        <h5>Special Offers</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 w3l_fresh_vegetables_grid">
                <div class="w3l_fresh_vegetables_grid1">
                    <img src="asset/images/9.jpg" alt=" " class="img-responsive" />
                </div>
                <div class="w3l_fresh_vegetables_grid1_bottom">
                    <img src="asset/images/11.jpg" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="agileinfo_move_text">
                <div class="agileinfo_marquee">
                    <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                </div>
                <div class="agileinfo_breaking_news">
                    <span> </span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
@stop

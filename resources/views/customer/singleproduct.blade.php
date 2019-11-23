@extends('layouts.customer')

@section('content')

<div class="w3l_banner_nav_right">
        <div class="w3l_banner_nav_right_banner3">
            <h3>Best Deals For New Products<span class="blink_me"></span></h3>
        </div>
        <div class="agileinfo_single">
            <h5>{{ $product->name }}</h5>
            <div class="col-md-4 agileinfo_single_left">
                <img id="example" src="/storage/images/{{ $product->image }}" alt="{{ $product->name }}" class="img-responsive" />
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="w3agile_description">
                    <h4>Description :</h4>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4>{{ "KSh ". $product->price }} <span>{{ "KSh ".$product->price * 0.1 }}</span></h4>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                            <a name="" id="addcart"  class="addcart btn btn-primary btn-sm p-3" href="{{ route('add', [ $product->getRouteKey() ]) }}" role="button">Add to cart</a>

                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- brands -->
<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
    <div class="container">
        <h3>Popular Brands Of <strong>{{ $product->category->name }}</strong></h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                {{-- <h6> </h6> --}}

                    @foreach ($product->category->products as $pro)
                    <div class="col-md-3 w3ls_w3l_banner_left">
                            <div class="hover14 column">
                            <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                    <img src="/storage/images/{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive" />
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single.html"><img src="{{ $pro->image }}" alt="{{ $pro->name }}" class="img-responsive" /></a>
                                                <p>{{ $pro->name }}</p>
                                                <h4>{{ "Ksh ". $pro->price }} <span>{{ "Ksh ". $pro->price * 0.1 }}</span></h4>
                                            </div>
                                            <div class="snipcart-details">

                                                    <a name="" id="addcart" href="{{ route('add', [ $product->getRouteKey() ]) }}"  class="addcart btn btn-primary btn-sm" href="#" role="button">Add to cart</a>
                                                    <a name="" id="addcart" class="addcart btn-sm btn btn-primary" href="{{ route('singleproduct',$product->id) }}" role="button">View Item</a>

                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach



                <div class="clearfix"> </div>
            </div>

</div>


@stop

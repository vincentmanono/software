<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Softwares</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{ asset('asset/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{ asset('asset/js/jquery-1.11.1.min.js') }}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('asset/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- start-smoth-scrolling -->
</head>

    <body>
            @include('messages')

            <!-- header -->
             @include('includes/customernavbar')


        @include('includes.customerlogoproduct')
    <!-- //header -->
    <!-- products-breadcrumb -->
        <div class="products-breadcrumb">
            <div class="container">
                <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    <!-- //products-breadcrumb -->
    <!-- banner -->
        <div class="banner">
                <div class="w3l_banner_nav_left">
                        <nav class="navbar nav_bottom">
                         <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header nav_2">
                              <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                           </div>
                           <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav nav_1">
                                    <li><a href="{{ route('products') }}">Branded softwares</a></li>
                                    <li><a href="#">Operating System</a></li>
                                    <li class="dropdown mega-dropdown active">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anti-Virus<span class="caret"></span></a>
                                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                                            <div class="w3ls_vegetables">
                                                <ul>
                                                    <li><a href="#">Mac OS</a></li>
                                                    <li><a href="#">Windows</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#">Drawing tools</a></li>

                                    <li><a href="#">IDE</a></li>

                                </ul>
                             </div><!-- /.navbar-collapse -->
                        </nav>
                </div>
            <div class="w3l_banner_nav_right">
                <!-- about -->
            <div class="privacy about">
                <h3>Chec<span>kout</span></h3>

              <div class="checkout-right">
                        <h4>Your shopping cart contains: <span>{{ Cart::count() }} Products</span></h4>
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Product</th>
                                <th>Quality</th>
                                <th>Product Name</th>

                                <th>Price</th>
                                <th>Update</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd(Cart::content()->pluck('id') ) }} --}}
                            @php
                                $i = 1 ;
                            @endphp
                            @foreach(Cart::content() as $key => $cartItem)
                                 <tr class="rem1">
                                <td class="invert">{{ $i++ }}</td>
                                <td class="invert-image"><a href="{{ route('singleproduct',$cartItem->id) }}"><img src="{{ $cartItem->image }}" alt=" " class="img-responsive"></a></td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value"><span>{{ $cartItem->qty }}</span></div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">{{ $cartItem->name }}</td>

                                <td class="invert">{{ number_format($cartItem->subtotal, 2) }} Ksh</td>
                                <td class="invert"><div class="rem">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                    </div></td>
                                <td class="invert">

                                    <div class="rem">
                                        <a  class="close1" href="{{ route('remove', [ $cartItem->rowId ]) }}">
                                          {{-- <div class="close1"> </div>--}}</a>
                                    </div>

                                </td>
                           </tr>
                            @endforeach



                    </tbody></table>
                </div>
                <div class="checkout-left">
                    <a href="/products"> <div class="col-md-4 checkout-left-basket">
                                <h4>Continue to basket</h4> </div>
                    </a>

                    <div class="col-md-8 address_form_agile">
                          <h4 class=" pull-right float-right" >Total charges <strong> {{  Cart::subtotal() }} Ksh</strong></h4>
                        {{-- {{ Cart::content()->pluck('id') }} --}}

                        <div class=" col-md-12 pull-right float-right" >
                                <a name="" id="" class="btn btn-success btn-lg" href="/payment" role="button">Proceed to payment</a>
                        </div>
                          {{-- <form action="{{ route('store.order') }}" method="post">
                              @csrf
                              {{ csrf_field() }}
                              <input type="hidden" name="total" value="{{ number_format(Cart::subtotal(), 2) }}">
                              <input type="hidden" name="productId" value="{{ Cart::content()->pluck('id')  }}">



                                        <button  class="checkout-right-basket" type="submit">
                                        Make Order now
                                        </button>
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                                        </span>
                          </form> --}}




                        </div>




                </div>

            </div>
    <!-- //about -->
            </div>
            <div class="clearfix"></div>
        </div>
    <!-- //banner -->


    <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="w3agile_newsletter_left">
                    <h3>sign up for our newsletter</h3>
                </div>
                <div class="w3agile_newsletter_right">
                    <form action="#" method="post">
                        <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="submit" value="subscribe now">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    <!-- //newsletter -->
    <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-3 w3_footer_grid">
                    <h3>information</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="events.html">Events</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="products.html">Best Deals</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="short-codes.html">Short Codes</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>policy info</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="faqs.html">FAQ</a></li>
                        <li><a href="privacy.html">privacy policy</a></li>
                        <li><a href="privacy.html">terms of use_</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>what in stores</h3>
                    <ul class="w3_footer_grid_list">
                        <li><a href="pet.html">Pet Food</a></li>
                        <li><a href="frozen.html">Frozen Snacks</a></li>
                        <li><a href="kitchen.html">Kitchen</a></li>
                        <li><a href="products.html">Branded Foods</a></li>
                        <li><a href="household.html">Households</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>twitter posts</h3>
                    <ul class="w3_footer_grid_list1">
                        <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
                            eius modi tempora incidunt ut labore et
                            <a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                        <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
                            eius modi tempora incidunt ut labore et
                            <a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <div class="agile_footer_grids">
                    <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                        <div class="w3_footer_grid_bottom">
                            <h4>100% secure payments</h4>
                            <img src="images/card.png" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                        <div class="w3_footer_grid_bottom">
                            <h5>connect with us</h5>
                            <ul class="agileits_social_icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree_footer_copy">
                    <p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
            </div>
        </div>
    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
                                 <!--quantity-->
                                        <script>
                                        $('.value-plus').on('click', function(){
                                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus').on('click', function(){
                                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                                            if(newVal>=1) divUpd.text(newVal);
                                        });
                                        </script>
                                    <!--quantity-->
                                <script>$(document).ready(function(c) {
                                    $('.close1').on('click', function(c){
                                        $('.rem1').fadeOut('slow', function(c){
                                            $('.rem1').remove();
                                        });
                                        });
                                    });
                               </script>
                                <script>$(document).ready(function(c) {
                                    $('.close2').on('click', function(c){
                                        $('.rem2').fadeOut('slow', function(c){
                                            $('.rem2').remove();
                                        });
                                        });
                                    });
                               </script>
                                  <script>$(document).ready(function(c) {
                                    $('.close3').on('click', function(c){
                                        $('.rem3').fadeOut('slow', function(c){
                                            $('.rem3').remove();
                                        });
                                        });
                                    });
                               </script>

    <!-- //js -->
    <!-- script-for sticky-nav -->
        <script>
        $(document).ready(function() {
             var navoffeset=$(".agileits_header").offset().top;
             $(window).scroll(function(){
                var scrollpos=$(window).scrollTop();
                if(scrollpos >=navoffeset){
                    $(".agileits_header").addClass("fixed");
                }else{
                    $(".agileits_header").removeClass("fixed");
                }
             });

        });
        </script>
    <!-- //script-for sticky-nav -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
    </script>
    <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                    };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

                });
        </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.js"></script>
    <script>
            paypal.minicart.render();

            paypal.minicart.cart.on('checkout', function (evt) {
                var items = this.items(),
                    len = items.length,
                    total = 0,
                    i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 3) {
                    alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });

        </script>

        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    </body>
    </html>

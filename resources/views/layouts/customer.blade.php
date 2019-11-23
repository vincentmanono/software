
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
        <!-- start-smoth-scrolling -->
    </head>

    <body>
        @include('messages')

    <!-- header -->
        @include('includes/customernavbar')
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
        @include('includes/customerlogoproduct')
    <!-- //header -->
    <!-- banner left -->
        @include('includes/customerbanner')
    <!-- banner -->

        @yield('content')

    <!-- //fresh-vegetables -->
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
        @include('includes/customerfooter')
    </body>
    </html>

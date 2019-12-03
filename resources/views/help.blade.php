
@extends('layouts.app')
@section('style')
    <style>
        #app{
            margin: 10px ;
            padding: 30px;
            text-shadow: 10px;
            background-color: burlywood;
            font-size: 17px;
            font-family: 'Times New Roman', Times, serif;
        }

    </style>
@endsection

@section('content')
<div class="container">
    <div class="row col-md-12  ">
        <div id="accordianId" role="tablist" aria-multiselectable="true">
            <div class="card  col-md-12 col=lg-12 ">
                <div class="card-header" role="tab" id="section1HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
                  How to Select software and put it to cart
                </a>
                    </h5>
                </div>
                <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                    <div class="card-body">
                        On home page click button that says add to cart <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        <img src="/software/soft.png" alt="" height="160" width="360" >

                    </div>
                </div>
            </div>
            <div class="card  col-md-12 col=lg-12 ">
                <div class="card-header" role="tab" id="section2HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
                  To see sotwares added to cart
                </a>
                    </h5>
                </div>
                <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                    <div class="card-body">
                       On navbar click button written <strong>View cart</strong>
                       <div>
                           <img src="\software\viewcart.png"  height="160" width="360" alt="">
                           <img src="\software\cart.png"  height="160" width="360" alt="">
                       </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="section2login">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section2login" aria-expanded="true" aria-controls="section2login">
                 Proceed to checkout point
                </a>
                    </h5>
                </div>
                <div id="section2login" class="collapse in" role="tabpanel" aria-labelledby="section2login">
                    <div class="card-body">
                       In order to view your checkout you need to login to your account or create new account
                       <div>
                           <img src="\software\login.png"  height="160" width="360">
                           <img src="\software\viewcart.png"  height="160" width="360">
                       </div>
                    </div>
                </div>
            </div>

            <div class="card  col-md-12 col=lg-12 ">
                <div class="card-header" role="tab" id="section3HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId" aria-expanded="true"
                         aria-controls="section3ContentId">
                  Checkout Point
                </a>
                    </h5>
                </div>
                <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
                    <div class="card-body">
                        View your the total of youe software  and click pay it will open popup window where you will type your phone
                    </div>
                </div>
            </div>



            <div class="card  col-md-12 col=lg-12 ">
                <div class="card-header" role="tab" id="section4HeaderId">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId" aria-expanded="true" aria-controls="section4ContentId">
                 How can I download my software
                </a>
                    </h5>
                </div>
                <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section4HeaderId">
                    <div class="card-body">
                        After administrator confirms your cart and payment he / shw will authorize you to donload your software on client dashboard
                        <div>
                            <img src="\software\Screenshot from 2019-12-01 13-18-53.png"  height="160" width="360">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


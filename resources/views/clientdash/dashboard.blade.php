@extends('layouts.clientdash')
@section('content')

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua">

                <i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Software<br /> delivered</span>
              <span class="info-box-number">90<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red">
                <i class="fa fa-google-plus-official" aria-hidden="true"></i>

            </span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Orders request</span>
              <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow">
                <i class="fa fa-money" aria-hidden="true"></i>

            </span>

            <div class="info-box-content">
              <span class="info-box-text">Transaction made</span>
              <span class="info-box-number">20</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="row">


        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Available software(s) for download</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">

                  @if ( count($orders) > 0)
                  @foreach ($orders as $order)

                  @if( $order->status == 1)
                    @foreach ($order->products as $product)
                        <li class="item">
                            <div class="product-img">
                                    <img src="/storage/images/{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">
                                            {{ $product->name }}
                                            <a target="_self" class=" btn btn-primary pull-right" href="/storage/softwares/softwares/{{ $product->url }}" download="/storage/softwares/softwares/{{ $product->url }}">
                                                <i class="fab fa-download ">Download</i>
                                            </a>
                                    {{-- <span class="label label-warning pull-right"> </span> --}}
                                    </a>
                                    <span class="product-description">
                                       {{ $product->description }}
                                        </span>
                            </div>
                    </li>
                    @endforeach

                  @endif

                  @endforeach

                  @else

                  @endif





                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection

@extends('layouts.adminapp')

@section('content')
     <div id="approve" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customers
        <small>All customers available</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        {{-- <li><a href="#">Examples</a></li> --}}
        <li class="active">Customer and number of orders </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $customer->name }}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">


            <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Member since {{ date('F d, Y', strtotime($customer->created_at)) }} </h3>
              <ul class="list-group list-group-horizontal active">
                  <li class="list-group-item ">Phone number : {{ $customer->phone }} <span class="pull-right right-0">Email : {{ $customer->email }}</span> </li>

              </ul>
            </div>
            <!-- /.box-header -->
            <div class=" box-body" >

                    <div class="col-md-12">
                            <div class="box box-warning">
                              <div class="box-header with-border">
                                <h3 class="box-title">{{ $customer->name . " Orders " }}</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                </div>
                                <!-- /.box-tools -->
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body" style="">

                                    <div class="box">
                                            {{-- <div class="box-header">
                                              <h3 class="box-title">Data Table With Full Features</h3>
                                            </div> --}}
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                              <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                  <th> <i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Order Amount</th>
                                                  <th> <i class="fa fa-money" aria-hidden="true"></i> Payment</th>
                                                  <th> <i class="fa fa-hourglass" aria-hidden="true"></i> Day of  order</th>
                                                  <th> <i class="fas fa-boxes    "></i> Status</th>
                                                  <th> <i class="fa fa-product-hunt" aria-hidden="true"></i> Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if (count($customer->orders))

                                                    @foreach ($customer->orders as $order)
                                                    <tr>
                                                            <td>{{ $order->total }}</td>
                                                            <td>

                                                                @if ($order->payment )
                                                                    {{ $order->payment->amount }}
                                                                @else
                                                                    <span class=" label label-warning" >not paid</span>
                                                                @endif


                                                            </td>
                                                            <td>{{ date('F d, Y', strtotime($order->created_at)) }}</td>
                                                            <td>
                                                                @switch($order->status)
                                                                    @case(0)
                                                                    <span  class=" label label-warning" >Not Approved</span>
                                                                        @break
                                                                    @case(1)
                                                                    <span class=" label label-success" >Approved</span>
                                                                        @break
                                                                    @default
                                                                    <span>Undefined</span>
                                                                @endswitch


                                                            </td>
                                                            <td>
                                                                {{-- <approve></approve> --}}
                                                                {{-- <a   onclick="doaction()"  class="btn btn-primary" href="#" role="button">Approve</a> --}}

                                                                <form id="approve" action="{{ route('order.approve',$order->id) }}" method="post">
                                                                    @method("PUT")
                                                                    @csrf
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="status" value="1">
                                                                    <button type="submit" class="btn btn-primary">Approve</button>
                                                                </form>
                                                            </td>
                                                          </tr>
                                                    @endforeach

                                                @endif


                                                </tbody>
                                                <tfoot>
                                                   <tr>
                                                    <th>Amount</th>
                                                    <th>Payment</th>
                                                    <th>Day ordered</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                              </table>
                                            </div>
                                            <!-- /.box-body -->
                                          </div>
                                          <!-- /.box -->
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                      <!-- /.row -->
                                    </section>
                                    <!-- /.content -->
                                  </div>



                              </div>
                              <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                          </div>




            </div>
            <!-- /.box-body -->
          </div>



        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

@stop

@extends('layouts.adminapp')

@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders
        <small>All customers orders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        {{-- <li><a href="#">Examples</a></li> --}}
        <li class="active">orders and its status </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Orders only</h3>

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
              <h3 class="box-title">All orders made</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Belongs To</th>
                  <th>Order amount</th>
                  <th>Ordered on</th>
                  <th>No. of Softwares</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @if (count($orders) > 0)

                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->total}} </td>
                                <td>
                                    {{ date('F d, Y', strtotime($order->created_at)) }}
                                </td>
                                <td>{{count($order->products)}}</td>
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
                                <td class=" d-flex" >

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewmore">
                                    <i class="fa fa-eye" aria-hidden="true">View more</i>
                                </button>

                                .............

                                <div id="viewmore" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="my-modal-title">Order Details</h5>
                                                <button class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item ">{{"Order Amount : ". $order->total }}</li>
                                                        <li class="list-group-item ">
                                                            @if ($order->payment )
                                                                {{ "AmountPayed:".$order->payment->amount }}
                                                            @else
                                                            <span class=" h3 text text-danger" > NOT PAYED </span>

                                                            @endif
                                                            </li>
                                                    </ul>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                Footer
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <a onclick="update()" class="btn"  style="background:yellowgreen;"  href="#">Approve</a>

                                <form  class="" id="approve" action="{{ route('order.approve',$order->id) }}" method="post">
                                        @method("PUT")
                                        @csrf
                                        {{ csrf_field() }}
                                        <input type="hidden" name="status" value="1">

                                    </form>


                                {{-- <a href="#" class="btn btn-danger"   onclick="deleteRecord()" ><i class="fa fa-trash-o">Delete</i></a>
                                <form id="delete" action="{{ route('orders.destroy',$order->id) }}" method="post">
                                    @method('DELETE')
                                    {{ csrf_field() }}
                                </form> --}}



                                </td>

                            </tr>
                        @endforeach

                    @else

                    @endif


                </tbody>
                <tfoot>
                <tr>
                    <th>Belongs To</th>
                    <th>Order amount</th>
                    <th>Ordered on</th>
                    <th>No. of Softwares</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
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

  <script>
        function update(){
          var result = confirm("Are you sure you want to confirm this order ?")
          if(result){

              event.preventDefault();
              document.getElementById("approve").submit();
          }else{
              alert("Thank you for keeping me!!")
          }

        }

    </script>


@stop

@extends('layouts.adminapp')

@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orders
        <small>All customers Payments</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        {{-- <li><a href="#">Examples</a></li> --}}
        <li class="active">Payments </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Payments made</h3>

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
              <h3 class="box-title">All payments</h3>
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
                  <th>Phone</th>
                  <th>@</th>
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
                                <td> {{ $order->payment->creditcardnumber }} </td>
                             
                                <td class=" d-flex" >


                              


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

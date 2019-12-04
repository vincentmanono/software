@extends('layouts.clientdash')
@section('content')
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Softwares for download</h3>

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
              <h3 class="box-title">Softwares you have payed for</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>name</th>
                  <th>Version</th>
                  <th>Size</th>
                  <th>Download</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @if ( count($orders) > 0)
                    @foreach ($orders as $order)
                    @if( $order->status == 1)
                    @foreach ($order->products as $product)
                    <td> <img src="{{ $product->image }}" alt="{{ $product->name }}" height="70" width="90" > </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->version }}</td>
                    <td>{{ $product->size  }} Mbs</td>
                    <td> <a class=" btn btn-primary" href="{{ $product->url }}" download ><i class="fa fa-download" aria-hidden="true">Download</i></a></td>
                    <td> <a class=" btn btn-danger" href="#">Delete</a> </td>
                  </tr>
                    @endforeach

                    @endif

                    @endforeach


                    @else

                    @endif



                </tbody>
                <tfoot>
                    <tr>
                            <th>Image</th>
                            <th>name</th>
                            <th>Version</th>
                            <th>Size</th>
                            <th>Download</th>
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
@endsection

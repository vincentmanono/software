@extends('layouts.adminapp')

@section('content')
     <div class="content-wrapper">
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
          <h3 class="box-title">Customers only</h3>

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
              <h3 class="box-title">All customers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone number</th>
                  <th>Email</th>
                  <th>No. of orders</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if (count($customers) > 0)

                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->phone}} </td>
                            <td>{{ $customer->email }}</td>
                            <td>{{count($customer->orders)}}</td>
                            <td>

                            <a class="btn btn-primary" href="{{ route('customers.show',$customer->id) }}" >
                            <i class="fa fa-eye" aria-hidden="true">View more</i>
                            </a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modelId">
                              <i class="fas fa-file-edit    ">Edit</i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update <strong> {{ $customer->name }} </strong> details </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('customers.update',$customer->id) }}" method="post">

                                                    @csrf
                                                    {{ csrf_field() }}
                                                    @method("PUT")
                                                    <div class="form-row align-items-center">

                                                            <div class="col-auto">
                                                              <label class="sr-only" for="customer">customer Name</label>
                                                              <div class="input-group mb-6">
                                                                <div class="input-group-prepend">
                                                                  <div class="input-group-text">Name</div>
                                                                </div>
                                                                <input type="text" class="form-control" name="name"  value="{{ $customer->name }}"
                                                                id="customer" placeholder="customer name">
                                                              </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="description">Description of this customer</label>
                                                                <textarea id="description" class="form-control" name="description" rows="3">{{ $customer->description }}</textarea>
                                                            </div>


                                                          </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class=" col-auto btn btn-primary">Update</button>
                                                            </div>




                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- <button type="button" class="btn btn-danger ">Delete</button> --}}

                            <a href="#" class="btn btn-danger"   onclick="deleteRecord()" ><i class="fa fa-trash-o">Delete</i></a>
                            <form id="delete" action="{{ route('customers.destroy',$customer->id) }}" method="post">
                                @method('DELETE')
                                {{ csrf_field() }}
                            </form>



                            </td>

                        </tr>
                    @endforeach

                @else

                @endif


                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Created On</th>
                  <thNo. of products</th>
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
@stop

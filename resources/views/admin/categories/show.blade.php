@extends('layouts.adminapp')

@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CATEGORIES
        <small>Single  category available</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        {{-- <li><a href="#">Examples</a></li> --}}
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ $category->name }}</h3>
          <span>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary abs pl-4 align-baseline  offset-4 pr-4" data-toggle="modal" data-target="#modelId">
                <i class="fa fa-plus" aria-hidden="true">Add new Product</i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Add new Product to <strong>{{ $category->name }}</strong></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                          <div class="modal-body">
                                <form action="{{ route('softwares.store') }}" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="name">Product name</label>
                                                <input required id="name" class="form-control" type="text" name="name">
                                            </div>
                                            <input id="category_id" type="hidden" name=" category_id" value="{{ $category->id }}">

                                            <div class="form-group">
                                            <label for="version">Software version </label>
                                            <input type="text"
                                                class="form-control form-control-sm" name="version" id="" aria-describedby="helpId" placeholder="Software version">
                                            <small id="helpId" class="form-text text-muted">e.g 1.2 ,0.21, 4.12</small>
                                            </div>


                                            <div class="form-group">
                                                <label for="image">Select Software Image</label>
                                                <input type="file" required class="form-control-file" name="image" id="image" placeholder="select software to Image" aria-describedby="fileHelpId">
                                                <small id="fileHelpId" class="form-text text-muted">Select your software Image</small>
                                            </div>

                                            <div class="form-group">
                                            <label for="url">Select Software location</label>
                                            <input type="file" class="form-control-file" required name="url" id="url" placeholder="select software to upload" aria-describedby="fileHelpId">
                                            <small id="fileHelpId" class="form-text text-muted">Select your software</small>
                                            </div>
                                            <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" name="price" required class="form-control" placeholder="Price of this software" aria-describedby="helpId">
                                            <small id="helpId" class="text-muted">Price in number form only</small>
                                            </div>
                                            <div class="form-group">
                                            <label for="description">Description of the software</label>
                                            <textarea class="form-control" name="description" minlength="14"  aria-colcount="" autocomplete="language" autofocus rows="3" required></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save software</button>
                                        </div>
                                </form>
                      </div>
                  </div>
              </div>
          </span>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

            <p class=" above bg-aqua w-25" style="height:40%;" > <i class="fa fa-paragraph" aria-hidden="true">{{ $category->description }}</i> </p>
            <p class="lead">


                    <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Name</th>
                              <th>Created On</th>
                              <th>No. of products</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($category->products) > 0)

                                @foreach ($category->products as $product)
                                    <tr>
                                        <td>
                                            <img src="/storage/images/{{ $product->image }}" alt="{{ $product->name }}" width="100" height="60">
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->created_at}} </td>

                                        <td>

                                        <a class="btn btn-primary" href="{{ route('softwares.show',$product->id) }}" >
                                        <i class="fa fa-eye" aria-hidden="true">View more</i>
                                        </a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#model_edit">
                                          <i class="fas fa-file-edit    ">Edit</i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="model_edit" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">EDit {{ $product->name }}
                                                         <span style=" color:red;" class=" pl-3 text text-danger" > <i class="fa fa-star" aria-hidden="true"></i> </span> You must fill this fields </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <form action="{{ route('softwares.update',$product->id) }}" method="post" enctype="multipart/form-data" >
                                                                @csrf
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <label for="name">Product name <span style=" color:red;" class=" text text-danger" > <i class="fa fa-star" aria-hidden="true"></i> </span></label>
                                                                    <input required id="name" value="{{ $product->name }}" class="form-control" type="text" name="name">
                                                                </div>
                                                                <input id="category_id" type="hidden" name=" category_id" value="{{ $category->id }}">

                                                                <div class="form-group">
                                                                <label for="version">Software version  <span style=" color:red;" class=" text text-danger" > <i class="fa fa-star" aria-hidden="true"></i> </span></label>
                                                                <input type="text" value="{{ $product->version }}"
                                                                    class="form-control form-control-sm" name="version" id="" aria-describedby="helpId" placeholder="Software version">
                                                                <small id="helpId" class="form-text text-muted">e.g 1.2 ,0.21, 4.12</small>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image">Select Software Image</label>
                                                                    <input type="file" required class="form-control-file" name="image" id="image" placeholder="select software to Image" aria-describedby="fileHelpId">
                                                                    <small id="fileHelpId" class="form-text text-muted">Select your software Image</small>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="url">Select Software location</label>
                                                                <input type="file" class="form-control-file" required name="url" id="url" placeholder="select software to upload" aria-describedby="fileHelpId">
                                                                <small id="fileHelpId" class="form-text text-muted">Select your software</small>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="price">Price <span style=" color:red;" class=" text text-danger" > <i class="fa fa-star" aria-hidden="true"></i> </span></label>
                                                                <input type="text" name="price" required  value="{{ $product->price }}" class="form-control" placeholder="Price of this software" aria-describedby="helpId">
                                                                <small id="helpId" class="text-muted">Price in number form only</small>
                                                                </div>
                                                                <div class="form-group">
                                                                <label for="description">Description of the software <span style=" color:red;" class=" text text-danger" > <i class="fa fa-star" aria-hidden="true"></i> </span></label>
                                                                <textarea class="form-control" name="description" minlength="14"  aria-colcount="" autocomplete="language" autofocus rows="3" required>$product->description </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update software</button>
                                                            </div>
                                                    </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-danger ">Delete</button>

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


            </p>




        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                category created since {{ date('F d, Y', strtotime($category->created_at)) }}
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@stop

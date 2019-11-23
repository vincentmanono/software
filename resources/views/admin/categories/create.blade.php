@extends('layouts.adminapp')

@section('content')
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CATEGORIES
        <small>Add new category</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        {{-- <li><a href="#">Examples</a></li> --}}
        <li class="active">Add category to the system</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">  new_ Category</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" value="{{ old('name') }}" placeholder="What is the name of this category" type="text" name="name">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" value="{{ old('description') }}" class="form-control" name="description" placeholder="Write description of this category" rows="4"></textarea>
          </div>
          <div>
            <button type="submit" class="btn btn-primary">Save category</button>
          </div>
        </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          {{ now() }}
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@stop


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="well">
            <p class="lead">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#my-modal">
                  Launch
                </button>


                <div id="my-modal" class="modal fade border-success ui-accordion" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Title</h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class=" center" >
                                    <form action="{{ route('payment') }}" method="post">
                                        @csrf
                                        <p class="lead">
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="inputGroup-sizing-default">+254</span>
                                                        </div>
                                                        <input type="number" class="form-control" placeholder="7** *** ***"  name="phone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                      </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </p>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </p>
            <form action="{{ route('payment') }}" method="post">
                @csrf
                {{ csrf_field() }}


                <div class="form-group"><br />
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


            </form>
        </div>
    </div>
</div>

@stop


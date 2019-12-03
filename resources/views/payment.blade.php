
@extends('layouts.app')
@section('style')
  <style>
        #app{
            background-color:rgba(120, 80, 12, 0.5);
            font-size:17px ;
        }
        button:hover{
            backface-visibility: initial;
            background-color: chocolate;
            font-size: 16px;
            text-align: center;
        }
        table{
            text-align: center;
        }
  </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="well col-md-12">
            <p class="lead">
                    @include('messages')

                    <table class="table table-active table-bordered bg-black-gradient col-md-12">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Product</th>
                                    <th>Quality</th>
                                    <th>Product Name</th>

                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- {{ dd(Cart::content()->pluck('id') ) }} --}}
                                @php
                                    $i = 1 ;
                                @endphp
                                @foreach(Cart::content() as $key => $cartItem)
                                     <tr class="rem1">
                                    <td class="invert">{{ $i++ }}</td>
                                    <td class="invert-image"><a href="{{ route('singleproduct',$cartItem->id) }}"><img src="{{ $cartItem->image }}" alt=" " class="img-responsive"></a></td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus">&nbsp;</div>
                                                <div class="entry value"><span>{{ $cartItem->qty }}</span></div>
                                                <div class="entry value-plus active">&nbsp;</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">{{ $cartItem->name }}</td>

                                    <td class="invert">{{ number_format($cartItem->subtotal, 2) }} Ksh</td>

                                    <td>
                                        <div class="rem">
                                            <a  class=" btn btn-danger btn-sm" href="{{ route('remove', [ $cartItem->rowId ]) }}">
                                             remove  </a>
                                        </div>

                                    </td>
                               </tr>
                                @endforeach



                        </tbody></table>


                            <a class="btn btn-primary pull-left pl-2 m-4" href="/products">Continue Shopping</a>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg pull-right float-right " data-toggle="modal" data-target="#my-modal">
                  Make Payment
                </button>


                <div id="my-modal" class="modal fade border-success ui-accordion" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="my-modal-title">Utafiti International </h5>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class=" center" >
                                    <form action="{{ route('store.order') }}" method="post">
                                        @csrf
                                        <p class="lead">
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text" id="inputGroup-sizing-default">+254</span>
                                                        </div>
                                                        <input type="number" class="form-control" placeholder="7** *** ***" required  name="phone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                                                      </div>

                                                            <div class="form-group">
                                                                <label for="my-input">Amount to pay</label>
                                                                <input type="number" class="form-control disabled " disabled  value="{{ number_format(Cart::subtotal(), 2) }}" name="" id="">
                                                            </div>


                                                        <input type="hidden" name="total" value="{{ number_format(Cart::subtotal(), 2) }}">
                                                        <input type="hidden" name="productId" value="{{ Cart::content()->pluck('id')  }}">

                                            <button type="submit" class="btn btn-primary">Order now</button>

                                        </p>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </p>

        </div>
    </div>
</div>

@stop


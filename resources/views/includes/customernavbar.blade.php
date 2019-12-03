<div class="agileits_header">
    <div class="w3l_offers">
        <a class=" text text-capitalize h2" href="/">utafiti International</a>
    </div>
    <div class="w3l_search">
        <form action="{{ route('search.software') }}" method="post">
            @csrf
            <input type="text" name="software" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value="">
        </form>
    </div>
    <div class="product_list_header">
        {{--  <form action="#" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="View your cart" class="button" />
            </fieldset>
        </form>  --}}



        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                View your cart
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Utafiti International</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                            <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(Cart::content() as $cartItem)
                                            <tr>
                                                <td>
                                                    <!-- Remove product button -->
                                                    <a href="{{ route('remove', [ $cartItem->rowId ]) }}">x</a>
                                                </td>
                                                <td>{{ $cartItem->name }}</td>
                                                <td>{{ $cartItem->qty }}</td>
                                                <td>{{ $cartItem->price }} Ksh</td>
                                                <td>{{ number_format($cartItem->total, 2) }} Ksh</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <!-- Total price of whole cart -->
                                            <td class="uk-text-bold">Total: {{ number_format(Cart::subtotal(), 2) }} Ksh</td>
                                        </tr>
                                        </tbody>
                                </table>
                    </div>
                    {{-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}

                     <div class="modal-footer">
                            <!-- Clear shopping cart button -->
                            <a href="{{ route('empty') }}" class="btn btn-danger">Empty</a>
                            <!-- Proceed to checkout button -->
                            <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                        </div>


                  </div>
                </div>
              </div>

        <div class="modal fade" id="shoppingCartModal" tabindex="-1" role="dialog"
                             aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="shoppingCartModalTitle">Shopping cart</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(Cart::content() as $cartItem)
                                                <tr>
                                                    <td>
                                                        <!-- Remove product button -->
                                                        <a href="{{ route('remove', [ $cartItem->rowId ]) }}">x</a>
                                                    </td>
                                                    <td>{{ $cartItem->name }}</td>
                                                    <td>{{ $cartItem->qty }}</td>
                                                    <td>{{ $cartItem->price }} USD</td>
                                                    <td>{{ number_format($cartItem->total, 2) }} USD</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <!-- Total price of whole cart -->
                                                <td class="uk-text-bold">Total: {{ number_format(Cart::subtotal(), 2) }} USD</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Clear shopping cart button -->
                                        <a href="{{ route('empty') }}" class="btn btn-danger">Empty</a>
                                        <!-- Proceed to checkout button -->
                                        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        @guest
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Sign Up</a></li>
                        </ul>
                            @else
                            <ul class="dropdown-menu h3 drp-mnu">
                                    <li><a class=" bg-secondary" href="{{ route('home') }}">
                                         <h2> {{ Auth::user()->name }}</h2>
                                    </a></li>
                                    <li>
                                            <a class="dropdown-item bg-danger " href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>
                                    </li>
                            </ul>

                            {{-- <a class="bg-secondary h2" href="{{ route('home') }}">
                                {{ Auth::user()->name }}
                            </a> --}}



                        @endguest

                    </div>

                </div>
            </li>
        </ul>
    </div>
    {{-- <div class="w3l_header_right1">
        <h2><a href="/mail">Contact Us</a></h2>
    </div> --}}
    <div class="clearfix">
        <div>
            <a class=" btn btn-primary pt-2 pr-3 pl-5 " style="margin-left:30px" href="/help">Help Desk</a>
        </div>
    </div>
</div>

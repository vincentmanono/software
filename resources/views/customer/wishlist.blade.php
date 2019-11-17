@extends('layouts.customermain')

@section('content')

<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Wishlist</h2>
                    <nav class="bradcaump-content">
                      <a class="breadcrumb_item" href="/">Home</a>
                      <span class="brd-separetor">/</span>
                      <span class="breadcrumb_item active">Wishlist</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="wishlist-area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-content">
                    <form action="#">
                        <div class="wishlist-table wnro__table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail"></th>
                                        <th class="product-name"><span class="nobr">Product Name</span></th>
                                        <th class="product-price"><span class="nobr"> Unit Price </span></th>
                                        <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                                        <th class="product-add-to-cart"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/1.jpg" alt=""></a></td>
                                        <td class="product-name"><a href="#">Natoque penatibus</a></td>
                                        <td class="product-price"><span class="amount">$165.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/2.jpg" alt=""></a></td>
                                        <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                        <td class="product-price"><span class="amount">$50.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#">×</a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/3.jpg" alt=""></a></td>
                                        <td class="product-name"><a href="#">Quisque fringilla</a></td>
                                        <td class="product-price"><span class="amount">$65.00</span></td>
                                        <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                        <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->

@endsection

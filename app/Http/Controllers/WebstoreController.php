<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
//use Gloudemans\Shoppingcart\Facades\Cart;
class WebstoreController extends Controller
{
    public function search_software(Request $request){
        $query = $request->all();
        

    }

    public function index(){
        $products = Product::orderBy('id', 'DESC')->paginate(4);

        return view('welcome',compact('products'));
    }

    public function products(){
        $categories = Category::all();
        $products = Product::all();
        return view('customer.products',compact('categories','products'));
    }

    public function single(Product $product){
        $product = Product::findOrfail($product->id);
        return view('customer/singleproduct',compact('product'));
    }


     # Our function for adding a certain product to the cart
     public function addToCart(Product $product)
     {
         Cart::add($product->id, $product->name, 1, $product->price);
         return redirect()->back()->with("success","Software added to card successfully");
     }



     # Our function for removing a certain product from the cart
    public function removeProductFromCart($productId)
    {
        Cart::remove($productId);
        return redirect()->back()->with("success","Software removed to card successfully");
    }

    public function checkout(){

        return view('customer.checkout');
    }





    # Our function for clearing all items from our cart
    // public function destroyCart()
    // {
    //     Cart::destroy();
    //     return redirect()->back()->with("success","cart destroyed);
    // }

    public function destroyCart(){
        Cart::destroy();
        return "null";
    }





}

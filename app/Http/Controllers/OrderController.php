<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $value = Cart::content()->pluck('id');
        $productIds = $request->input('productId');
        $data = array($productIds);
        //return substr($value,0,1);
        //return $value;

        //dd( $value);


        // assume it won't work
        $success = false;
        DB::beginTransaction();

        try {

            $userId= Auth::user()->id;
            $order = new Order();
            $order->user_id = $userId;
            $order->total = $request->total ;
            $order->status = 1 ;

            if ($order->save()) {
                # code...
                $productIds = $request->productId;
                // $order->products()->sync($data)
                if($order->products()->sync($value)){
                    $success = true;
                    // Cart::destroy();
                }

            } else {
                DB::rollback();
                 return redirect()->back()->withErrors("Error!! Please try again")->withInput();
            }


        } catch (\Throwable $th) {
            //throw $th;
        }
        if ($success) {
            DB::commit();
            return redirect()->back()->with('success',"Your order send , wait for response from administrator");
        }else{
            DB::rollback();
             return redirect()->back()->withErrors("Error!! Your order could not be send!!!")->withInput();
        }





        //$order->products()->sync([$productIds]);
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\MpesaGateway;
use App\Notifications\orderapprovalNotification;
use App\Order;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        if(Auth::User()->is_admin) {

            return view('admin.customers.allOrders',compact('orders'));
        } else {
            # code...
        }


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
        // dd($request->all());
       $value = Cart::content()->pluck('id');
        $productIds = $request->input('productId');
        $data = array($productIds);
        //return substr($value,0,1);
        //return $value;

        // dd( $value);


        // assume it won't work
        $success = false;
        DB::beginTransaction();
        $mpesa = new MpesaGateway();
        return $mpesa->get_access_token();

        $phone = $request->phone ;
        $amount = $request->total  ;
        $amount = intval($amount) ;
        // dd($amount);
         $mpesa->LipaNaMPesaOnlineAPI($phone, $amount);

        try {

           

            $userId= Auth::user()->id;
            $order = new Order();
            $order->user_id = $userId;
            $order->total = $request->total ;
            $order->status = 0 ;

            if ($order->save()) {
                # code...
                
                $productIds = $request->productId;
                // $order->products()->sync($data)
                if($order->products()->sync($value)){
                    $success = true;
                    // Cart::destroy();
                    $order->payment()->create([
                        'user_id' =>Auth::User()->id,
                        'order_id' => $order,
                        'amount'=>$request->total,
                        'creditcardnumber'=>$phone,

                    ]);

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
             return redirect()->back()->withErrors("Error!! Your order could not be send!!!\n" . $th->getMessage())->withInput();
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
    public function update(Request $request, $id)
    {
        // dd($id);
        $order = Order::findOrFail( $id);
        $order->status = 1 ;
        $order->save();

        Notification::sendNow($order->user, new orderapprovalNotification($order));
        return back();

    }


    public function changeStatus(Request $request, $id)
    {
        dd($request);

        $order = Order::where('id', $id)
                    ->update(['status' => $request->status]);
                    // Notification::sendNow($order->user, new orderapprovalNotification($order));
         return response()->json($order, 200);

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

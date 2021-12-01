<?php

namespace App\Http\Controllers;

use App\Pay;
use App\Payment;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use Gloudemans\Shoppingcart\Facades\Cart;



class PaymentController extends Controller
{
    // use Pay;

    public function pay(){
       $amount =  explode(',',  Cart::subtotal());
    //    $value = "";
    //    foreach ($amount as $key => $value) {
    //        # code...
           
    //    }
    //     return Cart::subtotal(2,"") ;
        return view('payment');
    }


    public function index(Request $re)
    {
         function validateNumber($value){
            $data = trim( htmlspecialchars($value) );
            return $data ;
        }

        $request = $re->all();
        //return explode(" ", $request['amount'])[0] ;
        $number ='+254 '. $request['phone'];
        $phone =  validateNumber($number);

        $username = 'sandbox'; // use 'sandbox' for development in the test environment
        $apiKey  ='780e17a21f92160e83ac1ac387d562e4f203fa4a8cc071026a5127c7c288637e'; // use your sandbox app API key for development in the test environment

        $AT       = new AfricasTalking($username, $apiKey);

        $payments = $AT->payments();

        $parameters = [
            'productName'=>'software',
           'phoneNumber' =>'+254707585566',
           "currencyCode" => 'KES',
           "amount" => '250.10',
           "metadata" => array( "Payment" => "Payment for software bought") //associative array
        ];
       $re = $payments->mobileCheckout($parameters);
        return response()->json($re, 200);


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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}

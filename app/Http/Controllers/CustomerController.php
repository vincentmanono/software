<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $customers = User::where('is_admin',false)->get();
        return view('admin.customers.index',compact('customers'));
    }
    public function show( $id){
        $customer = User::findOrfail($id);
        return view('admin.customers.show',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }

}

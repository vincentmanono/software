<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $orders = Auth::user()->orders;//softwares delivered
        if(Auth::User()->is_admin) {
            return redirect('/admin');
            }else{
                return view('clientdash.dashboard',compact('orders')) ;
            }

    }

    public function softwares()
    {

        $orders = Auth::user()->orders;//softwares delivered
        return view('clientdash.softwares',compact('orders'));
    }
}

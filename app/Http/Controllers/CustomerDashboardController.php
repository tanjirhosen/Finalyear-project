<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerDashboardController extends Controller
{
    public function index(){
        return view('frontEnd.customer.index',[
            'orders' => Order::where('customer_id', Session::get('customer_id'))->orderBy('id','desc')->get()
        ]);
    }
}

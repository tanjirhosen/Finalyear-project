<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{

    private $customer;

    public function login(){
        return view('frontEnd.customer.customer-login');
    }

    public function loginCheck(Request $request)
    {

        $this->customer = Customer::where('email', $request->user_id)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('/my-dashboard');
            }
            return back()->with('message', 'Sorry ... Your password is not valid.');
        }

        $this->customer = Customer::where('mobile', $request->user_id)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('/my-dashboard');
            }
            return back()->with('message', 'Sorry ... Your password is not valid.');
        }

        return back()->with('message', 'Sorry ... Your email or mobile number is not valid.');
    }

    public function registration(){
        return view('frontEnd.customer.customer-register');
    }

    public function newRegistration(Request $request){

        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|unique:customers,email',
            'mobile'    => 'required|unique:customers,mobile',
            'password'    => 'required',
        ]);

        if ($request->password == $request->confirm_password)
        {
            $this->customer = Customer::newCustomer($request);

            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);

            return redirect('/my-dashboard');
        }
        else
        {
            return back()->with('message', 'Password & confirm pasword are not same');
        }

    }

    public function logout(){
        Session::forget('customer_id');
        Session::forget('customer_name');
       return redirect('/');
    }

}

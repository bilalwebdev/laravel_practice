<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;


class RegistrationController extends Controller
{
    public function submit()
    {
        $button = "Register";
        $customer = new Customers;
        $url = url('/register');
        $header = "Create your Account";
        $data = compact('url', 'header', 'customer', 'button');
        return view('signup')->with($data);
    }
    public function register(Request $req)
    {
        $req->validate(
            [

                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                'address' => 'required'

            ]
            );


       $customer = new Customers;
       $customer->first_name = $req['first_name'];
       $customer->last_name = $req['last_name'];
       $customer->email = $req['email'];
       $customer->address = $req['address'];
       $customer->country = $req['country'];
       $customer->province = $req['province'];
       $customer->gender = $req['gender'];
       $customer->dob = $req['date'];
       $customer->password = md5($req['password']);
       $customer->save();
        return redirect('/customer');

            //  echo '<pre>';
            //  $arr = $req->all();
            //  print_r($arr);

    }

    public function view(Request $req)
    {
        $search = $req['search']?? "";
        if($search != NULL)
        {
            $customers = Customers::where('first_name', "LIKE", "%$search%")->orwhere('email', "LIKE", "%$search%")->get();
        }
        else{
            // $customers =  Customers::all(); for all data to show
            $customers =  Customers::paginate(10); // for pagination
        }
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
    }
    public function trash()
    {
        $customers =  Customers::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
    }
    public function delete(Customers $id)
    {
        //$customer = Customers::find($id);
        if($id!=NULL)
        {
            $id->delete();
        }
        return redirect('/customer');
    }
    public function restore($id)
    {
        $customer = Customers::withTrashed()->find($id);
        if($customer!=NULL)
        {
            $customer->restore();
        }
        return redirect('/customer');
    }
    public function forceDelete($id)
    {
        $customer = Customers::withTrashed()->find($id);
        if($customer!=NULL)
        {
            $customer->forceDelete();
        }
        return redirect('/customer/trash');
    }
    public function edit($id)
    {
        $customer = Customers::find($id);
        if(is_null($customer))
        {
            return redirect('/customer');
        }
         else{
            $url = url('/customer/update'). "/". $id;
            $header = "Update your Account";
            $button = "Update";
            $data = compact('customer', 'url', 'header', 'button');
            return view('signup')->with($data);
         }
    }
    public function update($id, Request $req)
    {
        $customer = Customers::find($id);
        $customer->first_name = $req['first_name'];
        $customer->last_name = $req['last_name'];
        $customer->email = $req['email'];
        $customer->address = $req['address'];
        $customer->country = $req['country'];
        $customer->province = $req['province'];
        $customer->gender = $req['gender'];
        $customer->dob = $req['date'];
        $customer->save();
        return redirect('/customer');
    }
}

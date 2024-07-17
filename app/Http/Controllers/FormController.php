<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function registerget()
     {
        // echo "<pre>";
        // print_r($request ->all());
        return view('form');
     }

     public function loginget()
     {
        return view('login');
     }

     public function loginpost(Request $request1)
     {
        $request1->validate(
            [
                'email' => 'required | email', 
                'password' => 'required',
            ]
        );
        $customer =  Customer :: where('email', $request1['email'])->first();
               if($customer && $customer -> password == md5($request1['password'])) {
                return redirect('/')->with('success',"Login successfull ! ");
            }
            else{
            return back()-> with('wrong'," Try Again ");
            }
        }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {                                                                                                   
        $request->validate(
            [
                // 'id' => 'required',
                'email' => 'required | email', 
                'password' => 'required',
                'c_password' => 'required'
            ]
        );
        // echo "<pre>";
        // print_r($request ->all());
        $customer = new Customer;
        $customer -> id = $request['id'];
        $customer -> name = $request['name'];
        $customer -> email = $request['email'];
        $customer -> address = $request['Address'];
        $customer -> gender = $request['gender'];
        $customer -> password = md5($request['password']);
        $customer -> c_password = md5($request['c_password']);
        $customer -> save();

        // return back()-> with('success',"Registration successfull ! ");
        return redirect('/login')->with('success',"Registration successfull ! ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $customer = Customer::find($id);
        // if(!is_null($customer))
            
        // return redirect('/customer')->with('delete',"Delete Successfull ! ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idd)
    {
        // $customer = Customer::find($id);
        // echo "<pre>";
        // print_r($customer);
        $customer = Customer::find($idd);
        if(!is_null($customer))
            $customer->delete();
        return redirect('/customer')->with('delete',"Delete Successfull ! ");
    }
}


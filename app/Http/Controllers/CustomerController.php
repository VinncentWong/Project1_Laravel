<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function vAddCustomer(){
        return view('layouts.SignUp');
    }
    public function addCustomer(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $request['password'] = Hash::make($request->input('password'));
        Customer::create($request->all());
        return redirect("/home");
    }

    public function vLogin(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $password = $request->input('password');

        $customerData = Customer::findOrFail('$email');
        $validation = Hash::check($password, $customerData);
        if($validation){
            return response()->json([
                'message' => 'User Authenticated',
                'code' => 200
            ]);
        } else {
            return response()->json([
                'message' => 'User not authenticated !',
                'code' => 401,
                'email' => $request['email'],
                'password' => $request['password']
            ]);;
        }
    }

    public function getAllCustomer(){
        $customers = Customer::all();
        return $customers;
    }

    public function getCustomerById($id){
        return Customer::findOrFail($id);
    }

    public function deleteCustomer($id){
        $customers = Customer::findOrFail($id);
        return $customers->delete();
    }

    public function updateCustomer(Request $request, $id){
        $customers = Customer::findOrFail($id);
        $customers['updated_at'] = date('Y-m-d H:i:s');
        return $customers->update($request->all());
    }
}

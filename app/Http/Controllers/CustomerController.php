<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function addCustomer(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $request['password'] = Hash::make($request->input('password'));
        return Customer::create($request->all());
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if(Auth::attempt([
            'name' => $email,
            'password' => $password
        ])){
            return response('User Authenticated !', 200);
        } else {
            return response('Unauthorized', 401);
        }
    }

    public function getAllCustomer(Request $request){
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

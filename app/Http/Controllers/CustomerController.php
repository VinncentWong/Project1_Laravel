<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addCustomer(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        Customer::create($request->all());
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
}

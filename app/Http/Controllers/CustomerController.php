<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use DateTime;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addCustomer(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $bodyLogin = $request->all();
        $bodyLogin['created_at'] = date("Y-m-d H:i:s");
        $customer = new Customer();
        return $customer->save($bodyLogin);
    }
}

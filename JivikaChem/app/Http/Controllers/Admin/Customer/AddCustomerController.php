<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddCustomerController extends Controller
{
    public function addCustomer()
    {
        return view('admin.customer.AddCustomer');
    }
}

<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerListController extends Controller
{
    public function customerList()
    {
        return view('admin.customer.CustomerList');
    }
}

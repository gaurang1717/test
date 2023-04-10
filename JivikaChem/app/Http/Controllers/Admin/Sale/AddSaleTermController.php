<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddSaleTermController extends Controller
{
    public function addSaleTerm()
    {
        return view('admin.sale.AddSaleTerm');
    }
}

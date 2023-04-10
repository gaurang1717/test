<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewSaleController extends Controller
{
    public function newSale()
    {
        return view('admin.sale.NewSale');
    }
}

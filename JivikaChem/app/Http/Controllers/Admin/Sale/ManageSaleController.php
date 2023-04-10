<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageSaleController extends Controller
{
    public function manageSale()
    {
        return view('admin.sale.ManageSale');
    }
}

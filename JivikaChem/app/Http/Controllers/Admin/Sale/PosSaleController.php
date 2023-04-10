<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PosSaleController extends Controller
{
    public function posSale()
    {
        return view('admin.sale.PosSale');
    }
}

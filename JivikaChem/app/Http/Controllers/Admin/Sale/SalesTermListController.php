<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesTermListController extends Controller
{
    public function salesTermList()
    {
        return view('admin.sale.SalesTermList');
    }
}

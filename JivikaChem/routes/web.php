<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Sale\NewSaleController;
use App\Http\Controllers\Admin\Sale\ManageSaleController;
use App\Http\Controllers\Admin\Sale\PosSaleController;
use App\Http\Controllers\Admin\Sale\SalesTermListController;
use App\Http\Controllers\Admin\Sale\AddSaleTermController;
use App\Http\Controllers\Admin\Customer\AddCustomerController;
use App\Http\Controllers\Admin\Customer\CustomerListController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Login

Route::get('/', function () {
    return view('admin.login');
})->name('login');

Route::get('admin/login', [AdminController::class, 'login']);
Route::post('user/auth', [AdminController::class, 'auth'])->name('user.auth');

// -------------------------------------------------------------------------------------

Route::group(['middleware' => ['auth']], function () {

    // Admin Role

    Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/newsale', [NewSaleController::class, 'newSale'])->name('admin.newsale');
        Route::get('/managesale', [ManageSaleController::class, 'manageSale'])->name('admin.managesale');
        Route::get('/possale', [PosSaleController::class, 'posSale'])->name('admin.possale');
        Route::get('/salestermlist', [SalesTermListController::class, 'salesTermList'])->name('admin.salestermlist');
        Route::get('/addsaleterm', [AddSaleTermController::class, 'addSaleTerm'])->name('admin.addsaleterm');
        Route::get('/addcustomer', [AddCustomerController::class, 'addCustomer'])->name('admin.addcustomer');
        Route::get('/customerlist', [CustomerListController::class, 'customerList'])->name('admin.customerlist');
    });

    // Sales Role

    Route::group(['prefix' => 'sales', 'middleware' => ['role:sales']], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('sales.dashboard');
        Route::get('/newsale', [NewSaleController::class, 'newSale'])->name('sales.newsale');
        Route::get('/managesale', [ManageSaleController::class, 'manageSale'])->name('sales.managesale');
        Route::get('/possale', [PosSaleController::class, 'posSale'])->name('sales.possale');
        Route::get('/salestermlist', [SalesTermListController::class, 'salesTermList'])->name('sales.salestermlist');
        Route::get('/addsaleterm', [AddSaleTermController::class, 'addSaleTerm'])->name('sales.addsaleterm');
    });

    // Purchase Role

    Route::group(['prefix' => 'purchase', 'middleware' => ['role:purchase']], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('purchase.dashboard');
    });

    // Logout

    Route::get('/logout', [AdminController::class, 'logout'])->name('Logout');
});
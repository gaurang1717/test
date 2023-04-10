@extends('admin/layout/layout')

@section('title', 'Dashboard')

@section('container')

@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dash-breadcrumb">
    <ul class="breadcrumb">
        <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i>
                Home</a></li>
        <li><a href="{{ url($userRole.'/dashboard') }}">Dashboard</a></li>
        <li>Dashboard</li>
    </ul>
</div>

<div class="top-parts">
    <div class="cmn tot-customer">
        <div class="sub-cmn">
            <h5>165</h5>
            <span>Total Customer</span>
        </div>

        <p><a href="#">Total Customer</a></p>
    </div>

    <div class="cmn tot-product">
        <div class="sub-cmn">
            <h5>21</h5>
            <span>Total Product</span>
        </div>

        <p><a href="#">Total Product</a></p>
    </div>

    <div class="cmn tot-supplier">
        <div class="sub-cmn">
            <h5>3</h5>
            <span>Total Supplier</span>
        </div>

        <p><a href="#">Total Supplier</a></p>
    </div>

    <div class="cmn tot-sale">
        <div class="sub-cmn">
            <h5>12</h5>
            <span>Total Sale</span>
        </div>

        <p><a href="#">Total Sale</a></p>
    </div>
</div>

<hr>

<div class="best">
    <div class="row best-table">
        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
            <div class="best-sale">
                <div class="best-product">
                    <p>Best Sale Product</p> <a href="#">See
                        All</a>
                </div>
                <div>
                    <img src="{{asset('admin_assets/images/sale map.png')}}" class="img-fluid" style="width:
                                            100%;" />
                </div>
            </div>
        </div>

        <div class="ciol-lg-5 col-md-5 col-sm-12 col-12">
            <div class="best-sale">
                <div class="best-product">
                    <p><input type="search" placeholder="November 2022"><button type="search" class="btn btn-filter"><i class="fa-solid
                                                    fa-magnifying-glass"></i>
                            Filter</button></p>
                </div>
                <div>
                    <h2 class="text-center text-success pb-2
                                            bg-white">Expense statement</h2>
                    <img src="{{asset('admin_assets/images/expance map.png')}}" class="img-fluid" style="width:
                                            100%;" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="best mt-4">
    <div class="row best-table">
        <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <div class="best-sale">
                <div class="best-product sale-purchase">
                    <p class="text-center"><span>sales and
                            Purchase Report summary-2022</span></p>
                </div>
                <div class="sale-pur-btn">
                    <form>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                            <label class="form-check-label" for="radio1">Sales</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                            <label class="form-check-label" for="radio2">Purchase</label>
                        </div>
                    </form>
                </div>
                <div class="sale-pur-btn-img">
                    <img src="{{asset('admin_assets/images/sale-purchase map.png')}}" class="img-fluid" />
                </div>
            </div>
        </div>

        <div class="ciol-lg-4 col-md-4 col-sm-4 col-12">
            <div class="best-sale">
                <div class="best-product">
                    <p class="pb-3">Todays Overview</p>
                </div>
                <div class="sale-pur-table">
                    <table class="table table-striped
                                            table-hover">
                        <tbody>
                            <tr>
                                <th>Todays Report</th>
                                <th>TK</th>
                            </tr>
                            <tr>
                                <th>Total Sales</th>
                                <td>$ 0.00</td>
                            </tr>
                            <tr>
                                <th>Total Purchase</th>
                                <td>$ 0.00</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-striped
                                            table-hover">
                        <tbody>
                            <tr>
                                <th>Last Sales</th>
                                <th>TK</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best mt-4">
    <div class="row best-table">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="best-sale">
                <div class="best-product">
                    <p class="">Today Sales Due</p> <a href="#">See All</a>
                </div>
                <div class="sale-pur-table">
                    <div class="table-responsive
                                            todayssaletitle">
                        <table class="table table-bordered
                                                table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Customer Name</th>
                                    <th>Voucher No</th>
                                    <th>Due Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" colspan="5">Record
                                        not found</th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end">&nbsp;<b>Total:</b></td>
                                    <td class="text-end">
                                        $ 0.00 </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="ciol-lg-6 col-md-6 col-sm-6 col-12">
            <div class="best-sale">
                <div class="best-product">
                    <p class=" ">Today Purchase Due</p> <a href="#">See All</a>
                </div>
                <div class="sale-pur-table">
                    <div class="table-responsive
                                            todayssaletitle">
                        <table class="table table-bordered
                                                table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Supplier Name</th>
                                    <th>Purchase ID</th>
                                    <th>Due Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" colspan="5">Record
                                        not found</th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end">&nbsp;<b>Total:</b></td>
                                    <td class="text-end">
                                        $ 0.00 </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="best mt-4">
    <div class="row best-table">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="best-sale">
                <div class="best-product">
                    <p class="">Todays Sales Report</p> <a href="#">See All</a>
                </div>
                <div class="sale-pur-table">
                    <div class="table-responsive
                                            todayssaletitle">
                        <table class="table table-bordered
                                                table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Customer Name</th>
                                    <th>Invoice No</th>
                                    <th>Total Amount</th>
                                    <th>Paid Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-center" colspan="5">Record
                                        not found</th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end">&nbsp;<b>Total:</b></td>
                                    <td class="text-end">
                                        $ 0.00 </td>
                                    <td class="text-end">
                                        $ 0.00 </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
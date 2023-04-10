@extends('admin/layout/layout')

@section('title', 'POS Sale')

@section('container')

@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dashboard-side">
    <div class="dash-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="{{ url($userRole.'/newsale') }}">Sale</a></li>
            <li class="text-secondary">POS Sale</li>
        </ul>
    </div>

    <div class="best mt-1">
        <div class="row best-table">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="best-sale">
                    <div class="best-product">
                        <span class="my-2">
                            <a href="#" class="p-2"> New Sale</a>
                            <a href="#" class="p-2"> Today Sale</a>
                        </span>
                    </div>
                    <div class="sale-pur-table">
                        <div class="pos-portion">
                            <div class="pos-part">
                                <ul>
                                    <li class="text-center">Atta</li>
                                    <li class="text-center">Oils</li>
                                    <li class="text-center">Dry-Fruits</li>
                                    <li class="text-center">Whole Spices</li>
                                    <li class="text-center">Grounded Spices</li>
                                    <li class="text-center">Blended Spices</li>
                                    <li class="text-center">Aethetic Products</li>
                                </ul>
                            </div>
                            <div class="pos-part pos-product">
                                <div class="pos-product-head">
                                    <div class="search-product">
                                        <input type="search" class="form-control" style="width: 100%;">
                                    </div>
                                    <div class="select-product">
                                        <select class="form-select" style="width: 100%;">
                                            <option>Select Option</option>
                                            <option>Atta</option>
                                            <option>Oils</option>
                                            <option>Dry-Fruits</option>
                                            <option>Whole Spices</option>
                                            <option>Grounded Spices</option>
                                            <option>Blended Spices</option>
                                            <option>Aethetic Products</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="pos-product-img">
                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Atta</p>
                                        </div>
                                    </div>
                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Oils</p>
                                        </div>
                                    </div>
                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Dry-Fruits</p>
                                        </div>
                                    </div>
                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Whole Spices</p>
                                        </div>
                                    </div>
                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Grounded Spices</p>
                                        </div>
                                    </div>
                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Blended Spices</p>
                                        </div>
                                    </div>

                                    <div class="product-img-part">
                                        <div class="pos-pro-img">
                                            <img src="{{asset('admin_assets/images/flower.jpg')}}" class="img-fluid" />
                                        </div>
                                        <div>
                                            <p class="text-center py-2">Aethetic Products</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pos-part pos-last-part">
                                <div class="row" style="align-items: center;">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <input type="text" class="form-control" placeholder="Barcode or QR-code scan">
                                    </div>
                                    OR
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                        <input type="text" class="form-control" placeholder="Manual Input barcode">
                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-5 col-12 mt-3">
                                        <input type="text" class="form-control" placeholder="Customer Name">
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-2 mt-3">
                                        <a href="#" class="edit border-primary"><i class="fa-solid fa-plus"></i></a>
                                    </div>
                                </div>

                                <div class="table-responsive todayssaletitle">
                                    <table class="table table-bordered table-hover mt-3 inter-change">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Item Information <span class="text-danger">*</span></th>
                                                <th class="text-center">Batch No<span class="text-danger">*</span></th>
                                                <th class="text-center">Av. Qnty.</th>
                                                <th class="text-center">Qnty <span class="text-danger">*</span></th>
                                                <th class="text-center">Rate <span class="text-danger">*</span></th>
                                                <th class="text-center">Dis %</th>
                                                <th class="text-center">Dis. Value</th>
                                                <th class="text-center">Vat %</th>
                                                <th class="text-center">VAT Value</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                                <td class="text-center"> </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Sale Discount :</td>
                                                <td><input type="text" class="text-end" value="0.00">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Total Discount :</td>
                                                <td><input type="text" class="text-end" value="0.00" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Total VAT :</td>
                                                <td><input type="text" class="text-end" value="0.00" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Shipping Cost :</td>
                                                <td><input type="text" class="text-end" value="0.00">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Grand Total :</td>
                                                <td><input type="text" class="text-end" value="0.00" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Previous :</td>
                                                <td><input type="text" class="text-end" value="0.00" disabled>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="text-end" colspan="10"> Change :</td>
                                                <td><input type="text" class="text-end" value="0.00" disabled>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <form>
                                    <div class="inner-form row">
                                        <div class=" col-lg-11 col-md-11 col-sm-11 col-12 new-sale-bt">
                                            <div class="row">
                                                <div class=" col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <label class="form-label text-start" style="float: left;">Payment Type
                                                    </label>
                                                    <select class="form-select">
                                                        <option>Case In Hand</option>
                                                        <option>Credit Sale</option>
                                                        <option>Petty Cash</option>
                                                        <option>Test Bank</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <label class="form-label text-start" style="float: left;">Paid Amount</label>
                                                    <input type="text" class="form-control" value="0">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-12 mt-5">
                                                <a href="#" type="button" class="btn btn-save">Add New
                                                    Payment
                                                    Method</a>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
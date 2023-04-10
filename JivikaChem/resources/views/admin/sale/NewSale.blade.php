@extends('admin/layout/layout')

@section('title', 'New Sale')

@section('container')

@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dashboard-side">
    <div class="dash-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="{{ url($userRole.'/newsale') }}">Sale</a></li>
            <li class="text-secondary">Add Invoice</li>
        </ul>
    </div>

    <div class="best mt-1">
        <div class="row best-table">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="best-sale">
                    <div class="best-product">
                        <p class="">New Sale</p>
                        <span class="my-2">
                            <a href="#" class="p-2"> <i class="fa-solid fa-bars"></i> Manage Sale</a>
                            <a href="#" class="p-2"> <i class="fa-solid fa-bars"></i> POS Sale</a>
                        </span>
                    </div>
                    <div class="sale-pur-table">
                        <form>
                            <div class="inner-form row">
                                <div class=" col-lg-2 col-md-4 col-sm-6 col-12">
                                    <label class="form-label">Customer Name/Phone <span class="text-danger">*</span>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <input type="text" class="form-control" placeholder="Customer Name/Phone ">
                                </div>
                            </div>
                            <div class="inner-form row mt-3">
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                    <label class="form-label">Date :</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <input type="date" class="form-control" placeholder="Details">
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive todayssaletitle">
                            <table class="table table-bordered mt-3 inter-change">
                                <thead>
                                    <tr>
                                        <th class="text-center">Item Information <span>*</span></th>
                                        <th class="text-center">Desc </th>
                                        <th class="text-center">Batch No <span>*</span></th>
                                        <th class="text-center">Av. Qnty.</th>
                                        <th class="text-center">Unit </th>
                                        <th class="text-center">Qnty <span>*</span> </th>
                                        <th class="text-center">Rate <span>*</span> </th>
                                        <th class="text-center">Discont % </th>
                                        <th class="text-center">Dis. value</th>
                                        <th class="text-center">Vat %</th>
                                        <th class="text-center">Vat Value</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="sale-tab">
                                        <td><input type="text" value="" placeholder="Product Name"> </td>
                                        <td><input type="text" class="text-end" value="0"> </td>
                                        <td><select class="form-select">
                                                <option selected>Select option</option>
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select></td>
                                        <td><input type="text" class="text-end" value="0" disabled></td>
                                        <td><input type="text" class="text-end" value="0" disabled> </td>
                                        <td><input type="text" class="text-end" value="1"></td>
                                        <td><input type="text" class="text-end" value="0.00"></td>
                                        <td><input type="text" class="text-end" value="0.00"></td>
                                        <td><input type="text" class="text-end" value="0" disabled></td>
                                        <td><input type="text" class="text-end" value="0.00"></td>
                                        <td><input type="text" class="text-end" value="0" disabled></td>
                                        <td><input type="text" class="text-end" value="0" disabled></td>
                                        <td class="pt-3 text-center"><a href="#" class="delete"><i class="fa-sharp fa-solid fa-xmark"></i></a>
                                        </td>
                                    </tr>

                                    <tr class="sale-tab tab-sales">
                                        <td class="text-center" rowspan="2" colspan="10">
                                            <p>Sale Details</p>
                                            <textarea rows="2" style="width: 100%;" placeholder="Sale Details"></textarea>
                                        </td>
                                        <td class="text-end">Sale Discount :</td>
                                        <td><input type="text" class="text-end" value="0.00"></td>
                                        <td class="pt-3 text-center">
                                            <a href="#" class="edit"><i class="fa-solid fa-plus"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="tab-sales">
                                        <td class="text-end">Total Discount :</td>
                                        <td><input type="text" class="text-end" value="0.00" disabled></td>
                                        <td></td>
                                    </tr>

                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Total VAT:</td>
                                        <td><input type="text" class="text-end" value="0.00" disabled></td>
                                        <td></td>
                                    </tr>

                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Shipping Cost:</td>
                                        <td><input type="text" class="text-end" value="0.00"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Grand Total:</td>
                                        <td><input type="text" class="text-end" value="0.00" disabled></td>
                                        <td></td>
                                    </tr>
                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Previous :</td>
                                        <td><input type="text" class="text-end" value="0.00" disabled></td>
                                        <td></td>
                                    </tr>
                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Net Total :</td>
                                        <td><input type="text" class="text-end" value="0.00" disabled></td>
                                        <td></td>
                                    </tr>
                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Paid Amount :</td>
                                        <td><input type="text" class="text-end" value="0"></td>
                                        <td></td>
                                    </tr>
                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">Due :</td>
                                        <td><input type="text" class="text-end" value="0" disabled></td>
                                        <td></td>
                                    </tr>

                                    <tr class="tab-sales">
                                        <td class="text-end" colspan="11">change :</td>
                                        <td><input type="text" class="text-end" value="0" disabled></td>
                                        <td></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                        <form>
                            <div class="inner-form row">
                                <div class=" col-lg-6 col-md-6 col-sm-6 col-12 new-sale-bt">
                                    <div class="row">
                                        <div class=" col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label class="form-label text-start">Payment Type </label>
                                            <select class="form-select">
                                                <option>Case In Hand</option>
                                                <option>Credit Sale</option>
                                                <option>Petty Cash</option>
                                                <option>Test Bank</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label class="form-label text-start">Paid Amount</label>
                                            <input type="text" class="form-control" value="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-12 mt-5">
                                        <a href="#" type="button" class="btn btn-save">Add New Payment
                                            Method</a>
                                    </div>
                                </div>
                            </div>

                            <div class="inner-form row mt-3">
                                <div class="col-sm-12 col-12">
                                    <a href="#" type="button" class="btn btn-save">Submit</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
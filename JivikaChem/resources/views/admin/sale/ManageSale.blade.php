@extends('admin/layout/layout')

@section('title', 'Manage Sale')

@section('container')

@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dashboard-side">
    <div class="dash-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="{{ url($userRole.'/newsale') }}">Sale</a></li>
            <li class="text-secondary">Manage Sale</li>
        </ul>
    </div>

    <div class="best mt-2">
        <div class="row best-table">

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="best-sale">
                    <div class="best-product">
                        <p class="">Manage Sale</p>
                    </div>
                    <div class="sale-pur-table">
                        <div class="manage-entry">
                            <div>
                                <span>Show</span>
                                <span class="selection box">

                                    <select class="selectpicker des" data-show-subtext="false" data-live-search="true" style="appearance: none;">
                                        <option value="All">All</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="All">All</option>
                                    </select>

                                </span>
                                <span>entries</span>
                            </div>
                            <div>
                                <ul>
                                    <li><a href="#">Copy</a></li>
                                    <li><a href="#">CSV</a></li>
                                    <li><a href="#">Excel</a></li>
                                    <li><a href="#">PDF</a></li>
                                    <li><a href="#">Print</a></li>
                                </ul>
                            </div>
                            <div>
                                <label>Search:</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="table-responsive todayssaletitle">
                            <table class="table table-bordered table-hover mt-3 inter-change">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL. </th>
                                        <th class="text-center">Invoice No<i class="fa-solid fa-arrow-right-arrow-left"></i></th>
                                        <th class="text-center">Sale By</th>
                                        <th class="text-center">Customer Name</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Total Amoun</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-start">1000</td>
                                        <td class="text-start">Admin User</td>
                                        <td></td>
                                        <td class="text-start">01-Jan-2023</td>
                                        <td class="text-end">$1,234.00</td>
                                        <td class="text-center"><span>
                                                <a href="#" class="edit bg-success border-success" data-bs-toggle="tooltip" data-bs-placement="left" title="Sale"><i class="fa-solid fa-window-restore"></i></a>
                                                <a href="#" class="delete bg-warning border-warning" data-bs-toggle="tooltip" data-bs-placement="left" title="Pad Print"><i class="fa-solid fa-fax"></i></a>
                                                <a href="#" class="delete bg-primary border-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="POS Sale"><i class="fa-solid fa-fax"></i></a>
                                            </span></td>
                                    </tr>

                                    <tr>
                                        <td class="text-end" colspan="5">Total :</td>
                                        <td class="text-end">0.00</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="manage-pagination supplier-ft">
                            <p>Showing 0 to 0 of 0 entries</p>
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
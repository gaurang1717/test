@extends('admin/layout/layout')

@section('title', 'Sales Term List')

@section('container')

@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dashboard-side">
    <div class="dash-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="{{ url($userRole.'/newsale') }}">Sale</a></li>
            <li class="text-secondary">Sales Terms List</li>
        </ul>
    </div>



    <div class="best mt-2">
        <div class="row best-table">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="best-sale">
                    <div class="best-product">
                        <p class="">Sales Terms List</p>
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
                            <table class="table table-bordered table-striped table-hover mt-3 inter-change">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL. <i class="fa-solid fa-arrow-right-arrow-left"></i></th>
                                        <th class="text-center">Terms & Condition<i class="fa-solid fa-arrow-right-arrow-left"></i></th>
                                        <th class="text-center">Status<i class="fa-solid fa-arrow-right-arrow-left"></i></th>
                                        <th class="text-center">Action <i class="fa-solid fa-arrow-right-arrow-left"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Goods purchased without the original invoice
                                            are not to be returned or exchanged</td>
                                        <td class="text-center">Active</td>
                                        <td class="text-center"><span><a href="#" class="edit" data-bs-toggle="tooltip" data-bs-placement="left" title="Update"><i class="fa-solid fa-pen"></i></a> <a href="#" class="delete" data-bs-toggle="tooltip" data-bs-placement="right" title="Delete"><i class="fa-solid fa-trash"></i></a></span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="manage-pagination">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
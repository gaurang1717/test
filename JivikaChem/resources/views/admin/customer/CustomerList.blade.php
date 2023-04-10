@extends('admin/layout/layout')

@section('title', 'Customer List')

@section('container')

@php

$userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dashboard-side">
    <div class="dash-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i>
                    Home</a></li>
            <li><a href="{{ url($userRole.'/addcustomer') }}">Customer</a></li>
            <li>Customer List</li>
        </ul>
    </div>
    <div class="best customer-list">
        <div class="row w-100 ps-3 pe-0">
            <div class="col-12 pe-0">
                <div class="best-sale">
                    <div class="best-product">
                        <p>Customer List</p>
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
                                <label>Search:</label>
                                <input type="text">
                            </div>
                        </div>

                        <div class="table-responsive todayssaletitle mt-3">
                            <table class="table table-bordered table-striped table-hover inter-change">
                                <thead>
                                    <tr>
                                        <th class="text-center">SL. </th>
                                        <th class="text-center">Customer Name<i class="fa-solid fa-arrow-right-arrow-left"></i></th>
                                        <th class="text-center">Address1 </th>
                                        <th class="text-center">Mobile No </th>
                                        <th class="text-center">Email </th>
                                        <th class="text-center">VAT NO</th>
                                        <th class="text-center">CR NO</th>
                                        <th class="text-center">Zip code</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Balance</th>
                                        <th class="text-center">Action </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>t.nixon@datatables.net</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                        <td>India</td>
                                        <td>10,00,000</td>
                                        <td>View</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>t.nixon@datatables.net</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                        <td>India</td>
                                        <td>10,00,000</td>
                                        <td>View</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="">Showing 1 to 10 of 275 entries
                                </p>
                            </div>
                            <div class="manage-pagination mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item "><a class="page-link" href="#">28</a></li>

                                    <li class="page-item disabled"><a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
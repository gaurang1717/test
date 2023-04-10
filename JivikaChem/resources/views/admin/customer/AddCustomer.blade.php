@extends('admin/layout/layout')

@section('title', 'Add Customer')

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
            <li>Add Customer</li>
        </ul>
    </div>

    <div class="best">
        <div class="row w-100 ps-3 pe-0">
            <div class="col-12 pe-0">
                <div class="best-sale">
                    <div class="best-product">
                        <p>Add Customer</p>
                    </div>
                    <form>
                        <div class="row p-3 pb-0">
                            <label for="customer_email" class="col-sm-2 text-right col-form-label">Customer
                                Name:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" class="form-control input-mask-trigger " name="customer_email" id="customer-name" data-inputmask="'alias': 'email'" im-insert="true" placeholder="Customer Name" value="">
                                </div>
                            </div>
                            <label for="email_address" class="col-sm-2 text-right col-form-label">Mobile
                                No:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" class="form-control " name="email_address" id="mobile-no" placeholder="Mobile No" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row p-3 pb-0">
                            <label for="customer_email" class="col-sm-2 text-right col-form-label">Email
                                Address:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" class="form-control input-mask-trigger " name="customer_email" id="email" data-inputmask="'alias': 'email'" im-insert="true" placeholder="Email" value="">
                                </div>
                            </div>
                            <label for="email_address" class="col-sm-2 text-right col-form-label">VAT
                                NO:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" class="form-control " name="email_address" id="email_address" placeholder="VAT NO" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row p-3 pb-0">
                            <label for="phone" class="col-sm-2 text-right col-form-label">Phone:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="number" class="form-control input-mask-trigger text-left " id="phone" name="phone" placeholder="Phone" data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true" value="">
                                </div>
                            </div>
                            <label for="contact" class="col-sm-2 text-right col-form-label">CR NO&nbsp;
                                <span data-toggle="tooltip" data-placement="top" title="Commercial Registration Number">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                </span> :
                            </label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input class="form-control " id="contact" type="text" name="contact" placeholder="CR NO" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row p-3 pb-0">
                            <label for="address1" class="col-sm-2 text-right col-form-label">Address1:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <textarea name="customer_address" id="customer_address" class="form-control" placeholder="Address1"></textarea>
                                </div>
                            </div>
                            <label for="address2" class="col-sm-2 text-right col-form-label">Address2:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <textarea name="address2" id="address2" class="form-control" placeholder="Address2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row p-3 pb-0">
                            <label for="fax" class="col-sm-2 text-right col-form-label">Fax:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" name="fax" class="form-control" id="fax" placeholder="Fax" value="">
                                </div>
                            </div>
                            <label for="city" class="col-sm-2 text-right col-form-label">City:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" name="city" class="form-control" id="city" placeholder="City" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row p-3 pb-0">
                            <label for="state" class="col-sm-2 text-right col-form-label">State:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input type="text" name="state" class="form-control" id="state" placeholder="State" value="">
                                </div>
                            </div>
                            <label for="zip" class="col-sm-2 text-right col-form-label">Zip code:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input name="zip" type="text" class="form-control" id="zip" placeholder="Zip code" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row p-3 pb-0">
                            <label for="country" class="col-sm-2 text-right col-form-label">Country:</label>
                            <div class="col-sm-4">
                                <div class="">
                                    <input name="country" type="text" class="form-control " placeholder="Country" value="" id="country">
                                </div>
                            </div>
                        </div>

                    </form>
                    <div class="row m-2 mb-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-end">

                            <a href="#" type="button" class="btn btn-save">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
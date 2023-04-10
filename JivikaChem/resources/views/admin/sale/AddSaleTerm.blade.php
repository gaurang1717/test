@extends('admin/layout/layout')

@section('title', 'Add Sales Term')

@section('container')

@php

    $userRole = auth()->user()->roles->first()->name;

@endphp

<div class="dashboard-side">
    <div class="dash-breadcrumb">
        <ul class="breadcrumb">
            <li><a href="{{ url($userRole.'/dashboard') }}"><i class="fa-solid fa-house"></i> Home</a></li>
            <li><a href="{{ url($userRole.'/newsale') }}">Sale</a></li>
            <li class="text-secondary">Add Sales Terms</li>
        </ul>
    </div>

    <div class="best mt-1">
        <div class="row best-table">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="best-sale">
                    <div class="best-product">
                        <p class="">Add Sales Terms</p>
                    </div>
                    <div class="sale-pur-table">
                        <form>
                            <div class="inner-form row">
                                <div class=" col-lg-2 col-md-4 col-sm-6 col-12">
                                    <label class="form-label">Terms & Condition <span class="text-danger">*</span>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="inner-form row mt-3">
                                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                                    <label class="form-label">Status <span class="text-danger">*</span>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <select class="form-select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="inner-form row mt-3">
                                <div class="col-sm-6">
                                    <a href="#" type="button" class="btn btn-save">Save</a>
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
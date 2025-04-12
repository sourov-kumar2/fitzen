@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Users</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span class="text-white">100</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Sales</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span class="text-white">$5000</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Pending Orders</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span class="text-white">15</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Support Tickets</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span class="text-white">5</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

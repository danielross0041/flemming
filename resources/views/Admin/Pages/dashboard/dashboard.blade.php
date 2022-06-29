@extends('Admin.Layout.master')
<div class="category_page">
    <div class="container">
        <div class="logo_blck">
            <img src="{{asset('assets/images/logo-black.svg')}}" alt="Logo Black">
        </div>
        <div class="card_area">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('new.customer')}}">
                            <i class="fa-regular fa-user-plus"></i>
                            <h4>New Customer</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('customer')}}">
                            <i class="fa-regular fa-users"></i>
                            <h4>Customers</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('orders')}}">
                            <i class="fa-regular fa-clipboard-list-check"></i>
                            <h4>Orders</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('products')}}">
                            <i class="fa-regular fa-user-plus"></i>
                            <h4>Products</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('report.index')}}">
                            <i class="fa-regular fa-file-contract"></i>
                            <h4>Reports</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('search')}}">
                            <i class="fa-brands fa-searchengin"></i>
                            <h4>Search</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('calender')}}">
                            <i class="fa-regular fa-calendar-check"></i>
                            <h4>Appointments</h4>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card_1">
                        <a href="{{route('admin.logout')}}">
                            <i class="fa-regular fa-arrow-right-from-bracket"></i>
                            <h4>Log Out</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
@endsection

@section('css')
@endsection



@section('scripts')
@endsection

@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">
            
            <div class="tabs_custome_1">
                <div class="d-flex justify-content-between align-items-center">
                    <h4><i class="fas fa-user"></i> {{ Auth::guard('admin')->user()->name }}</h4>
                    <div class="btn_order_plus">
                        <button><a class="text" href="{{ route('admin.change') }}">Change Password </a></button>
                    </div>
                </div>
                <!-- user_profiel_data  -->
                <div class="user_profiel_data">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            @foreach ($pros as $pro)
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Company Name</h5>
                                        <p>{{ $pro->name }}</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Phone Number</h5>
                                        <p>{{ $pro->phone }}</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Email</h5>
                                        <p>{{ $pro->email }}</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Address</h5>
                                        <p>{{ $pro->address }}</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Company Logo</h5>
                                        <img src="{{ asset('profile_image/'.$pro->image) }}" style="border-radius: 22px; border: 2px solid black; width:100%" alt="image">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <div class="btn_order_plus">
                                            <button><a class="text" href="{{ route('user.profile.edit',$pro->id) }}" >Edit Company Profile</a></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        body {
            background-color: #EEF2F5;
        }
    </style>
@endsection
@section('scripts')

@endsection

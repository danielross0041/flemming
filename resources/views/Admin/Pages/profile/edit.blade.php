@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">

            <div class="tabs_custome_1">

                <!-- user_profiel_data  -->
                <div class="frm_area_1">
                    <h4>Company Profile </h4>
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $pro->id }}">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="Company Name" name="name"
                                            value="{{ $pro->name }}">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{ $pro->email }}">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="row g-3 mt-3">

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Phone</label>
                                        <input type="text" placeholder="Phone" name="phone" value="{{ $pro->phone }}">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('phone') }}</span>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Address</label>
                                        <input type="text" placeholder="Address" name="address"
                                            value="{{ $pro->address }}">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('address') }}</span>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Image</label>
                                        <input type="file" name="file">
                                        <br>
                                        <br>
                                        <img src="{{ asset('profile_image/' . $pro->image) }}" alt="image">
                                        <br>
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('image') }}</span>
                                    </div>
                                </div>


                                <!-- <buttonSave</button> -->
                                <button type="submit">Update</button>
                            </form>
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

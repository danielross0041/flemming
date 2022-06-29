@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">

            <div class="tabs_custome_1">
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('messageType') }} alert-block">
                        
                        <strong>{{ Session::get('message') }} </strong>
                    </div>
                @endif

                <!-- user_profiel_data  -->
                <div class="frm_area_1">
                    <h4>Change Password </h4>
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                            <form action="{{ route('admin.update') }}" method="POST">
                                @csrf

                                <div class="row g-3">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Old Password</label>
                                        <input type="password" placeholder="Old Password" name="old_password">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('old_password') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" placeholder="New Password">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('new_password') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" placeholder="Confirm Password">
                                        <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('confirm_password') }}</span>
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

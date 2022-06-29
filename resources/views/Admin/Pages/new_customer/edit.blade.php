@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">
            
            <div class="frm_area_1">
                <h4>Edit Customer</h4>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                        <form action=" {{ route('new.customer.update') }}" method="POST">
                            <input type="hidden" name="id" value="{{ $cus->id }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="text" placeholder="First name" name="first_name" value="{{ $cus->firstname }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('first_name') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="text" placeholder="Last name" name="last_name" value="{{ $cus->lastname }}"> 
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('last_name') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="number" placeholder="Phone" name="phone" value="{{ $cus->phone }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('phone') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="number" placeholder="Alt Phone" name="alt_phone" value="{{ $cus->altphone }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('alt_phone') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="email" placeholder="Email" name="email" value="{{ $cus->email }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Street Address" name="street_address" value="{{ $cus->street }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('street_address') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="text" placeholder="City" name="city" value="{{ $cus->city }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('city') }}</span>
                                </div>
                                <?php
                                    $_states = ['AL','AK','AZ','AR','CA','CO','CT','DC','DE','FL','GA','HI','ID','IL','IN','IA','KS','KY','LA','ME','MD','MA','MI','MN','MS','MO','MT','NE','NV','NH','NJ','NM','NY','NC','ND','OH','OK','OR','PA','RI','SC','SD','TN','TX','UT','VT','VA','WA','WV','WI','WY'];
                                ?>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4" >
                                    <select name="state" class="black" id="state">
										@foreach($_states as $_state)
											<option value="{{$_state}}" <?=($_state==$cus->state)?'selected':'';?>>{{$_state}}</option>
										@endforeach
                        			</select>
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('state') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="number" placeholder="Zip Code" name="zip_code" value="{{ $cus->zip }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('zip_code') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Referrer" name="reffer" value="{{ $cus->referrer }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('reffer') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Notes" name="notes" value="{{ $cus->notes }}">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('notes') }}</span>
                                </div>
                            </div>
                            <!-- <buttonSave</button> -->
                            <button type="submit">Update</button>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
                        <div class="img_beef">
                            <img src="{{asset('assets/images/beef.svg')}}" alt="Beef">
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

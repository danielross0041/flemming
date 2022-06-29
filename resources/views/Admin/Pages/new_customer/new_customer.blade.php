@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">
            
            <div class="frm_area_1">
                <h4>Customer Entry - New </h4>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                        <form action=" {{ route('new.customer.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="text" placeholder="First name" name="first_name">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('first_name') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="text" placeholder="Last name" name="last_name"> 
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('last_name') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="number" placeholder="Phone" name="phone">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('phone') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="number" placeholder="Alt Phone" name="alt_phone">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('alt_phone') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="email" placeholder="Email" name="email">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Street Address" name="street_address">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('street_address') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="text" placeholder="City" name="city">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('city') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <select name="state" class="black" id="state">
                            			<option value="AL">AL</option>
                            			<option value="AK">AK</option>
                            			<option value="AZ">AZ</option>
                            			<option value="AR">AR</option>
                            			<option value="CA">CA</option>
                            			<option value="CO">CO</option>
                            			<option value="CT">CT</option>
                            			<option value="DC">DC</option>
                            			<option value="DE">DE</option>
                            			<option value="FL">FL</option>
                            			<option value="GA">GA</option>
                            			<option value="HI">HI</option>
                            			<option value="ID">ID</option>
                            			<option value="IL">IL</option>
                            			<option value="IN">IN</option>
                            			<option value="IA">IA</option>
                            			<option value="KS">KS</option>
                            			<option value="KY">KY</option>
                            			<option value="LA">LA</option>
                            			<option value="ME">ME</option>
                            			<option value="MD">MD</option>
                            			<option value="MA">MA</option>
                            			<option value="MI">MI</option>
                            			<option value="MN">MN</option>
                            			<option value="MS">MS</option>
                            			<option value="MO">MO</option>
                            			<option value="MT">MT</option>
                            			<option value="NE">NE</option>
                            			<option value="NV">NV</option>
                            			<option value="NH">NH</option>
                            			<option value="NJ">NJ</option>
                            			<option value="NM">NM</option>
                            			<option value="NY">NY</option>
                            			<option value="NC">NC</option>
                            			<option value="ND">ND</option>
                            			<option value="OH">OH</option>
                            			<option value="OK">OK</option>
                            			<option value="OR">OR</option>
                            			<option value="PA">PA</option>
                            			<option value="RI">RI</option>
                            			<option value="SC">SC</option>
                            			<option value="SD">SD</option>
                            			<option value="TN">TN</option>
                            			<option value="TX">TX</option>
                            			<option value="UT">UT</option>
                            			<option value="VT">VT</option>
                            			<option value="VA">VA</option>
                            			<option value="WA">WA</option>
                            			<option value="WV">WV</option>
                            			<option value="WI">WI</option>
                            			<option value="WY">WY</option>
                        			</select>
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('state') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="number" placeholder="Zip Code" name="zip_code">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('zip_code') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Referrer" name="reffer">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('reffer') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Notes" name="notes">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('notes') }}</span>
                                </div>
                            </div>
                            <!-- <buttonSave</button> -->
                            <button type="submit">Save</button>
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

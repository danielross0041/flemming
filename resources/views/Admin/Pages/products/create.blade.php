@extends('Admin.Layout.master')
@section('content')
    <div class="container-fluid">
        <div class="content_right_area">
            <div class="frm_area_1">
                <h4>Product Entry - New </h4>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                        <form action=" {{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="text" placeholder="Product Class" value="{{$_getProData->pclass ?? ''}}" name="pclass">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('pclass') }}</span>
                                </div>
                                <?php 
                                    $_makes = ['Deer','Hog','Elk','Cattle','Sheep'];
                                ?>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
									<select name="make" class="black" id="state" required>
									    @foreach($makes as $_make)
									    @if($_getProData != 'null')
									        <option value="{{$_make->id}}" <?= ($_getProData->make==$_make->id ?? '' )?'selected' : '' ?> >{{$_make->name}}</option>
									    @else
									        <option value="{{$_make->id}}"> {{$_make->name}} </option>
									    @endif
                            			@endforeach
                        			</select>
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('make') }}</span>
                                </div>
                            </div>
                            <?php
                                $_category = ['Base Processing','Fresh Rope','Smoked','Breakfast','Cuts','Other'];
                            ?>
                            <div class="row g-3 mt-3">
								 <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <select name="category" class="black" id="state" required>
                                        @foreach($categorys as $_cate)
                                            @if($_getProData != 'null')
                                			    <option value="{{$_cate->id}}" <?= ($_cate->id == $_getProData->category ?? '')? 'selected' : '' ?> >{{$_cate->name}}</option>
                                			@else
                                			    <option value="{{$_cate->id}}" >{{$_cate->name}}</option>
                                			@endif
                            			@endforeach
                        			</select>
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('category') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="text" placeholder="Type" value="{{$_getProData->type ?? ''}}" name="type">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('type') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                    <input type="text" placeholder="Variety" value="{{$_getProData->variety ?? ''}}" name="variety">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('variety') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <input type="text" placeholder="Price" value="{{$_getProData->price ?? ''}}" name="price">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('price') }}</span>
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="text" placeholder="Mixture" value="{{$_getProData->mixture ?? ''}}" name="mixture">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('mixture') }}</span>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <input type="number" placeholder="Minimum" value="{{$_getProData->minimum ?? ''}}" name="minimum">
                                    <span class="text-danger"
                                    style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('minimum') }}</span>
                                </div>
                            </div>
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

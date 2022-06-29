@extends('Admin.Layout.master')

@section('content')

<div class="container-fluid">
    <div class="content_right_area">
        
        <div class="frm_area_1">
            <h4>Contact </h4>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6 ">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                           
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input type="number" name="phone" placeholder="Phone">
                            </div>
                           
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                       
                      
                       
                        <div class="row g-3 mt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label>Subject</label>
                                <input type="text" name="subject" placeholder="Notes">
                            </div>
                        </div>
                        <!-- <buttonSave</button> -->
                        <button type="submit" >Save</button>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 d-flex justify-content-center">
                    <div class="img_beef">
                        <img src="images/beef.svg" alt="Beef">
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection

@section('css')
@endsection

@section('scripts')
@endsection
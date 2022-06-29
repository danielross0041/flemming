@extends('Admin.Layout.master')
@section('content')

<div class="container-fluid">
   <div class="content_right_area">
                <div class="search_area">
                    <div class="search_1">
                        <input type="text" placeholder="Search">
                        <i class="fa-regular fa-magnifying-glass"></i>
                    </div>
                    <!--<div class="slct_1">
                        <select name="" id="">
                            <option>Current Location</option>
                            <option selected="">Lake Conroe</option>
                            <option>Lake Livingston</option>
                       
                        </select>
                        <i class="fa-regular fa-angle-down"></i>
                    </div>-->
                </div>
                <div class="tabs_custome_1">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4><i class="fas fa-user"></i> John Doe </h4>
                        <div class="btn_order_plus">
                            <button onclick="location.href ='https://demo-orbitdesignagency.com/Ken-Flaming-Dashboard/addorder.php'"><i class="fas fa-plus"></i> Add New Order</button>
                        </div>
                    </div>
                    <!-- user_profiel_data  -->
                    <div class="user_profiel_data">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Employee ID</h5>
                                        <p>#123</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Phone Number</h5>
                                        <p>124-5678-568</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Email</h5>
                                        <p>fransico@drakeplastics.com</p>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Location </h5>
                                        <p>Lake Livingston</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Designation</h5>
                                        <p>Manager</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <h5>Notes</h5>
                                        <p>split between #1 &amp; #2</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

                            </div>
                        </div>

                    </div>
                    <!-- user_profiel_data  -->
                    <div class="tabs_area">

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="tabLe_area_order">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Order Date</th>
                                                <th>Order ID</th>
                                                <th>Slot#</th>
                                                <th>Order Total</th>
                                                <th>Status</th>
                                                <th>Notes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>

                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                            <tr>
                                                <td>01/02/2022</td>
                                                <td>01234</td>
                                                <td>M123</td>
                                                <td>$1234.00 </td>
                                                <td>Processing</td>
                                                <td>Write note here</td>
                                            </tr>
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <td col="6">Total</td>
                                                <td col="6">$78910.00</td>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                    <div class="total_area">
                                        <h4>Total</h4>
                                        <h4>$78910.00</h4>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- <div class="pagination_area2">

                            <ul>
                                <li><a href="void:;"><i class="fa-regular fa-angle-left"></i></a></li>
                                <li><a href="void:;" class="active">1</a></li>
                                <li><a href="void:;">2</a></li>
                                <li><a href="void:;">3</a></li>
                                <li><a href="void:;">4</a></li>
                                <li><a href="void:;"><i class="fa-regular fa-angle-right"></i></a></li>
                            </ul>
                            

                        </div> -->

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
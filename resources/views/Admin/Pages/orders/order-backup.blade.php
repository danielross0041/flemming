@extends('Admin.Layout.master')
@section('content')

<div class="container-fluid">
    <div class="content_right_area">
        <div class="search_area">
            <div class="search_1">
                <input type="text" placeholder="Search">
                <i class="fa-regular fa-magnifying-glass"></i>
            </div>
            <div class="slct_1">
                <select name="" id="">
                    <option >Current Location</option>
                    <option selected>Lake Canroe</option>
                    <option>Lake Livingston</option>              
                </select>
                <i class="fa-regular fa-angle-down"></i>
            </div>
        </div>
        <div class="tabs_custome_1">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Orders </h4>
            </div>
            <div class="tabs_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <span><img src="{{asset('assets/images/process.svg')}}" alt="Process"></span>
                            Processing
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span><img src="{{asset('assets/images/completed.svg')}}" alt="Process"></span>
                            Complete
                        </button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <span><img src="{{asset('assets/images/box.svg')}}" alt="Process"></span>
                            Ready
                        </button>
                        <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">
                            <span><img src="{{asset('assets/images/pickup.svg')}}" alt="Process"></span>
                            Pickup
                        </button>
                        <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">
                            <span><img src="{{asset('assets/images/abonded.svg')}}" alt="Process"></span>
                            Abandoned
                        </button>
                        <button class="nav-link" id="nav-contact-tab3" data-bs-toggle="tab" data-bs-target="#nav-contact3" type="button" role="tab" aria-controls="nav-contact3" aria-selected="false">
                            <span><img src="{{asset('assets/images/all.svg')}}" alt="Process"></span>
                            All Orders
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="tabLe_area_order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Order ID</th>
                                        <th>Slot#</th>
                                        <th>Customer</th>
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
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>

                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Processing</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
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
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="tabLe_area_order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Order ID</th>
                                        <th>Slot#</th>
                                        <th>Customer</th>
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
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>

                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Complete</td>
                                        <td>Write note here</td>
                                    </tr>
                                </tbody>

                            </table>


                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="tabLe_area_order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Order ID</th>
                                        <th>Slot#</th>
                                        <th>Customer</th>
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
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>

                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Ready</td>
                                        <td>Write note here</td>
                                    </tr>
                                </tbody>

                            </table>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
                        <div class="tabLe_area_order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Order ID</th>
                                        <th>Slot#</th>
                                        <th>Customer</th>
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
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>

                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Pickup</td>
                                        <td>Write note here</td>
                                    </tr>
                                </tbody>

                            </table>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                        <div class="tabLe_area_order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Order ID</th>
                                        <th>Slot#</th>
                                        <th>Customer</th>
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
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>

                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>Abandoned</td>
                                        <td>Write note here</td>
                                    </tr>
                                </tbody>

                            </table>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                        <div class="tabLe_area_order">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Date</th>
                                        <th>Order ID</th>
                                        <th>Slot#</th>
                                        <th>Customer</th>
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
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>

                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                    <tr>
                                        <td>01/02/2022</td>
                                        <td>01234</td>
                                        <td>M123</td>
                                        <td>Customer Name </td>
                                        <td>$1234.00 </td>
                                        <td>All Orders</td>
                                        <td>Write note here</td>
                                    </tr>
                                </tbody>


                            </table>


                        </div>
                    </div>

                </div>

                <div class="pagination_area2">

                    <ul>
                        <li><a href="void:;"><i class="fa-regular fa-angle-left"></i></a></li>
                        <li><a href="void:;" class="active">1</a></li>
                        <li><a href="void:;">2</a></li>
                        <li><a href="void:;">3</a></li>
                        <li><a href="void:;">4</a></li>
                        <li><a href="void:;"><i class="fa-regular fa-angle-right"></i></a></li>
                    </ul>
                    

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
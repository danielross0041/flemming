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
                <h4> Add New Order </h4>
                <p><a href="https://demo-orbitdesignagency.com/Ken-Flemings-Dashboard/addorder2.php"  >  Wild Game </a> | <a href="https://demo-orbitdesignagency.com/Ken-Flemings-Dashboard/addorder.php" class="active">  Domestic </a>  </p>
            </div>
            <div class="tabs_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <span><img src="images/cow.svg" alt="cow"></span>
                            Cattle
                        </button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span><img src="images/deer.svg" alt="deer"></span>
                            Deer
                        </button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <span><img src="images/sheep.svg" alt="Sheep"></span>
                            Sheep
                        </button>
                        <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1" type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">
                            <span><img src="images/pig.svg" alt="pig"></span>
                            Hogs
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="add_order">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xxl-3 col-xl-3">
                                    <div class="accord_order">
                                        <!-- --------------------------------------------------------------- -->

                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Breakfast
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Base Processing
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Freshrope
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                        Smoke
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xxl-9 col-xl-9">
                                    <div class="accord_order_table">
                                        <!-- --------------------------------------------------------------- -->
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Item</th>
                                                    <th colspan="">Price / Unit</th>
                                                    <th colspan="">Game Unit</th>
                                                    <th colspan="">Mix Factor</th>
                                                    <th colspan="">Mix Units</th>
                                                    <th colspan="">Total Units</th>
                                                    <th colspan="">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">Total</td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">CREDIT CARD TOTAL</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>


                                            </tfoot>
                                        </table>

                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="add_order">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xxl-3 col-xl-3">
                                    <div class="accord_order">
                                        <!-- --------------------------------------------------------------- -->

                                        <div class="accordion" id="accordionExample21">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Breakfast
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample21">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Base Processing
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample21">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Freshrope
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample21">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                        Smoke
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample21">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xxl-9 col-xl-9">
                                    <div class="accord_order_table">
                                        <!-- --------------------------------------------------------------- -->
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Item</th>
                                                    <th colspan="">Price / Unit</th>
                                                    <th colspan="">Game Unit</th>
                                                    <th colspan="">Mix Factor</th>
                                                    <th colspan="">Mix Units</th>
                                                    <th colspan="">Total Units</th>
                                                    <th colspan="">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">Total</td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">CREDIT CARD TOTAL</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>


                                            </tfoot>
                                        </table>

                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="add_order">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xxl-3 col-xl-3">
                                    <div class="accord_order">
                                        <!-- --------------------------------------------------------------- -->

                                        <div class="accordion" id="accordionExample22">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Breakfast
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample22">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Base Processing
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample22">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Freshrope
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample22">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                        Smoke
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample22">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xxl-9 col-xl-9">
                                    <div class="accord_order_table">
                                        <!-- --------------------------------------------------------------- -->
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Item</th>
                                                    <th colspan="">Price / Unit</th>
                                                    <th colspan="">Game Unit</th>
                                                    <th colspan="">Mix Factor</th>
                                                    <th colspan="">Mix Units</th>
                                                    <th colspan="">Total Units</th>
                                                    <th colspan="">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">Total</td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">CREDIT CARD TOTAL</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>


                                            </tfoot>
                                        </table>

                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">

                    <div class="add_order">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xxl-3 col-xl-3">
                                    <div class="accord_order">
                                        <!-- --------------------------------------------------------------- -->

                                        <div class="accordion" id="accordionExample23 ">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Breakfast
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample23">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Base Processing
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample23">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Freshrope
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample23">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingfour">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                        Smoke
                                                    </button>
                                                </h2>
                                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample23">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>Italian Pan Sausage (Hot)</li>
                                                            <li>Italian Pan Sausage (Mild)</li>
                                                            <li>Italian Pan Sausage (Jalapeno and Cheese)
                                                            <li>
                                                            <li>Pan Sausage (Hot)
                                                            <li>
                                                            <li>Pan Sausage (Mild)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xxl-9 col-xl-9">
                                    <div class="accord_order_table">
                                        <!-- --------------------------------------------------------------- -->
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4">Item</th>
                                                    <th colspan="">Price / Unit</th>
                                                    <th colspan="">Game Unit</th>
                                                    <th colspan="">Mix Factor</th>
                                                    <th colspan="">Mix Units</th>
                                                    <th colspan="">Total Units</th>
                                                    <th colspan="">Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-times-circle"></i>
                                                            <p>{W}[D,Bf] Pan Sausage (Hot)</p>
                                                        </div>

                                                    </td>
                                                    <td><input type="number" placeholder="$"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="-"></td>
                                                    <td><input type="number" placeholder="$"></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">Total</td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>-</p>
                                                    </td>
                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">CREDIT CARD TOTAL</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <p>$0.00</p>
                                                    </td>
                                                </tr>


                                            </tfoot>
                                        </table>

                                        <!-- ---------------------------------------------------------------- -->
                                    </div>
                                </div>
                            </div>
                        </div>

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

    .tabs_custome_1 .nav-tabs button {
        width: 182px;
        padding: 51px 0 29px;
    }

    .tabs_custome_1 .nav-tabs button span img {
        width: 44px;
    }
</style>

@endsection

@section('scripts')

@endsection
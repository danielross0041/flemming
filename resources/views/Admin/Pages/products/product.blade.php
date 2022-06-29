@extends('Admin.Layout.master')
@section('content')
<div class="container-fluid">
    <div class="content_right_area">
        
        <div class="tabs_custome_1">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Products </h4> 
				<a class="add-pro" href="{{route('products.create',[0])}}">Add Product</a>
                <!-- <p>Need Filled | Recently Filled</p> -->
            </div>
            <div class="tabs_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
						@foreach($prodarray as $make => $prodtype)
						<button class="nav-link {{$loop->first ? 'active' : ''}}" id="nav-hog-tab" data-bs-toggle="tab" data-bs-target="#nav-hog" type="button" role="tab" aria-controls="nav-hog" aria-selected="true">
                            @if($make == 'Hog')
								<span><img src="{{asset('assets/images/pig.svg')}}" alt="pig"></span>
							@elseif($make == 'Deer')
								<span><img src="{{asset('assets/images/deer.svg')}}" alt="cow"></span>
							@elseif($make == 'Cattle')
								<span><img src="{{asset('assets/images/cow.svg')}}" alt="deer"></span>
							@elseif($make == 'Sheep')
								<span><img src="{{asset('assets/images/sheep.svg')}}" alt="Sheep"></span>
							@else
								<span><img src="{{asset('assets/images/pig.svg')}}" alt="pig"></span>
							@endif
								{{$make}}
                        </button>
						@endforeach
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-hog" role="tabpanel" aria-labelledby="nav-hog-tab">
                        <!-- inner tab  -->
                        <div class="inner_tabs_product">
                            <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
								@foreach($prodarray as $type => $prodtyp)
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{$type}}</button>
									</li>
								@endforeach
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                   Pan Sausage (Hot)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <!-- <th>Fixed</th> -->
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <!-- <td><input type="checkbox"></td> -->
                                                                                </tr>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Pan Sausage (Jalapeno and Cheese)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>5/12/22	</th>
                                                                                    <td>	35660</td>
                                                                                    <td>M77</td>
                                                                                    <td>Scott Gatto (Axis)</td>
                                                                                    <td>5</td>
                                                                                    <td>5</td>
                                                                                    <td>10</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>5/12/22	</th>
                                                                                    <td>	35666</td>
                                                                                    <td>M198</td>
                                                                                    <td>Tim Gautat</td>
                                                                                    <td>5</td>
                                                                                    <td>5</td>
                                                                                    <td>10</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>15</td>
                                                                                    <td>15</td>
                                                                                    <td>30</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
													</div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample16">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                 Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>4/29/22	</th>
                                                                                    <td>35662</td>
                                                                                    <td>M96	</td>
                                                                                    <td>Kevin Edwards</td>
                                                                                    <td>38</td>
                                                                                    <td>9.5</td>
                                                                                    <td>47.5</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                     Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>5/3/22	</th>
                                                                                    <td>35656</td>
                                                                                    <td>-</td>
                                                                                    <td>Matt Teeter (Oryx)</td>
                                                                                    <td>18</td>
                                                                                    <td>0</td>
                                                                                    <td>18</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>5/3/22	</th>
                                                                                    <td>35658</td>
                                                                                    <td>M82</td>
                                                                                    <td>Scott Gatto</td>
                                                                                    <td>19</td>
                                                                                    <td>0</td>
                                                                                    <td>19</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
													</div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample3">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- inner tab  -->
                    </div>
					
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- inner tab  -->
                        <div class="inner_tabs_product">
                            <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Base Processing</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Fresh Rope</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false"> Smoked</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample4">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample5">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample6">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample7">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- inner tab  -->


                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <!-- inner tab  -->
                        <div class="inner_tabs_product">
                            <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Base Processing</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Fresh Rope</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false"> Smoked</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample8">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample9">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample10">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample11">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- inner tab  -->

                    </div>
                    <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
                        <!-- inner tab  -->
                        <div class="inner_tabs_product">
                            <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Breakfast</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Base Processing</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Fresh Rope</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false"> Smoked</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample12">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample13">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample14">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xxl-8 col-xl-8">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Product Name</h5>
                                                    </div>
                                                    <div class="accordion accordion-flush" id="accordionFlushExample15">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                    Burger
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    Burger (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                    Burger 25% (Brisket Mix)
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfour">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                                                    Chili (Brisket Mix)

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>

                                                                                </tr>
                                                                            </tfoot>


                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="flush-headingfive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                                                    Fajitas

                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body">
                                                                    <div class="product_page_scrol">
                                                                        <table class="table product_page table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Order Date </th>
                                                                                    <th>Order</th>
                                                                                    <th>Slot#</th>
                                                                                    <th>Customer (order notes)</th>
                                                                                    <th>Game</th>
                                                                                    <th>Mix</th>
                                                                                    <th>Total</th>
                                                                                    <th>Fixed</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <th>2/2/2022</th>
                                                                                    <td>124124</td>
                                                                                    <td>M164</td>
                                                                                    <td>John Cole (AXIS)</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td><input type="checkbox"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <th>Total</th>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>--</td>
                                                                                    <td>42</td>
                                                                                    <td>17</td>
                                                                                    <td>51</td>
                                                                                    <td>--</td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>Total</h6>
                                                        <ul class="list_area">
                                                            <li>40</li>
                                                            <li>264.3</li>
                                                            <li>188</li>
                                                            <li>46.5</li>
                                                            <li>111</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xxl-2 col-xl-2">
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h6>(Game + Mix)</h6>
                                                        <ul class="list_area">
                                                            <li>(46 + 0)</li>
                                                            <li>(184 + 80.3)</li>
                                                            <li>(151 + 37.8)</li>
                                                            <li>(31 + 15.5)</li>
                                                            <li>(111 + 0)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- inner tab  -->
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
	.add-pro{
		    background: #972330;
			color: #fff !important;
			border: none;
			width: 142px;
			padding: 11px 0;
			font-size: 18px;
			font-weight: 600;
			margin: 35px 0 0;
			border-radius: 10px;
			text-align: center;
	}
</style>
@endsection
@section('scripts')
@endsection
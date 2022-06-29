@extends('Admin.Layout.master')
    @section('content')
    <div class="container-fluid">
            <div class="content_right_area">
                <div class="frm_area_1">
                    <h4>Add New Order</h4>
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                            <form action=" {{ route('store.order') }}" method="POST">
                                @csrf
                                <input type="hidden" name="cust_id" id="cust_id" value="{{$id}}">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Date:</label>
                                        <input type="date" placeholder="Date" name="date" id="date">
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('order_date') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Location:</label>
                                        <select name="location" class="black location" id="state">
                                            <option value="" disabled selected>Select Location</option>
                                            <option value="Lake Canroe">Lake Canroe</option>
                                            <option value="Lake Livingston">Lake Livingston</option>
                                        </select>
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('location') }}</span>
                                    </div>
                                    <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Status:</label>
                                        <select name="status" class="black status" id="state">
                                            <option value="" disabled selected>Select Status</option>
                                            <option value="Processing">Processing</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Picked Up">Picked Up</option>
                                            <option value="Abandoned">Abandoned</option>
                                        </select>
                                        <span class="text-danger" style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('status') }}</span>
                                    </div> -->
                                </div>
                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label class="upload_label_form">Yielded Weight:</label>
                                        <input type="number" placeholder="Yielded Weight:" name="yielded_weight" id="yielded_weight" value="0" required>
                                        <span class="text-danger" style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('weight') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                        <label class="upload_label_form">Freezer Slot:</label>
                                        <input type="text" placeholder="Freezer Slot #:" name="slot_number" id="slot_number" required>
                                        <span class="text-danger" style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('slot') }}</span>
                                    </div>
                                </div>
                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <label class="upload_label_form">Notes:</label>
                                        <textarea name="notes" id="notes" placeholder="Add Notes"></textarea>
                                        <span class="text-danger" style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('note') }}</span>
                                    </div>
                                </div>
                                 <!--<div class="row g-3 mt-3">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <label class="upload_label_form">Animal Type:</label>
                                        <select name="make" class="black" id="state">
                                            <option value="">Animal Type</option>
                                            <option value="Wild Game">Wild Game</option>
                                            <option value="Domestic">Domestic</option>
                                        </select>
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('make') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <label class="upload_label_form">Animal:</label>
                                        <select name="make" class="black" id="state">
                                            <option value="">Please Select Animal</option>
                                            <option value="deer">Deer</option>
                                            <option value="hog">Hog</option>
                                            <option value="sheep">Sheep</option>
                                            <option value="cattle">Cattle</option>
                                            <option value="elk">Elk</option>
                                            <option value="oryx">Oryx</option>
                                            <option value="fallow">Fallow</option>
                                            <option value="blackbuck">BlackBuck</option>
                                        </select>
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('make') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <label class="upload_label_form">Category:</label>
                                        <select name="category" class="black" id="state">
                                            <option value="">Select Category</option>
                                            <option value="Smoked">Smoked</option>
                                            <option value="Fresh Rope">Fresh Rope</option>
                                            <option value="Breakfast">Breakfast</option>
                                            <option value="Base Processing">Base Processing</option>
                                            <option value="Cuts">Cuts</option>
                                            <option value="Cuts - Front">Cuts - Front</option>
                                            <option value="Cuts - Hind">Cuts - Hind</option>
                                            <option value="Cuts - Loin">Cuts - Loin</option>
                                        </select>
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('category') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                                        <label class="upload_label_form">Type:</label>
                                        <select name="type" class="black" id="state">
                                            <option value="Summer Sausage">Summer Sausage</option>
                                            <option value="Polish Sausage">Polish Sausage</option>
                                            <option value="Jerky">Jerky</option>
                                            <option value="Deer Sticks">Deer Sticks</option>
                                            <option value="Italian Sausage">Italian Sausage</option>
                                            <option value="Flemings Bratwurst">Flemings Bratwurst</option>
                                            <option value="Pan Sausage">Pan Sausage</option>
                                            <option value="Italian Pan Sausage">Italian Pan Sausage</option>
                                            <option value="Old-Fashioned Sugar-Cured Ham">Old-Fashioned Sugar-Cured Ham</option>
                                        </select>
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('type') }}</span>
                                    </div>
                                </div>
                                <div class="row g-3 mt-3">
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Item Price:</label>
                                        <input type="text" placeholder="Item Price" name="item_price">
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('item_price') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Game Unit:</label>
                                        <input type="text" placeholder="Game Unit" name="game_units">
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('game_units') }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Mix Factor:</label>
                                        <input type="text" placeholder="Mix Factor" name="mix_factor">
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('mix_factor') }}</span>
                                    </div>
                                </div>
                                <div class="row g-3 mt-3">
                                    <div class="row g-3 mt-3">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label class="upload_label_form">Mix Units:</label>
                                            <input type="number" placeholder="Mix Units" name="mix_units">
                                            <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('mix_units') }}</span>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                            <label class="upload_label_form">Total Units:</label>
                                            <input type="text" placeholder="Total Units" name="total_units">
                                            <span class="text-danger"
                                            style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('total_units') }}</span>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                        <label class="upload_label_form">Total Price:</label>
                                        <input type="text" placeholder="Total Price" name="total_price">
                                        <span class="text-danger"
                                        style="font-weight:bold; font-style:italic; font-family:calibri;">{{ $errors->first('total_price') }}</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="row g-3 mt-3"></div> -->
                                <!-- <buttonSave</button> 
                                <button type="submit">Add</button>-->   
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 d-flex justify-content-center">
                            <div class="img_upload_animal">
                                <div class="upload_Img">
                                    <div>
                                        <label for="image_uploads" class="img-upload-btn"><img src="{{asset('assets/images/img-upload.png')}}" alt=""> Upload Image </label>
                                        <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png">
                                    </div>
                                    <div class="preview">
                                        <p class="no-pic"></p>
                                        <img src="" class="profile-img" style="display:none;">
                                    </div>
                                </div>
                                <!-- <div class="select_Img">
                                    <div class="row">
                                        <div class="col-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="card_1">
                                                <img src="{{asset('assets/images/cow.svg')}}" alt="cow">
                                            </div>
                                        </div>
                                        <div class="col-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="card_1">
                                                <img src="{{asset('assets/images/deer.svg')}}" alt="cow">
                                            </div>
                                        </div>
                                        <div class="col-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="card_1">
                                                <img src="{{asset('assets/images/sheep.svg')}}" alt="cow">
                                            </div>
                                        </div>
                                        <div class="col-12 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="card_1">
                                                <img src="{{asset('assets/images/pig.svg')}}" alt="cow">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>    
						
                        <div class="tabs_custome_1 tabs_area">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <!-- <div class="slider_tabs" id="slider_Area"> -->
                                    <div id="owl-demo-2" class="owl-carousel owl-theme">
                                        @foreach($makes as $key => $make)
                                        <button class="nav-link animals {{$key == 0?'active':''}}" id="nav-profile-tab{{$key}}" animal-type="W" data-bs-toggle="tab" data-bs-target="#nav-profile{{$key}}" type="button" role="tab" aria-controls="nav-profile" aria-selected="{{$key == 0?'true':'false'}}">
                                            <span><img src="{{asset($make->image)}}" alt="{{$make->name}}"></span>
                                            {{ucwords($make->name)}}
                                        </button>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </nav>
                            <!-- tabs content  -->
                            <div class="tab-content" id="nav-tabContent">
                                @foreach($makes as $j => $make)
                                <div class="tab-pane fade {{$j == 0?'show active':''}}" id="nav-profile{{$j}}" role="tabpanel" aria-labelledby="nav-profile-tab{{$j}}">
                                    <div class="add_order">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xxl-3 col-xl-3">
                                                <div class="accord_order">
                                                    <?php
                                                        $_getcattle = App\Models\Products::where('make',$make->id)->get();
                                                        $cattleArray=[];
                                                        
                                                        foreach($_getcattle as $_getcat){   
                                                            $productfulname = $_getcat->type.' '.$_getcat->variety;
                                                            $cattleArray[$_getcat->categoryName->name][$_getcat->prod_id]['product'] = $productfulname;
                                                            $cattleArray[$_getcat->categoryName->name][$_getcat->prod_id]['price'] = $_getcat->price;
                                                        }
                                                        $currcategory = '';
                                                        $i = 1+$j;
                                                    ?>
                                                    <!-- --------------------------------------------------------------- -->
                                                    <div class="accordion" id="accordionExample21">
                                                        @foreach($cattleArray as $key => $cattleArr)
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="heading{{$i}}">
                                                                    <?php $currcategory = $_getcat->category; ?>
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                                                                        {{$key ?? ''}}
                                                                    </button>
                                                                </h2>
                                                                <?php 
                                                                    $catwords = explode(" ", $key);
                                                                    $catacronym = "";
                                                                    foreach ($catwords as $w) {
                                                                      $catacronym .= $w[0];
                                                                    }
                                                                    $makewords = explode(" ", ucwords($_getcat->makerName->name));
                                                                    $makeacronym = "";
                                                                    foreach ($makewords as $w) {
                                                                      $makeacronym .= $w[0];
                                                                    }
                                                                ?>
                                                                <div id="collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="heading{{$i}}" data-bs-parent="#accordionExample21">
                                                                    <div class="accordion-body">
                                                                        <ul>
                                                                            @foreach($cattleArr as $cattle)
                                                                                <li><a class="addproduct" href="javascript:void(0)" pclass="{{$_getcat->pclass}}" make="{{strtoupper($makeacronym)}}" catname="{{$catacronym}}" proname="{{$cattle['product'] ?? ''}}" proprice="{{$cattle['price']}}" key="{{$j}}">{{$cattle['product'] ?? ''}}</a></li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php $i++; ?>
                                                        @endforeach 
                                                    </div>
                                                    <!-- ---------------------------------------------------------------- -->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xxl-9 col-xl-9">
                                                <div class="accord_order_table">
                                                    <!-- --------------------------------------------------------------- -->
                                                    <table id="addproductrow{{$j}}" class="table table-striped table-hover">
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
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="4">Total</td>
                                                                <td>
                                                                    <p id="price_unit_total{{$j}}">$0.00</p>
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
                                                                    <p id="price_total{{$j}}">$0.00</p>
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
                                                                    <p id="credit_card_total{{$j}}">$0.00</p>
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
                                @endforeach
                            </div>
                        </div>
                        <!--- -->
                        
                    </div>
                </div>
                <div class="add-btn">
                    <button type="submit" id="add_product">Add</button>
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
        textarea {
            width: 100%;
            padding: 19px 25px;
            border-radius: 6px;
            border: none;
            background: #fff;
            box-shadow: 1px 1px 10px #0000002e;
            text-transform: capitalize;
            font-weight: 500;
            border: 2px solid white;
        }
        .img_upload_animal {}

    .img_upload_animal .upload_Img {
        height: 216px;
        background-color: #ffffff;
        /* padding: 4rem 9rem; */
        border-radius: 12px;
        box-shadow: 1px 1px 10px #0000002e;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 503px;
        flex-direction: column;
        cursor: pointer;
    }

    .img_upload_animal .upload_Img input {
        display: none;
    }

    .img_upload_animal .upload_Img .profile-img {
        width: 56%;
        margin: 0 auto;
        position: relative;
        top: 1rem;
        border-radius: 8px;
    }

    .img_upload_animal .upload_Img .img-upload-btn {
        text-align: center;
        font-weight: 400;
        font-size: 19px;
        color: #808080bf;
        letter-spacing: 0.3px;
    }

    .img_upload_animal .upload_Img .img-upload-btn img {
        display: block;
        width: 93px;
        object-fit: cover;
        margin: 0 auto 15px;
    }

    .img_upload_animal .upload_Img .img-wrapper {
        padding: 20px;
    }

    .img_upload_animal .select_Img {
        margin: 2rem 0 0;
    }

    .img_upload_animal .select_Img .card_1 {
        margin: 0 0 25px 0;
        background: #ffffff;
        box-shadow: 2px 2px 15px #00000024;
        border-radius: 13px;
        width: 100%;
        height: 160px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    .img_upload_animal .select_Img .card_1 img {
        width: 98px;
        filter: brightness(0) saturate(100%) invert(23%) sepia(37%) saturate(2089%) hue-rotate(318deg) brightness(98%) contrast(107%);
        height: 76px;
    }

    .card_1.active {
        background: #670001 !important;
    }

    .card_1.active img {
        filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(0%) hue-rotate(237deg) brightness(105%) contrast(102%) !important;
    }
    .upload_label_form {
        margin: 0 0 9px 0;
        font-size: 16px;
        font-weight: 500;
    }
    .add-btn button {
        background: #972330;
        color: #fff;
        border: none;
        width: 142px;
        padding: 11px 0;
        font-size: 18px;
        font-weight: 600;
        margin: 35px 0 0;
        border-radius: 10px;
    }
    </style>
    @endsection
    @section('scripts')
    <script>
        const input = document.getElementById("image_uploads");
        const preview = document.querySelector(".preview");
        const para = document.querySelector(".no-pic");
        const image = document.querySelector(".profile-img");
        input.addEventListener("change", updateImageDisplay);

        function updateImageDisplay() {
            para.style.display = "none";
            const curFiles = input.files;
            image.src = URL.createObjectURL(curFiles[0]);
            image.style.display = 'block';
        }
        $(document).ready(function() {
            $('.select_Img .card_1').click(function() {
                $('.card_1').removeClass("active");
                $(this).addClass("active");
            });
        });
        
        $('.nav-link').click(function(){
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
        });
        const unittotal = [];
        const creditcardtotal = [];
        <?php foreach ($makes as $k => $value): ?>
            unittotal[{{$k}}]  = 0 ;
            creditcardtotal[{{$k}}]  = 0 ;
        <?php endforeach ?>
        $('.addproduct').click(function(){
			
            var pclass = $(this).attr('pclass');
            var key = $(this).attr('key');
            var make = $(this).attr('make');
            var catname = $(this).attr('catname');
            var proname = $(this).attr('proname');
            var proprice = $(this).attr('proprice');
            $('#addproductrow'+key).find('tbody').append('<tr>\
                <td colspan="4">\
                    <div class="d-flex align-items-center">\
                        <i class="fas fa-times-circle removerow" data-key="'+key+'"></i>\
                        <p>{'+pclass+'}['+make+','+catname+'] '+proname+'</p>\
                    </div>\
                </td>\
                <input type="hidden"  value="{'+pclass+'}['+make+','+catname+'] '+proname+'" name="item_desc[]">\
                <td><input type="number" class="unitprice" value="'+proprice+'" placeholder="$" disabled name="item_price[]"></td>\
                <td><input type="number" class="gameunit" data-key="'+key+'"  value="0" placeholder="-" name="game_units[]"></td>\
                <td><input type="number" class="mixfactor" data-key="'+key+'" value="0" placeholder="-" name="mix_factor[]"></td>\
                <td><input type="number" class="mixunit" value="0" placeholder="-" disabled name="mix_units[]"></td>\
                <td><input type="number" class="totalunit" placeholder="-" disabled name="total_units[]"></td>\
                <td><input type="number" class="totalprice'+key+'" value="'+proprice+'" placeholder="$" disabled name="item_total[]"></td>\
            </tr>');
			unittotal[key] += parseFloat(proprice);
            creditcardtotal[key] += parseFloat(proprice);
			$('#price_unit_total'+key).text(unittotal[key].toFixed(2));
			$('#price_total'+key).text(unittotal[key].toFixed(2));
			$('#credit_card_total'+key).text(creditcardtotal[key].toFixed(2));
			
        });
        $(document).on('click', '.removerow', function(){
            var key = $(this).data("key");
			var unittotal = $('#price_unit_total'+key).text();
			var unitprice = $(this).closest("tr").find('.unitprice').val();
			var priceunittotal = parseFloat(unittotal) - parseFloat(unitprice);
            var price_total = $("#price_total"+key).text()
            var totalprice = $(this).closest("tr").find('.totalprice'+key).val();
            var check = parseFloat(price_total) - parseFloat(totalprice);


            creditcardtotal[key] = creditcardtotal[key] - parseFloat(totalprice);
            $('#credit_card_total'+key).text(creditcardtotal[key].toFixed(2));
			$('#price_unit_total'+key).text(priceunittotal.toFixed(2));
			$('#price_total'+key).text(check.toFixed(2));
            unittotal[key] = check;

            $(this).closest('tr').remove();
        });

        $(document).on("change",".gameunit",function() {
            var key = $(this).data("key");
            var mixfactor = $(this).closest("tr").find(".mixfactor").val();
            if (mixfactor != 0) {
                var unitprice = $(this).closest("tr").find(".unitprice").val();
                var gameunit = $(this).val();
                var mixunitval = gameunit * mixfactor;
                var totalunitval = parseFloat(mixunitval) + parseFloat(gameunit);
                var totalprice = totalunitval * unitprice;
                $(this).closest("tr").find(".mixunit").val(mixunitval);
                $(this).closest("tr").find(".totalunit").val(totalunitval);
                $(this).closest("tr").find(".totalprice"+key).val(totalprice);
                $('#price_total'+key).text(totalprice.toFixed(2));

            } else{
                var proprice = $(this).parent().prev('td').children('.unitprice').val();
                var gameunitval = $(this).val();
                var totalprice = proprice * gameunitval;
                $(this).closest("tr").find(".totalprice"+key).val(totalprice);
                $(this).closest("tr").find(".totalunit").val(gameunitval);

            }
            var total = 0;
            var inputs = $(".totalprice"+key);
            for(var i = 0; i < inputs.length; i++){
                total = total + parseFloat($(inputs[i]).val());
            }
            $('#price_total'+key).text(total.toFixed(2));
            unittotal[key] = total
            var tax = total + ((total/100)*4);
            $('#credit_card_total'+key).text(tax.toFixed(2));
            creditcardtotal[key] = tax
            
        });

        $(document).on("change",".mixfactor",function() {
            var key = $(this).data("key");
            var proprice = $(this).parent().prev().prev('td').children('.unitprice').val();
			
            var gameunitval = $(this).parent().prev('td').children('.gameunit').val();
			
            var mixfactorval = $(this).val();
            var mixunitval = gameunitval * mixfactorval;
            var totalunitval = parseFloat(mixunitval) + parseFloat(gameunitval);
            var totalprice = totalunitval * proprice;
			
            $(this).parent().next().next().children('.totalunit').val(totalunitval);
            $(this).parent().next().children('.mixunit').val(mixunitval);
			$(this).parent().next().next().next().children('.totalprice'+key).val(totalprice);
            // $('#credit_card_total').text(totalprice.toFixed(2));
            // $('#price_total').text(totalprice.toFixed(2));
            // $('.totalprice').val(totalprice);
            var total = 0;
            var inputs = $(".totalprice"+key);
            for(var i = 0; i < inputs.length; i++){
                total = total + parseFloat($(inputs[i]).val());
            }
            unittotal[key] = total
            $('#price_total'+key).text(total.toFixed(2));
            var tax = total + ((total/100)*4);
            $('#credit_card_total'+key).text(tax.toFixed(2));
            creditcardtotal[key] = tax
        });
        $(document).on("click","#add_product",function() {
            var cust_id = $('#cust_id').val()
            var date = $('#date').val()
            // var status = $('.status').val()
            var location = $('.location').val()
            var yielded_weight = $('#yielded_weight').val()
            var slot_number = $('#slot_number').val()
            var notes = $('#notes').val()
            var price_total = $('#price_total').text()

            var credit_card_total = creditcardtotal.reduce((a, b) => a + b, 0)
            var item_desc = [];
            $("input[name='item_desc[]']").each(function() {
                item_desc.push($(this).val());
            });
            var item_price = [];
            $("input[name='item_price[]']").each(function() {
                item_price.push($(this).val());
            });
            var game_units = [];
            $("input[name='game_units[]']").each(function() {
                game_units.push($(this).val());
            });
            var mix_factor = [];
            $("input[name='mix_factor[]']").each(function() {
                mix_factor.push($(this).val());
            });
            var mix_units = [];
            $("input[name='mix_units[]']").each(function() {
                mix_units.push($(this).val());
            });
            var total_units = [];
            $("input[name='total_units[]']").each(function() {
                total_units.push($(this).val());
            });
            var item_total = [];
            $("input[name='item_total[]']").each(function() {
                item_total.push($(this).val());
            });
            $.ajax({
                type : 'POST',
                dataType : 'JSON',
                url: "{{route('store.order')}}",
                data: {cust_id:cust_id, date:date,  location:location, yielded_weight:yielded_weight, slot_number:slot_number, notes:notes, price_total:price_total, credit_card_total:credit_card_total, item_desc:item_desc, item_price:item_price, game_units:game_units, mix_factor:mix_factor, mix_units:mix_units, total_units:total_units, item_total:item_total, _token:"{{csrf_token()}}"},
                success: function (response) {
                    if (response.status == 1) {
                        var id = response.cust_id;
                        var url = '{{ route("customer.order.detail", ":id") }}';
                        url = url.replace(':id', id);
                        window.location.href = url;
                    }
                }
            });
            
        })
    </script>
    @endsection
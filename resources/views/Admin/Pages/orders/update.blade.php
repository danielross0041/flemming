@extends('Admin.Layout.master') @section('content')
<div class="container-fluid">
    <div class="content_right_area">
        <div class="frm_area_1">
            <h4>Add New Order</h4>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                    <form method="POST">
                        @csrf
                        <input type="hidden" name="order_id" id="order_id" value="{{$order->order_id}}" />
                        <div class="row g-3">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <label class="upload_label_form">Date:</label>
                                <input type="date" placeholder="Date" name="date" id="date" value="{{$order->date}}" />
                                <span class="text-danger" style="font-weight: bold; font-style: italic; font-family: calibri;">{{ $errors->first('order_date') }}</span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <label class="upload_label_form">Location:</label>
                                <select name="location" class="black location" id="state">
                                    <option value="" disabled>Select Location</option>
                                    <option value="Lake Conroe" {{($order->location == 'Lake Conroe'?'selected':'')}}>Lake Conroe</option>
                                    <option value="Lake Livingston" {{($order->location == 'Lake Livingston'?'selected':'')}}>Lake Livingston</option>
                                </select>
                                <span class="text-danger" style="font-weight: bold; font-style: italic; font-family: calibri;">{{ $errors->first('location') }}</span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <label class="upload_label_form">Yielded Weight:</label>
                                <input type="number" placeholder="Yielded Weight:" name="yielded_weight" id="yielded_weight" value="{{$order->yielded_weight}}" required />
                                <span class="text-danger" style="font-weight: bold; font-style: italic; font-family: calibri;">{{ $errors->first('weight') }}</span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <label class="upload_label_form">Freezer Slot:</label>
                                <input type="text" placeholder="Freezer Slot #:" value="{{$order->slot_number}}" name="slot_number" id="slot_number" required />
                                <span class="text-danger" style="font-weight: bold; font-style: italic; font-family: calibri;">{{ $errors->first('slot') }}</span>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <label class="upload_label_form">Notes:</label>
                                <textarea name="notes" id="notes" placeholder="Add Notes">{{$order->notes}}</textarea>
                                <span class="text-danger" style="font-weight: bold; font-style: italic; font-family: calibri;">{{ $errors->first('note') }}</span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 d-flex justify-content-center">
                    <div class="img_upload_animal">
                        <div class="upload_Img">
                            <div>
                                <label for="image_uploads" class="img-upload-btn"><img src="{{asset('assets/images/img-upload.png')}}" alt="" /> Upload Image </label>
                                <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" />
                            </div>
                            <div class="preview">
                                <p class="no-pic"></p>
                                <img src="" class="profile-img" style="display: none;" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs_custome_1 tabs_area">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <!-- <div class="slider_tabs" id="slider_Area"> -->
                            <div id="owl-demo-2" class="owl-carousel owl-theme">
                                @foreach($makes as $key => $make)
                                <button
                                    class="nav-link animals {{$key == 0?'active':''}}"
                                    id="nav-profile-tab{{$key}}"
                                    animal-type="W"
                                    data-bs-toggle="tab"
                                    data-bs-target="#nav-profile{{$key}}"
                                    type="button"
                                    role="tab"
                                    aria-controls="nav-profile"
                                    aria-selected="{{$key == 0?'true':'false'}}"
                                >
                                    <span><img src="{{asset($make->image)}}" alt="{{$make->name}}" /></span>
                                    {{ucwords($make->name)}}
                                </button>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                    <div class="add_order">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xxl-3 col-xl-3">
                                <div class="tab-content" id="nav-tabContent">
                                    @foreach($makes as $j => $make)
                                    <div class="tab-pane fade {{$j == 0?'show active':''}}" id="nav-profile{{$j}}" role="tabpanel" aria-labelledby="nav-profile-tab{{$j}}">
                                        <div class="accord_order">
                                            <?php
                                            $_getcattle = App\Models\Products::where('make',$make->id)->get(); 
                                            $cattleArray=[]; 
                                            foreach($_getcattle as $_getcat){ 
                                                $productfulname = $_getcat->type.' '.$_getcat->variety;
                                                $cattleArray[$_getcat->categoryName->name][$_getcat->prod_id]['product'] = $productfulname;
                                                $cattleArray[$_getcat->categoryName->name][$_getcat->prod_id]['price'] = $_getcat->price;
                                            }
                                            $currcategory = ''; $i = 1+$j;
                                            ?>
                                            <!-- --------------------------------------------------------------- -->
                                            <div class="accordion" id="accordionExample21">
                                                @foreach($cattleArray as $key => $cattleArr)
                                                @php $new = $j + $i; @endphp
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading{{$new}}">
                                                        <?php $currcategory = $_getcat->category; ?>
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$new}}" aria-expanded="true" aria-controls="collapse{{$new}}">
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
                                                    <div id="collapse{{$new}}" class="accordion-collapse collapse" aria-labelledby="heading{{$new}}" data-bs-parent="#accordionExample21">
                                                        <div class="accordion-body">
                                                            <ul>
                                                                @foreach($cattleArr as $cattle)
                                                                <li>
                                                                    <a
                                                                        class="addproduct"
                                                                        href="javascript:void(0)"
                                                                        pclass="{{$_getcat->pclass}}"
                                                                        make="{{strtoupper($makeacronym)}}"
                                                                        catname="{{$catacronym}}"
                                                                        proname="{{$cattle['product'] ?? ''}}"
                                                                        proprice="{{$cattle['price']}}"
                                                                        key="{{$j}}"
                                                                    >
                                                                        {{$cattle['product'] ?? ''}}
                                                                    </a>
                                                                </li>
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
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xxl-9 col-xl-9">
                                <div class="accord_order_table">
                                    <!-- --------------------------------------------------------------- -->
                                    <table id="addproductrow" class="table table-striped table-hover">
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
                                            <?php
                                            $priceUnit = 0;
                                            $itemTotal = 0;
                                            ?>
                                            @foreach($order->orderItems as $index => $item)

                                            <?php
                                            $credit_total = $order->total;
                                            $priceUnit += $item->item_price;
                                            $itemTotal += $item->item_total;
                                            ?>
                                            <tr>
                                                <td colspan="4">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-times-circle removerow"></i>
                                                        <p>{{$item->item_desc}}</p>
                                                    </div>
                                                </td>
                                                <input type="hidden"  value="{{$item->item_desc}}" name="item_desc[]">

                                                <td><input type="number" class="unitprice" value="{{$item->item_price}}" placeholder="$" disabled name="item_price[]"></td>

                                                <td><input type="number" class="gameunit"   value="{{$item->game_units}}" name="game_units[]"></td>
                                                <td><input type="number" class="mixfactor"  value="{{$item->mix_factor}}"  name="mix_factor[]"></td>
                                                <td><input type="number" class="mixunit" value="{{$item->mix_units}}"  disabled name="mix_units[]"></td>
                                                <td><input type="number" class="totalunit"  disabled value="{{$item->total_units}}" name="total_units[]"></td>
                                                <td><input type="number" class="totalprice" value="{{$item->item_total}}"  disabled name="item_total[]"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4">Total</td>
                                                <td>
                                                    <p id="price_unit_total">{{$priceUnit}}</p>
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
                                                    <p id="price_total">{{$itemTotal}}</p>
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
                                                    <p id="credit_card_total">{{$credit_total}}</p>
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
                <!--- -->
            </div>
        </div>
        <div class="add-btn">
            <button type="submit" id="add_product">Add</button>
        </div>
    </div>
</div>
@endsection @section('scripts')
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
        image.style.display = "block";
    }
    $(document).ready(function () {
        $(".select_Img .card_1").click(function () {
            $(".card_1").removeClass("active");
            $(this).addClass("active");
        });
    });
    $(".nav-link").click(function () {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    });
    var unittotal = 0;
    var creditcardtotal = 0;
    $(".addproduct").click(function () {
        var pclass = $(this).attr("pclass");
        var make = $(this).attr("make");
        var catname = $(this).attr("catname");
        var proname = $(this).attr("proname");
        var proprice = $(this).attr("proprice");
        $("#addproductrow").find("tbody").append('<tr>\
                <td colspan="4">\
                    <div class="d-flex align-items-center">\
                        <i class="fas fa-times-circle removerow" ></i>\
                        <p>{' +pclass +"}[" +make +"," +catname +"] " +proname +'</p>\
                    </div>\
                </td>\
                <input type="hidden"  value="{' +pclass +"}[" +make +"," +catname +"] " +proname +'" name="item_desc[]">\
                <td><input type="number" class="unitprice" value="' +proprice +'" placeholder="$" disabled name="item_price[]"></td>\
                <td><input type="number" class="gameunit"   value="0" placeholder="-" name="game_units[]"></td>\
                <td><input type="number" class="mixfactor" value="1" placeholder="-" name="mix_factor[]"></td>\
                <td><input type="number" class="mixunit" value="0" placeholder="-" disabled name="mix_units[]"></td>\
                <td><input type="number" class="totalunit" placeholder="-" disabled name="total_units[]"></td>\
                <td><input type="number" class="totalprice" value="' +proprice +'" placeholder="$" disabled name="item_total[]"></td>\
            </tr>'
            );

        var unit = 0;
        var unitprice = $(".unitprice");
        for (var i = 0; i < unitprice.length; i++) {
            unit = unit + parseFloat($(unitprice[i]).val());
        }
        $("#price_unit_total").text(unit.toFixed(2));
        var price_totalScript = 0;
        var price_totalHt = $(".totalprice");
        for (var i = 0; i < price_totalHt.length; i++) {
            price_totalScript = price_totalScript + parseFloat($(price_totalHt[i]).val());
        }
        unittotal = price_totalScript;
        $("#price_total").text(price_totalScript.toFixed(2));
        var tax = unittotal + (unittotal / 100) * 4;
        $("#credit_card_total").text(tax.toFixed(2));
        creditcardtotal = tax;
    });
    $(document).on("change", ".gameunit", function () {
        var mixfactor = $(this).closest("tr").find(".mixfactor").val();
        if (mixfactor != 0) {
            var unitprice = $(this).closest("tr").find(".unitprice").val();
            var gameunit = $(this).val();
            var mixunitval = gameunit * mixfactor;
            var totalunitval = parseFloat(mixunitval) + parseFloat(gameunit);
            var totalprice = totalunitval * unitprice;
            $(this).closest("tr").find(".mixunit").val(mixunitval);
            $(this).closest("tr").find(".totalunit").val(totalunitval);
            $(this).closest("tr").find(".totalprice").val(totalprice);
            $("#price_total").text(totalprice.toFixed(2));
        } else {
            var proprice = $(this).parent().prev("td").children(".unitprice").val();
            var gameunitval = $(this).val();
            var totalprice = proprice * gameunitval;
            $(this).closest("tr").find(".totalprice").val(totalprice);
            $(this).closest("tr").find(".totalunit").val(gameunitval);
        }
        var total = 0;
        var inputs = $(".totalprice");
        for (var i = 0; i < inputs.length; i++) {
            total = total + parseFloat($(inputs[i]).val());
        }
        $("#price_total").text( total.toFixed(2));
        unittotal = total;
        var tax = total + (total / 100) * 4;
        $("#credit_card_total").text( tax.toFixed(2));
        creditcardtotal = tax;
    });
    $(document).on("change", ".mixfactor", function () {
        var proprice = $(this).closest("tr").find(".unitprice").val();
        var gameunitval = $(this).closest("tr").find(".gameunit").val();
        var mixfactorval = $(this).val();
        var mixunitval = gameunitval * mixfactorval;
        var totalunitval = parseFloat(mixunitval) + parseFloat(gameunitval);
        var totalprice = totalunitval * proprice;
        $(this).closest("tr").find(".totalunit").val(totalunitval);
        $(this).closest("tr").find(".mixunit").val(mixunitval);
        $(this).closest("tr").find(".totalprice").val(totalprice);
        var total = 0;
        var inputs = $(".totalprice");
        for (var i = 0; i < inputs.length; i++) {
            total = total + parseFloat($(inputs[i]).val());
        }
        unittotal = total;
        $("#price_total").text( total.toFixed(2));
        var tax = total + (total / 100) * 4;
        $("#credit_card_total").text( tax.toFixed(2));
        creditcardtotal = tax;
    });
    $(document).on("click", ".removerow", function () {
        $(this).closest("tr").remove();
        var unit = 0;
        var unitprice = $(".unitprice");
        for (var i = 0; i < unitprice.length; i++) {
            unit = unit + parseFloat($(unitprice[i]).val());
        }
        $("#price_unit_total").text( unit.toFixed(2));
        var price_totalScript = 0;
        var price_totalHt = $(".totalprice");
        for (var i = 0; i < price_totalHt.length; i++) {
            price_totalScript = price_totalScript + parseFloat($(price_totalHt[i]).val());
        }
        unittotal = price_totalScript;
        $("#price_total").text( price_totalScript.toFixed(2));
        var tax = unittotal + (unittotal / 100) * 4;
        $("#credit_card_total").text( tax.toFixed(2));
        creditcardtotal = tax;
    });
    $(document).on("click", "#add_product", function () {
        var order_id = $("#order_id").val();
        var date = $("#date").val();
        // var status = $('.status').val()
        var locations = $(".location").val();
        var yielded_weight = $("#yielded_weight").val();
        var slot_number = $("#slot_number").val();
        var notes = $("#notes").val();
        var price_total = $("#price_total").text();
        var credit_card_total = $("#credit_card_total").text();
        var item_desc = [];
        $("input[name='item_desc[]']").each(function () {
            item_desc.push($(this).val());
        });
        var item_price = [];
        $("input[name='item_price[]']").each(function () {
            item_price.push($(this).val());
        });
        var game_units = [];
        $("input[name='game_units[]']").each(function () {
            game_units.push($(this).val());
        });
        var mix_factor = [];
        $("input[name='mix_factor[]']").each(function () {
            mix_factor.push($(this).val());
        });
        var mix_units = [];
        $("input[name='mix_units[]']").each(function () {
            mix_units.push($(this).val());
        });
        var total_units = [];
        $("input[name='total_units[]']").each(function () {
            total_units.push($(this).val());
        });
        var item_total = [];
        $("input[name='item_total[]']").each(function () {
            item_total.push($(this).val());
        });
        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: "{{route('edit.order')}}",
            data: {
                order_id: order_id,
                date: date,
                locations: locations,
                yielded_weight: yielded_weight,
                slot_number: slot_number,
                notes: notes,
                price_total: price_total,
                credit_card_total: credit_card_total,
                item_desc: item_desc,
                item_price: item_price,
                game_units: game_units,
                mix_factor: mix_factor,
                mix_units: mix_units,
                total_units: total_units,
                item_total: item_total,
                _token: "{{csrf_token()}}",
            },
            success: function (response) {
                if (response.status == 1) {
                    toastr.success(response.message);
                    location.reload();
                }
            },
        });
    });
</script>
@endsection @section('css')
<style>
    body {
        background-color: #eef2f5;
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
    .img_upload_animal {
    }
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

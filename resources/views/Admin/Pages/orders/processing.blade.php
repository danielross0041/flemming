@extends('Admin.Layout.master')
@section('content')
<div class="container-fluid">
    <div class="content_right_area">
        
        <div class="tabs_custome_1">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Orders </h4>
            </div>
            <div class="tabs_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab">
						<a href="{{route('order.processing')}}">
                            <span><img src="{{asset('assets/images/process.svg')}}" alt="Process"></span>
                            Processing
						</a>
                        </button>
                        <button class="nav-link" id="nav-profile-tab">
						<a href="{{route('order.complete')}}">                     
							<span><img src="{{asset('assets/images/completed.svg')}}" alt="Process"></span>
                            Complete
						</a>
                        </button>
                        <button class="nav-link" id="nav-contact-tab">
						<a href="{{route('order.readyForPickup')}}">
                            <span><img src="{{asset('assets/images/box.svg')}}" alt="Process"></span>
                            Ready
						</a>
                        </button>
                        <button class="nav-link" id="nav-contact-tab1">
						<a href="{{route('order.pickUp')}}">
                            <span><img src="{{asset('assets/images/pickup.svg')}}" alt="Process"></span>
                            Pickup
						</a>
                        </button>
                        <button class="nav-link" id="nav-contact-tab2" >
						<a href="{{route('order.abandoned')}}">
                            <span><img src="{{asset('assets/images/abonded.svg')}}" alt="Process"></span>
                            Abandoned
						</a>
                        </button>
                        <button class="nav-link" id="nav-contact-tab3" >
						<a href="{{route('orders')}}">
                            <span><img src="{{asset('assets/images/all.svg')}}" alt="Process"></span>
                            All Orders
						</a>
                        </button>
                    </div>
                </nav>
                 <div class="tab-content new-table-sec" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- inner tab  -->
                        <div class="inner_tabs_product">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12 col-xl-12">
											<br>
											{{$_getOrders->links()}}
                                                <div class="tab__1">
                                                    <div class="head_area">
                                                        <h5>Order History</h5>
                                                    </div>
													<table class="table table-start-here">
														<thead>
															<tr class="top-bar-table">
																<th >Order Date </th>
																<th >Order ID</th>
																<th >Slot #</th>
																<th>Customer</th>
																<th >Order Total</th>
																<th >Status </th>
																<th >Notes</th>
															</tr>
														</thead>
														<tbody class="top-tbody">
														@foreach($_getOrders as $_getProcessing)
														<tr class="clickable">
																<td>{{$_getProcessing->date ?? ''}}</td>
																<td>{{$_getProcessing->order_id ?? ''}}</td>
																<td>{{$_getProcessing->slot_number ?? ''}}</td>
																<td>{{$_getProcessing->customer->firstname ?? ''}} {{$_getProcessing->customer->lastname ?? ''}}</td>
																<td>${{$_getProcessing->total ?? ''}}</td>
																<td>{{$_getProcessing->status ?? ''}}</td>
																<td>{{$_getProcessing->notes ?? ''}}</td>
															</tr>
															<tr class="adjust-table-none">
																<td colspan="7">
																	<div class="undertable">
																		<div class="row">
																			<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xl-12">
																				<div class="buttons">
																						<a href="{{route('update.order',$_getProcessing->order_id)}}"><img src="{{asset('assets/images/edit.png')}}" class="img-fluid" alt="img"></a>
																						@if($_getProcessing->status == "Complete")
																						<a href="javavoid:;" class="mark_as_ready tooltips" data-order_id="{{$_getProcessing->order_id}}" data-status="Ready For Pick Up">
																							<img src="{{asset('assets/images/shopping_cart_accept2.png')}}" class="img-fluid" alt="img">
																							<span class="tooltiptexts">Mark as Ready for Pick Up</span>
																						</a>
																						@elseif($_getProcessing->status == "Ready For Pick Up")
																						<a href="javavoid:;" class="mark_as_ready tooltips" data-order_id="{{$_getProcessing->order_id}}" data-status="Picked Up">
																							<img src="{{asset('assets/images/shopping_cart_accept2.png')}}" class="img-fluid" alt="img">
																							<span class="tooltiptexts">Mark as Picked Up</span>
																						</a>
																						@endif
																					
																					</div> 
																				<table class="table">
																				<thead>
																					<tr>
																						<th scope="col">Item</th>
																						<th scope="col">Price / Unit</th>
																						<th scope="col">Game Units</th>
																						<th scope="col">Mix Factor</th>
																						<th scope="col">Mix Units</th>
																						<th scope="col">Total  Units</th>
																						<th scope="col">Total  Price</th>
																						<th scope="col">Filled</th>
																					</tr>
																				</thead>
																					<tbody>
																						<?php
																						$itemTotal = 0;

																							$_gamunit = 0;
																							$_mixfactor = 0;
																							$_mixunit = 0;
																							$_totalunit = 0;
																							$_itemtotal = 0;
																							$i=1;
																							$count = '';
																						?>
																						@foreach($_getProcessing->orderItems as $orderItems)
																						<?php
																							$itemTotal += $orderItems->item_total;
																								$_gamunit += $orderItems->game_units ?? 0;
																								$_mixfactor += $orderItems->mix_factor ?? 0;
																								$_mixunit += $orderItems->mix_units ?? 0;
																								$_totalunit += $orderItems->total_units ?? 0;
																								$_itemtotal += $orderItems->item_total ?? 0;
																							$count = COUNT($_getProcessing->orderItems);
																						?>
																						<tr>
																							<td>{{$orderItems->item_desc}}</td>
																							<td>{{$orderItems->item_price}}</td>
																							<td>{{$orderItems->game_units}}</td>
																							<td>{{$orderItems->mix_factor}}</td>
																							<td>{{$orderItems->mix_units}}</td>
																							<td>{{$orderItems->total_units}}</td>
																							<td>${{$orderItems->item_total}}</td>
																							<td>
																								<div>
																									<input class="form-check-input flexCheckDefault" type="checkbox" value="" {{ $orderItems->filled === null ? "" : "checked" }} data-orderItems="{{$orderItems->id}}" data-order_id="{{$_getProcessing->order_id}}" id="flexCheckDefault">
																								</div>
																							</td>
																							
																						</tr>
																						<?php $i++; ?>
																						@endforeach
																						<tr class="under-table-tr-set">
																							<td>TOTALS </td>
																							<td>N/A</td>
																							<td>{{$_gamunit ?? 'N/A'}}</td>
																							<td>{{$_mixfactor ?? 'N/A'}}</td>
																							<td>{{$_mixunit ?? 'N/A'}}</td>
																							<td>{{$_totalunit ?? 'N/A'}}</td>
																							<td>${{$_itemtotal ?? 'N/A'}}</td>
																							<td>N/A</td>
																						</tr>
																						<tr class="under-table-tr-set">
																							<td colspan="6">CREDIT CARD TOTAL </td>
																							<td>${{$_getProcessing->total ?? 'N/A'}}</td>
																							<td>N/A</td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																		</div>
																	<ul class="first"></ul>
																	</div>
																</td>
															</tr>
														@endforeach
														<tr class="last-tr-table">
														<td colspan="4">Total</td>
														<td colspan="1">$317.4</td>
														<td></td>
														<td></td>
														</tr>
														</tbody>
													</table>
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
              <!--  <div class="pagination_area2">
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
<link href="{{asset('assets/css/customer-table.css')}}" rel="stylesheet" type="text/css">
<style>
    body {
        background-color: #EEF2F5;
    }
</style>
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
	.modal-css{
		background: #990000;
		color: #fff;
		border-color: #fff;
	}
	.send-btn{
		border: none;
		padding: 13px 23px;
		border-radius: 10px;
		font-size: 16px;
		font-weight: 500;
		background: #972330;
		color: #fff;
	}
	.send-btn:hover{
		border: none;
		padding: 13px 23px;
		border-radius: 10px;
		font-size: 16px;
		font-weight: 500;
		background: #972330;
		color: #fff;
	}
	.modal-close{
		background-color: #020167;
		border-color: #020167;
	}
	ul.pagination {
		float: right;
	}
</style>
@endsection


@section('scripts')
<script>

$(".clickable").click(function() {
    $(this).next().slideToggle();
});
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
$('#updateStatus').click(function(e){
	 alert('am here');
	 e.preventDefault();
	 var orderId = $("input[name=order_status]").val();
	 $.ajax({
		type:'POST',
		url:'{{route("order.updateStatus")}}',
		data:{orderId:orderId},
		success:function(data){
		  alert(data.success);
	   }
	});
});
$(document).on("click",".mark_as_ready",function() {
		var order_id = $(this).data("order_id");
		var status = $(this).data("status");
		$.ajax({
            type : 'POST',
            dataType : 'JSON',
            url: "{{route('new.customer.order.ready')}}",
            data: {order_id:order_id, status:status, _token:"{{csrf_token()}}"},
            success: function (response) {
                if (response.status == 1) {
                	toastr.success(response.message);
                	location.reload();
                }
                
            }
        });
	})

	$(document).on("change",".flexCheckDefault",function() {
		var element = $(this);
		var order = element.data("order_id");
		if($(this).prop("checked") == true){
			var date = 1;
		} else{
			var date = 0;
		}
		var id = $(this).data("orderitems")
		$.ajax({
            type : 'POST',
            dataType : 'JSON',
            url: "{{route('new.customer.changeStatus')}}",
            data: {date:date, id:id, order:order, _token:"{{csrf_token()}}"},
            success: function (response) {
            	if (response.status == 2) {
            		toastr.warning(response.message);
            	}
                else if (response.status == 1) {
                	$(".status"+element.data("order_id")).text("Complete")
                	toastr.success(response.message);
                	location.reload();
                } else{
                	$(".status"+element.data("order_id")).text("Processing")
                	toastr.success(response.message);
                	location.reload();
                }
                
            }
        });
        
	});

</script>
@endsection
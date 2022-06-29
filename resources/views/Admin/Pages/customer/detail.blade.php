@extends('Admin.Layout.master')
@section('content')
<div class="container-fluid">
    <div class="content_right_area">
        <div class="tabs_custome_1">
            <div class="d-flex justify-content-between align-items-center">
				<h4><i class="fas fa-user"></i> {{$cusOrderDetail->firstname ?? ''}} {{$cusOrderDetail->lastname ?? ''}} </h4>
				<div class="btn_order_plus">
					<a href="{{route('create.order' ,$cusOrderDetail->id)}}" class="text" >Add New Order</a>
					<button type="button" class="text" data-bs-toggle="modal" data-bs-target="#smsModal">Send sms</button>
				</div>
			</div>
			<!-- user_profiel_data  -->
			<div class="user_profiel_data">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Employee ID</h5>
								<p>#{{$cusOrderDetail->id ?? ''}}</p>
							</div>
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Phone Number</h5>
								<p>{{$cusOrderDetail->phone ?? ''}}</p>
							</div>
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Email</h5>
								<p>{{$cusOrderDetail->email ?? 'N/A'}}</p>
							</div>
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Alt Phone</h5>
								<p>{{$cusOrderDetail->altphone ?? 'N/A'}}</p>
							</div>
						</div>
						<div class="row mt-5">
							<!--<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
								<h5>Location </h5>
								<p>Lake Livingston</p>
							</div> -->
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Address</h5>
								<p>{{$cusOrderDetail->street ?? 'N/A'}} {{$cusOrderDetail->city ?? 'N/A'}} {{$cusOrderDetail->state ?? 'N/A'}} {{$cusOrderDetail->zip ?? 'N/A'}}</p>
							</div>
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Referrer</h5>
								<p>{{$cusOrderDetail->referrer ?? 'N/A'}}</p>
							</div>
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
								<h5>Notes</h5>
								<p></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
					</div>
				</div>
			</div>
            <div class="tabs_area">
				<!--<div class="customer-detail">
					<table width="100%"  align="center" cellpadding="2" cellspacing="0" >
						  <tbody>
						  <tr>
							<td class="bigwhite">
							  <table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
									  <td class="bigwhite">{{$cusOrderDetail->firstname ?? ''}} {{$cusOrderDetail->lastname ?? ''}}  (Customer ID # {{$cusOrderDetail->id ?? ''}})</td>
									  <td width="150" class="white"><div align="center"><a href="#" class="white">Edit Customer</a></div></td>
									  <td width="150" class="white">
										  <div align="center"> 
											  <form style="margin: 0px; padding: 0px;display: inline" name="delcustomer" id="delcustomer">
												  <input type="hidden" name="delid" id="delid" value="9594">
												  <a style="cursor:pointer" onclick="ajaxpost('dbdelete.php', 'ajaxresponse', 'delcustomer', 0, 1)" class="white">Delete Customer</a>
											  </form>
										  </div>
									  </td>
									</tr>
								  </tbody>
							  </table>
							 </td>
						  </tr> 
						  <tr>
							<td bordercolor="#FFFFFF" style="background-color:#FFFFFF">
								<table class="customer-profile" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" class="bigblack">
									<tbody>
										<tr style="border-bottom:1px solid #777">
											<td width="200" height="40"><strong>Phone Number:</strong> </td>
											<td width="200" height="40"><span style="margin:2px">{{$cusOrderDetail->phone ?? ''}}</span></td>
											<td width="200" height="40"></td>
											<td width="100" height="40"><strong>Alt Phone:</strong></td>
											<td><span style="margin:2px">{{$cusOrderDetail->altphone ?? 'N/A'}}</span></td>
										</tr>
										<tr style="border-bottom:1px solid #777">
											<td height="40"><strong>Email:</strong> </td>
											<td height="40" colspan="4"><span style="margin:2px">{{$cusOrderDetail->email ?? 'N/A'}}</span></td>
										</tr>
										<tr style="border-bottom:1px solid #777">
											<td height="40"><strong>Address:</strong></td>
											<td height="40" colspan="4"><span style="margin:2px">{{$cusOrderDetail->street ?? 'N/A'}} {{$cusOrderDetail->city ?? 'N/A'}} {{$cusOrderDetail->state ?? 'N/A'}} {{$cusOrderDetail->zip ?? 'N/A'}}</span></td>
										</tr>
										<tr style="border-bottom:1px solid #777">
											<td height="40"><strong>Referrer:</strong> </td>
											<td height="40"><span style="margin:2px">{{$cusOrderDetail->referrer ?? 'N/A'}}</span></td>
											<td height="40"></td>
											<td height="40"></td>
											<td height="40"></td>
										</tr>
									</tbody>
								</table>
							  <table width="94%" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF" class="bigblack">
								  <tbody><tr>
									<td width="50"><strong>Notes:</strong></td>
									<td><span style="margin:2px"></span></td>
								  </tr>
								</tbody>
							  </table>
							</td>
						  </tr> 
						</tbody>
					</table>
				</div> -->
                <div class="tab-content new-table-sec" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- inner tab  -->
                        <div class="inner_tabs_product">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="innertab_1">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12 col-xl-12">
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
																<th >Order Total</th>
																<th >Status </th>
																<th >Notes</th>
															</tr>
														</thead>
														<tbody class="top-tbody">
														@foreach($cusOrderDetail->orders->sortBy('order_id') as $orders)
															<span class="statusChange">
																<tr class="clickable" >
																	<td>{{$orders->date ?? '-'}}</td>
																	<td>{{$orders->order_id ?? '-'}}</td>
																	<td>{{$orders->slot_number ?? '-'}}</td>
																	<td>${{$orders->total ?? '-'}}</td>
																	<td class="status{{$orders->order_id}}">{{$orders->status ?? '-'}}</td>
																	<td></td>
																</tr>
																<tr class="adjust-table-none">
																	<td colspan="6">
																		<div class="undertable">
																			<div class="row">

																				<div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xl-12">
																					<div class="buttons">
																						
																						<a href="{{route('update.order',$orders->order_id)}}"><img src="{{asset('assets/images/edit.png')}}" class="img-fluid" alt="img"></a>
																						<!-- <a href="javavoid:;"><img src="{{asset('assets/images/printer.png')}}" class="img-fluid" alt="img"></a> -->

																						@if($orders->status == "Complete")
																						<a href="javavoid:;" class="mark_as_ready tooltips" data-order_id="{{$orders->order_id}}" data-status="Ready For Pick Up">
																							<img src="{{asset('assets/images/shopping_cart_accept2.png')}}" class="img-fluid" alt="img">
																							<span class="tooltiptexts">Mark as Ready for Pick Up</span>
																						</a>
																						@elseif($orders->status == "Ready For Pick Up")
																						<a href="javavoid:;" class="mark_as_ready tooltips" data-order_id="{{$orders->order_id}}" data-status="Picked Up">
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
																							
																						?>
																						@foreach($orders->orderItems as $orderItems)
																							<?php
																							$itemTotal += $orderItems->item_total;
																								$_gamunit += $orderItems->game_units ?? 0;
																								$_mixfactor += $orderItems->mix_factor ?? 0;
																								$_mixunit += $orderItems->mix_units ?? 0;
																								$_totalunit += $orderItems->total_units ?? 0;
																								$_itemtotal += $orderItems->item_total ?? 0;
																							?>
																							<tr>
																								<td>{{$orderItems->item_desc ?? '-'}}</td>
																								<td>{{$orderItems->item_price ?? '-'}}</td>
																								<td>{{$orderItems->game_units ?? 0}}</td>
																								<td>{{$orderItems->mix_factor ??0}}</td>
																								<td>{{$orderItems->mix_units ?? 0}}</td>
																								<td>{{$orderItems->total_units ?? 0}}</td>
																								<td>${{$orderItems->item_total ?? '-'}}</td>
																								<td>
																									<div>
																										<input class="form-check-input flexCheckDefault" type="checkbox" value="" {{ $orderItems->filled === null ? "" : "checked" }} data-orderItems="{{$orderItems->id}}" data-order_id="{{$orders->order_id}}" id="flexCheckDefault">
																									</div>
																								</td>
																							</tr>
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
																							<td>${{$orders->total ?? 'N/A'}}</td>
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
															</span>
														@endforeach
														<tr class="last-tr-table">
														<td colspan="3">Total</td>
														<td colspan="1">${{$_itemtotal ?? 'N/A'}}</td>
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
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="smsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <input class="modal-detail" type="text" name="message" id="message" placeholder="Enter SMS">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-phone="{{$cusOrderDetail->phone}}" id="sms_submit" style="background-color:#972330;">Send</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
	$(document).on("click","#sms_submit",function() {
		var message = $("#message").val();
		var phone = $(this).data("phone");
		if (message=='') {
			toastr.warning("Kindly write some SMS");
		} else{
			$.ajax({
	            type : 'POST',
	            dataType : 'JSON',
	            url: "{{route('customer.message.send')}}",
	            data: {message:message, phone:phone, _token:"{{csrf_token()}}"},
	            success: function (response) {
	                if (response.status == 1) {
	                	toastr.success(response.message);
	                	location.reload();
	                }
	                
	            }
	        });
		}
	})

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
$(".clickable").click(function() {
    $(this).next().slideToggle();
});
</script>


@endsection

@section('css')
<link href="{{asset('assets/css/customer-table.css')}}" rel="stylesheet" type="text/css">
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
	a.text {
    border: none;
    padding: 13px 23px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 500;
    background: #972330;
    color: #fff;
}
</style>
@endsection
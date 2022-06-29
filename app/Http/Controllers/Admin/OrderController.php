<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Order_items;
use App\Models\Customers;
use App\Models\Make;
use Carbon\Carbon;
use App\Models\Products;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function index(){
		if(Session::has('location')){

            $location = Session::get('location');
            $_getOrders = Orders::where('location',$location)->with('customer')->with('orderItems')->paginate(50);
        } else{
            $_getOrders = Orders::with('customer')->with('orderItems')->paginate(50);
        }

        return view('Admin.Pages.orders.order')->with(compact('_getOrders'));
    }
    public function create($id){
        $makes = Make::all();
        return view('Admin.Pages.orders.create')->with(compact('id','makes'));
    }
    public function update($id){
        $makes = Make::all();
        $order = Orders::where('order_id',$id)->first();
        return view('Admin.Pages.orders.update')->with(compact('order','id','makes'));
    }
    public function edit(Request $request)
    {
        // dd($_POST);
        try{
            $order_fields = array();
            $order_fields['date'] = $request->date;
            $order_fields['location'] = $request->locations;
            $order_fields['notes'] = $request->notes;
            $order_fields['yielded_weight'] = $request->yielded_weight;
            $order_fields['slot_number'] = $request->slot_number;
            $order_fields['total'] = $request->credit_card_total;
            $update_order = Orders::where('order_id',$request->order_id)->update($order_fields);
            if ($update_order) {
                $del=Order_items::where('order_id',$request->order_id)->delete();

                $order_item_fields = array();
                $order_item_fields['order_id'] = $request->order_id;
                foreach ($request->item_desc as $key => $value) {
                    $order_item_fields['item_desc'] = $request->item_desc[$key];
                    $order_item_fields['item_price'] = $request->item_price[$key];
                    $order_item_fields['game_units'] = $request->game_units[$key];
                    $order_item_fields['mix_factor'] = $request->mix_factor[$key];
                    $order_item_fields['mix_units'] = $request->mix_units[$key];
                    $order_item_fields['total_units'] = $request->total_units[$key];
                    $order_item_fields['item_total'] = $request->item_total[$key];
                    $create_order_items = Order_items::create($order_item_fields);
                }
                if ($create_order_items) {
                    $status['message'] = "Record has been updated";
                    $status['status'] = 1;
                    
                    return json_encode($status);
                }
            }
            $status['message'] = "Record could not be updated";
            $status['status'] = 0;
            return json_encode($status);
        } catch(Exception $e) {
          $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }

        
    }
	public function store(Request $request){
        try{
            $order_fields = array();
            $order_fields['cust_id'] = $request->cust_id;
            $order_fields['date'] = $request->date;
            $order_fields['location'] = $request->location;
            $order_fields['status'] = 'Processing';
            $order_fields['notes'] = $request->notes;
            $order_fields['yielded_weight'] = $request->yielded_weight;
            $order_fields['slot_number'] = $request->slot_number;
            $order_fields['total'] = $request->credit_card_total;
            $create_order = Orders::create($order_fields);
            if ($create_order) {
                $order_item_fields = array();
                $order_item_fields['order_id'] = $create_order->id;
                foreach ($request->item_desc as $key => $value) {
                    $order_item_fields['item_desc'] = $request->item_desc[$key];
                    $order_item_fields['item_price'] = $request->item_price[$key];
                    $order_item_fields['game_units'] = $request->game_units[$key];
                    $order_item_fields['mix_factor'] = $request->mix_factor[$key];
                    $order_item_fields['mix_units'] = $request->mix_units[$key];
                    $order_item_fields['total_units'] = $request->total_units[$key];
                    $order_item_fields['item_total'] = $request->item_total[$key];
                    $create_order_items = Order_items::create($order_item_fields);
                    // dd($create_order_items);
                }
                if ($create_order_items) {
                    $status['message'] = "Record has been created";
                    $status['status'] = 1;
                    $status['cust_id'] = $request->cust_id;
                    return json_encode($status);
                }
            }
            $status['message'] = "Record could not be created";
            $status['status'] = 0;
            return json_encode($status);
        } catch(Exception $e) {
          $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }
    
    public function updateStatus(Request $request){
		$orderId = $request->orderId;
		$updateOrderStatus = Orders::where('order_id', $orderId)
		->update([
           'status' => 'Complete'
        ]);
		dd($orderId,$updateOrderStatus);
        return view('Admin.Pages.orders.processing')->with(compact('_getProcessingOrder'));
    }
	public function processing(){
        


        if(Session::has('location')){

            $location = Session::get('location');
            $_getOrders = Orders::where('location',$location)->where('status','Processing')->with('customer')->with('orderItems')->paginate(50);
        } else{
            $_getOrders = Orders::where('status','Processing')->with('customer')->with('orderItems')->paginate(50);
        }



       
        return view('Admin.Pages.orders.processing')->with(compact('_getOrders'));
    }
    
    public function complete(){
        if(Session::has('location')){

            $location = Session::get('location');
            $_getOrders = Orders::where('location',$location)->where('status','Complete')->with('orderItems')->with('customer')->paginate(50);
        } else{
            $_getOrders = Orders::where('status','Complete')->with('orderItems')->with('customer')->paginate(50);
        }
        return view('Admin.Pages.orders.complete')->with(compact('_getOrders'));
    }

    public function readyForPickup(){

        if(Session::has('location')){

            $location = Session::get('location');
            $_getOrders = Orders::where('location',$location)->where('status','Ready For Pick Up')->with('orderItems')->with('customer')->paginate(50);
        } else{
            $_getOrders = Orders::where('status','Ready For Pick Up')->with('orderItems')->with('customer')->paginate(50);
        }
        return view('Admin.Pages.orders.ready-for-pickup')->with(compact('_getOrders'));
    }
    
    public function pickUp(){

        if(Session::has('location')){

            $location = Session::get('location');
            $_getOrders = Orders::where('location',$location)->where('status','Picked Up')->with('orderItems')->with('customer')->paginate(50);
        } else{
            $_getOrders = Orders::where('status','Picked Up')->with('orderItems')->with('customer')->paginate(50);
        }


        return view('Admin.Pages.orders.pickup')->with(compact('_getOrders'));
    }
    
    public function abandoned(){
        if(Session::has('location')){

            $location = Session::get('location');
            $_getOrders = Orders::where('location',$location)->where('status','Abandoned')->with('orderItems')->with('customer')->paginate(50);
        } else{
            $_getOrders = Orders::where('status','Abandoned')->with('orderItems')->with('customer')->paginate(50);
        }

        return view('Admin.Pages.orders.abandoned')->with(compact('_getOrders'));
    }
	public function location($location,$slug){
		
        $_getOrder = Orders::where('location',$location)->where('status',$slug)->with('customer')->with('orderItems')->paginate(50);
		
        return view('Admin.Pages.orders.location')->with(compact('_getOrder'));
    }
    public function changeStatus(Request $request)
    {
        $check = Orders::where('order_id',$request->order)->first();
        if ($check->status == "Picked Up") {
            $status['message'] = "Record has been Picked Up and cannot be Updated";
            $status['status'] = 2;
            return json_encode($status);
        }



        $statusFields = array();
        $fields = array();
        if ($request->date == 1) {
            $date = Carbon::now();
        } else{
            $date = null;
        }
        $fields['filled'] = $date;
        $item = Order_items::where('id',$request->id)->update($fields);
        $orders_item = Order_items::find($request->id);
        $orders = Order_items::where('order_id',$orders_item->order_id)->get();
        $flag = false;
        foreach ($orders as $key => $value) {
            if ($value->filled == null) {
                $status['message'] = "Record has been updated";
                $status['status'] = 0;
                $statusFields['status'] = "Processing";
                $update = Orders::where('order_id',$request->order)->update($statusFields);
                return json_encode($status);
            }
        }
        $statusFields['status'] = "Complete";
        $update = Orders::where('order_id',$request->order)->update($statusFields);
        $status['message'] = "Record has been updated";
        $status['status'] = 1;
        return json_encode($status);
    }
    public function updateOrderReady(Request $request)
    {
        $orderStatus = $request->status;
        $order_id = $request->order_id;
        $fields['status'] = $orderStatus;
        $create = Orders::where('order_id',$order_id)->update($fields);
        $status['message'] = "Order has been marked Ready";
        $status['status'] = 1;
        return json_encode($status);
    }
    
}

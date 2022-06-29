<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Orders;

class SearchController extends Controller
{
    public function index(){

        return view('Admin.Pages.search.search');
    }
    public function searchCustomer(Request $request)
    {
        $customers = Customers::where('id',0);
        if ($request->name) {
            $customers = $customers->orWhere('firstname', 'LIKE', "%".$request->name."%")->orWhere('lastname', 'LIKE', "%".$request->name."%");
        }
        if ($request->zip) {
            $customers = $customers->orWhere('zip', 'LIKE', "%".$request->zip."%");
        }
        if ($request->email) {
            $customers = $customers->orWhere('email', 'LIKE', "%".$request->email."%");
        }
        if ($request->phone) {
            $customers = $customers->orWhere('phone', 'LIKE', "%".$request->phone."%")->orWhere('altphone', 'LIKE', "%".$request->phone."%");
        }
        if ($request->cust_id) {
            $customers = $customers->orWhere('id',$request->cust_id);
        }
        if ($request->order_id) {
            $order = Orders::where('order_id',$request->order_id)->first();
            if ($order) {
                $customers = $customers->orWhere('id',$order->cust_id);
            }
        }
        $customers = $customers->get();
        $body = '<div class="table_area_customer">
                    
                    <div class="table_area">
                    <table class="table table-hover" id="customer-listing">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Alternative Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Reference</th>
                                <th scope="col">Notes</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>';
                foreach ($customers as $key => $value) {
                    $route = route('customer.order.detail',[$value->id]);
                    $editRoute = route('new.customer.edit',$value->id);
                    $delRoute = route('new.customer.delete',$value->id);
                    $body .= '<tr>
                                <td>'.$value->id.'</td>
                                <td><a href="'.$route.'">'.$value->firstname.' '.$value->lastname.'</a></td>
                                <td>'.$value->phone.'</td>
                                <td>'.$value->altphone.'</td>
                                <td>'.$value->email.'</td>
                                <td>'.$value->reffer.'</td>
                                <td>'.$value->notes.'</td>
                                <td>
                                    <a href="'.$editRoute.'">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    |<a href="'.$delRoute.'">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>';
                }
                $body .='</tbody>
                </table>
            </div>
        </div>';
        $status['message'] = $body;
        $status['status'] = 1;
        return json_encode($status);
    }
}
<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use Validator;
use App\Models\Orders;
use Twilio\Rest\Client;


class CustomerController extends Controller
{
    public function index(){

        $getCustomer = Customers::simplepaginate(10);
        
        return view('Admin.Pages.customer.customer')->with(compact('getCustomer'));
    }

    public function create(){
        
        return view('Admin.Pages.new_customer.new_customer');
    }
	
	public function profile(){

        
        return view('Admin.Pages.customer.profile')->with(compact('getCustomer'));
    }

    public function store(Request $request){

        $validate = Validator::make($request->all(),[

            'email' => 'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip_code'=>'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $cus = new Customers();
        $cus->firstname = $request->first_name;
        $cus->lastname = $request->last_name;
        $cus->phone = $request->phone;
        $cus->altphone = $request->alt_phone;
        $cus->street = $request->street_address;
        $cus->city = $request->city;
        $cus->state = $request->state;
        $cus->zip = $request->zip_code;
        $cus->referrer = $request->reffer;
        $cus->notes = $request->notes;
        $cus->email = $request->email;
        $cus->save();

        return redirect()->route('customer.order.detail',$cus->id)->with('message','Customer Added Successfully');
    }

    public function delete($id){

        $cus = Customers::find($id);
        if($cus) $cus->delete();
        return redirect()->route('customer')->with('error','Customer Deleted Successfully');

    }

    public function detail($id){
        $cusOrderDetail = Customers::where('id',$id)->with('orders')->with('orders.orderItems')->orderBy('id','DESC')->first();
		// dd($cusOrderDetail);
		
        return view('Admin.Pages.customer.detail',compact('cusOrderDetail'));
    }

	public function edit($id){
        $cus = Customers::where('id',$id)->first();
        // dd($cus);
        return view('Admin.Pages.new_customer.edit',compact('cus'));
    }

    public function update(Request $request){

        $validate = Validator::make($request->all(),[

            'email' => 'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'alt_phone'=>'required',
            'street_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip_code'=>'required',
            'reffer'=>'required',
            'notes'=>'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $cus = Customers::where('id',$request->id)->first();
        $cus->firstname = $request->first_name;
        $cus->lastname = $request->last_name;
        $cus->phone = $request->phone;
        $cus->altphone = $request->alt_phone;
        $cus->street = $request->street_address;
        $cus->city = $request->city;
        $cus->state = $request->state;
        $cus->zip = $request->zip_code;
        $cus->referrer = $request->reffer;
        $cus->notes = $request->notes;
        $cus->email = $request->email;

        $cus->save();

        return redirect()->route('customer')->with('message','Customer Updated Successfully');


    }

    public function send_msg(Request $request)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $phone = str_replace("-", "", "+1-877-291-6606");
        $client = new Client($account_sid, $auth_token);

        $client->messages->create('+'.$phone, [
            'from' => $twilio_number, 
            'body' => $request->message
        ]);
        $status['message'] = "SMS has been Sent!";
        $status['status'] = 1;
        return json_encode($status);
    }
    
}

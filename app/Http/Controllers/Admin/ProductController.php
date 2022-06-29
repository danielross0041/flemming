<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customer;
use App\Models\Order_items;
use App\Models\Make;
use App\Models\Category;
use Validator;
class ProductController extends Controller
{
    public function index(){

		$_getCattlePro = Products::where('make','cattle')->where('category','Breakfast')->get();
		$_getDeerProBreak = Products::where('make','deer')->where('category','Breakfast')->get();
		$_getDeerProSmoked = Products::where('make','deer')->where('category','Smoked')->get();
		$_getDeers = Order_items::where('filled',Null)->with('order')->with('order.customer')->orderBy('order_id', 'DESC')->get();
	
		$repl = array("[","]");
		$prodlist=[];
		$prodarray = [];
		$abbrevs = array("D" => "Deer", "E"=>"Elk", "H" => "Hog", "O" => "Other", "C"=>"Cattle", "S"=>"Sheep", "G"=>"Goat","Bf" => "Breakfast", "FR"=>"Fresh Rope", "Sm"=>"Smoked", "BP"=>"Base Processing");
		foreach($_getDeers as $_getDeer){
				
			$strchange = str_replace($repl,"||",$_getDeer->item_desc);
			$prodexp = explode("||",$strchange);
			$cattype = explode(",",$prodexp[1]);
				
			$prodlist[$_getDeer->item_desc]["tot"] = $_getDeer->total_units;		
			$prodlist[$_getDeer->item_desc]["gam"] = $_getDeer->game_units;
			$prodlist[$_getDeer->item_desc]["mix"] = $_getDeer->mix_units;
			$strchange = str_replace($repl,"||",$_getDeer->item_desc);
			$prodexp = explode("||", $strchange);
			$cattype = explode(",",$prodexp[1]);
			
			if (array_key_exists($cattype[0],$abbrevs)) {
				$thiscat = $abbrevs[$cattype[0]];
				$prod_desc = trim($prodexp[2]);
			}
			else {
				$prod_desc = $_getDeer->item_desc;
				$thiscat = "Other";
			}
			if (array_key_exists($cattype[1],$abbrevs)) {
				$thistype = $abbrevs[$cattype[1]];
			}
			else {
				$thistype = "Other";
			}
			
			$prodarray[$thiscat][$thistype][$prod_desc]["tot"] = $_getDeer->total_units;
			$prodarray[$thiscat][$thistype][$prod_desc]["gam"] = $_getDeer->game_units;
			$prodarray[$thiscat][$thistype][$prod_desc]["mix"] = $_getDeer->mix_units;
			$prodarray[$thiscat][$thistype][$prod_desc]["date"] = $_getDeer->order->date;
			$prodarray[$thiscat][$thistype][$prod_desc]["slot"] = $_getDeer->order->slot_number;
			$descarray[$thiscat][$thistype][$prod_desc] = $_getDeer->item_desc;
			$prodarray[$thiscat][$thistype][$prod_desc]["customer"] = $_getDeer->order_id;
			$prodarray[$thiscat][$thistype][$prod_desc]["order_id"] = $_getDeer->order->customer;
			$prodarray[$thiscat][$thistype][$prod_desc]["order_note"] = $_getDeer->order->notes;
			
		}	
	
        return view('Admin.Pages.products.product')->with(compact('prodlist','prodarray','_getDeerProBreak','_getDeerProSmoked','_getDeers'));
    }
    public function listing(){

		$_getProducts = Products::get();
        return view('Admin.Pages.products.listing')->with(compact('_getProducts'));
    }
	public function create($id){
        $makes = Make::all();
        $categorys = Category::all();

        if($id != 0){
        
            $_getProData = Products::where('prod_id',$id)->first();
            return view('Admin.Pages.products.create')->with(compact('_getProData','makes','categorys'));
        }else{
            $_getProData = 'null';
            return view('Admin.Pages.products.create')->with(compact('_getProData','makes','categorys'));
        }
        
    }

    public function store(Request $request){
		
        $validate = Validator::make($request->all(),[

            'pclass' => 'required',
            'make'=>'required',
            'category'=>'required',
            'type'=>'required',
            'variety'=>'required',
            'price'=>'required',
            'mixture'=>'required',
            'minimum'=>'required',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $pro = new Products();
        $pro->pclass = $request->pclass;
        $pro->make = $request->make;
        $pro->category = $request->category;
        $pro->type = $request->type;
        $pro->variety = $request->variety;
        $pro->price = $request->price;
        $pro->mixture = $request->mixture;
        $pro->minimum = $request->minimum;
        $pro->save();
        return redirect()->route('products')->with('message','Product Addded Successfully');
    }

    public function delete($id){
    	$pro = Products::where('prod_id',$id)->delete();
        
        return redirect()->route('products')->with('error','Product Deleted Successfully');

    }
	
	public function products(){

        return view('Admin.Pages.products.product');
    }
	
}

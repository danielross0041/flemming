<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company_profile;
use Validator;

class ProfileController extends Controller
{
    public function index(){

        $pros = Company_profile::all();
        return view('Admin.Pages.profile.index',compact('pros'));
    }

    public function edit($id){
		
        $pro = Company_profile::where('id',$id)->first();
        return view('Admin.Pages.profile.edit',compact('pro'));
    }


    public function update(Request $request){

        // dd($request->all());

        $validate = Validator::make($request->all(), [

            // 'name' =>'required',
            // 'email' =>'required',
            // 'phone' =>'required',
            // 'image' =>'required',
            // 'address' =>'required',
            
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $invoice = Company_profile::where('id',$request->id)->first();
        
        $invoice->name =$request->name;
        $invoice->email =$request->email;
        $invoice->phone =$request->phone;
        $invoice->address =$request->address;

        if (!empty($request->file)) {
            if($request->file('file')){
                $file= $request->file('file');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('profile_image'), $filename);
                $invoice['image']= $filename;
            }
        }    

        $invoice->save();
        
        return redirect()->route('user.profile')->with('message','Updated Successfully');



    }

    
}

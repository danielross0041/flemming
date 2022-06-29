<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function login_index(){

        return view('Admin.Auth.login');
    }

    public function admin_login(Request $req){

        $validate = Validator::make($req->all(),[

            'email' => 'required|email|exists:admins',
            'password'=>'required'
        ],
        ['email.exists'=>'User not Exists']);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        if(Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password])){
            // dd('done');
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with('error','Invalid Credentials');
    }

    public function logout(){

        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    } 

    public function index_changePassword(){

        

        return view('Admin.Auth.changepassword');
    } 

    public function update_password(Request $request){

        $validate = Validator::make($request->all(),[

            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password'=>'same:new_password',




        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        else{

            $check=Hash::check($request->old_password,Auth::guard('admin')->user()->password);
            // dd($check);

            if($check){
                $admin=Admin::find(Auth::guard('admin')->user()->id);
                // dd($admin);
                $admin->update(['password'=>Hash::make($request->new_password)]);
                session()->flash('message', 'Password Updated');
                session()->flash('messageType', 'success');

                return redirect()->route('admin.change');
            }

            else{
                session()->flash('message', 'Wrong Password Entered ');
                session()->flash('messageType', 'danger');
                return redirect()->route('admin.change');

            }
        }
    }
    
    
}

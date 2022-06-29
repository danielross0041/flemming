<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Http\Requests;
class LocationController extends Controller
{
    //
    // public function index(){

    //     return view('Admin.Pages.appointment.appointment');
    // }
   
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index(Request $request)
    {
        $request->session()->put('location',$request->locations);
        $status['message'] = "Location has been Updated";
        $status['status'] = 1;
        return json_encode($status);
    }
    public function getLocation(Request $request)
    {
        if($request->session()->has('location'))
            echo $request->session()->get('location');
        else
            echo 'No data in the session';
    }
}

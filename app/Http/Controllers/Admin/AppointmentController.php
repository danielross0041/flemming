<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
class AppointmentController extends Controller
{
    //
    // public function index(){

    //     return view('Admin.Pages.appointment.appointment');
    // }
    public function index(Request $request)
    {
        
        if($request->ajax()) {
       
             $data = Appointment::whereDate('start', '>=', $request->start)
                       ->whereDate('end', '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
  
             return response()->json($data);
        }
        return view('Admin.Pages.appointment.appointment');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
        switch ($request->type) {
            case 'add':
                $combinedDT = date('Y-m-d H:i:s', strtotime("$request->start $request->start_time"));
                $event = Appointment::create([
                    'title' => $request->title,
                    'start' => $combinedDT,
                    'end' => $request->end,
                ]);
                return response()->json($event);
            break;
            case 'update':
                $appointment = Appointment::find($request->id);
                $time = date('H:i', strtotime($appointment->start));
                $combinedDT = date('Y-m-d H:i:s', strtotime("$request->start $time"));
                $event = Appointment::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $combinedDT,
                    'end' => $request->end,
                ]);
                return response()->json($event);
            break;
            case 'delete':
                $event = Appointment::find($request->id)->delete();
                return response()->json($event);
            break;
            default:
                # code...
            break;
        }
    }
}

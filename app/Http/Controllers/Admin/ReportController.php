<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Order_items;
use App\Models\Orders;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
class ReportController extends Controller
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
    public function index(){
        $orders = Order_items::groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);

        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function today(){
        $orders = Order_items::whereDate('filled', Carbon::today())->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function yesterday(){
        $orders = Order_items::whereDate('filled', Carbon::yesterday())->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function this_week(){
        $orders = Order_items::whereBetween('filled', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function last_week(){
        $currentDate = Carbon::now();
        $agoDate = $currentDate->subDays($currentDate->dayOfWeek)->subWeek();
        $orders = Order_items::where('filled','>=',$agoDate)->whereNotBetween('filled', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function this_month(){
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        $orders = Order_items::whereMonth('filled', $month)->whereYear('filled', $year)->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function last_month(){
        $month = Carbon::now()->subMonth()->month;
        $year = Carbon::now()->subMonth()->year;
        $orders = Order_items::whereMonth('filled', $month)->whereYear('filled', $year)->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function this_year(){
        $year = Carbon::now()->year;
        $orders = Order_items::whereYear('filled', $year)->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function lake_conroe(){
        $orders = Order_items::whereHas('order', function ($query) { 
            $query->where('location','Lake Conroe');
        })->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }

    public function lake_livingston(){
        $orders = Order_items::whereHas('order', function ($query) { 
            $query->where('location','Lake Livingston');
        })->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();

        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }
    public function search(Request $request)
    {
        $this->validate($request,[
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after_or_equal:start_date',
        ]);
        $orders = Order_items::whereDate('filled','>=',$request->start_date)->whereDate('filled','<=',$request->end_date)->groupBy('item_desc')->selectRaw('sum(item_total) as item_total,sum(total_units) as total_units, item_desc')->orderBy('item_total','DESC')->get();
        $totalOrders = count($orders);
        $item_total = $orders->sum('item_total');
        return view('Admin.Pages.reports.reports')->with(compact('orders','totalOrders','item_total'));
    }
}
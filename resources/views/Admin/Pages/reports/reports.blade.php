@extends('Admin.Layout.master')
@section('content')
<div class="container-fluid">
    <div class="content_right_area">
        <div class="reports">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">
                    <h3>Report</h3>
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-9 col-xl-9 col-xxl-9">
                    <form method="POST" action="{{route('report.date')}}">
                        @csrf
                        <div class="row align-items-center">
                        
                            <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                <div class="custom-input">
                                    <label>From</label>
                                    <input type="date" name="start_date" id="start_date" required max="<?php echo date("Y-m-d"); ?>"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                <div class="custom-input">
                                    <label>To</label>
                                    <input type="date" name="end_date" id="end_date" required max="<?php echo date("Y-m-d"); ?>"/>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-sm-12 col-lg-2 col-xl-2 col-xxl-2">
                                <button>Go</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row align-items-center mt-3">
                <div class="col-12 col-md-12 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">
                    <!-- <h3>Manual Dates (All Locations)</h3> -->
                </div>
                <div class="col-12 col-md-12 col-sm-12 col-lg-9 col-xl-9 col-xxl-9">
                    <ul>
                        <li><a href="{{route('report.today')}}" class="{{\Request::route()->getName() == 'report.today'?'active':''}}">Today</a></li>
                        <li><a href="{{route('report.yesterday')}}" class="{{\Request::route()->getName() == 'report.yesterday'?'active':''}}">Yesterday</a></li>
                        <li><a href="{{route('report.this_week')}}" class="{{\Request::route()->getName() == 'report.this_week'?'active':''}}">This Week</a></li>
                        <li><a href="{{route('report.last_week')}}" class="{{\Request::route()->getName() == 'report.last_week'?'active':''}}">Last Week</a></li>
                        <li><a href="{{route('report.this_month')}}" class="{{\Request::route()->getName() == 'report.this_month'?'active':''}}">This Month</a></li>
                        <li><a href="{{route('report.last_month')}}" class="{{\Request::route()->getName() == 'report.last_month'?'active':''}}">Last Month</a></li>
                        <li><a href="{{route('report.this_year')}}" class="{{\Request::route()->getName() == 'report.this_year'?'active':''}}">Year To Date</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{route('report.lake_conroe')}}" class="{{\Request::route()->getName() == 'report.lake_conroe'?'active':''}}">Lake Conroe</a></li>
                        <li><a href="{{route('report.lake_livingston')}}" class="{{\Request::route()->getName() == 'report.lake_livingston'?'active':''}}">Lake Livingston</a></li>
                        <li><a href="{{route('report.index')}}" class="{{\Request::route()->getName() == 'report.index'?'active':''}}">ALL</a></li>
                    </ul>
                </div>
            </div>
            <hr />
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="reports-ticket">
                        <div class="reports-ticket-detail">
                            <h4>Total Orders</h4>
                            <h5>{{$totalOrders}}</h5>
                        </div>
                        <div class="reports-ticket-detail">
                            <h4>Ticket Total</h4>
                            <h5>${{round($item_total, 4)}}</h5>
                        </div>
                        <div class="reports-ticket-detail">
                            <h4>Ave Ticket</h4>
                            @if($totalOrders >0 && $item_total>0)
                            <h5>${{(round($item_total/$totalOrders, 4))}}</h5>
                            @else
                            <h5>$0</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product Breakdown</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $key => $order)
                            @if($order->item_total && $order->total_units)
                            <div>
                                <tr>
                                    <td rowspan="2">{{$order->item_desc}}</td>
                                    <td><h5>Sales</h5></td>
                                    <td><h4>(${{$order->item_total}})</h4></td>
                                    @if($order->item_total>0)
                                    @php
                                    $width = (($order->item_total/1210000)*100);
                                    @endphp
                                    <td><div class="sales-colour" style="width: {{$width}}%;"></div></td>

                                    @else
                                    <td><div class="sales-colour" style="width: 0%;"></div></td>
                                    @endif
                                </tr>
                                <tr class="border-set-here">
                                    <td><h5>Units</h5></td>
                                    <td><h6>({{$order->total_units}})</h6></td>
                                    @if($order->total_units>0)
                                    @php
                                    $widthUnits = (($order->total_units/1220000)*100);
                                    @endphp
                                    <td><div class="unit-colour" style="width: {{$widthUnits}}%;"></div></td>
                                    @else
                                    <td><div class="unit-colour" style="width: 0%;"></div></td>
                                    @endif
                                </tr>
                            </div>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
@endsection
@section('scripts')
@endsection

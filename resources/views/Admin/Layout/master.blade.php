<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Ken Flemings Dashboard</title>

    <!-- Front Css File Append Here -->
    @include('Admin.Layout.css')
    <!-- CSS File End -->
    @yield('css')
</head>

<body>
<?php  
    $name = Route::currentRouteName(); 
    
?>
  
    @include('Admin.Layout.header')
    <div class="main_wrapper">
        @if($name != "admin.dashboard")
          @include('Admin.Layout.sidebar')
        @else

        @endif
        <div class="container-fluid">
            <div class="content_right_area">
                <div class="search_area">
                    <div class="search_1">
                        
                    </div>
                    <div class="slct_1">
                        <select name="" id="location_set">
                            <option {{ (session()->get('location') != '')?'':'selected' }}  disabled>Select Location</option>
                            <option value="Lake Conroe" {{ (session()->get('location') == 'Lake Conroe')?'selected':'' }}>Lake Conroe</option>
                            <option value="Lake Livingston" {{ (session()->get('location') == 'Lake Livingston')?'selected':'' }}>Lake Livingston</option>
                        </select>
                        <i class="fa-regular fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>
          @yield('content')
        

    </div>





    @include('Admin.Layout.scripts')
    <!-- CSS File End -->
    @yield('scripts')
</body>

</html>

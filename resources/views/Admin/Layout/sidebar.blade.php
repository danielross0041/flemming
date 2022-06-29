<div class="side_area_left">
    <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <div class="logo_area">
                    <?php
                    
                    $logos = DB::table('company_profiles')->get();
                        
                    ?>
                    @foreach ($logos as $logo)
                    <a href="{{route('admin.dashboard')}}"> <img src="{{ asset('profile_image/'.$logo->image) }}" alt="Dashboard Logo"></a>  
                    @endforeach
                  
                </div>
                <ul class="navbar-nav">
                    <li>
                        <a href="{{ route('new.customer') }}">
                            <i class="fa-regular fa-user-plus"></i>
                            <span>New Customer</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('customer') }}">
                            <i class="fa-regular fa-users"></i>
                            <span>Customer</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('orders') }}">
                            <i class="fa-regular fa-clipboard-list-check"></i>
                            <span>Orders</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('new.products') }}">
                            <i class="fa-regular fa-user-plus"></i>
                            <span>New Products</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}">
                            <i class="fa-regular fa-user-plus"></i>
                            <span>Products</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{route('report.index')}}">
                            <i class="fa-regular fa-file-contract"></i>
                            <span>Reports</span>

                        </a>
                    </li>

                   <!-- <li>
                        <a href="{{ route('category') }}">
                            <i class="fa-regular fa fa-list-alt"></i>
                            <span>Category</span>

                        </a>
                    </li> -->
                    {{-- <li>

                        <a href="{{ route('create.order') }}">
                            <i class="fa-regular fa-file-contract"></i>
                            <span>Reports</span>

                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('search') }}">
                            <i class="fa-brands fa-searchengin"></i>
                            <span>Search</span>

                        </a>
                    </li>
                    <!--<li>
                        <a href="{{ route('contact') }}">
                            <i class="fa-regular fa fa-address-book"></i>
                            <span>Contact</span>

                        </a>
                    </li> -->
                    <li>
                        <a href="{{ route('calender') }}">
                            <i class="fa-regular fa-calendar-check"></i>
                            <span>Appointments</span>

                        </a>
                    </li>
                </ul>              
                <ul class="navbar-nav btn_nav_user">
                    <li>
                        <a href="{{ route('admin.logout') }}">
                            <i class="fa-regular fa-arrow-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.profile')}}">
                            <img src="{{ asset('assets/images/user.svg') }}" alt="User">
                            <span>{{ Auth::guard('admin')->user()->name }}</span>

                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>
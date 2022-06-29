<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
     if (auth()->check()) {
        return redirect('admin/dashboard');
    }else{
        return redirect('admin/login');
    }
    return redirect('admin/login');
});

Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::prefix('admin')->group(function(){

    Route::get('/login',[App\Http\Controllers\Admin\LoginController::class, 'login_index'])->name('admin.login');
    Route::post('/login_store',[App\Http\Controllers\Admin\LoginController::class, 'admin_login'])->name('admin.store');
    Route::get('/logout',[App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/index_changePassword',[App\Http\Controllers\Admin\LoginController::class, 'index_changePassword'])->name('admin.change');
    Route::post('/update_changePassword',[App\Http\Controllers\Admin\LoginController::class, 'update_password'])->name('admin.update');

    Route::group(['middleware'=>'admin'],function (){

        Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');

        // new customer

        //  customer
        Route::post('/customer/send-msg',[App\Http\Controllers\Admin\CustomerController::class, 'send_msg'])->name('customer.message.send');


        Route::get('/customer',[App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customer');
		Route::get('/customer/order/detail/{id}',[App\Http\Controllers\Admin\CustomerController::class, 'detail'])->name('customer.order.detail');
        Route::get('/new_customer',[App\Http\Controllers\Admin\CustomerController::class, 'create'])->name('new.customer');
        Route::post('/new_customer/store',[App\Http\Controllers\Admin\CustomerController::class, 'store'])->name('new.customer.store');
        Route::get('/new_customer/delete/{id}',[App\Http\Controllers\Admin\CustomerController::class, 'delete'])->name('new.customer.delete');
        Route::get('/new_customer/edit/{id}',[App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('new.customer.edit');
        Route::post('/new_customer/update',[App\Http\Controllers\Admin\CustomerController::class, 'update'])->name('new.customer.update');
        Route::post('/customer/order/detail/update',[App\Http\Controllers\Admin\OrderController::class, 'changeStatus'])->name('new.customer.changeStatus');
        Route::post('/order/status/update',[App\Http\Controllers\Admin\OrderController::class, 'updateOrderStatus'])->name('new.customer.order.changeStatus');
        Route::post('/order/status/updateReady',[App\Http\Controllers\Admin\OrderController::class, 'updateOrderReady'])->name('new.customer.order.ready');

        //  Orders
        Route::get('/orders',[App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders');
        Route::get('/create/order/{id}',[App\Http\Controllers\Admin\OrderController::class, 'create'])->name('create.order');
        Route::get('/update/order/{id}',[App\Http\Controllers\Admin\OrderController::class, 'update'])->name('update.order');
		Route::post('/create/store',[App\Http\Controllers\Admin\OrderController::class, 'store'])->name('store.order');
        Route::post('/create/edit',[App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('edit.order');
        Route::get('/orders/processing',[App\Http\Controllers\Admin\OrderController::class, 'processing'])->name('order.processing');
        Route::get('/orders/complete',[App\Http\Controllers\Admin\OrderController::class, 'complete'])->name('order.complete');
        Route::get('/orders/ready-for-pickup',[App\Http\Controllers\Admin\OrderController::class, 'readyForPickup'])->name('order.readyForPickup');
        Route::get('/orders/pick-up',[App\Http\Controllers\Admin\OrderController::class, 'pickUp'])->name('order.pickUp');
        Route::get('/orders/abandoned',[App\Http\Controllers\Admin\OrderController::class, 'abandoned'])->name('order.abandoned');
        Route::get('/orders/location/{status?}/{slug?}',[App\Http\Controllers\Admin\OrderController::class, 'location'])->name('order.location');
		Route::post('/orders/status',[App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('order.updateStatus');



        // Location
        Route::get('/location',[App\Http\Controllers\Admin\LocationController::class, 'index'])->name('location.set');
        Route::get('/location-get',[App\Http\Controllers\Admin\LocationController::class, 'getLocation'])->name('location.get');







        // Report
        Route::post('/report-search',[App\Http\Controllers\Admin\ReportController::class, 'search'])->name('report.date');
        Route::get('/report',[App\Http\Controllers\Admin\ReportController::class, 'index'])->name('report.index');
        Route::get('/report-today',[App\Http\Controllers\Admin\ReportController::class, 'today'])->name('report.today');
        Route::get('/report-yesterday',[App\Http\Controllers\Admin\ReportController::class, 'yesterday'])->name('report.yesterday');
        Route::get('/report-this-week',[App\Http\Controllers\Admin\ReportController::class, 'this_week'])->name('report.this_week');
        Route::get('/report-last-week',[App\Http\Controllers\Admin\ReportController::class, 'last_week'])->name('report.last_week');
        Route::get('/report-this-month',[App\Http\Controllers\Admin\ReportController::class, 'this_month'])->name('report.this_month');
        Route::get('/report-last-month',[App\Http\Controllers\Admin\ReportController::class, 'last_month'])->name('report.last_month');
        Route::get('/report-this-year',[App\Http\Controllers\Admin\ReportController::class, 'this_year'])->name('report.this_year');
        Route::get('/report-lake-conroe',[App\Http\Controllers\Admin\ReportController::class, 'lake_conroe'])->name('report.lake_conroe');
        Route::get('/report-lake-livingston',[App\Http\Controllers\Admin\ReportController::class, 'lake_livingston'])->name('report.lake_livingston');



        //  Products
        Route::get('/products',[App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products');
        Route::get('/new_products',[App\Http\Controllers\Admin\ProductController::class, 'listing'])->name('new.products');
		Route::get('/products/create/{id?}',[App\Http\Controllers\Admin\ProductController::class, 'create'])->name('products.create');
		Route::post('/products/store',[App\Http\Controllers\Admin\ProductController::class, 'store'])->name('products.store');
		Route::get('/products/delete/{id}',[App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('products.delete');

        //  Search
        Route::get('/search',[App\Http\Controllers\Admin\SearchController::class, 'index'])->name('search');
        Route::post('/search-customer',[App\Http\Controllers\Admin\SearchController::class, 'searchCustomer'])->name('search.customer');

        //  Appointment
        Route::get('/calender',[App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('calender');
        // Route::get('fullcalender', [App\Http\Controllers\Admin\AppointmentController::class, 'index']);
        Route::post('fullcalenderAjax', [App\Http\Controllers\Admin\AppointmentController::class, 'ajax'])->name('calender.create');

        //  category
        Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');

        //  contact
        Route::get('/contact',[App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact');

        //  User
        Route::get('/user-profile',[App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('user.profile');
        Route::get('/user-profile/edit/{id}',[App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('user.profile.edit');
        Route::post('/user-profile/update',[App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('user.profile.update');

    });
  
});

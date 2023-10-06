<?php
//Admin Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventtypeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;

//Front end Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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


//Home page
Route::get('/', [HomeController::class, 'home'] );
Route::get('/service/{id}',[HomeController::class,'service_detail']);
Route::get('/service',[HomeController::class,'service']);
Route::get('page/about-us',[PageController::class,'about_us']);
Route::get('page/contact-us',[PageController::class,'contact_us']);

//Admin Login
Route::get('admin/login', [AdminController::class, 'login'] );
Route::post('admin/login', [AdminController::class, 'check_login'] );
Route::get('admin/logout', [AdminController::class, 'logout'] );


//Admin Dashboard
Route::get('admin', [AdminController::class, 'dashboard'] );

//Eventtype Routes
//This code is specifically to delete Eventtype
Route::get('admin/eventtype/{id}/delete',[EventtypeController::class, 'destroy']);
Route::resource('admin/eventtype',EventtypeController::class);

//Event Routes
//This code is specifically to delete Event
Route::get('admin/events/{id}/delete',[EventController::class, 'destroy']);
Route::resource('admin/events',EventController::class);

//Customer Routes
//This code is specifically to delete Event
Route::get('admin/customer/{id}/delete',[CustomerController::class, 'destroy']);
Route::resource('admin/customer',CustomerController::class);

//Delete Event Images
//This code is specifically to delete Event Images
Route::get('admin/eventimage/delete/{id}',[EventController::class, 'destroy_image']);

//Booking Routes Admin
//This code is specifically to delete Bookings
Route::get('admin/booking/{id}/delete',[BookingController::class, 'destroy']);
Route::resource('admin/booking',BookingController::class);

//Customer registration and Login
Route::get('login', [CustomerController::class, 'login'] );
Route::post('customer/login', [CustomerController::class, 'customer_login'] );
Route::get('register', [CustomerController::class, 'register'] );
Route::get('logout', [CustomerController::class, 'logout'] );

//Booking Routes Customer
Route::get('booking',[BookingController::class,'front_booking']);
Route::get('booking/success',[BookingController::class,'booking_payment_success']);
Route::get('booking/fail',[BookingController::class,'booking_payment_fail']);

// Service CRUD
Route::get('admin/service/{id}/delete',[ServiceController::class,'destroy']);
Route::resource('admin/service',ServiceController::class);

// Testimonial
Route::get('customer/add-testimonial',[HomeController::class,'add_testimonial']);
Route::post('customer/save-testimonial',[HomeController::class,'save_testimonial']);
Route::get('admin/testimonial/{id}/delete',[AdminController::class,'destroy_testimonial']);
Route::get('admin/testimonials',[AdminController::class,'testimonials']);
Route::post('save-contactus',[PageController::class,'save_contactus']);

//Social media Routes
Route::get('social-home',[PostController::class,'social_home']);
Route::post('social-home/createpost',[PostController::class,'create_post']);
Route::get('social-home/deletepost/{post_id}',[PostController::class,'delete_post']);


Route::get('social-home/editpost/{post_id}', [PostController::class, 'edit_post'])->name('edit_post');
Route::put('social-home/editpost/{post_id}', [PostController::class, 'update_post'])->name('update_post');


Route::get('social-home/settingspage',[PostController::class,'settings_page']);
Route::get('social-home/accountpage',[PostController::class,'account_page']);
Route::get('social-home/profilepage/{customer_id}', [CustomerController::class, 'profile_page'])->name('profile_page');







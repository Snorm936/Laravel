<?php
use  App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;
Route::get('front',function(){
    return view('front-agency');
  });
  Route::get('home',function()
  {
    return view('front_home');
  });
  Route::get('about',function()
  {
    return view('front_about');
  });
  Route::get('services',function()
  {
    return view('front_services');
  });
  Route::get('package',function()
  {
    return view('front_package');
  });
  Route::get('destination',function()
  {
    return view('front_destination');
  });
  Route::get('booking',function()
  {
    return view('front_booking');
  });
  Route::get('travel',function()
  {
    return view('front_travel');
  });
  Route::get('testimonial',function()
  {
    return view('front_testimonial');
  });
  Route::get('error',function()
  {
    return view('front_error');

  });
  Route::get('contact',function()
  {
    return view('front_contact');

  });
  

  
  Route::get('/', [FrontPageController::class,'index'])->name('front.home');
  Route::get('/about', [FrontPageController::class,'about'])->name('front.about');
  Route::get('/services', [FrontPageController::class,'services'])->name('front.services');
  Route::get('/package', [FrontPageController::class,'package'])->name('front.package');
  Route::get('/destination', [FrontPageController::class,'destination'])->name('front.destination');
  Route::get('/booking', [FrontPageController::class,'booking'])->name('front.booking');
  Route::get('/travel', [FrontPageController::class,'travel'])->name('front.travel');
  Route::get('/testimonial', [FrontPageController::class,'testimonial'])->name('front.testimonial');
  Route::get('/error', [FrontPageController::class,'error'])->name('front.error');
  Route::get('/contact', [FrontPageController::class,'contact'])->name('front.contact');




  Route::get('master', function()
  {
    return view("front_master");
  });
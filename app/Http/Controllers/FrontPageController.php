<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view ('front_home');
    }
    public function about()
    {
        $data['title']="About Us";
        return view ('front_about', $data);
 
   }
   public function services()
    {
        $data['title']="Services";
        return view ('front_services',$data);
    }
    public function package()
    {
        $data['title']="Package";
        return view ('front_package',$data);
    }
    public function destination()
    {
        $data['title']="Destination";
        return view('front_destination',$data);
    }
    public function booking()
    {
        $data['title']="Booking";
        return view('front_booking',$data);
    }
    public function travel()
    {
        $data['title']="Travel Guide";
        return view('front_travel',$data);
    }
    public function testimonial()
    {
        $data['title']="Testimonial";
        return view('front_testimonial',$data);
    }
    public function error()
    {
        $data['title']="Error";
        return view('front_error',$data);
    }
    public function contact()
    {
        $data['title']="Contact";
        return view('front_contact',$data); 
    }
}

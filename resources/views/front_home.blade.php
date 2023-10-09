
       
@extends("front_master")
@section("content")
    <!-- Navbar & Hero Start -->
  
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                <!-- <img src="{{asset('travel_agency')}}/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            @include('partails.navbar')
        </nav>
        @include('partails.search_home')
    </div>
    
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    @include ('partails.about')
    <!-- About End -->


    <!-- Service Start -->
    @include ('partails.service')
    <!-- Service End -->


    <!-- Destination Start -->
    @include ('partails.destination')
    <!-- Destination Start -->
   
    
    <!-- Package Start -->
    @include ('partails.package')
    <!-- Package End -->


    <!-- Booking Start -->
    @include ('partails.online-booking')
    <!-- Booking Start -->


    <!-- Process Start -->
    @include ('partails.easy-steps')
    <!-- Process Start -->


    <!-- Team Start -->
    @include ('partails.travel')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include ('partails.testimonial')
    <!-- Testimonial End -->
        

    @endsection
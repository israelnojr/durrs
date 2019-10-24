@extends('layouts.app')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Projects				
                </h1>	
                <p class="text-white link-nav"><a href="{{('/')}}">Home </a>  
                <span class="lnr lnr-arrow-right"></span>  <a href="{{route('projects')}}"> Projects</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start project Area -->
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Latest Finished Projects</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <a href="{{asset('images/p1.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{asset('images/p1.jpg')}}" alt="">
                </a>	
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="{{asset('images/p2.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{asset('images/p2.jpg')}}" alt="">
                </a>	
            </div>						
            <div class="col-lg-6 col-md-6">
                <a href="{{asset('images/p3.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{asset('images/p3.jpg')}}" alt="">
                </a>	
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="{{asset('images/p4.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{asset('images/p4.jpg')}}" alt="">
                </a>	
            </div>		
        </div>
    </div>	
</section>
<!-- End project Area -->



@endsection
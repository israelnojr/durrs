@extends('layouts.app')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Services			
                </h1>	
                <p class="text-white link-nav"><a href="{{('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('service')}}"> Services</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->	

<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">{{$maintenancesection->title}}</h1>
                <p>
                {{ str_limit($maintenancesection->desc, $limit = 50, $end = '...') }}
                </p>
            </div>
        </div>						
        <div class="row">
            <div class="col-sm-10 offset-md-1">
                <div class="single-service">
                    <div class="thumb">
                        <img src="{{ asset('uploads/maintenancesection/'.$maintenancesection->image) }}" alt="">									
                    </div>
                    <h4>{{$maintenancesection->title}}</h4>
                    <p>
                        {{ $maintenancesection->desc}}
                    </p>
                </div>
            </div>									
        </div>
    </div>	
</section>
    <!-- End service Area -->
<!-- End project Area -->



@endsection
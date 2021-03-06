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
                <h1 class="mb-10">Our Capturing Market Sectors</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>						
        <div class="row">
        @foreach($marketsection as $mrkk)
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="{{ asset('uploads/marketsection/'.$mrkk->image) }}" alt="">									
                    </div>
                    <a href="{{ route('service.show', $mrkk->slug) }}"><h4>{{$mrkk->title}}</h4></a>
                    <p>
                        {{ str_limit($mrkk->desc, $limit = 150, $end = '...') }}
                    </p>
                </div>
            </div>
        @endforeach										
        </div>
    </div>	
</section>
    <!-- End service Area -->
<!-- End project Area -->



@endsection
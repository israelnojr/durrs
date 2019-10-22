@extends('layouts.app')
@section('content')
<!-- start banner Area -->
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
                    <h4>{{$mrkk->title}}</h4>
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
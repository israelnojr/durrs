@extends('layouts.app')
@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us				
                </h1>	
                <p class="text-white link-nav"><a href="{{('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->				  

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container" id="app">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>California, United States</h5>
                        <p>332 E Avenue I, Lancaster</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>+1 (424) 239 7650</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>support@durrsconstructions.com</h5>
                        <p>Send us your query anytime!</p>
                        <strong>we'll reccommend you use the contact us form</strong>
                    </div>
                </div>														
            </div>
            <div class="col-lg-8">
                <form class="form-area "  action="{{route('client.feedback')}}" method="post" class="contact-form text-right">
                    @csrf()
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <input name="fullname" placeholder="Enter your name"type="text" style="width: 100%; margin-bottom: 5px;">
                        
                            <input name="company" placeholder="Your Company" type="text" style="width: 100%;" >

                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Let's hear from you"></textarea>
                            <button class="genric-btn primary circle mt-30" style="float: right;">Send Message</button>								
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>
<!-- End contact-page Area -->

@endsection

<script>
    function initMap() {
        var address = {lat: 234.703917, lng: -118.124666}
        var map = new google.maps.Map(document.getElementById('map'), {
            center: address,
            zoom: 8
        });
        var marker = new google.maps.Marker({
            position: address,
            map: map
        });
    }
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=initMap"async defer></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1KT4BzvaDTQ-WIW85F0zE6oHPkb1nXIk&callback=initMap"async defer></script> -->



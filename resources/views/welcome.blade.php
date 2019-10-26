@extends('layouts.app')
@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container" id="app">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-12 col-md-12">
                    <h6 class="text-uppercase">Don’t look further, here is the key your success</h6>
                    <h1>
                        We’re DurrsConstructions <br> <strong class="text-danger"> Pipeline Industrial Polution</strong>			
                    </h1>
                    <p class="text-white">
                    Integrated software solutions for optimizing operations 
                    and business intelligence across the entire pipeline network. 
                    </p>
                    <button data-toggle="modal" data-target="#modal-default"  
                        class="primary-btn header-btn text-uppercase">Get Started</button>
                </div>												
            </div>
            <clientform-component></clientform-component>
    </section>
    <!-- End banner Area -->

    <!-- Start cat Area -->
    <section class="cat-area section-gap" id="feature">
        <div class="container">	
            <h1 class="text-center" >Maintenance</h1>
            <p class="text-center">Commercial Management Solutions</p>					
            <div class="row">
                <div class="col-lg-4 ">	
                    <div class="single-cat d-flex flex-column">
                        <a href="#" class="hb-sm-margin mx-auto d-block">
                            <span class="hb hb-sm inv hb-facebook-inv">
                                <span class="lnr lnr-magic-wand"></span>
                            </span>
                        </a>
                        <h4 class="mb-20" style="margin-top: 23px;">Sethensis</h4>
                        <p>
                            Optimize the entire order-to-cash cycle by ensuring timely and accurate transactional data is easily accessible. 
                        </p>
                    </div>															
                </div>
                <div class="col-lg-4 ">	
                    <div class="single-cat">
                        <a href="#" class="hb-sm-margin mx-auto d-block">
                            <span class="hb hb-sm inv hb-facebook-inv">
                                <span class="lnr lnr-rocket"></span>
                            </span>
                        </a>
                        <h4 class="mt-40 mb-20">PipelineScheduler™</h4>
                        <p>
                            Schedule batch liquids pipelines by integrating and consolidating critical information that facilitates decision making .
                        </p>
                    </div>															
                </div>
                <div class="col-lg-4 ">
                    <div class="single-cat">
                        <a href="#" class="hb-sm-margin mx-auto d-block">
                            <span class="hb hb-sm inv hb-facebook-inv">
                                <span class="lnr lnr-train"></span>
                            </span>
                        </a>
                        <h4 class="mt-40 mb-20">TransportPlanner™</h4>
                        <p>
                            Plan and manage utilization of complex pipeline transportation networks, including truck, rail or barge
                        </p>
                    </div>							
                </div>
                <div class="col-lg-4 ">
                    <div class="single-cat">
                        <a href="#" class="hb-sm-margin mx-auto d-block">
                            <span class="hb hb-sm inv hb-facebook-inv">
                                <span class="lnr lnr-hourglass"></span>
                            </span>
                        </a>
                        <h4 class="mt-40 mb-20">GasStream™</h4>
                        <p>
                            Manage gas gathering, processing, contracts and transactions using this fully-integrated system.
                        </p>
                    </div>							
                </div>
                <div class="col-lg-4 ">
                    <div class="single-cat">
                        <a href="#" class="hb-sm-margin mx-auto d-block">
                            <span class="hb hb-sm inv hb-facebook-inv">
                                <span class="lnr lnr-funnel"></span>
                            </span>
                        </a>
                        <h4 class="mt-40 mb-20">PipelineTransporter™</h4>
                        <p>
                            Streamline nominations, scheduling, consolidations and more for third party access to gas shipped from your facilities.
                        </p>
                    </div>							
                </div>
                <div class="col-lg-4 ">
                    <div class="single-cat">
                        <a href="#" class="hb-sm-margin mx-auto d-block">
                            <span class="hb hb-sm inv hb-facebook-inv">
                                <span class="lnr lnr-drop"></span>
                            </span>
                        </a>
                        <h4 class="mt-40 mb-20">GasLoadForecaster™</h4>
                        <p>
                            Achieve accurate forecasting and improve accounting by using predictive management and modeling
                        </p>
                    </div>							
                </div>
            </div>
        </div>	
    </section>
    <!-- End cat Area -->		
    <section class="cat-area mb-70" id="feature" style="margin-top: -66px;" >
        <div class="container">	
            <div class="C028-30-70-text-image ">
                    <h2 class="mb-20">
                        Operations Management
                    </h2>
                    <div class="row" style="align-items: center;" >
                        <div class="col-xs-10 col-sm-6">
                            <div class="p1">
                                <p>Our pipeline operations product portfolio works across both liquids and gas pipelines and contains features such as pipeline design, analysis, training. offline and online simulation.<br></p>
                                    <ul class="rte--list">
                                        <li>Leak detection</li>
                                        <li>Theft detection</li>
                                        <li>Predictive and proactive modeling</li>
                                        <li>Pipeline trainer/simulator</li>
                                        <li>Pipeline and distribution network (or LDC) optimization</li>
                                        <li>Pipeline design</li>
                                        <li>Flow assurance Survival time studies</li>
                                        <li>Capacity studies</li>
                                        <li>Operations analysis</li>
                                    </ul>
                                </p> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                            <a href="" target="_blank">
                            <div class="image-container img_width">
                                <img src="{{asset('images/leakage.png')}}" class="cm-image cm-media--responsive img_pipline">
                            </div> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start feedback Area -->
    <section class="feedback-area section-gap relative" id="feedback">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-30 header-text text-center">
                    <h1 class="mb-10 text-white">About DurrsConstructions</h1>
                    <p class="text-white">
                        Who are in extremely love with eco friendly system..
                    </p>
                </div>
            </div>			
            <div class="row feedback-contents justify-content-center align-items-center">
                <div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="#"><img class="img-fluid" src="{{asset('images/play-btn.png')}}" alt=""></a>
                </div>
                <div class="col-lg-6 feedback-right">
                    <div class="">
                        <div class="single-feedback-carusel">
                            <p class="text-white">
                            DurrsConstructions concentrates on the most complex and profound challenges facing the world in the process, 
                            industrial, commercial and residential markets. We refocused our business portfolio to deliver 
                            solutions that bring greater value to our customers. Learn how we've transformed and why.
                            </p>
                        </div>															
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End feedback Area -->
    <section class="cat-area section-gap" id="feature" style="margin-bottom: -160px;" >
        <div class="container">	
            <div id="section9" class=" ">
                <div class="big-feature-inner d-flex align-items-start">
                    <div class="content">
                        <h2>Products &amp; Services: The Most Complete Portfolio in the Industry</h2>
                        <span class="p1">
                            <p>DurrsConstructions, we helps manufacturers achieve top quartile business performance through 
                                the industry’s broadest portfolio of technologies to measure, control, optimize and power their operations 
                                – and the experience and expertise to solve their toughest problems.&nbsp;From reliable, 
                                easy-to-use and innovative products to responsive, expert services, 
                                your path to improved performance starts here.
                            </p> 
                        </span>
                        <div class="cta-buttons ">
                            <a class=" btn plan-btn header-btn text-uppercase" href="" >
                                <span>
                                    <span class="text-wrapper">Learn About Products</span>
                                </span>
                            </a>
                        
                        </div>
                    </div>
                    <div class="image-container mr-cont">
                        <img src=" {{('images/plan.jpg')}} " class="plan_img" >
                    </div> 
                </div>
            </div>
        </div>
</section>
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
<!-- Start home-about Area -->
<section class="home-about-area section-gap" id="about">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-12 home-about-left">
                <h6>We’ve made a life that will change you</h6>
                <h1>
                    It’s Time to Transform <br>
                    Your Projects and Operations
                </h1>
                <p class="sub">We are here to listen from you, deliver exellence!</p>
                <p class="pb-20">
                Many of the industry’s standard approaches were created decades ago, 
                long before today’s innovation. Doing more of the same is yielding only incremental benefits 
                and management expects you to deliver better results. With a partner like DurrsConstructions, you can. 
                Our automation expertise – from projects to operations – is focused on helping you hit your targets 
                and move your organization into Top Quartile performance.
                </p>
                <a class="primary-btn" href="#">Get Started Now</a>
            </div>
            <div class="col-lg-4 col-md-12 home-about-right relative">
                <form class="form-wrap" action="{{route('quotation.get')}}" method="post" >
                    @csrf()
                    <h4 class="text-white pb-20">Request a Quote</h4>
                    <div class="form-select" id="service-select">
                        <select name="service" >
                            <option value="none">Select Service</option>
                            <option value="Leak detection">Leak detection</option>
                            <option value="Theft detection">Theft detection</option>
                            <option value="redictive and proactive modeling">Predictive and proactive modeling</option>
                            <option value="Pipeline trainer/simulator">Pipeline trainer/simulator</option>
                            <option value="Pipeline design">Pipeline design</option>
                            <option value="Flow assurance Survival time studies">Flow assurance Survival time studies</option>
                            <option value="Operations analysis">Operations analysis</option>
                            <option value="Capacity Studies">Capacity Studies</option>
                        </select>
                    </div>								
                    <input name="fullname" type="text" class="form-control" placeholder="Full Name">
                    <input name="phone" type="phone" class="form-control" placeholder="Phone Number">
                    <input name="email" type="email" class="form-control" placeholder="Email Address">
                    <input name="company" type="text" class="form-control" placeholder="Company">
                    <textarea name="message" id="" cols="30" rows="5" placeholder="What do want!" class="form-control"></textarea>
                    <button class="primary-btn">Request Free Quote</button>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End home-about Area -->

<!-- Start faq Area -->
<section class="faq-area section-gap relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5><span class="counter">100</span>+</h5>
                    <p>
                        Projects Completed
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5><span class="counter">50</span></h5>
                    <p>
                        Total Employees
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5 class="counter">65</h5>
                    <p>
                        Happy Clients
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-faq">
                    <div class="circle">
                        <div class="inner"></div>
                    </div>
                    <h5 class="counter">367</h5>
                    <p>
                        Tickets Submited
                    </p>
                </div>
            </div>																		
        </div>
    </div>	
</section>
<!-- End faq Area -->

<!-- Start service Area -->
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
<section class="feedback-area section-gap relative" id="feedback">
        <div class="overlay overlay-bg" style="background-color: rgba(44, 84, 128, 0.5);opacity: 1;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-30 header-text text-center">
                    
                </div>
            </div>			
            <div class="row feedback-contents justify-content-center align-items-center">
                <div class="col-lg-6 feedback-left relative d-flex justify-content-center align-items-center">
                    <div class="overlay overlay-bg" style="background-color: rgba(44, 84, 128, 0.5);opacity: 1;" ></div>
                    
                </div>
                <div class="col-lg-6 feedback-right">
                    <div class="">
                        <div class="single-feedback-carusel">
                            <p class="text-white">
                           
                            </p>
                        </div>															
                    </div>
                </div>
            </div>
        </div>	
    </section>

    <br>

@endsection

<style>
    ._border-black{
        border: 1px solid;
    }
    .img_width{
       width: 100%
    }
    .img_pipline{
        width: 100%
    }

    .mr-cont{
        width: 195%;
        margin-left: 20px;
    }

    .plan_img{
        height: 438px !important;
        width: 100% !important;
    }
    .plan-btn {
        background-color: #fab700;
        border-radius: 0;
        padding-left: 30px;
        padding-right: 30px;
        border: 1px solid transparent;
        color: #fff;
    }

    .plan-btn:hover {
        border: 1px solid #fab700 !important;
        background: transparent;
        color: black !important;
    }

    .plan-btn:active {
        border: 1px solid #fab700 !important;
        background: transparent;
        color: black !important;
        outline: none !important;
    }
    
    
</style>

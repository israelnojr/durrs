<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <a href="tel:+880 012 3654 896">+1 424 2397 650</a>
                    <a href="mailto:support@colorlib.com">support@durrsconstructions.com</a>				
                </div>
            </div>			  					
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
            <a href="{{('/')}}"><img src="{{ asset('images/durrs_construction.png') }}" alt="" title="durrsconstructions logo" /></a>
            </div>
            <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{('/')}}">Home</a></li>
                <!-- <li><a href="{{route('about')}}">About</a></li> -->
                <li><a href="{{route('service')}} ">Service</a></li>
                <li><a href=" {{route('projects')}} ">Projects</a></li>
                </li>						          
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
            </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
    @include('backend.partial.message')
</header><!-- #header -->

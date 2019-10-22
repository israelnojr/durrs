<div class="sidebar" data-color="blue" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{('/') }}" class="simple-text">
           @yield('title')
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{Request::is('admin/dashboard*')?'active': ''}}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class=" {{Request::is('admin/market-section*')?'active': ''}} ">
                <a href="/admin/market-section">
                    <i class="material-icons">assessment</i>
                    <p>Market Section</p>
                </a>
            </li>

            <li class=" {{Request::is('admin/slider*')?'active': ''}} ">
                <a href="">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>

        </ul>
    </div>
</div>

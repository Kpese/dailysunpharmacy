<div class="site-wrap w-100">
    <div class="site-navbar py-2">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="url('/')" class="js-logo-clone"><img src="{{ asset('front/images/logo.png')}}" width="70px" height="70px" alt="" /></a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a style="text-decoration: none" href="{{ url('/') }}">Home</a></li>
                            <li><a style="text-decoration: none" href="{{ route('about') }}">About</a></li>
                            <li><a style="text-decoration: none" href="{{ route('store') }}">Our Products</a></li>
                            <li><a style="text-decoration: none" href="{{ route('front-contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
            </div>
        </div>
    </div>

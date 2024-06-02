<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daily Sun</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="title" content="Daily Sun Pharmaceutical - A a limited liability Company " />
    <meta name="description" content="Feel free to connect with us." />

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('front/fonts/icomoon/style.css')}}" />

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('front/images/logo.png')}}" />

    <link rel="stylesheet" href="{{asset('front/css/aos.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    @include('front.layout.header')

    {{-- content start --}}
    @yield('content')
    {{-- content ends --}}

    <footer class="site-footer bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="block-7">
                        <h3 class=" mb-4"><img src="{{ asset('front/images/logo.png ') }}" width="70px" height="70px" alt=""></h3>
                        <p>
                            {{ $contact->description}}
                         </p>
                    </div>
                </div>
                <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                    <h3 class=" mb-4">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}" class="text-light" style="text-decoration:none">About Us</a></li>
                        <li><a href="{{ route('store') }}" class="text-light" style="text-decoration:none">Our Products</a></li>
                        <li><a href="{{ route('front-contact') }}" class="text-light" style="text-decoration:none">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                        <h3 class=" mb-4">Contact Info</h3>
                        <ul class="list-unstyled">
                            <li class="address text-light">
                                {{-- Head Office: Plot 3 & 4 Tomori Industrial,  estate off Idi Roko road Ota Ogun state Nigeria. --}}
                                {{ $contact->address }}
                            </li>
                            <li class="phone text-light">
                                <a href="tel:+234 916 074 3899" class="text-light" style="text-decoration:none"> {{ $contact->phone }}</a>
                            </li>
                            <li class="email text-light"> {{ $contact->email }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());

                        </script>
                        Daily Sun Pharmacoltd. All rights reserved
                    </p>
                    <p class="text-sm">Developed by <a style="text-decoration: none" href="https://wa.me/+2347063137059?text=Hi my name is Samuel, it's nice meeting you. How can I be of service to you?" target="_blank">Samuel</a></p>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('front/js/jquery-ui.js')}}"></script>
    <script src="{{asset('front/js/popper.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/aos.js')}}"></script>

    <script src="{{asset('front/js/main.js')}}"></script>
</body>
</html>

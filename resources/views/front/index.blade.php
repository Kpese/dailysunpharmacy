@extends('front.layout.app')

@section('content')


<div data-aos="fade-left" class="site-blocks-cover" style="background-image: url('front/images/hero_1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                <div class="site-block-cover-content text-center">
                    <h2 class="sub-title mb-3" style="font-size: 1.4rem">
                        Welcome to Daily Sun Pharmaceutical
                    </h2>
                    <h1 style="font-size: 2rem; color: rgb(255, 238, 0)">
                        We Provide an Exceptional Patient Experience.
                    </h1>
                    <!-- <p> Welcome, where exceptional patient  experiences are our priority.</p> -->
                    <a href="{{ route('front-contact') }}" class="btn btn-primary btn-sm mt-4">Reach out to us </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-section pt-5">
    <div class="container">

        <div class="row">
            <div class="col-md-7" data-aos="fade-right">
                <img src="{{ asset('front/images/why.jpg' )}}" class="rounded mb-4" alt="" width="100%" />
            </div>
            <div class="col-md-5">
                <p style="color: #fb923c; font-weight: 400;">ABOUT US</p>

                <h2 style="color: rgb(48, 48, 48)" class=>
                    Who are we?
                </h2>

                <p style="color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;">
                    Daily Sun Pharmaceutical Company limited is a limited liability Company that is engaged in the business of manufacturing and distribution of healthcare products with over 150 workers.
                    <br>
                    <br>
                    We have our manufacturing site in the industrial layout of Ogun State Nigeria; about 40km from the nearest international airport; Muritala Mohammed airport Lagos producing a wide range of ethical and over the counter (OTC) formulations (Anti-malaria, multivitamins Analgesic, Antitussives and Antioxidants) for human healthcare.

                </p>

                <a href="{{ route('about') }}">
                    <span class="btn btn-primary">Learn more </span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="why-section pt-5">
    <div class="container">

        <div class="row">
            <div class="col-md-7" data-aos="fade-right">
                <img src="{{ asset('front/images/about.jpg')}}" class="rounded mb-4" alt="" width="100%" />
            </div>
            <div class="col-md-5">
                <p style="color: #fb923c; font-weight: 400;">WHY CHOOSE US?</p>

                <h2 style="color: rgb(48, 48, 48)" class=>
                    We bring solutions to make life easier for our clients.
                </h2>

                <p style="color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;">
                    There are so many reasons why you should choose <span style="color: #01b18e;">Daily Sun Pharmaceutical</span> as your go to pharmacy, and here are some of the reasons:
                </p>
                <ul>

                    <li style="color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;""> Proper Customer Care </li>

                <li style=" color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;""> On Time Delivey Services </li>

                    <li style="color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;""> Legally & Medically Approved </li>

                <li style=" color: rgb(49, 49, 49); font-size: 16px; font-weight: 400;""> High Quality Products</li>

                </ul>

                <!-- <br>
               <a href="products.html" class="btn has-before">
                <span class="btn btn-primary btn-sm">Browse from our product line </span>
               </a> -->
            </div>

        </div>
    </div>
</div>

<section class="section stats" style="margin-top: 50px;" aria-label="stats">
    <div class="container">
        <p style="color: #fb923c; font-weight: 400;" class="text-center">OUR PROGRESS STAT</p>

        <h2 class="text-center text-dark fw-bold">
            What we've accoplished so far in the past years.
        </h2>
        <br>

        <div class="container-fluid">
            <div class="row" style="gap: 30px; justify-content: center; align-items: center; ">
                <div class="col-lg-3 col-md-6 col-sm-12 text-center pt-3 rounded" data-aos="fade-right" style="background-color: rgb(231, 239, 239);">
                    <h3 style="color: rgb(114, 118, 118); font-weight: 800;">850+</h3>
                    <p style="color: rgb(0, 0, 0); font-weight: 600;">
                        Successful Cases
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center pt-3 rounded  data-aos=" fade-right"" style="background-color: rgb(231, 239, 239);">
                    <h3 style="color: rgb(114, 118, 118); font-weight: 800;">750+</h3>
                    <p style="color: rgb(0, 0, 0); font-weight: 600;">
                        Satisfied Customers
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center pt-3 rounded" data-aos="fade-right" style="background-color: rgb(231, 239, 239);">
                    <h3 style="color: rgb(114, 118, 118); font-weight: 800;">150</h3>
                    <p style="color: rgb(0, 0, 0); font-weight: 600;">
                        Team Members
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 text-center pt-3 rounded" data-aos="fade-right" style="background-color: rgb(231, 239, 239);">
                    <h3 style="color: rgb(114, 118, 118); font-weight: 800;">99.9%</h3>
                    <p style="color: rgb(0, 0, 0); font-weight: 600;">
                        Satisfaction Rate
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="site-section bg-light" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">New Products</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel owl-theme">
                    @foreach ($product as $item)
                    <div class="card drug" style="width: 18rem; margin:0 auto">
                        <div class="p-3">
                          <span style="background-color: #fb923c; padding: 2px 10px; border-radius: 50px; color: rgb(0, 0, 0);">available</span>
                        </div>
                        <img class="card-img-top p-3" src="{{ asset('products/'.$item->image) }}"   alt="Title" />
                        <div class="card-body">
                          <div class="">
                            <h3 class="h3 text-center">
                              <a style="text-decoration: none" href="{{ route('store.single', $item->slug) }}" class="card-title text-dark ">{{ $item->name }}</a>
                            </h3>
                          </div>
                        </div>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('store') }}" class="btn btn-primary">view our products</a>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 no-direction owl-carousel">
                    @foreach ($testimony as $item)
                    <div class="testimony">
                        <blockquote>
                            <img src="{{ asset('testimonys/'.$item->image)}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle" />
                            <p>
                               {!! $item->quote !!}
                            </p>
                        </blockquote>

                        <p> {{$item->name}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

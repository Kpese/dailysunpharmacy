@extends('front.layout.app')

@section('content')

<div style="margin-bottom: 20px;" class="bg-dark">
    <div class=" py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a style="text-decoration: none" href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong>Store</strong></div>
        </div>
      </div>
    </div>
        <div class="text-center p-3">
          <h1  class="text-light pt-4 h1 hero-title">Our Products</h1>

        <p  class="text-light pb-2 hero-text">
            We Provide high quality medical products that are legally
            priscribed by some of the nation's most top-notch doctors.
        </p>
        </div>

      </div>

      <div style="margin-bottom: 50px; margin-top: 10px;">
          <p style="color:#fb923c;" class="text-center fs-4">Popular Products</p>

          <h3 class="text-center text-dark">Here are some of our popular products</h2>
      </div>

    <div class="container">
        <div class="row">
            @foreach ($product as $item)
          <div class="col-lg-4 col-md-6 col-sm-6 mb-4" data-aos="fade-down-right">
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
        </div>
        @endforeach

        <div class="mb-5 mt-2">
            {{ $product->links() }}
        </div>

      </div>
    </div>

    @endsection

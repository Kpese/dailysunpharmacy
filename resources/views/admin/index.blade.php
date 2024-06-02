
@extends('admin.layout.app')

@section('content')

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
            @if (session('success'))
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
               {{ session('success') }}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           @endif
          <div class="row">
            <!-- Sales Card -->
            <div class="col-lg-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">TOTAL PRODUCTS</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $product }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
          </div>
        </div>
        <!-- End Left side columns -->
      </div>
    </section>




      @endsection

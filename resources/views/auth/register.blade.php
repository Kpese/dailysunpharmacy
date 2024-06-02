@extends('front.layout.app')

@section('content')

<section  style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row">
              {{-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div> --}}
              <div class="col-12">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="{{ route('register') }}" method="post">
                    @csrf

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="name"  class="form-control form-control-lg" />
                        <label class="form-label">Name</label>
                      </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" name="email" class="form-control form-control-lg" />
                      <label class="form-label">Email address</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" />
                      <label class="form-label">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                    </div>

                    {{-- <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a> --}}
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection

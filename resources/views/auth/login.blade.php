@extends('front.layout.app')

@section('content')

<section  style="background-color: #9A616D;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row">
              <div class="col-12">
                @if (session('success'))
                <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                   {{ session('success') }}
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               @endif
                <div class="card-body p-4 p-lg-5 text-black">

                    <form action="{{ route('login') }}" method="post">
                     @csrf

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                     <div>
                        @error('email')
                        {{ $message }}
                      @enderror
                    </div>
                    </div>

                    <di data-mdb-input-init class="form-outline mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                     <div>
                        @error('password')
                      {{ $message }}
                    @enderror
                </div>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
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

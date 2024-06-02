@extends('admin.layout.app')

@section('content')

<section class="section">
    <div class="row">

      <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
           {{ session('success') }}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
       @endif

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Update Contact</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{ route('contact.update') }}" method="post">
                @csrf
                <div class="col-12">
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $contact->address }}">
                      </div>

                        <div class="col-12 mb-3">
                          <label for="inputNanme4" class="form-label fw-bold">Phone</label>
                          <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
                        </div>

                        <div class="col-12 mb-3">
                          <label class="form-label fw-bold">Email</label>
                          <input type="email" name="email" class="form-control" value="{{old('email', $contact->email ?? '') }}">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-bold">About Description</label>
                            <textarea name="description" rows="6" class="form-control">{{ $contact->description }}</textarea>
                          </div>
                </div>


              <div class="col-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary btn-md">Update Contact</button>
              </div>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection

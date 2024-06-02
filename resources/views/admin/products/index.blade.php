@extends('admin.layout.app')

@section('content')


<div class="col-12">
   @if (session('success'))
 <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="card">
        <div class="card-body">

            <h5 class="card-title">Table with stripped rows</h5>

            @livewire('search')

      </div>
    </div>

  </div>


@endsection

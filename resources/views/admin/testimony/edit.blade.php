@extends('admin.layout.app')

@section('content')

<section class="section">
    <div class="row">

        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create New Testimony</h5>

                    <form class="row g-3" action="{{ route('testimony.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" value="{{ $testimony->name }}" class="form-control">
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Image</label>
                                <input type="file" name="image" class="form-control">
                                <div class="mt-3">
                                    @if ($testimony->image)
                                    <img src="{{ asset('testimonys/'. $testimony->image) }}" width="70px" height="70px" alt="testimony picture">
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Quotes</label>
                                    <textarea name="quote" class="form-control tinymce-editor">{{ $testimony->quote }}</textarea>
                                </div>
                            </div>


                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-primary btn-md">Update Testimony</button>
                            </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>
    </div>
</section>

@endsection

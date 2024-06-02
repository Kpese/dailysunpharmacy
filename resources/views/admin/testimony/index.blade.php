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

<div>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">image</th>
      <th scope="col">quote</th>
      <th scope="col">Action</th>
      <th scope="col">Created Date</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($testimony as $item)
        <tr>
      <td>{{ $item->name }}</td>
      <td>
        @if ($item->image)
        <img src="{{ asset('testimonys/'.$item->image) }}" width="70px" height="70px" alt="testimony image">
        @endif
    </td>
      <td>{!! $item->quote !!}</td>
      <td>
        <form action="{{ route('testimony.delete', $item->id) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" onclick=" return confirm('Are you sure you want to delete user?')" class="btn btn-danger ms-1 btn-sm">Delete</button>
        </form>
       </td>
      <td>{{ $item->created_at->diffForHumans() }}</td>
    @empty
    <td>record is empty</td>
    </tr>

    @endforelse
  </tbody>
</table>
</div>

@endsection

<div>
    <div class="search-bar mb-4">

          <input wire:model.live.throttle.500ms="search" type="text" name="query" placeholder="Search" class="form-control">

      </div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">composition</th>
      <th scope="col">Dosage</th>
      <th scope="col">Storage</th>
      <th scope="col">Action</th>
      <th scope="col">Created Date</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($product as $item)
        <tr>
      <td>{{ $item->name }}</td>
      <td>{!! $item->description !!}</td>
      <td>
        @if ($item->image)
        <img src="{{ asset('products/'.$item->image) }}" width="70px" height="70px" alt="product image">
        @endif
    </td>
      <td>{!! $item->composition !!}</td>
      <td>{{ $item->dosage }}</td>
      <td>{{ $item->storage }}</td>
      <td>
        <form action="{{ route('product.delete', $item->id) }}" method="post">
        @method('delete')
        @csrf
        <a href="{{ route('product.edit', $item->slug) }}" class="btn btn-primary btn-sm">Edit</a><br> <br>
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

@extends('themplate_backend.home')
@section('sub-judul','Kategori')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>
@endif

<a href="{{ route('category.create')}}" class="btn btn-info btn-sm">Tambah kategori</a>
<br>
<br>
<table class="table table-striped table-hover table-sm table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category as $result => $hasil)
    <tr>
      <td>{{ $result + $category->firstitem() }}</td>
      <td>{{ $hasil->name }}</td>
      <td>
        <form action="{{ route('category.destroy', $hasil->id) }}" method="post">
          @csrf
          @method('delete')
          <a href="{{ route('category.edit', $hasil->id) }}" class="btn btn-primary">Edit</a>
           <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{ $category -> links() }}
@endsection

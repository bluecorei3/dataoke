@extends('themplate_backend.home')
@section('sub-judul','Kategori')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>
@endif

<a href="{{ route('kegiatan.create')}}" class="btn btn-info btn-sm">Tambah kategori</a>
<br>
<br>
<table class="table table-striped table-hover table-sm table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Name Kegiatan</th>
      <th>Contect</th>
      <th>Gambar</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kegiatan as $result => $hasil)
    <tr>
      <td>{{ $result + $kegiatan->firstitem() }}</td>
      <td>{{ $hasil->judul_kegiatan }}</td>
      <td>{{ $hasil->content_kegiatan }}</td>
      <td> <img src="{{ asset ($hasil->gambar_kegiatan)  }}" class="img-fluid" style="width:100px"> </td>
      <td>
        <form action="{{ route('kegiatan.destroy', $hasil->id) }}" method="post">
          @csrf
          @method('delete')
          <a href="{{ route('kegiatan.edit', $hasil->id) }}" class="btn btn-primary">Edit</a>
           <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{ $kegiatan -> links() }}
@endsection

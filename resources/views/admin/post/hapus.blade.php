@extends('themplate_backend.home')
@section('sub-judul','Post Recylce bin')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>
@endif


<table class="table table-striped table-hover table-sm table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Name Post</th>
      <th>Kategori</th>
      <th>List Post</th>
      <th>Gambar</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($post as $result => $hasil)
    <tr>
      <td>{{ $result + $post->firstitem() }}</td>
      <td>{{ $hasil->judul }}</td>
      <td>{{ $hasil->category->name }}</td>
      <td>@foreach($hasil->tags as $tag)
        <ul>
          <li>{{ $tag->name }}</li>
        </ul>
        @endforeach
      </td>

      <td> <img src="{{ asset ($hasil->gambar)  }}" class="img-fluid" style="width:100px"> </td>
      <td>
        <form action="{{ route ('post.kill', $hasil->id) }}" method="post">
          @csrf
          @method('delete')
          <a href="{{ route ('post.restore', $hasil->id ) }}" class="btn btn-primary">Restore</a>
           <button type="submit" class="btn btn-danger">Delete</button>
         </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{ $post -> links() }}
@endsection

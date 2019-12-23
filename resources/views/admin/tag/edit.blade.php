@extends('themplate_backend.home')
@section('sub-judul','Edit Tags')
@section('content')

  @if(count($errors)>0)
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
  <!-- Data Harus Diisi -->
  {{ $error }}
  </div>
  @endforeach
  @endif

  @if(Session::has('success'))
  <div class="alert alert-success" role="alert">
    {{ Session('success') }}
  </div>
  @endif


  <form action="{{ route ('tag.update', $tags->id) }}" method="POST">
   @csrf
   @method('patch')

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">

          <div class="card-body">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ $tags->name }}">
                </div>
                <div class="form-group">
                  <br><br><button class="btn btn-success btn-block">Update kategori</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection

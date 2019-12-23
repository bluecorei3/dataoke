@extends('themplate_backend.home')
@section('sub-judul_kegiatan','Edit Kegiatan')
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


  <form action="{{ route ('kegiatan.update', $kegiatan->id ) }}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PATCH')
  <!-- <div class="row"> -->
    <!-- <div class="col-12"> -->
    <div class="card-header">
      <div class="card">

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">judul_kegiatan</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" name="judul_kegiatan" value="{{ $kegiatan->judul_kegiatan }}">
                </div>
            </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">content_kegiatan</label>
                <div class="col-md-7">
                  <textarea class="form-control form-center" name="content_kegiatan">{{ $kegiatan->content_kegiatan }}</textarea>
                </div>
            </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">gambar_kegiatan</label>
                <div class="col-md-7">
                  <input type="file" name="gambar_kegiatan" class="form-control">
                </div>
            </div>
          <!-- </div> -->

              <div class="form-group">
                  <br><br><button class="btn btn-success btn-block">Edit kegiatan</button>
              </div>
        </div>
      </div>
    <!-- </div> -->
  <!-- </div> -->
</form>
@endsection

@extends('themplate_backend.home')
@section('sub-judul','Tambah Post')
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


  <form action="{{ route ('post.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
  <!-- <div class="row"> -->
    <!-- <div class="col-12"> -->
    <div class="card-header">
      <div class="card">



          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">judul</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" name="judul">
                </div>
            </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">category_id</label>
                <div class="col-md-7">
                  <select class="form-control" name="category_id">
                    <option value="" holder>Pilih Kategori</option>
                    @foreach ($category as $result)
                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
          <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">pilih tag</label>
                <div class="col-md-7">
              <select class="form-control select2" multiple="" name="tags[]">
                @foreach($tags as $tag)
                <option value="{{ $tag->id }}"> {{$tag->name }} </option>
                @endforeach
              </select>
              </div>
          </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">content</label>
                <div class="col-md-7">
                  <input type="text" class="form-control form-center" name="content">
                </div>
            </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">gambar</label>
                <div class="col-md-7">
                  <input type="file" name="gambar" class="form-control">
                </div>
            </div>
          <!-- </div> -->

              <div class="form-group">
                  <br><br><button class="btn btn-success btn-block">Simpan post</button>
              </div>
        </div>
      </div>
    <!-- </div> -->
  <!-- </div> -->
</form>
@endsection

@extends('themplate_backend.home')
@section('sub-judul','Edit Post')
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


  <form action="{{ route ('post.update', $post->id ) }}" method="POST" enctype="multipart/form-data">
   @csrf
   @method('PATCH')
  <!-- <div class="row"> -->
    <!-- <div class="col-12"> -->
    <div class="card-header">
      <div class="card">

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">judul</label>
                <div class="col-md-7">
                  <input type="text" class="form-control" name="judul" value="{{ $post->judul }}">
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
                    <option value="{{ $result->id }}"
                      @if($result->id== $post->category_id)
                      selected
                      @endif
                    >{{ $result->name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->

            <div class="form-group">
                <label>Pilih Tags</label>
                  <select class="form-control select2"multiple="" name="tags[]">
                  @foreach($tags as $tag)
                  <option value=" {{ $tag->id }} "
                    @foreach($post->tags as $value)
                    @if($tag->id == $value->id)
                    selected
                    @endif
                    @endforeach
                  >{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>
          <!-- </div> -->

          <!-- <div class="form-group card-body"> -->
            <div class="form-group">
              <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">content</label>
                <div class="col-md-7">
                  <textarea class="form-control form-center" name="content">{{ $post->content }}</textarea>
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
                  <br><br><button class="btn btn-success btn-block">Edit post</button>
              </div>
        </div>
      </div>
    <!-- </div> -->
  <!-- </div> -->
</form>
@endsection

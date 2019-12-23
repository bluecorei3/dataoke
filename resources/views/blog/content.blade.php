<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  @include('blog.head')
  </head>
  <body>

    <!-- Start Header Area -->
    <header class="default-header">
      <nav class="navbar navbar-expand-lg  navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <img src="{{ asset('temahome/img/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
              <ul class="navbar-nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#service">Profile</a></li>
              <li><a href="#project">Kegiatan</a></li>
              <li><a href="#blog">Artikel</a></li>
              <li><a href="#team">Lembaga Gampong</a></li>
               <!-- Dropdown -->
                <li class="dropdown">
                  <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Data Gampong
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="generic.html">Keuangan</a>
                    <a class="dropdown-item" href="elements.html">Pembangunan</a>
                  </div>
                </li>
                <li><a href="{{ route ('login')}}">Login</a></li>
              </ul>
            </div>
        </div>
      </nav>
    </header>
    <!-- End Header Area -->


    <!-- start blog Area -->
        <section class="blog-area section-gap" id="blog">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                  <h1 class="mb-10">Postingan Terbaru</h1>
                  <p>Sumber informasi tentang Gampong Meunasah Masjid</p>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- section -->
            	<div class="section">
            		<!-- container -->
            		<div class="container">
            			<!-- row -->
            			<div class="row">
            				<div class="col-md-15">

            					<!-- /post share -->

            					<!-- post content -->
            					<div class="section-row">
                        @yield('isi')
                        @foreach($data as $post_terbaru)
            						<h3>{{ $post_terbaru->judul}}</h3><br>
                        <p>{{ $post_terbaru->created_at->diffForHumans()}}</p>
            						<figure class="pull-right">
            							<img src="{{ asset ($post_terbaru-> gambar)}}" alt="" class="img-fluid" style="height: 450px">
                          <br><br><h4><figcaption>{{ $post_terbaru->category->name}}</figcaption></h4><br>
                        </figure>
                        <br><br><p>{{ $post_terbaru->content}}</p>
                        <br><br>
            					</div>
            					</div>
                      @endforeach
            					<!-- /post content -->
                    </div>
            			<!-- /row -->
            		</div>
            		<!-- /container -->
              </div>
            </div>
          </div>
        </section>
        <!-- end blog Area -->

    @include('blog.foother')
  </body>
</html>

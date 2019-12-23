<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('temahome/img/fav.png')}}">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>WEB SID Gampong Meunasah Masjid</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset ('temahome/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset ('temahome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('temahome/css/jquery.DonutWidget.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('temahome/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('temahome/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset ('temahome/css/main.css') }}">
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

    <!-- start banner Area -->
    <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset('temahome/img/header-bg.jpg')}}">
      <div class="overlay-bg overlay"></div>
      <div class="container">
        <div class="row fullscreen  d-flex align-items-center justify-content-end">
          <div class="banner-content col-lg-6 col-md-12">
            <h1>
              <span> Selamat datang di Gampong Meunasah Masjid </span>
            </h1>
            <a href="#" class="primary-btn2 header-btn text-uppercase">Lihat Profile Desa</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->
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
            @foreach($data as $post_terbaru)
              <div class="col-lg-3 col-md-6 single-blog">
                <a class="post-img" href="{{ route('blog.isi', $post_terbaru->slug) }}">
                <img class="img-fluid" src="{{ $post_terbaru->gambar}}" alt="" style="height: 200px"></a>
                <p>{{ $post_terbaru->users->name}}

                </p>
                <h4><a href="#">{{ $post_terbaru->judul}}</a></h4>
                <div class="meta-bottom d-flex justify-content-between">
                  <ul class="post-meta">
                    <li> <a href="#"></a></li>
                    <li> <a href="#">{{ $post_terbaru->category->name}}</a></li>
                    <li>{{ $post_terbaru->created_at->diffForHumans()}}</li>
                  </ul>
                  <!-- <p><span class="lnr lnr-heart"></span> 15 Likes</p> -->
                  <!-- <p><span class="lnr lnr-bubble"></span> 02 Comments</p> -->
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </section>
        <!-- end blog Area -->

        <!-- start service Area-->
        <section class="service-area pt-100 pb-150" id="service">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                  <h1 class="mb-10">Profile Desa</h1>
                  <p>Meunasah Masjid Gampong didirikan tahun bla bla</p>
                </div>
              </div>
            </div>
            <!-- <div class="row">
              <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-rocket"></span>
                <h4>Easy Flight Search</h4>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
              </div>
              <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-magic-wand"></span>
                <h4>Get Hotel Offers</h4>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
              </div>
              <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-gift"></span>
                <h4>Holiday Packages</h4>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
              </div>
              <div class="sigle-service col-lg-3 col-md-6">
                <span class="lnr lnr-phone"></span>
                <h4>Dedicated Support</h4>
                <p>
                  inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">View Details</a>
              </div> -->

            </div>
          </div>
        </section>
        <!-- end service Area-->


    <!-- Start About Area -->
    <section class="about-area">
      <div class="container-fluid">
        <div class="row justify-content-end align-items-center d-flex no-padding">
          <div class="col-lg-6 about-left mt-70">
            <h1>We can be your digital <br>
            Problems Solution Partner</h1>
            <p>
              inappropriate behavior is often laughed off as “boys will be <br> boys,” women face higher conduct standards especially <br> in the workplace. That’s why it’s crucial that, as women, our <br> behavior on the job is beyond reproach.
            </p>
            <div class="buttons">
              <a href="#" class="about-btn text-uppercase primary-border circle">What we offer</a>
              <a href="#" class="about-btn text-uppercase  primary-border circle">Get a free quote</a>
            </div>
          </div>
          <div class="col-lg-6 about-right">
            <img class="img-fluid" src="{{ asset('temahome/img/about.png')}}" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- End About Area -->


    <!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest Project on the go</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-works-carousel mt-40">
              @foreach($data as $post_terbaru)

							<div class="item">
								<img class="img-fluid" src="{{ $post_terbaru->kegiatan_desa->gambar_kegiatan}}" alt="">
								<div class="caption text-center mt-20">
									<h6 class="text-uppercase">Vector Illustration</h6>
									<p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have <br> allowed humanity to create slimmer, more portable technology.</p>
								</div>
							</div>
              @endforeach

						</div>
					</div>
				</div>
			</section>
			<!-- End project Area -->

    <!-- Start team Area -->
    <section class="team-area section-gap" id="team">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">About Creative Agency Team</h1>
              <p>Who are in extremely love with eco friendly system.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
          <div class="col-md-3 single-team">
              <div class="thumb">
                  <img class="img-fluid" src="{{ asset('temahome/img/t1.jpg')}}" alt="">
                  <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
              <div class="meta-text mt-30 text-center">
                <h4>Ethel Davis</h4>
                <p>Managing Director (Sales)</p>
              </div>
          </div>
          <div class="col-md-3 single-team">
              <div class="thumb">
                  <img class="img-fluid" src="{{asset('temahome/img/t2.jpg')}}" alt="">
                  <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
              <div class="meta-text mt-30 text-center">
                <h4>Rodney Cooper</h4>
                <p>Creative Art Director (Project)</p>
              </div>
          </div>
          <div class="col-md-3 single-team">
              <div class="thumb">
                  <img class="img-fluid" src="{{asset('temahome/img/t3.jpg')}}" alt="">
                  <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
              <div class="meta-text mt-30 text-center">
                <h4>Dora Walker</h4>
                <p>Senior Core Developer</p>
              </div>
          </div>
          <div class="col-md-3 single-team">
              <div class="thumb">
                  <img class="img-fluid" src="{{asset('temahome/img/t4.jpg')}}" alt="">
                  <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                  </div>
              </div>
              <div class="meta-text mt-30 text-center">
                <h4>Lena Keller</h4>
                <p>Creative Content Developer</p>
              </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End team Area -->


    <!-- Start testimonial Area -->
    <section class="testimonial-area relative section-gap">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row">

        </div>
      </div>
    </section>
    <!-- End testimonial Area -->





    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-12">
            <div class="single-footer-widget">
              <h6>Top Products</h6>
              <ul class="footer-nav">
                <li><a href="#">Managed Website</a></li>
                <li><a href="#">Manage Reputation</a></li>
                <li><a href="#">Power Tools</a></li>
                <li><a href="#">Marketing Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6  col-md-12">
            <div class="single-footer-widget newsletter">
              <h6>Newsletter</h6>
              <p>You can trust us. we only send promo offers, not a single spam.</p>
              <div id="mc_embed_signup">
                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                  <div class="form-group row" style="width: 100%">
                    <div class="col-lg-8 col-md-12">
                      <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                      <div style="position: absolute; left: -5000px;">
                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                      <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-12">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instragram Feed</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="{{asset('temahome/img/i1.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i2.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i3.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i4.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i5.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i6.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i7.jpg')}}" alt=""></li>
                <li><img src="{{asset('temahome/img/i8.jpg')}}" alt=""></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{asset('temahome/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{asset('temahome/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('temahome/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('temahome/js/parallax.min.js')}}"></script>
    <script src="{{asset('temahome/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('temahome/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('temahome/js/jquery.DonutWidget.min.js')}}"></script>
    <script src="{{asset('temahome/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('temahome/js/main.js')}}"></script>
  </body>
</html>

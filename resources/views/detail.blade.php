<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>CV.ASAWIDIANTARA</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('lp/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/color-switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ asset('lp/css/main.css') }}">    
    <link rel="stylesheet" href="{{ asset('lp/css/responsive.css') }}">

  </head>
  <style>
    .nav {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.nav-item {
    margin-right: 20px;
}

.nav-link {
    text-decoration: none;
    color: #333;
}

/* Gaya submenu */
.submenu {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.submenu a {
    color: #333;
    padding: 12px 16px;
    display: block;
    text-decoration: none;
}

/* Menampilkan submenu saat mouse berada di atas elemen "Contact Us" */
#contact-item:hover .submenu {
    display: block;
}
  </style>
  <body>
    <!-- Header Section Start -->
    <header id="dashboard">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-dark">
        <div class="container">          
          <a class="navbar-brand" href="/"><img src="{{ asset('lp/img/logo.png') }}" alt="Logo Asa Widiantara" height="40" width="40"></span>CV.ASAWIDIANTARA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">About Us</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Layanan & Jasa</a>
                </li>                            
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">History Project</a>
                </li>            
                {{-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#anggaran">Data Anggaran</a>
                </li>  --}}
                <li class="nav-item" id="contact-item">
                  <a class="nav-link page-scroll" href="#contact">Contact Us</a>
                  <div class="submenu">
                      <!-- Tambahkan item-item lain di sini -->
                      <a href="https://wa.me/01370708716">WhatsApp</a>
                      <a href="https://mail.google.com/mail/?view=cm&to=asawidiantara@gmail.com">Email</a>
                  </div>
              </li>
            </ul>              
          </div>
        </div>
      </nav> 

      <!-- Main Carousel Section -->

    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->

    <section id="about" class="section">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">{{ $history->nama }}</h2>
            <span>Deskripsi</span>
          </div>
          <div class="container marketing">

            <!-- Three columns of text below the carousel -->
        
        
            <!-- START THE FEATURETTES -->
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1"></h2>
                <p class="justify-content-between">{{ $history->deskripsi }}</p>
              </div>
              <div class="col-md-5">
                <img src="{{ asset('storage/' . $history->foto) }}" alt="" width="500" height="500"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
            <hr class="featurette-divider">
          </div><!-- /.container -->
        </div>
    </section>

    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <img src="{{ asset('lp/img/logo.png') }}" alt="">
              <div class="textwidget">
                <p>CV Asa Widiantara handles every project
                  with detail, high dedication and priority on quality.</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Short Link</h3>
                <ul class="menu">
                  <li><a href="#">Layanan & Jasa</a></li>
                  <li><a href="#">History Project</a></li>
                  <li><a href="#">Data Anggaran</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Address :</strong> <span>Perumahan Graha Indah Mandiri No. 81, Desa/ Kelurahan Namo Mbelin, Kec. Namorambe, Kab. Deli Serdang, Provinsi Sumatera Utara</span>
                  </li>
                  <li>
                    <strong>Phone :</strong> <span>+6213 7070 8716</span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="#">asawidiantara@gmail.com</a></span>
                  </li>
                </ul> 
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Gallery</h3>
                <ul class="instagram-footer">
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta1.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta2.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta3.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta4.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta5.jpeg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ asset('lp/img/instagram/insta6.jpeg') }}" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>Crafted by <a href="https://pcr.ac.id/" rel="nofollow">Politeknik Caltex Riau</a></p>
              </div>              
              <div class="float-right">  
                <ul class="nav nav-inline">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">About Prime</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Return Policy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{ asset('lp/js/jquery-min.js') }}"></script>
    <script src="{{ asset('lp/js/popper.min.js') }}"></script>
    <script src="{{ asset('lp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lp/js/classie.js') }}"></script>
    <script src="{{ asset('lp/js/color-switcher.js') }}"></script>
    <script src="{{ asset('lp/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('lp/js/nivo-lightbox.js') }}"></script>
    <script src="{{ asset('lp/js/owl.carousel.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.stellar.min.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.nav.js') }}"></script>    
    <script src="{{ asset('lp/js/scrolling-nav.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.easing.min.js') }}"></script>     
    <script src="{{ asset('lp/js/wow.js') }}"></script> 
    <script src="{{ asset('lp/js/jquery.vide.js') }}"></script>
    <script src="{{ asset('lp/js/jquery.counterup.min.js') }}"></script>    
    <script src="{{ asset('lp/js/jquery.magnific-popup.min.js') }}"></script>    
    <script src="{{ asset('lp/js/waypoints.min.js') }}"></script>    
    <script src="{{ asset('lp/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('lp/js/contact-form-script.js') }}"></script>   
    <script src="{{ asset('lp/js/main.js') }}"></script>
  </body>
</html>
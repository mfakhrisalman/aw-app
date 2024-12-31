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

        /* Efek hover untuk submenu item */
        #contact-item .submenu a:hover {
            background-color: #EA752C;
            color: white;
        }
.custom-card {
    width: 100%;
    height: 200px; /* Sesuaikan dengan tinggi yang diinginkan */
    overflow: hidden;
    position: relative;
}
.custom-item {
    width: 100%;
    height: 170px; /* Sesuaikan dengan tinggi yang diinginkan */
    overflow: hidden;
    position: relative;
}

.custom-image {
    width: 100%;
    height: auto;
    object-fit: cover;
}
  </style>
  <body>
    <!-- Header Section Start -->
    <header id="dashboard">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-dark">
        <div class="container">          
          <a class="navbar-brand" href="/"><img src="lp/img/logo.png" alt="Logo Asa Widiantara" height="40" width="40"></span>CV.ASAWIDIANTARA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">About Us</a>
                </li>  
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Layanan & Jasa</a>
                </li>                            
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#blog">History Project</a>
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
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="lp/img/slider/1.jpg" alt="" height="650 pixels" width="2560 pixels">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">HELLO</h1>  
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">SELAMAT DATANG</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">Website CV. ASA WIDIANTARA</h4>
                <a href="#services" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Get Started!</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="lp/img/slider/2.jpg" alt="" height="650 pixels" width="2560 pixels">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s"></h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">ABOUT US</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s"></h4>
                <a href="#about" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="lp/img/slider/3.jpg" alt="" height="650 pixels" width="2560 pixels">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Ready For</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">HISTORY PROJECT</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"></h4>
                <a href="#blog" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">GO</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->

    <section id="about" class="section">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">About Us</h2>
            <span>Tentang Kami</span>
          </div>
          <div class="container marketing">

            <!-- Three columns of text below the carousel -->
        
        
            <!-- START THE FEATURETTES -->
        
        
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Sejarah <span class="text-muted">Kami</span></h2>
                <p class="justify-content-between">CV Asa Widiantara, kontraktor utama di Indonesia, didirikan pada Oktober 2022. Kami ahli dalam proyek konstruksi komersial, menyediakan manajemen proyek di seluruh Republik Indonesia. Memberikan masukan desain dan solusi teknik, fokus kami adalah tepat waktu dan kualitas tinggi untuk kepuasan klien. Setiap proyek kami tangani dengan detail dan dedikasi, menciptakan mahakarya sesuai keinginan klien.</p>
              </div>
              <div class="col-md-5">
                <img src="{{ asset('lp/img/g1.jpg') }}" alt="" width="500" height="500"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
        
            <hr class="featurette-divider">
        
            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                {{-- <h2 class="fw-normal lh-1">kontrak<span class="text-muted">tor</span></h2> --}}
                <p class="">CV Asa Widiantara didirikan pada Oktober 2022 sebagai kontrak nasional perusahaan yang menawarkan jasa konstruksi mengambil peran kontraktor utama. Sebagai salah satu bangsa Indonesia berskala besar kontraktor, CV Asa Widiantara memiliki kompetensi untuk mengerjakan proyek konstruksi struktural dan arsitektur bangunan  komersial dan melakukan manajemen proyek layanan untuk mengkoordinasikan perdagangan spesialis untuk proyek komersial/industri seluruh wilayah Republik Indonesia.
                    Kita juga memberikan masukan desain dan solusi teknik sebagai nilai tambah layanan kepada klien kami.Fokus pada ketepatan waktu untuk menyelesaikan tinggi proyek berkualitas untuk kepuasan klien. Kita memahami setiap klien memiliki kebutuhan khusus dan tujuan. Hal ini membuat setiap proyek unik; Jadi CV Asa Widiantara menangani setiap proyek dengan detail, dedikasi tinggi dan prioritas pada kualitas. Jadi hasil akhirnya adalah mahakarya, perwujudan keinginan klien kami.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img src="lp/img/g3.jpg" alt="" width="400" height="300"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
        
            <hr class="featurette-divider">
        
            <div class="row ">
              <div class="col-md-7">
                <h1 class="">Visi</h1>
                <p class="">Menjadi kontraktor nasional terkemuka dan menjadi pilihan utama para klien.</p>
                <h1>Misi</h1>
                <p class="">1. Memberikan kepuasan kepada klien melalui penyelesaian proyek yang 
                    berkualitas tinggi, sesuai dengan anggaran dan waktu yang telah disepakati
                    
                    </p>
                <p>2. Menjadi perusahaan yang professional kompeten dan kredibel</p>
                <p>3. Menjadi perusahaan konstruksi yang mampu berdaya saing global</p>
              </div>
              <div class="col-md-5">
                <img src="lp/img/g2.jpg" alt="100" width="500" height="200"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
              </div>
            </div>
        
            <hr class="featurette-divider">
        
            <!-- /END THE FEATURETTES -->
        
          </div><!-- /.container -->
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->

    {{-- <section class="testimonial section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="testimonials" class="touch-slider owl-carousel">
                <div class="item">
                  <div class="testimonial-item">
                    <div class="author">
                      <div class="lp/img-thumb">
                      <img src="lp/img/testimonial/img1.jpg" alt="">
                      </div>
                      <div class="author-info">
                        <h2><a href="#">Johnathan Doe</a></h2>
                        <span>Marketing Head Matrix media</span>
                      </div>
                    </div>
                    <div class="content-inner">
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star"></i></span>
                      <span><i class="lni-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="author">
                      <div class="lp/img-thumb">
                      <img src="lp/img/testimonial/img2.jpg" alt="">
                      </div>
                      <div class="author-info">
                        <h2><a href="#">Oidila Matik</a></h2>
                        <span>President Lexo Inc</span>
                      </div>
                    </div>
                    <div class="content-inner">
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="author">
                      <div class="lp/img-thumb">
                      <img src="lp/img/testimonial/img3.jpg" alt="">
                      </div>
                      <div class="author-info">
                        <h2><a href="#">- Alex Dattilo</a></h2>
                        <span>CEO Optima Inc</span>
                      </div>
                    </div>
                    <div class="content-inner">
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star"></i></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="author">
                      <div class="lp/img-thumb">
                      <img src="lp/img/testimonial/img2.jpg" alt="">
                      </div>
                      <div class="author-info">
                        <h2><a href="#">Oidila Matik</a></h2>
                        <span>President Lexo Inc</span>
                      </div>
                    </div>
                    <div class="content-inner">
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="author">
                      <div class="lp/img-thumb">
                      <img src="lp/img/testimonial/img1.jpg" alt="">
                      </div>
                      <div class="author-info">
                        <h2><a href="#">- Alex Dattilo</a></h2>
                        <span>CEO Optima Inc</span>
                      </div>
                    </div>
                    <div class="content-inner">
                      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star"></i></span>
                      <span><i class="lni-star"></i></span>
                      <span><i class="lni-star"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section> --}}
    <!-- Call to Action End -->

    <!-- Features Section Start -->
    <section id="services" class="section">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Layanan & Jasa</h2>
            <span>Services</span>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon color-1">
                  <i class="lni-pencil"></i>
                </div>
                <h4>Konstruksi Gedung Hunian</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
                <div class="icon color-2">
                  <i class="lni-cog"></i>
                </div>
                <h4>Instlasi Listrik & Mekanikal</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
                <div class="icon color-3">
                  <i class="lni-stats-up"></i>
                </div>
                <h4>Perdagangan Suku Cadang Elektronik</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
                <div class="icon color-4">
                  <i class="lni-layers"></i>
                </div>
                <h4>Konstruksi Bangunan Sipil Elektrical</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
                <div class="icon color-5">
                  <i class="lni-tab"></i>
                </div>
                <h4>Angkutan Bermotor Untuk Barang Umum</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
                <div class="icon color-6">
                  <i class="lni-briefcase"></i>
                </div>
                <h4>Perdagangan Besar Material Bangunan</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Features Section End -->    


    <!-- Call To Action Section Start -->
    <section id="cta" class="section" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">            
            <div class="cta-text">
              <h5> CONSTRUCTION CORPORATION</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Section Start -->


    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">History Project</h2>
          <span>Riwayat</span>
        </div>
        <div class="row">
          @foreach ($histories as $history)
    <!-- Blog Item Starts -->
    <div class="col-lg-4 col-md-6 col-xs-12 blog-item mb-3">
        <div class="blog-item-wrapper">
            <div class="blog-item-img">
                <a href="{{ route('detail', ['id' => $history->id]) }}">
                    <div class="custom-card">
                        <img src="{{ asset('storage/' . $history->foto) }}" alt="History Image" class="img-fluid custom-image">
                    </div>
                </a>                
            </div>
            <div class="blog-item-text custom-item" > 
                <div class="date"><i class="lni-calendar"></i>{{ $history->tanggal }}</div>
                <h3><a href="{{ route('detail', ['id' => $history->id]) }}">{{ $history->nama }}</a></h3>
                <div class="meta-tags">
                    <span>{{ $history->alamat }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach

  </div>
  
  <!-- Menampilkan link paginasi -->
  <div class="d-flex justify-content-end">
    {{ $histories->links() }}

</div>
      </div>
    </section>
    <!-- blog Section End -->


    {{-- <hr class="featurette-divider"> --}}

    <!-- Contact Section Start -->
    {{-- <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <span>Contact</span>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.</p>
          </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    <i class="lni-map"></i>
                    <h5>Location</h5>
                    <p>Perumahan Graha Indah Mandiri No. 81, Desa/ Kelurahan Namo Mbelin, Kec. Namorambe, Kab. Deli Serdang, Provinsi Sumatera Utara</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-star"></i>
                    <h5>E-mail</h5>
                    <p>asawidiantara@example.com</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-phone"></i>
                    <h5>Phone</h5>
                    <p>+6213 7070 8716</p>
                  </div>
                  <!-- Icon -->
                  <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section> --}}
    <!-- Contact Section End -->
    
    <!-- Clients Section -->
    <div id="clients" class="section">
        <!-- Container Ends -->
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Our Client</h2>
          <!-- Row and Scroller Wrapper Starts -->
          <div class="row" id="clients-scroller">
            <div class="client-item-wrapper">
              <img src="lp/img/client.png" alt="" width="100px">
            </div>
            <div class="client-item-wrapper">
              <img src="lp/img/client2.png" alt="" width="100px">
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Client Section End --> 

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <img src="lp/img/logo.png" alt="">
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
                  <li><a href="#"><img src="lp/img/instagram/insta1.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta2.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta3.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta4.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta5.jpeg" alt=""></a></li>
                  <li><a href="#"><img src="lp/img/instagram/insta6.jpeg" alt=""></a></li>
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
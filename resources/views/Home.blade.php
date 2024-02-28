<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- nama website -->
      <title>Velvet Valley Hotel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Pada Baris ini digunakan untuk menimport library dari bootstrap -->
      <link rel="stylesheet" href="{{ ('/assets/css/bootstrap.min.css ') }}" >
      <!-- Pada Baris ini digunakan untuk menimport library dari external bootstrap -->
      <link rel="stylesheet" href="{{ ('/assets/css/style.css ') }}">
      <!-- Pada Baris ini digunakan untuk menimport library dari external bootstrap-->
      <link rel="stylesheet" href="{{ ('/assets/css/responsive.css') }}">
      <!-- Pada Baris ini digunakan untuk menimport library dari favicon  -->
      <link rel="icon" href="{{ ('/assets/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ ('/assets/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{ ('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ ('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- Pada Baris ini digunakan untuk menampilkan header   -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ url('/') }}"><img src="{{ ('/assets/images/logo.png') }}"  style= "height:60px "  alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ url('/') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/About') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/Room') }}">Our room</a>
                              </li>
                              <li class="nav-item , book_btn">
                                 <a class="nav-link" style = "position: relative; top:10px" href="{{ url('/PesanKamar') }}">Book Now!</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- Pada Baris ini digunakan untuk menampilkan banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active" style="weight:100px;">
                  <img class="first-slide" src="{{ ('/assets/images/banner1.jpg') }}" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="{{ ('/assets/images/banner2.jpg') }}" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="{{ ('/assets/images/banner3.jpg') }}" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         
         </div>
      </section>
      <!-- end banner -->
      <!-- Pada Baris ini digunakan untuk menampilkan About -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p style="text-align: justify;">
                     Selamat datang di Velvet Valley Hotel, destinasi istimewa yang menggabungkan kemewahan dan kenyamanan untuk pengalaman menginap tak terlupakan. 
                     Terletak di tengah-tengah pemandangan alam yang menakjubkan, hotel ini menawarkan kemewahan modern dengan sentuhan tradisional yang hangat.
                     </p>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="{{ ('/assets/images/about.png') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- Pada Baris ini digunakan untuk menampilkan tipe kamar-->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
               @foreach ($DataHarga as $Dataharga)
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover" class="room">
                     <div class="room_img">
                        <figure>
                           <video width="100%" height="auto" controls>
                              <source src="{{ asset('/assets/video/' . ($loop->index + 1) . '.mp4') }}" type="video/mp4">
                           </video>
                        </figure>
                     </div>
                     <div class="bed_room">
                        <h3>{{ $Dataharga->tipe_kamar }}</h3>
                        <p>Rp{{ $Dataharga->harga }}</p>
                     </div>
                  </div>
               </div>
            @endforeach
               </div>
            </div> 
         </div>
      </div>
      <!-- end our_room -->
      <!--  Pada Baris ini digunakan untuk menampilkan footer-->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Purwokerto</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i>081235456856</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> reservasi@velvetvalleyhotel.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about.html"> about</a></li>
                        <li><a href="room.html">Our Room</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2024 All Rights Reserved. Design by <a href="https://html.design/"> Alfardhan Aditya Resna</a>
                        <br><br>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Pada Baris ini digunakan untuk menimport library dari JavaScript dan Bootstrap -->
      <script src="{{ ('/assets/js/jquery.min.js') }}"></script>
      <script src="{{ ('/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ ('/assets/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ ('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ ('/assets/js/custom.js') }}"></script>

   </body>
</html>
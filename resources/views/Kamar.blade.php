<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- Pada Baris ini digunakan untuk menampikan nama websitenya -->
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
      <!-- Pada Baris ini digunakan untuk menimport library chart untuk menampilkan chart -->
      <script src="{{ ('https://cdn.jsdelivr.net/npm/chart.js') }}"></script>

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{ ('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ ('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- Pada Baris ini digunakan untuk menampilkan header dan navbar-->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{url('/')}}"><img src="{{ ('/assets/images/logo.png') }}"  style= "height:60px " alt="#" /></a>
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
                              <li class="nav-item ">
                                 <a class="nav-link" href="{{ url('/') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/About') }}">About</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ url('/Room') }}">Our room</a>
                              </li>
                              <li class="nav-item , book_btn">
                                 <a class="nav-link" style = "position: relative; top:10px"  href="{{ url('/PesanKamar') }}">Book Now!</a>
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
      <!-- Pada Baris ini digunakan untuk menampilkan kamar  -->
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Our Room</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <p  class="margin_0"> </p>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
               @foreach ($DataHarga as $Data)
                  <div class="col-md-4 col-sm-6">
                     <div id="serv_hover" class="room">
                           <div class="room_img">
                              <figure><img src="{{ asset('/assets/images/room' . $loop->index + 1 . '.jpg') }}" alt="#"/></figure>
                           </div>
                           <div class="bed_room">
                              <h3>{{ $Data->tipe_kamar }}</h3>
                              <p>Rp{{ $Data->harga }}</p>
                           </div>
                     </div>
                  </div>
               @endforeach
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
     
      <!--  Pada Baris ini digunakan untuk menampilkan Chart -->
      <div class="chart-container">
         <h1 class="mt-4 mb-4">Grafik Tipe Kamar Yang Paling Sering Dipesan</h1>
         <div class="chart-container">
         <canvas id="grafikPemesanan" width="800" height="400"></canvas>
         </div>
     </div>
      <!-- end Chart -->

      <!--  Pada Baris ini digunakan untuk menampilkan footer -->
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
      <!-- Pada Baris ini digunakan untuk menimport library dari external javascript-->
      <script src="{{ ('/assets/js/jquery.min.js') }}"></script>
      <script src="{{ ('/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ ('/assets/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js') }}"></script>
      <!-- Pada Baris ini digunakan untuk menimport library dari external javascript -->
      <script src="{{ ('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ ('/assets/js/custom.js') }}"></script>
      <!-- Pada Baris ini digunakan untuk menampilkan grafik -->
      <script>
        document.addEventListener('DOMContentLoaded', function () {
        fetch('/grafik-pemesanan')
        .then(response => response.json())
        .then(data => {
            console.log(data);  // Check the received data in the console 
            let labels = data.map(item => item.tipe_kamar);
            let values = data.map(item => item.jumlah);

            let ctx = document.getElementById('grafikPemesanan').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Pemesanan',
                        data: values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
   });
    </script>

   </body>
</html>
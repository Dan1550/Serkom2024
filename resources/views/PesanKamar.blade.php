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
      <!-- Pada Baris ini digunakan untuk menyesuaikan tampilan scrollbar -->
      <link rel="stylesheet" href="{{ ('/assets/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Pada Baris ini digunakan untuk Penyesuaian untuk Internet Explorer versi lama -->
      <link rel="stylesheet" href="{{ ('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ ('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
      <link rel="stylesheet" href="{{ ('https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css') }}">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- Pada Baris ini digunakan untuk menampilkan header dan navbar  -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{url('/')}}"><img src="{{ ('/assets/images/logo.png') }}"  style= "height:60px"  alt="#" /></a>
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
      <!-- Pada Baris ini digunakan untuk menampilkan kamar  -->
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Form Pemesanan</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
               <form class="main_form" method="post" action="{{ route('PesanKamar.action') }}">
                  
                  @csrf

                  @if($errors->any())
                  @foreach($errors->all() as $err)
                  <p class="alert alert-danger">{{ $err }}</p>
                  @endforeach
                  @endif
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nama Pemesan" type="type" name="nama"> 
                        </div>
                        <div class="col-md-8 contactusradio">
                           <div style="position: relative; top: 13px;">
                           <label >Jenis Kelamin:</label>
                           <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                           <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                           </div>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Nomor Identitas" type="text" name="nomorid" id="nomorid" oninput="validateNumberInput(this)">
                        </div>
                        <div class="col-md-12">
                           <label style="color: #000000; font-size: 18px; font-weight: normal;">Tipe Kamar:</label>
                           <select id="tipe_kamar" class="contactus" name="tipe_kamar">
                              <option value="">Pilih Kamar</option>
                              @foreach ($DataHarga as $Tipe_kamar)
                                    <option value="{{ $Tipe_kamar->tipe_kamar }}">{{ $Tipe_kamar->tipe_kamar }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Harga" type="type" name="harga" id="harga" readonly>
                        </div>

                        <div class="col-md-12">
                           <input class="contactusTglPesan" placeholder="Tanggal Pesan" type="date" name="tanggal_pesan">
                        </div>

                        <div class="col-md-12">
                           <input class="contactus" placeholder="Durasi Menginap" name="durasi" id="durasi">
                        </div>

                        <div class="col-md-12">
                           <label class="contactus checkbox"> Termasuk Breakfast <input type="checkbox" name="termasuk_menginap" id="termasuk_menginap"> Ya</label>
                        </div>

                        <div class="col-md-12">
                           <input class="contactus" placeholder="Total Bayar" name="total_bayar" id="total_bayar">
                        </div>

                        <div class="row">
                           
                           <div class="col-md-4">
                              <button class="send_btn" type="submit">Send</button>
                           </div>
                        </div>

                     </div>
                  </form>
                  <div class="col-md-6" style="padding-top: 25px; position: relative; right: 30px;" >
                  <button  style="background-color: #000000; text-transform: uppercase; color: #fff; 
                                 padding: 10px 0px; width: 200px; display: block;  border-radius: 40px; " 
                  onclick="hitungTotalBayar()">Hitung Total Bayar</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
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
     <!-- Pada Baris ini digunakan untuk menimport library dari external javascript -->
      <script src="{{ ('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <script src="{{ ('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>
      <script>
         // Inisialisasi flatpickr pada input dengan class "contactus"
         flatpickr(".contactusTglPesan", {
            dateFormat: "d-m-Y", // Format tanggal yang diinginkan
            allowInput: true, // Memungkinkan input langsung tanpa kalender
         });
      </script>

      <script>
         var tipeKamarSelect = document.getElementById('tipe_kamar');
         var hargaInput = document.getElementById('harga');
         var durasiInput = document.getElementById('durasi');
         var termasukBreakfastInput = document.getElementById('termasuk_menginap');
         var totalBayarInput = document.getElementById('total_bayar');

         // Assume $DataHarga is a PHP variable containing price data, make sure it's defined before this script runs

         tipeKamarSelect.addEventListener('change', function () {
            updateHarga(); // Call the function to update the price when the room type changes
         });

         durasiInput.addEventListener('input', function () {
            hitungTotalBayar(); // Recalculate total payment when the duration changes
         });

         termasukBreakfastInput.addEventListener('change', function () {
            hitungTotalBayar(); // Recalculate total payment when the breakfast checkbox changes
         });

         function updateHarga() {
            var selectedTipeKamar = tipeKamarSelect.value;

            var selectedHarga = <?php echo json_encode($DataHarga); ?>.find(function (item) {
                  return item.tipe_kamar === selectedTipeKamar;
            });

            if (selectedHarga) {
                  var formattedHarga = 'Rp ' + selectedHarga.harga.toLocaleString();
                  hargaInput.value = formattedHarga;
            } else {
                  hargaInput.value = '';
            }

            hitungTotalBayar(); // Recalculate total payment when the price is updated
         }

         function hitungTotalBayar() {
            var durasi = parseInt(durasiInput.value) || 0;
            var harga = parseInt(document.getElementById('harga').value.replace(/\D/g, '')) || 0; // Remove non-numeric characters
            var termasukBreakfast = termasukBreakfastInput.checked;

            if (durasi > 3) {
                  harga -= (harga * 0.1); // Apply 10% discount for duration more than 3 days
            }

            if (termasukBreakfast) {
                  harga += 80000; // Add additional charge for breakfast
            }

            totalBayarInput.value = 'Rp ' + harga.toLocaleString(); // Display the total payment
         }
      </script>
      <!-- Pada Baris ini digunakan untuk form nomor id tidak bisa lebih dari 16 angka-->
      <script>
      function validateNumberInput(input) {
         // Mengambil nilai input dan menghapus karakter selain digit
         let inputValue = input.value.replace(/\D/g, '');

         // Membatasi panjang maksimal menjadi 16 angka
         inputValue = inputValue.slice(0, 16);

         // Mengatur nilai input kembali setelah validasi
         input.value = inputValue;
      }
      </script>
      <script src="{{ ('/assets/js/custom.js') }}"></script>

   </body>
</html>
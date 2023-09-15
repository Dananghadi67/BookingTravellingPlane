<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/1faa5cc1ce.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/0.0.6/iconify-icon.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

    <title>Travel.In</title>
  </head>

  <body>

    <!-- Navbar -->
    <?php
    require('koneksi.php');
    require(__DIR__ . '/komponen/navbar.php');
    ?>
    <!-- Navbar -->

    <section id="hero">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 hero-tagline my-auto">
            <h1>Solusi Untuk Perjalanan Anda.</h1>
            <p><span class="fw-bold">TRAVEL.IN</span> memberikan kemudahan dalam pemesanan tiket pesawat, bagi Anda yang ingin melakukan perjalanan menggunakan pesawat yang aman dan nyaman.</p>

            <a href="daftar-tiket.php"><button class="btn button-lg-primary">Pesan Sekarang</button></a>
          </div>

          <div class="col-md-6"><img src="img/hero.png" alt="" class="position-absolute img-hero" /></div>
        </div>
      </div>
    </section>

    <!-- Layanan -->
    <section id="layanan">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Layanan Kami</h2>
            <span class="sub-title">Travel.In hadir menjadi solusi bagi kamu</span><br> </br>
          </div>

          <div class="row">
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="img/money.png" width="75" alt="Service" href="#" />
                <h4 class="mb-3">Tanpa Biaya Tambahan</h4>
                <p class="mb-0 fw-medium">Kecuali Biaya Pembelian Ticket </p>
                <br>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4" > <img src="img/lock.png"  width="75" alt="Service" />
                <h4 class="mb-3" >Pembayaran Aman</h4>
                <p class="mb-0 fw-medium">Pembayaran tiket dengan aman, murah, dan terpercaya</p>
                <br>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="img/micro.png" width="75" alt="Service" />
                <h4 class="mb-3">Testimoni</h4>
                <p class="mb-0 fw-medium">Pendapat pelanggan mengenai pelayanan kami</p>
                <br>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-6">
            <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
              <div class="card-body p-xxl-5 p-4"> <img src="img/setting.png" width="75" alt="Service" />
                <h4 class="mb-3">Tentang Kami</h4>
                <p class="mb-0 fw-medium">Sejarah, visi misi dan semua perihal tentang kami</p>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Layanan -->

    <!-- Contact -->
    <section id="contact">
      <div class="container-fluid overlay h-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Butuh Konsultasi..? Silahkan kontak kami Kami Siap Membantu</h3>
              <div class="kontak">
                <h6>Kontak</h6>

                <div class="mb-3 d-flex align-items-center">
                  <div><img src="img/alamat icon.png" alt="" /></div>
                  <a href="#">Jl. Gatot Subroto 123 Pacitan Indonesia</a>
                </div>
                <div class="mb-3">
                  <img src="img/telp icon.png" alt="" />
                  <a href="#">022-6545-2041</a>
                </div>
                <div class="mb-3">
                  <img src="img/email icon.png" alt="" />
                  <a href="#">buskita@gmail.com</a>
                </div>
              </div>

              <h6>Social Media</h6>
              <a href="#" class="me-3"><img src="img/facebook.png" alt="" /></a>
              <a href="#" class="me-3"><img src="img/tweet.png" alt="" /></a>
              <a href="#" class="me-3"><img src="img/insta.png" alt="" /></a>
            </div>

            <div class="col-md-6">
              <div class="card-contact w-100">
                <form>
                  <h2>Ada pertanyaan..?</h2>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" />
                    <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda..</label>
                  </div>

                  <button type="submit" class="button-kontak">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact -->

    <footer class="d-flex align-items-center position-relative">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-7 d-flex align-items-center">
              <a href="#" class="ms-3">Travel In</a>
            </div>

            <div class="col-md-5 d-flex justify-content-evenly">
              <a href="#hero">Beranda</a>
              <a href="#layanan">Layanan</a>
              <a href="#contact">Kontak</a>
            </div>
          </div>

          <div class="row position-absolute copyright start-50 translate-middle">
            <div class="col-12">
              <p>Copyright by BariqFaw Creative All Right Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

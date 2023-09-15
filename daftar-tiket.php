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

    <title>TRAVELIN</title>
  </head>

  <body>
    
    <!-- Navbar -->
    <?php
    require(__DIR__ . '/komponen/navbar.php');
    require('koneksi.php');
    ?>
    <!-- Navbar -->
  
    <!-- Layanan -->
    <section id="daftarpesawat">
      <div class="container mt-5 h-100">
        <div class="row">
          <div class="col-12 mb-3 text-center">
            <h2>Daftar Pesawat</h2>
            <span class="sub-title">TRAVELIN menyediakan pesawat yang murah dan nyaman</span>
          </div>
          <a href="add-tiket.php" class="btn button-tambahpswt mb-2">Tambah</a>

          <!-- ITEM PRODUK -->
          <div class="col-lg-12">
            <div class="row d-flex flex-row justify-content-start">
              <?php
              $pesawat = mysqli_query($koneksi, "SELECT * FROM pesawat");
              if (mysqli_num_rows($pesawat) > 0) {
                while ($row = mysqli_fetch_array($pesawat)) {
              ?>
                  <div class="card produk-card shadow-sm mx-2 my-3 p-2" style="width: 20rem;">
                    <a href="detail-pesawat.php?id=<?php echo $row['id_pesawat'] ?>">
                      <img src="pesawat/<?php echo $row['foto_pesawat'] ?>" class="card-img-top p-2" alt="Gambar Pesawat">
                      <div class="card-body" style="padding: 5px;">
                        <h6 class="card-title text-dark mt-2 mb-3">
                          <?php echo ucwords($row['nama_pesawat']) ?>
                        </h6>
                    </a>

                    <div class="action-button">
                      <button class="btn btn-success mx-1">
                        <a href="booking-pesawat.php?id=<?php echo $row['id_pesawat'] ?>">
                          Pesan Tiket
                        </a>
                      </button>
                      <button class="btn btn-success mx-1">
                        <a href="edit-pesawat.php?id=<?php echo $row['id_pesawat'] ?>">
                          Edit
                        </a>
                      </button>
                      <button class="btn btn-danger">
                        <a href="hapus-pesawat.php?idp=<?php echo $row['id_pesawat'] ?>" onclick="return confirm('Yakin ingin hapus produk ini?')">
                          Hapus
                        </a>
                      </button>
                    </div>

                  </div>
            </div>
          <?php
                }
              } else { ?>
          <p class="card text-dark text-center bg-light shadow p-3">Tidak ada produk</p>
          <?php } ?>

            </div>
          </div>


          </div>
        </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Layanan -->

    <?php
    require(__DIR__ . '/komponen/footer.php');
    ?>

    <script src="script.js"></script>
  
  </body>
</html>

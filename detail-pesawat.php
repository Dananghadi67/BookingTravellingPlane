<?php
session_start();

require('koneksi.php');
$pesawat = mysqli_query($koneksi, "SELECT * FROM pesawat WHERE id_pesawat = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($pesawat);
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

        <title><?php echo $p->nama_pesawat?></title>
</head>

<body>
  <!-- NAVBAR -->
  <?php
  require(__DIR__ . '/komponen/navbar.php');
  ?>

  <section id="detail">
    <div class="container pt-5 mb-5" >

    <div class="row mt-5 gx-5">
      <!-- Detail produk -->
      <div class="col-md-12 col-lg-5">
        <img src="pesawat/<?php echo $p->foto_pesawat ?>" class="image-fluid rounded shadow" alt="Gambar produk" width="100%">
      </div>

      <div class="col-md-12 col-lg-5 p-3 mx-3">
        <h3 class="display-5"><?php echo substr($p->nama_pesawat, 0, 30) ?></h3>
        <p class="product-description ">
          <?php echo $p->deskripsi_pesawat ?>
        </p>
          <button class="btn btn-danger mx-1">
            <a href="booking-pesawat.php?id=<?php echo $row['id_pesawat'] ?>">
            Pesan Tiket
            </a>
          </button>
        <a href="https://wa.me/081946716626" class="btn btn-success color-white d-inline-flex align-items-center">
          <i class="fa-brands fa-whatsapp mx-2 fs-5"></i> Hubungi via WhatsApp
        </a>
      </div>
      </div>
    </div>
  </section>

  <?php
  require(__DIR__ . '/komponen/footer.php');
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
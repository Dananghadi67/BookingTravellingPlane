<?php 
session_start();
?>

<!DOCTYPE html>
<html>

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
  <?php
  require(__DIR__ . '/komponen/navbar.php');
  require("koneksi.php");
  ?>

            <section id=tambahpesawat>
                <div class="container my-5 d-grid gap-5">
                    <form enctype="multipart/form-data" method="POST" action="" class="row card shadow-sm p-5 g-3">
                        <div class="col-12 text-center">
                            <h2>Detail Pemesanan</h2>
                        </div>

                        <?php 
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi, "SELECT * FROM datatiket JOIN kelas ON datatiket.id_kelas=kelas.id_kelas JOIN rute ON datatiket.idkota=rute.idkota JOIN pesawat ON datatiket.id_pesawat=pesawat.id_pesawat WHERE id_tiket=$id");
                        foreach ($data as $item) {
                        ?>
                            <dr>
                            <p class="detail-p">Nama : <?php echo $item['nama'] ?></p>
                            <p class="detail-p">Email : <?php echo $item['email'] ?></p>
                            <p class="detail-p">Kewarganegaraan : <?php echo $item['warga'] ?></p>
                            <p class="detail-p">No.Telp : <?php echo $item['nomor'] ?></p>
                            <p class="detail-p">Jenis Kelamin : <?php echo $item['kelamin'] ?></p>
                            <p class="detail-p">Pesawat : <?php echo $item['nama_pesawat'] ?></p>
                            <p class="detail-p">Asal Penerbangan : <?php echo $item['asaltujuan'] ?></p>
                            <p class="detail-p">Tanggal Pemesanan : <?php echo $item['tanggal'] ?></p>
                            <p class="detail-p">Jumlah Kursi : <?php echo $item['kursi'] ?></p>
                            <p class="detail-p">Kelas : <?php echo $item['namakelas'] ?></p>
                            <p class="detail-p">Deskripsi : <?php echo $item['deskripsi'] ?></p>
                    
                            </div>
                            <div class="col-md-6 ms-md-3 position-relative">
                            </div>
                            </div>
                            <?php }?>
                    </form>                
                </div>
            </section>

<!-- END section -->
<script src="js/theme.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
</body>

</html>
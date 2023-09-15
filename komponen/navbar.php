<!-- Extension Vendor -->
<link rel="stylesheet" href="style.css" />

<nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3 shadow" style="background-color: #ffcc00">
      <div class="container">
        <a class="navbar-brand" href="index.php">Travel.In</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item me-2">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="daftar-tiket.php">Daftar Tiket</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="tambah-rute.php">Tambah Rute</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="listpemesanan.php">OrderList</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#contact">Tentang Kami</a>
            </li>
          </ul>
        </div>

        <div>
          <?php 
            if (isset($_SESSION['username'])){ ?>
              <a href="login.php">
                <button class="button-primary">
                  <?php echo "<h5>" . $_SESSION['username'] . "</h5>"; ?>
                </button>
              </a>
              <a href="logout.php"> <button class="btn button-secondary">Logout</button> </a>
            <?php }  else { ?>
              <a href="signup.php"> <button class="button-primary">Daftar</button></a>
              <a href="login.php"><button class="btn button-secondary">Masuk</button></a>
          <?php } ?>               
        </div>
      </div>
    </nav>
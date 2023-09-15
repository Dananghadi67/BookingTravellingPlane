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

    <title>Login | TRAVELIN</title>
  </head>

  <body>

    <!-- Navbar -->
    <?php
    require(__DIR__ . '/komponen/navbar.php');
    require('koneksi.php');
    ?>
    <!-- Navbar -->

    <section id="login">
      <div class="page-content d-flex align-items-center">
        <div class="container d-flex justify-content-center">
          <div class="col-4">
          <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <div>
                    Username atau Password salah!
                </div>
            </div>
          <?php } ?>

            <div class="auth-card">
              <div class="logo-area">
                <img class="logo" src="img/logotravel.png" alt="logo" />
              </div>
              <h4>Login</h4>
              <p style="color: #000">
                Don't have an account??
                <a href="signup.php" style="color: #079561; font-weight: 600">Sign Up </a>
              </p>
              <form action="cek-login.php" method="post">
                <div class="mt-3 mb-3">
                  <div class="form-text input-info-text"></div>
                  <input type="text" name="username" class="form-control auth-input" placeholder="Username" />
                </div>

                <div class="mb-3">
                  <input type="password" name="password"  class="form-control auth-input" placeholder="Password" />
                </div>

                <a href="#">
                <p>Forgot password?</p>
                </a>

                <div class="mb-3">
                  <input type="submit" name="login" class="btn auth-btn mt-2" value="Login" />
                </div>
              </form>

              <a href="#">
                <button class="btn service-btn mt-2 mb-3">
                  <i class="fa-brands fa-google service-icon"></i>
                  Log in With Google
                </button>
              </a>

              <a href="#"
                ><button class="btn service-btn mb-3">
                  <i class="fa-brands fa-facebook service-icon"></i>
                  Log in With Facebook
                </button>
              </a>

            </div>
          </div>
        </div>
      </div>
    </section>



  </body>
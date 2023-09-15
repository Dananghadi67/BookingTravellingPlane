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

    <title>Sign Up | TRAVELIN</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php
    require(__DIR__ . '/komponen/navbar.php');
    require('koneksi.php');
    ?>
    <!-- Navbar -->


    <section id="signup">
      <div class="page-content d-flex align-items-center">
        <div class="container d-flex justify-content-center">
          <div class="col-4">
            <div class="auth-card">
              <div class="logo-area">
                <img class="logo" src="img/logotravel.png" alt="logo" />
              </div>
              <h4>Sign Up</h4>
              <p style="color: #000">
                Have an account??
                <a href="login.php" style="color: #079561; font-weight: 600">Login</a>
              <form action="cek-signup.php" method="post">
                <div class="mt-3 mb-3">
                  <div class="form-text input-info-text"></div>
                  <input type="text" name="username" class="form-control auth-input" placeholder="Username" required/>
                </div>

                <div class="mb-3">
                  <div id="emailHelp" class="form-text input-info-text"></div>
                  <input type="email" name="email" class="form-control auth-input" placeholder="Email" aria-describedby="emailHelp" required/>
                </div>

                <div class="mb-3">
                  <input type="password" name="password" class="form-control auth-input" placeholder="Password" required/>
                </div>

                <div class="mb-3">
                  <input type="password" name="cpassword" class="form-control auth-input" placeholder="Confirm Password" required>
                </div>

                <div class="mb-3">
                  <input type="submit" name="submit" class="btn auth-btn mt-2" value="Sign Up" />
                </div>
              </form>

              <a href="#">
                <button class="btn service-btn mt-2 mb-3">
                  <i class="fa-brands fa-google service-icon"></i>
                  Sign Up With Google
                </button>
              </a>

              <a href="#"
                ><button class="btn service-btn mb-3">
                  <i class="fa-brands fa-facebook service-icon"></i>
                  Sign Up With Facebook
                </button>
              </a>

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </body>
</html>

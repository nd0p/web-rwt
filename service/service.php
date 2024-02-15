<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="service.css">
</head>
<body>
      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top ">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="../../home.php">Logo</a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="../../home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="../../about/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="../../contact/contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="../../service/service.php">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="https://github.com/nd0p">GitHub</a>
              </li>
            </ul>
          </div>
        </div>
        <a href="../../login/login.php" class="login-button">Login</a>
            <button class="navbar-toggler pe-8" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
<!-- End Navbar -->

  <!-- Hero Secton-->
  <section class="hero-section">
    <div class="container d-flex align-items-center justify-content-center fs-1 text-white flex-column">
      <h1>Service</h1>
      <h2>Bootstrap 5</h1>
    </div>
  </section>
  <!--End Hero Secton-->

    <!-- Bootsrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
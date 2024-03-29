<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="test.css">
    <link rel="icon" href="image/x-icon" type="../assets/images/LOGO TAMSIS.png">
</head>
<body>
    <div class="row vh-100 g-0">
        <!-- Left Side -->
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image: url(../assets/images/login.jpg);"></div>
        </div>
        <!-- /Left Side -->

        <!-- Right Side -->
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">

                    <!-- Logo -->
                    <a href="../home.php" class="d-flex justify-content-center mb-4">
                        <img src="../assets/images/LOGO TAMSIS.png" alt="" width="60">
                    </a>
                    <!-- /Logo -->

                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Log In</h3>
                        <p class="text-secondary`">Get access to your account</p>
                    </div>

                    <!-- Social Login -->
                    <button class="btn btn-outline-secondary w-100 mb-3">
                        <i class='bx bxl-google text-danger me-1 fs-6'></i> Login with Google
                    </button>
                    <button class="btn btn-outline-secondary w-100">
                        <i class='bx bxl-github me-1 fs-6'></i> Login with GitHub
                    </button>
                    <!-- /Social Login -->

                    <!-- Divider -->
                    <div class="position-relative">
                        <hr class="text-secondary divider">
                        <div class="divider-content-center">or</div>
                    </div>
                    <!-- /Divider -->

                    <!-- Form -->
                    <form action="../config/login.php" method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-user' ></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="NISN"  name="NISN">
                        </div>
                            <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class='bx bx-lock-alt' ></i>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Password" name="PASSWORD">
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="from-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div>
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg w-100 mb-3">Login</button>
                    </form>
                    <!-- /Form -->

                    <div class="text-center">
                        <small>Don't have an an account? <a href="#" class="fw-bold">Sign Up</a></small>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Right Side -->
    </div>
</body>
</html>
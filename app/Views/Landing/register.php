<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/landing/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <div class="container nav-cont">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="../landing">HOME</a>
                    <a class="nav-link" href="#">ABOUT US</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="center" src="/images/for_login.png" alt="">
                </div>

                <div class="col-md-6">
                    <div class="form-regis">
                        <h1 class="text-center">REGISTER</h1>
                        <form method="post">
                            <div class="form-group">
                                <label class="form-label" for="nama">Nama Lengkap:</label>
                                <input class="form-control" type="text" name="nama" id="nama" required>

                                <div class="form-group">
                                    <label class="form-label" for="username">Username:</label>
                                    <input class="form-control" type="text" name="username" id="username" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">E-mail:</label>
                                    <input class="form-control" type="email" name="email" id="email" required>

                                    <div class="form-group">
                                        <label class="form-label" for="password">Password:</label>
                                        <input class="form-control" type="password" name="password" id="password" required>
                                    </div>
                                    <input class="btn btn-regis center" type="submit" value="REGISTER" id="register">
                                    <br>
                                    <center><b>Sudah punya akun? </b><a href="<?= base_url('login') ?>">Login</a></center>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <span>&#169; Tim GRAPEPro 2023</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/user/register.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/user/home.css">
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
                    <a class="nav-link active" aria-current="page" href="../home">HOME</a>
                    <a class="nav-link" href="../profile">PROFILE</a>
                    <a class="btn btn-logout" href="<?= base_url('logout') ?>">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container content">
        <div class="row">
            <div class="col-lg-4">
                <center><img class="avatar" src="/images/avatar.jpg"></center>
                <center><span class="name"><?= $name ?></span></center>
                <center><span class="username"><?= $username ?></span></center>
                <div class="leaderboard">
                    <center><span class="lead-title">Leaderboard</span></center>
                    <table class="table">
                        <tbody>
                            <?php
                                $i=1;
                                foreach($ranks as $row){
                                    echo '
                                    <tr>
                                        <th scope="row">'.$i.'</th>
                                        <td>
                                            <img class="ava-lead" src="/images/avatar.jpg">
                                            <span>'.$row->username.'</span>
                                        </td>
                                        <td class="coin-amount">'.$row->coin.'c</td>
                                    </tr>
                                    ';
                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 load-more" href="#">Load More...</a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-lg-8 right-content">
                <h2>Welcome to GRAPEPro</h2>
                <h5>Pemula</h5>
                <div class="box-class">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="level">
                                    <p>Lvl. 1</p>
                                </div>
                            </div>
                            <div class="col-lg-10 class-section">
                                <span class="class-title"><a class="link-offset-2 link-underline link-underline-opacity-0" href="../course/1/1">Pengenalan Pemrograman</a></span><i class="bi bi-calendar-check icon-status"></i>
                                <span class="class-desc">Lorem ipsum dolor sit amet, consectetur.</span>
                                <div class="info-class">
                                    <span><i class="bi bi-file-text"></i>&nbsp;&nbsp;5 Artikel &nbsp;&nbsp;| &nbsp;&nbsp;<i class="bi bi-clipboard2-check"></i>&nbsp;&nbsp;1 Ujian &nbsp;&nbsp;| &nbsp;&nbsp;1x Pengulangan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-class">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="level">
                                    <p>Lvl. 2</p>
                                </div>
                            </div>
                            <div class="col-lg-10 class-section">
                                <span class="class-title"><a class="link-offset-2 link-underline link-underline-opacity-0" href="../course/2/1">Pemrograman Struktur</a></span><i class="bi bi-lock icon-status"></i>
                                <span class="class-desc">Lorem ipsum dolor sit amet, consectetur.</span>
                                <div class="info-class">
                                    <span><i class="bi bi-file-text"></i>&nbsp;&nbsp;5 Artikel &nbsp;&nbsp;| &nbsp;&nbsp;<i class="bi bi-clipboard2-check"></i>&nbsp;&nbsp;1 Ujian &nbsp;&nbsp;| &nbsp;&nbsp;0x Pengulangan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Menengah</h5>
                <div class="box-class">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="level">
                                    <p>Lvl. 3</p>
                                </div>
                            </div>
                            <div class="col-lg-10 class-section">
                                <span class="class-title"><a class="link-offset-2 link-underline link-underline-opacity-0" href="../course/3/1">Kendali Pemrograman</a></span><i class="bi bi-lock icon-status"></i>
                                <span class="class-desc">Lorem ipsum dolor sit amet, consectetur.</span>
                                <div class="info-class">
                                    <span><i class="bi bi-file-text"></i>&nbsp;&nbsp;5 Artikel &nbsp;&nbsp;| &nbsp;&nbsp;<i class="bi bi-clipboard2-check"></i>&nbsp;&nbsp;1 Ujian &nbsp;&nbsp;| &nbsp;&nbsp;0x Pengulangan</span>
                                </div>
                            </div>
                        </div>
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
</body>

</html>
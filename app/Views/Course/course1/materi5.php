<?php
    $session = session();
    $id = $session->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Challenge: Studi Kasus </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/course/course.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container nav-cont">
            <a class="navbar-brand" href="#">
                <img src="/images/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="<?= base_url('home'); ?>">HOME</a>
                    <a class="nav-link" href="<?= base_url('profile'); ?>">PROFILE</a>
                    <a class="btn btn-logout" href="<?= base_url('logout'); ?>">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="materi-wrapper">
                    <h2>Challenge: Studi Kasus </h2>
                    <br>
                    <h5>1. Menampilkan Nama (5 coins)</h5>
                    <div class="row">
                        <div class="col-lg-7">
                            <pre class="editor">#include &lt;stdio.h&gt;

int main() {

    // Deklarasikan variabel "nama" dengan tipe data array of char dan beri nilai "John"
    char nama[] = "";

    // Tampilkan nilai variabel "nama" menggunakan printf
    printf("Nama: %s",);

    return 0;
}

				            </pre>
                            <button type="button" class="btn btn-run"
                                onclick="evalCode('Nama: John',0,5,<?= $id ?>,'Menampilkan Nama',3)" id='run0'>Jalankan
                                Kode</button>
                        </div>
                        <div class="col-lg-5">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Nama: John</p>
                            <div class="preview-code" id="preview0"></div>
                        </div>
                    </div>
                    <br><br>
                    <h5>2. Menampilkan Hasil Penjumlahan (10 coins)</h5>
                    <div class="row">
                        <div class="col-lg-7">
                            <pre class="editor">#include &lt;stdio.h&gt;
int main() {
    // Deklarasikan variabel "a" dengan tipe data integer dan beri nilai 5
    a = 5;

    // Deklarasikan variabel "b" dengan tipe data integer dan beri nilai 3

    // Hitung hasil penjumlahan dari variabel "a" dan "b" dan simpan dalam variabel "c"
    int c = a  b;

    // Tampilkan hasil penjumlahan menggunakan printf
    printf("Hasil penjumlahan: %d",);

    return 0;
}

				            </pre>
                            <button type="button" class="btn btn-run"
                                onclick="evalCode('Hasil penjumlahan: 8',1,10,<?= $id ?>,'Menampilkan Hasil Penjumlahan',3)"
                                id='run1'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-5">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Hasil penjumlahan: 8</p>
                            <div class="preview-code" id="preview1"></div>
                        </div>
                    </div>
                    <br><br>
                    <h5>3. Menampilkan Luas Persegi Panjang (10 coins)</h5>
                    <div class="row">
                        <div class="col-lg-7">
                            <pre class="editor">#include &lt;stdio.h&gt;
int main() {
    // Deklarasikan variabel "panjang" dengan tipe data integer dan beri nilai 10

    // Deklarasikan variabel "lebar" dengan tipe data float dan beri nilai 4.5

    // Hitung luas dari persegi panjang dan simpan dalam variabel "luas"

    // Tampilkan nilai variabel "luas" menggunakan printf
    printf("Luas persegi panjang: %.2f", luas);

    return 0;
}

				            </pre>
                            <button type="button" class="btn btn-run"
                                onclick="evalCode('Luas persegi panjang: 45.00',2,10,<?= $id ?>,'Menampilkan Luas Persegi Panjang',3)"
                                id='run2'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-5">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Luas persegi panjang: 45.00</p>
                            <div class="preview-code" id="preview2"></div>
                        </div>
                    </div>
                    
                    <a class="btn btn-next f-left" href="<?= base_url('course/'.$id.'/1/4'); ?>">Sebelumnya</a>
                    <?php
                        if($curr<6){
                    ?>
                    <a class="btn btn-next" id="next" onclick='next(<?= $id ?>,1, <?= $curr ?>,5,"Challenge: Studi Kasus");'>Selesai</a>
                    <?php } ?>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <?php
                        $each = ceil((1/5)*100);
                        $percent = ceil(($curr/5)*100)-$each;
                        if($percent<50){
                            echo '
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-label="Example with label" style="width: '.$percent.'%; aria-valuenow= 35" aria-valuemin="0" aria-valuemax="100">'.$percent.'%</div>
                                </div>
                                
                            ';
                        }else if($percent>=50 && $percent<80){
                            echo '
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" aria-label="Example with label" style="width: '.$percent.'%; aria-valuenow= 35" aria-valuemin="0" aria-valuemax="100">'.$percent.'%</div>
                                </div>
                                
                            ';
                        }else if($percent>=80){
                            echo '
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Example with label" style="width: '.$percent.'%; aria-valuenow= 35" aria-valuemin="0" aria-valuemax="100">'.$percent.'%</div>
                                </div>
                                
                            ';
                        }
                    ?>
                    <div class="game-element"><i class="bi bi-diamond-fill"></i>&nbsp; <span
                            id='coin'><?= $coins ?></span>
                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; <?= $xp ?> XP</div>
                    <div class="materi-title">Perkenalan Pemrograman</div>
                    <div class="materi-nav">
                        <div class="list-materi">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/1'); ?>">Pengantar Pemrograman C </a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 0
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                    <div class="status <?php if($curr>1) echo 'check';  ?>">
                                        <?php if($curr>1) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-materi">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/2'); ?>">Sintaks Dasar Bahasa C </a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 0
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                    <div class="status <?php if($curr>2) echo 'check';  ?>">
                                        <?php if($curr>2) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-materi">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/3'); ?>">Variabel dan Tipe Data </a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 0
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                    <div class="status <?php if($curr>3) echo 'check';  ?>">
                                        <?php if($curr>3) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-materi">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/4'); ?>">Operator dan Ekspresi </a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 0
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                    <div class="status <?php if($curr>4) echo 'check';  ?>">
                                        <?php if($curr>4) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-materi current">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/5'); ?>">Challenge: Studi Kasus </a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 25
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                    <div class="status <?php if($curr>5) echo 'check';  ?>">
                                        <?php if($curr>5) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal"  id="getBadges" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dapat Badges</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center><img src="/images/badges/pemula-bahasa-c.png" width="50%" height="auto" alt=""></center>
                    <br><center><h5>Selamat anda mendapatkan lencana Pemula Bahasa C</h5></center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="levelUp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-bg-custom">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Naik Level <i class="bi bi-capslock-fill"></i>
                    </h1>
                    <button type="button" class="btn-close btn-close-levelUp" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body body-levelUp">
                    <center><img width="55%" height="auto" src="/images/level-up.gif" /></center>
                    <center>
                        <h4 class="levelUp-desc">Selamat anda naik level!</h4>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary main-bg-color" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div id="tsparticles"></div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js"
    integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tsparticles/2.9.3/tsparticles.min.js"
    integrity="sha512-+YPbXItNhUCZR3fn5KeWPtJrXuoqRYQ4Gd1rIjEFG+h8UJYekebhOMh84vv7q+Y1sy5kdIIVtfftehCiigriMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles-preset-confetti@2/tsparticles.preset.confetti.bundle.min.js">
</script>
<script type="text/javascript" src="/js/courses/course.js"></script>
<script type="text/javascript" src="/js/courses/quiz.js"></script>

</html>
<?php
    $session = session();
    $id = $session->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Operator dan Ekspresi </title>
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
                    <h2>Operator dan Ekspresi </h2>
                    <p>Operator dan ekspresi adalah komponen penting dalam bahasa pemrograman C. Mereka digunakan untuk
                        melakukan operasi dan menghasilkan nilai dalam program. Dengan pemahaman yang baik tentang
                        operator dan ekspresi, Anda dapat melakukan manipulasi data dan pengambilan keputusan secara
                        efisien dalam bahasa C.</p>

                    <h3>Operator Aritmatika</h3>
                    <p>Operator aritmatika digunakan untuk melakukan operasi matematika pada operand-operand numerik.
                        Berikut adalah beberapa operator aritmatika dalam C:</p>
                    <ul>
                        <li>+: Penjumlahan</li>
                        <li>-: Pengurangan</li>
                        <li>*: Perkalian</li>
                        <li>/: Pembagian</li>
                        <li>%: Modulus (Sisa pembagian)</li>
                    </ul>

                    <h3>Operator Relasional</h3>
                    <p>Operator relasional digunakan untuk membandingkan nilai antara operand-operand. Berikut adalah
                        beberapa operator relasional dalam C:</p>
                    <ul>
                        <li>==: Sama dengan</li>
                        <li>!=: Tidak sama dengan</li>
                        <li>&gt;: Lebih besar dari</li>
                        <li>&lt;: Lebih kecil dari</li>
                        <li>&gt;=: Lebih besar dari atau sama dengan</li>
                        <li>&lt;=: Lebih kecil dari atau sama dengan</li>
                    </ul>

                    <h3>Operator Logika</h3>
                    <p>Operator logika digunakan untuk melakukan operasi logika pada operand-operand boolean. Berikut
                        adalah beberapa operator logika dalam C:</p>
                    <ul>
                        <li>&amp;&amp;: AND (Keduanya harus benar)</li>
                        <li>||: OR (Salah satu harus benar)</li>
                        <li>!: NOT (Membalik nilai boolean)</li>
                    </ul>

                    <h3>Ekspresi</h3>
                    <p>Ekspresi terdiri dari kombinasi operator, operand, dan konstanta yang menghasilkan nilai
                        tertentu. Contoh ekspresi dalam bahasa C:</p>
                    <pre>
    <code>
      int a = 5;
      int b = 10;
      int c = a + b;
    </code>
  </pre>
                    <p>Pada contoh di atas, kita menggunakan operator aritmatika '+' untuk menjumlahkan nilai variabel
                        'a' dan 'b', dan kemudian hasilnya disimpan dalam variabel 'c'.</p>

                    <h3>Kesimpulan</h3>
                    <p>Operator dan ekspresi adalah elemen penting dalam bahasa pemrograman C. Dengan menggunakan
                        operator yang sesuai dan membangun ekspresi yang tepat, Anda dapat melakukan operasi matematika,
                        perbandingan, dan pengambilan keputusan dengan efektif dalam program C.</p>
                    <a class="btn btn-next f-left" href="<?= base_url('course/'.$id.'/1/3'); ?>">Sebelumnya</a>
                    <a class="btn btn-next" onclick='next(<?= $id ?>,1, <?= $curr ?>,4,"Operator dan Ekspresi");'>Selanjutnya</a>
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
                    <div class="game-element"><i class="bi bi-diamond-fill"></i>&nbsp; <?= $coins ?>
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
                        <div class="list-materi current">
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
                        <div class="list-materi">
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
<script type="text/javascript" src="/js/courses/course.js"></script>

</html>
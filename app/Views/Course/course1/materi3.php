<?php
    $session = session();
    $id = $session->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Variabel dan Tipe Data </title>
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
                    <h2>Variabel dan Tipe Data </h2>
                    <p>Bahasa C adalah bahasa pemrograman yang populer dan kuat. Untuk memahami dasar-dasar pemrograman
                        dalam C, penting untuk memahami variabel dan tipe data.</p>

                    <h3>Variabel</h3>
                    <p>Di dalam bahasa C, variabel digunakan untuk menyimpan data. Setiap variabel harus dideklarasikan
                        sebelum digunakan, dengan menyebutkan tipe data dan nama variabelnya. Contoh deklarasi variabel
                        dalam C:</p>
                    <pre>
    <code>
      int angka;
      float nilai;
      char huruf;
    </code>
  </pre>
                    <p>Dalam contoh di atas, kita mendeklarasikan tiga variabel: 'angka' dengan tipe data int (bilangan
                        bulat), 'nilai' dengan tipe data float (bilangan desimal), dan 'huruf' dengan tipe data char
                        (karakter).</p>

                    <h3>Tipe Data</h3>
                    <p>Di bahasa C, terdapat berbagai tipe data yang dapat digunakan untuk menyimpan jenis data yang
                        berbeda. Berikut adalah beberapa tipe data umum dalam C:</p>
                    <ul>
                        <li>int: digunakan untuk menyimpan bilangan bulat.</li>
                        <li>float: digunakan untuk menyimpan bilangan desimal.</li>
                        <li>char: digunakan untuk menyimpan karakter.</li>
                        <li>double: digunakan untuk menyimpan bilangan desimal dengan presisi ganda.</li>
                        <li>short: digunakan untuk menyimpan bilangan bulat pendek.</li>
                        <li>long: digunakan untuk menyimpan bilangan bulat panjang.</li>
                    </ul>

                    <h3>Contoh Penggunaan</h3>
                    <p>Contoh penggunaan variabel dan tipe data dalam C:</p>
                    <pre>
    <code>
      #include &lt;stdio.h&gt;

      int main() {
        int angka = 10;
        float nilai = 3.14;
        char huruf = 'A';

        printf("Angka: %d\n", angka);
        printf("Nilai: %.2f\n", nilai);
        printf("Huruf: %c\n", huruf);

        return 0;
      }
    </code>
  </pre>
                    <p>Pada contoh di atas, kita mendeklarasikan variabel 'angka' dengan nilai 10, variabel 'nilai'
                        dengan nilai 3.14, dan variabel 'huruf' dengan nilai 'A'. Kemudian, kita mencetak nilai
                        variabel-variabel tersebut menggunakan fungsi printf().</p>

                    <h3>Kesimpulan</h3>
                    <p>Variabel dan tipe data merupakan konsep dasar dalam bahasa pemrograman C. Dengan pemahaman yang
                        baik tentang variabel dan tipe data, Anda dapat menyimpan dan memanipulasi data dengan efisien
                        dalam program C.</p>

                    <p>Semoga artikel ini membantu Anda memahami konsep variabel dan tipe data dalam bahasa C!</p>
                    <a class="btn btn-next f-left" href="<?= base_url('course/'.$id.'/1/2'); ?>">Sebelumnya</a>
                    <a class="btn btn-next"
                        onclick='next(<?= $id ?>,1, <?= $curr ?>,3,"Variabel dan Tipe Data");'>Selanjutnya</a>
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
                        <div class="list-materi current">
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
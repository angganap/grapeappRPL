<?php
    $session = session();
    $id = $session->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Perkenalan Pemrograman</title>
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
                    <h2>Pengantar Pemrograman C</h2>
                    <center><img src="/images/c-logo.png" width="50%" height="auto"></center><br>
                    <p>Selamat datang di dunia yang penuh dengan logika, algoritma, dan kreativitas tak terbatas! Jika Anda mencari bahasa pemrograman yang kuat, fleksibel, dan mampu membawa ide-ide Anda menjadi kenyataan, maka Pemrograman C adalah tempat yang tepat untuk memulai perjalanan Anda. Dalam artikel ini, kita akan menjelajahi dasar-dasar Pemrograman C dan mengapa belajar bahasa ini akan membuka pintu menuju dunia yang penuh dengan potensi tanpa batas.</p>
                    <h3>Mengapa Pemrograman C Penting dalam Era Digital?</h3>
                    <p>Di era digital yang terus berkembang, pemrograman telah menjadi salah satu keterampilan yang paling dicari. Kemampuan untuk membangun aplikasi, situs web, dan solusi perangkat lunak lainnya sangat berharga di pasar kerja yang kompetitif saat ini. Dan di balik banyak bahasa pemrograman yang ada, Pemrograman C masih memegang posisi yang kuat.</p>
                    <p>Salah satu alasan utama mengapa Pemrograman C begitu penting adalah karena bahasa ini menjadi landasan bagi banyak bahasa pemrograman modern. Dalam hal ini, mempelajari Pemrograman C bukan hanya tentang menguasai satu bahasa, tetapi juga tentang membangun fondasi yang kokoh untuk memahami bahasa pemrograman lainnya. Bahasa pemrograman seperti C++, C#, dan Objective-C semuanya didasarkan pada C, sehingga pemahaman yang baik tentang C akan memberi Anda keuntungan besar saat mempelajari bahasa-bahasa tersebut.</p>
                    <h3>Kelebihan Pemrograman C</h3>
                    <ul>
                        <li>Sederhana dan efisien: C memiliki sintaksis yang relatif sederhana, sehingga mudah
                            dipelajari. Selain itu, C juga memiliki performa yang tinggi dan efisien.</li>
                        <li>Portabilitas: Program yang ditulis dalam bahasa C dapat dijalankan di berbagai platform dan
                            sistem operasi yang mendukung kompiler C.</li>
                        <li>Pemrograman tingkat rendah: C memungkinkan pemrogram untuk mengakses dan mengontrol secara
                            langsung perangkat keras komputer, sehingga cocok untuk pengembangan sistem operasi dan
                            perangkat embedded.</li>
                        <li>Populer dan banyak dukungan: C merupakan salah satu bahasa pemrograman yang paling banyak
                            digunakan, sehingga tersedia banyak sumber daya dan dukungan komunitas yang bisa
                            dimanfaatkan.</li>
                    </ul>

                    <h3>Contoh Program Sederhana</h3>
                    <pre><code>#include &lt;stdio.h&gt;

int main() {
  printf("Hello, World!\n");
  return 0;
}
</code></pre>
                    <p>Pada contoh di atas, kita menggunakan fungsi <code>printf()</code> untuk menampilkan pesan
                        "Hello, World!" ke layar. Ini adalah program sederhana yang sering digunakan sebagai langkah
                        awal dalam mempelajari bahasa pemrograman baru.</p>

                    <h3>Memulai Perjalanan Anda</h3>
                    <p>Jika Anda tertarik mempelajari Pemrograman C, Anda memiliki banyak opsi untuk memulainya. Ada berbagai buku, tutorial, dan sumber daya online yang tersedia secara gratis atau berbayar. Anda juga dapat mengikuti kursus online atau menghadiri kelas offline jika Anda lebih suka belajar secara langsung dari instruktur.</p>
                    <p>Saat Anda mulai mempelajari Pemrograman C, penting untuk memahami konsep dasar seperti variabel, tipe data, operasi matematika, dan pengendalian aliran program. Praktek adalah kunci untuk memperkuat pemahaman Anda, jadi jangan takut untuk mencoba menulis kode dan memecahkan masalah kecil menggunakan bahasa C.</p>
                    <p>Ingatlah bahwa perjalanan dalam pemrograman adalah proses yang berkelanjutan. Teruslah belajar, eksperimen, dan berkolaborasi dengan sesama pengembang. Jangan takut untuk menghadapi tantangan baru dan menjelajahi ide-ide kreatif Anda.</p>
                    <p>Dengan Pemrograman C, pintu dunia pemrograman akan terbuka lebar bagi Anda. Jadilah penjelajah yang pemberani, siap untuk menghadapi tantangan dan menciptakan karya yang menginspirasi. Selamat menapaki dunia pemrograman!</p>
                    <p>Selamat memulai perjalanan Anda dalam mempelajari pemrograman C!</p>

                    <button class="btn btn-next" onclick='next(<?= $id ?>,1, <?= $curr ?>,1,"Pengantar Pemrograman C");'>Selanjutnya</button>
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
                        <div class="list-materi current">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/1'); ?>">Pengantar Pemrograman C </a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 0
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                    <div class="status <?php if($curr>1) echo 'check';  ?>"><?php if($curr>1) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-materi">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/2'); ?>">Sintaks Dasar Bahasa C</a>
                                    <div class="left-game-elm"><i class="bi bi-diamond-fill"></i>&nbsp; 0 
                                        Coins&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-star-fill"></i>&nbsp; 100 XP</div>
                                </div>
                                <div class="col-lg-2 col-right">
                                     <div class="status <?php if($curr>2) echo 'check';  ?>"><?php if($curr>2) echo '&check;';  ?></div>
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
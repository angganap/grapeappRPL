<?php
    $session = session();
    $id = $session->get('id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Sintaks Dasar Bahasa C </title>
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
                    <h2>Sintaks Dasar Bahasa C </h2>
                    <p>Pemrograman C adalah bahasa pemrograman yang memiliki sintaksis sederhana namun sangat kuat.
                        Berikut adalah beberapa sintaks dasar yang perlu Anda ketahui saat memulai perjalanan Anda dalam
                        mempelajari C:</p>

                    <h3>1. Struktur Program</h3>
                    <p>Program C terdiri dari satu atau beberapa fungsi. Setiap program C harus memiliki fungsi
                        <code>main()</code> sebagai titik masuk utama. Inilah tempat program akan mulai dieksekusi.</p>
                    <pre><code>#include &lt;stdio.h&gt;

int main() {
    // Kode program dimulai di sini

    return 0;
}
</code></pre>

                    <h3>2. Komentar</h3>
                    <p>Komentar digunakan untuk memberikan penjelasan atau dokumentasi pada kode program. Komentar tidak
                        akan dieksekusi oleh kompiler. Ada dua jenis komentar dalam C:</p>
                    <pre><code>// Komentar satu baris

/*
   Komentar
   banyak
   baris
*/
</code></pre>

                    <h3>3. Variabel dan Tipe Data</h3>
                    <p>Anda perlu mendeklarasikan variabel sebelum menggunakannya dalam program C. C menyediakan
                        beberapa tipe data dasar, seperti <code>int</code> (bilangan bulat), <code>float</code>
                        (bilangan pecahan), dan <code>char</code> (karakter).</p>
                    <pre><code>int age = 25;
float weight = 65.5;
char grade = 'A';
</code></pre>

                    <h3>4. Operator</h3>
                    <p>Operator digunakan untuk melakukan operasi matematika, perbandingan, atau logika dalam C.
                        Beberapa operator umum termasuk <code>+</code> (penjumlahan), <code>-</code> (pengurangan),
                        <code>*</code> (perkalian), <code>/</code> (pembagian), dan <code>=</code> (penugasan).</p>

                    <h3>5. Percabangan</h3>
                    <p>Percabangan memungkinkan program untuk mengambil keputusan berdasarkan kondisi tertentu. Dalam C,
                        Anda dapat menggunakan pernyataan <code>if</code>, <code>else if</code>, dan <code>else</code>.
                    </p>
                    <pre><code>int x = 10;

if (x > 0) {
    printf("x adalah bilangan positif");
} else if (x < 0) {
    printf("x adalah bilangan negatif");
} else {
    printf("x adalah nol");
}
</code></pre>

                    <h3>6. Perulangan</h3>
                    <p>Perulangan memungkinkan program untuk menjalankan serangkaian pernyataan berulang kali. Dalam C,
                        terdapat pernyataan <code>for</code>, <code>while</code>, dan <code>do-while</code> yang dapat
                        digunakan untuk melakukan perulangan.</p>
                    <pre><code>for (int i = 1; i <= 5; i++) {
    printf("%d ", i);
}

int j = 1;
while (j <= 5) {
    printf("%d ", j);
    j++;
}

int k = 1;
do {
    printf("%d ", k);
    k++;
} while (k <= 5);
</code></pre>

                    <h3>7. Fungsi</h3>
                    <p>Fungsi adalah blok kode yang dapat dipanggil dan digunakan kembali dalam program. Dalam C, fungsi
                        harus didefinisikan sebelum digunakan.</p>
                    <pre><code>int add(int a, int b) {
    return a + b;
}

int result = add(5, 3);
printf("Hasil penjumlahan: %d", result);
</code></pre>

                    <h3>8. Masukan dan Keluaran</h3>
                    <p>Untuk berinteraksi dengan pengguna atau membaca/menampilkan data, C menyediakan fungsi
                        <code>printf()</code> untuk menampilkan output dan <code>scanf()</code> untuk membaca input dari
                        pengguna.</p>
                    <pre><code>int num;
printf("Masukkan sebuah angka: ");
scanf("%d", &num);
printf("Angka yang dimasukkan: %d", num);
</code></pre>

                    <h3>9. Array</h3>
                    <p>Array digunakan untuk menyimpan sejumlah nilai yang memiliki tipe data yang sama. Dalam C, Anda
                        dapat membuat dan mengakses array dengan menggunakan indeks.</p>
                    <pre><code>int numbers[5] = {1, 2, 3, 4, 5};

for (int i = 0; i < 5; i++) {
    printf("%d ", numbers[i]);
}
</code></pre>

                    <h3>Sumber Daya Belajar Lebih Lanjut</h3>
                    <p>Untuk mempelajari lebih lanjut tentang sintaks dasar C dan pengembangan lebih lanjut dengan
                        bahasa ini, ada banyak sumber daya yang dapat Anda manfaatkan:</p>
                    <ul>
                        <li>Buku: Ada banyak buku yang membahas pemrograman C dengan berbagai tingkatan keahlian.</li>
                        <li>Kursus Online: Ada kursus online interaktif yang tersedia secara gratis maupun berbayar.
                        </li>
                        <li>Contoh Program: Mencoba dan memodifikasi contoh program C yang tersedia di berbagai sumber
                            untuk meningkatkan pemahaman Anda.</li>
                        <li>Forum dan Komunitas: Bergabunglah dengan forum atau grup diskusi untuk berinteraksi dengan
                            sesama pemrogram dan mendapatkan bantuan jika Anda mengalami kesulitan.</li>
                    </ul>

                    <p>Selamat belajar dan semoga sukses dalam perjalanan Anda dalam mempelajari pemrograman C!</p>
                    <a class="btn btn-next f-left" href="<?= base_url('course/'.$id.'/1/1'); ?>">Sebelumnya</a>
                    <a class="btn btn-next" onclick='next(<?= $id ?>,1, <?= $curr ?>,2,"Sintaks Dasar Bahasa C");'>Selanjutnya</a>
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
                                    <div class="status <?php if($curr>1) echo 'check';  ?>"><?php if($curr>1) echo '&check;';  ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="list-materi current">
                            <div class="row">
                                <div class="col-lg-10">
                                    <a href="<?= base_url('course/'.$id.'/1/2'); ?>">Sintaks Dasar Bahasa C </a>
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
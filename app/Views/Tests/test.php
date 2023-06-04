<?php
    $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Test Awal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/tests/test.css">
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
            <span class="test-title">Test Awal</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">HOME</a>
                    <a class="nav-link" href="#">PROFILE</a>
                    <a class="btn btn-logout" href="<?= base_url('logout') ?>">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container content">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Pilih jawaban yang menurutmu paling benar</p>
                    </div>
                    <div class="wrapper-test">
                        <div class="wrap-soal">
                            Manakah dari pernyataan berikut yang merupakan deklarasi variabel yang benar dalam bahasa C?
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan11" data-id='1' onclick="choose(this);">
                                A. int x = 5;
                            </div>
                            <div class="pilgan-box f-right" id="pilgan12" data-id='2' onclick="choose(this);">
                                B. float y = "Hello"
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan13" data-id='3' onclick="choose(this);">
                                C. boolean z = true;
                            </div>
                            <div class="pilgan-box f-right" id="pilgan14" data-id='4' onclick="choose(this);">
                                D. string w = "Programming";
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="evaluasi1" onclick='evaluasi(1,1);'>Evaluasi</button>
                    <button type="button" class="btn btn-skip d-none" type="button" id="next1" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Pilih jawaban yang menurutmu paling benar</p>
                    </div>
                    <div class="wrapper-test">
                        <div class="wrap-soal">
                            Apa output yang dihasilkan oleh program berikut dalam bahasa C?
                            <pre class="code-wrapper">#include <stdio.h>

int main() {
    int x = 10;
    printf("%d, ", x);
    printf("%d", x + 5);
    return 0;
}
				            </pre>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan21" data-id='1' onclick="choose(this);">
                                A. 10, 15
                            </div>
                            <div class="pilgan-box f-right" id="pilgan22" data-id='2' onclick="choose(this);">
                                B. 15, 20
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan23" data-id='3' onclick="choose(this);">
                                C. 10, 10
                            </div>
                            <div class="pilgan-box f-right" id="pilgan24" data-id='4' onclick="choose(this);">
                                D. 5, 10
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="evaluasi2" onclick='evaluasi(2,1);'>Evaluasi</button>
                    <button type="button" class="btn btn-skip d-none" type="button" id="next2" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Pilih jawaban yang menurutmu paling benar</p>
                    </div>
                    <div class="wrapper-test">
                        <div class="wrap-soal">
                            Apa output yang dihasilkan oleh program berikut dalam bahasa C?
                            <pre class="code-wrapper">#include <stdio.h>
int main() {
    int num = 10;
    if (num > 5) {
        printf("Number is greater than 5");
    } else {
        printf("Number is less than or equal to 5");
    }
    return 0;
}
				            </pre>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan31" data-id='1' onclick="choose(this);">
                                A. Number is greater than or equal to 5
                            </div>
                            <div class="pilgan-box f-right" id="pilgan32" data-id='2' onclick="choose(this);">
                                B. Number is less than or equal to 5
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan33" data-id='3' onclick="choose(this);">
                                C. Number is greater than 5
                            </div>
                            <div class="pilgan-box f-right" id="pilgan34" data-id='4' onclick="choose(this);">
                                D. Number is less than 5
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="evaluasi3" onclick='evaluasi(3,2);'>Evaluasi</button>
                    <button type="button" class="btn btn-skip d-none" type="button" id="next3" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
                </div>
                <div class="carousel-item ">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Pilih jawaban yang menurutmu paling benar</p>
                    </div>
                    <div class="wrapper-test">
                        <div class="wrap-soal">
                            Berikut adalah prototipe fungsi dalam bahasa C:
                            <pre class="code-wrapper">int calculateSum(int a, int b);
				            </pre>
                            Bagaimana cara mengimplementasikan fungsi ini untuk mengembalikan hasil penjumlahan dari dua parameter yang diberikan?
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan41" data-id='1' onclick="choose(this);">
                                A. <<pre>int calculateSum(int a, int b) {
    sum = a + b;
    return sum;
}
</pre>
                            </div>
                            <div class="pilgan-box f-right" id="pilgan42" data-id='2' onclick="choose(this);">
                                B. <pre>int calculateSum(int a, int b) {
    return a + b;
}
</pre>
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan43" data-id='3' onclick="choose(this);">
                                C. <pre>calculateSum(int a, int b) {
    return a + b;
}
</pre>
                            </div>
                            <div class="pilgan-box f-right" id="pilgan44" data-id='4' onclick="choose(this);">
                                D. <pre>int calculateSum(int a, int b) {
    printf("%d", a + b);
}
</pre>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="evaluasi4" onclick='evaluasi(4,2);'>Evaluasi</button>
                    <button type="button" class="btn btn-skip d-none" type="button" id="next4" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Pilih jawaban yang menurutmu paling benar</p>
                    </div>
                    <div class="wrapper-test">
                        <div class="wrap-soal">
                            Berikut adalah deklarasi array dalam bahasa C:
                            <pre class="code-wrapper">int numbers[5] = {1, 2, 3, 4, 5};
				            </pre>
                            Bagaimana cara mengakses nilai yang terdapat pada indeks ke-3 dari array tersebut?
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan51" data-id='1' onclick="choose(this);">
                                A. numbers[2]
                            </div>
                            <div class="pilgan-box f-right" id="pilgan52" data-id='2' onclick="choose(this);">
                                B. numbers[3]
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan53" data-id='3' onclick="choose(this);">
                                C. numbers[4]
                            </div>
                            <div class="pilgan-box f-right" id="pilgan54" data-id='4' onclick="choose(this);">
                                D. numbers[5]
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="evaluasi5" onclick='evaluasi(5,3);'>Evaluasi</button>
                    <button type="button" class="btn btn-skip d-none" type="button" id="next5" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Pilih jawaban yang menurutmu paling benar</p>
                    </div>
                    <div class="wrapper-test">
                        <div class="wrap-soal">
                            Dalam bahasa C, apa yang akan terjadi jika menggunakan operator ++ pada variabel yang bernilai NULL?
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan61" data-id='1' onclick="choose(this);">
                                A. Akan terjadi error saat kompilasi.
                            </div>
                            <div class="pilgan-box f-right" id="pilgan62" data-id='2' onclick="choose(this);">
                                B. Variabel akan tetap bernilai NULL.
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left" id="pilgan63" data-id='3' onclick="choose(this);">
                                C. Variabel akan menjadi 0.
                            </div>
                            <div class="pilgan-box f-right" id="pilgan64" data-id='4' onclick="choose(this);">
                                D. Terjadi perilaku yang tidak terdefinisi (undefined behaviour).
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="evaluasi6" onclick='evaluasi(6,3);'>Evaluasi</button>
                    <button type="button" class="btn btn-skip d-none" type="button" id="next6" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Isi kodingan rumpang berikut sampai menghasilkan output yang diinginkan! Kamu bisa klik
                            button “Compile
                            kode” untuk mengecek jawaban</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <pre class="editor">#include &lt;stdio.h&gt;

int main() {
    int i;
    for (i = 1; i <= 10; i++) {
        if (/* Lengkapi kondisi */) {
            printf("%d ", i);
        }
    }
    return 0;
}
				            </pre>
                            <button type="button" class="btn btn-run " onclick="evalCode('1 3 5 7 9 ',7,0,1,0)" id='run7'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">1 3 5 7 9 </p>
                            <div class="preview-code" id="preview7"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="next7" data-bs-slide="next">SKIP</button>
                    <!-- <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div> -->
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Isi kodingan rumpang berikut sampai menghasilkan output yang diinginkan! Kamu bisa klik
                            button “Compile
                            kode” untuk mengecek jawaban</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <pre class="editor">#include &lt;stdio.h&gt;

int main() {
    int num1 = 5;
    int num2 = 8;
    int num3 = 6;
    float average;
    /* Lengkapi kode di sini */
    
    /* Akhir kode */
    printf("Nilai rata-rata: %.2f", average);
    return 0;
}

				            </pre>
                            <button type="button" class="btn btn-run"  onclick="evalCode('Nilai rata-rata: 6.33',8,1,1,0)" id='run8'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Nilai rata-rata: 6.33</p>
                            <div class="preview-code" id="preview8"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="next8"  data-bs-slide="next">SKIP</button>
                    <!-- <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div> -->
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Isi kodingan rumpang berikut sampai menghasilkan output yang diinginkan! Kamu bisa klik
                            button “Compile
                            kode” untuk mengecek jawaban</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <pre class="editor">#include &lt;stdio.h&gt;
#include &lt;string.h>&gt;
int countCharacter(char str[], char c) {
    /* Lengkapi kode di sini */
    
    /* Akhir kode */
}

int main() {
    char str[] = "Hello, World!";
    char character = 'o';
    int count = countCharacter(str, character);
    printf("Jumlah kemunculan karakter %c: %d", character, count);
    return 0;
}
				            </pre>
                            <button type="button" class="btn btn-run"  class="btn btn-run"  onclick="evalCode('Jumlah kemunculan karakter o: 2',9,2,2,0)" id='run9'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Jumlah kemunculan karakter o: 2</p>
                            <div class="preview-code" id="preview9"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="next9"  data-bs-slide="next">SKIP</button>
                    <!-- <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div> -->
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Isi kodingan rumpang berikut sampai menghasilkan output yang diinginkan! Kamu bisa klik
                            button “Compile
                            kode” untuk mengecek jawaban</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <pre class="editor">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;

int isPalindrome(char str[]) {
    /* Lengkapi kode di sini */
    
    /* Akhir kode */
}

int main() {
    char str[] = "madam";
    int result = isPalindrome(str);
    if (result == 1) {
        printf("%s adalah palindrom", str);
    } else {
        printf("%s bukan palindrom", str);
    }
    return 0;
}
				            </pre>
                            <button type="button" class="btn btn-run" onclick="evalCode('madam adalah palindrom',10,3,2,0)" id='run10'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">madam adalah palindrom</p>
                            <div class="preview-code" id="preview10"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="next10" data-bs-slide="next">SKIP</button>
                    <!-- <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div> -->
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Isi kodingan rumpang berikut sampai menghasilkan output yang diinginkan! Kamu bisa klik
                            button “Compile
                            kode” untuk mengecek jawaban</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <pre class="editor">#include &lt;stdio.h&gt;
#include &lt;string.h&gt;
int countWords(char str[]) {
    /* Lengkapi kode di sini */
    
    /* Akhir kode */
}

int main() {
    char str[] = "Ini adalah contoh kalimat";
    int wordCount = countWords(str);
    printf("Jumlah kata: %d", wordCount);
    return 0;
}
				            </pre>
                            <button type="button" class="btn btn-run" onclick="evalCode('Jumlah kata: 4',11,4,3,0)" id='run11'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Jumlah kata: 4</p>
                            <div class="preview-code" id="preview11"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="next11" data-bs-slide="next">SKIP</button>
                    <!-- <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div> -->
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <span>Sebelum memulai pelajaran, Yuk cek dulu pengetahuan awalmu </span>
                        <p>Isi kodingan rumpang berikut sampai menghasilkan output yang diinginkan! Kamu bisa klik
                            button “Compile
                            kode” untuk mengecek jawaban</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <pre class="editor">#include &lt;stdio.h&gt;

int isPrime(int n) {
    /* Lengkapi kode di sini */
    
    /* Akhir kode */
}

void printPrimes(int start, int end) {
    /* Lengkapi kode di sini */
    
    /* Akhir kode */
}

int main() {
    int start = 1;
    int end = 10;
    printPrimes(start, end);
    return 0;
}

				            </pre>
                            <button type="button" class="btn btn-run" onclick="evalCode('Bilangan Prima antara 1 dan 10: 2 3 5 7 ',12,5,3,1)" id='run12'>Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">Bilangan Prima antara 1 dan 10: 2 3 5 7&nbsp;</p>
                            <div class="preview-code" id="preview12"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" id="next12" onclick='result(this);' data-bs-slide="next" data-id="<?php echo $id; ?>">RESULT</button>
                    <!-- <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div> -->
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <p>Berdasarkan tes awal, <span id="username"><?php $session = session(); echo "@".$session->get('username') ?></span> ada di level <span id="result"></span></p>
                        <p>Hasil Tes Awalmu:</p>
                    </div>
                    <div class="wrap-hasil">
                        <div class="result">
                            Tes Dasar<span style="float:right;"><span id="dasar"></span>/4</span>
                        </div>
                    </div>
                    <div class="wrap-hasil">
                        <div class="result">
                            Tes Menengah<span style="float:right;"><span id='menengah'></span>/4</span>
                        </div>
                    </div>
                    <div class="wrap-hasil">
                        <div class="result">
                            Tes Mahir<span style="float:right;"><span id="mahir"></span>/4</span>
                        </div>
                    </div>
                    <center><a class="btn btn-home" href="<?= base_url('home') ?>">HOME</a></center>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
		<span>&#169; Tim GRAPEPro 2023</span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js"
    integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="/js/tests/test.js"></script>

</html>
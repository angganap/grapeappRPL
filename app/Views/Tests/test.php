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
                            Tipe data yang memiliki 2 nilai, yakni True dan False, disebut dengan...
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left">
                                A. Real
                            </div>
                            <div class="pilgan-box f-right">
                                B. String
                            </div>
                        </div>
                        <div class="wrap-pilgan">
                            <div class="pilgan-box f-left">
                                C. Boolean
                            </div>
                            <div class="pilgan-box f-right">
                                D. Char
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-skip" type="button"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">NEXT</button>
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
                            <pre id="editor">#include &lt;stdio.h&gt;

int main(){
    int a = 5;
    int b = 4;
    
    //isi kode dibawah

    printf("a lebih besar dari b");
}
				            </pre>
                            <button type="button" class="btn btn-run" id="run">Jalankan Kode</button>
                        </div>
                        <div class="col-lg-4">
                            <span class="output-title">Output:</span>
                            <p class="output-desc">a lebih besar dari b</p>
                            <div class="preview-code"></div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-skip"
                        data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" data-id="<?php echo $id; ?>" onclick="result(this);">RESULT</button>
                    <div class="clear"></div>
                </div>
                <div class="carousel-item">
                    <div class="soal">
                        <p>Berdasarkan tes awal, <span id="username">@antonioH</span> ada di level <span id="result">PEMULA</span></p>
                        <p>Hasil Tes Awalmu:</p>
                    </div>
                    <div class="wrap-hasil">
                        <div class="result">
                            Tes Dasar<span style="float:right;">1/5</span>
                        </div>
                    </div>
                    <div class="wrap-hasil">
                        <div class="result">
                            Tes Menengah<span style="float:right;">1/5</span>
                        </div>
                    </div>
                    <div class="wrap-hasil">
                        <div class="result">
                            Tes Mahir<span style="float:right;">1/5</span>
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
<link rel="stylesheet" type="text/css" href="/css/user/home.css">
</head>

<body>
    <?= $this->extend('Layout/template'); ?>

    <?= $this->section('content'); ?>

    <div class="container content">
        <div class="row">
            <div class="col-lg-4">
                <center><img class="avatar" src="/images/avatar.jpg"></center>
                <center><span class="name">Antonio Harahap</span></center>
                <center><span class="username">@antonioH</span></center>
                <div class="leaderboard">
                    <center><span class="lead-title">Leaderboard</span></center>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img class="ava-lead" src="/images/avatar.jpg">
                                    <span>@antonioH</span>
                                </td>
                                <td class="coin-amount">1020c</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img class="ava-lead" src="/images/avatar.jpg">
                                    <span>@agustianP</span>
                                </td>
                                <td class="coin-amount">900c</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <img class="ava-lead" src="/images/avatar.jpg">
                                    <span>@roseeLes</span>
                                </td>
                                <td class="coin-amount">880c</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <img class="ava-lead" src="/images/avatar.jpg">
                                    <span>@Bayuuu</span>
                                </td>
                                <td class="coin-amount">870c</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>
                                    <img class="ava-lead" src="/images/avatar.jpg">
                                    <span>@agustianP</span>
                                </td>
                                <td class="coin-amount">850c</td>
                            </tr>
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


    <?= $this->endSection(); ?>
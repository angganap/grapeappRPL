<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GRAPEPro | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/user/profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg ">
            <div class="container nav-cont">
                <a class="navbar-brand" href="#">
                    <img src="/images/logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" aria-current="page" href="#">HOME</a>
                        <a class="nav-link active" href="#">PROFILE</a>
                        <a class="btn btn-logout" href="#">LOGOUT</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
			<div class="row row-profile">
				<div class="col-lg-3">
					<center><img src="/images/avatar.jpg" class="profile-pic" id="profile-pic">
					</center>
					<h3 class="profile-name">Antonio Harahap</h3>
					<span class="username">@antonioH</span>
					<div class="info">
						<span class="info-item"><i class="bi bi-person-fill"></i>&nbsp;&nbsp; Level 2</span>
						<span class="info-item"><i class="bi bi-trophy-fill"></i>&nbsp;&nbsp; 1st</span>
						<span class="info-item"><i class="bi bi-diamond-fill"></i>&nbsp;&nbsp; 1020 Coin(s)</span>
						<span class="info-item"><i class="bi bi-award-fill"></i>&nbsp;&nbsp; 3 Badges</span>
						<span class="info-item"><i class="bi bi-star-fill"></i>&nbsp;&nbsp; 300 XP</span>
					</div>
				</div>
				<div class="col-lg-9 nav-info-user">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<button class="nav-link active" id="nav-progress-tab" data-bs-toggle="tab"
								data-bs-target="#nav-progress" type="button" role="tab" aria-controls="nav-progress"
								aria-selected="false"><i class="bi bi-layers-fill"></i>&nbsp;&nbsp;Progress</button>
							<button class="nav-link" id="nav-badges-tab" data-bs-toggle="tab"
								data-bs-target="#nav-badges" type="button" role="tab" aria-controls="nav-badges"
								aria-selected="false"><i class="bi bi-award-fill"></i>&nbsp;&nbsp;Badges</button>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-progress" role="tabpanel" aria-labelledby="nav-progress-tab"
							tabindex="0">
							<div class="card card-progress">
								<h5 class="card-header">Course Progress</h5>
								<div class="card-body">
									<h6>Perkenalan Pemrograman</h6>
									<div class="progress">
										<div class="progress-bar progress-bar-striped"
											role="progressbar" aria-label="Example with label"
											style="width: 35%; aria-valuenow= 35"
											aria-valuemin="0" aria-valuemax="100">35%</div>
									</div>
								</div>
							</div>
							<div class="card card-progress">
								<h5 class="card-header">Activity Histories</h5>
								<div class="card-body">
									<div class="row-custom">
										<div class="coloumn-1"><i class="bi bi-arrow-up-circle-fill"></i>&nbsp; Level Up
										</div>
										<div class="coloumn-2">Level up to Level 3 and have become an Explorer</div>
									</div>
									<div class="row-custom">
										<div class="coloumn-1"><i class="bi bi-star-fill"></i>&nbsp; +500 XP</div>
										<div class="coloumn-2">You have finished basic algorithm material</div>
									</div>
									<div class="row-custom">
										<div class="coloumn-1"><i class="bi bi-award-fill"></i></i>&nbsp; New Badges
										</div>
										<div class="coloumn-2">You have earned Digital Badge System</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="nav-badges" role="tabpanel" aria-labelledby="nav-badges-tab"
							tabindex="0">
							<div class="card card-badges" style="width: 18rem;">
								<img src="/images/badges.png" class="card-img-top" alt="...">
								<div class="card-body">
									<center>
										<h5 class="card-title">Digital Badge System</h5>
									</center>
									<center>
										<p class="card-text">COMPLETION BADGES</p>
									</center><br />
									<center>
										<p class="card-text">Earned: 14 Feb, 2022 02:30:00</p>
									</center>
								</div>
							</div>
							<div class="card card-badges" style="width: 18rem;">
								<img src="../images/badges.png" class="card-img-top" alt="...">
								<div class="card-body">
									<center>
										<h5 class="card-title">Digital Badge System</h5>
									</center>
									<center>
										<p class="card-text">COMPLETION BADGES</p>
									</center><br />
									<center>
										<p class="card-text">Earned: 14 Feb, 2022 02:30:00</p>
									</center>
								</div>
							</div>
							<div class="card card-badges" style="width: 18rem;">
								<img src="../images/badges.png" class="card-img-top" alt="...">
								<div class="card-body">
									<center>
										<h5 class="card-title">Digital Badge System</h5>
									</center>
									<center>
										<p class="card-text">COMPLETION BADGES</p>
									</center><br />
									<center>
										<p class="card-text">Earned: 14 Feb, 2022 02:30:00</p>
									</center>
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
    <!-- <div class="black-wrapper change-pic-pop-up"></div>
	<div class="card w-40 change-pic-pop-up card-change-pic">
		<div class="card-body">
			<i class="bi bi-x" id="close"></i>
			<center><img src='/images/avatar.jpg' class="change-img" id="change-img"></center>
			<form method="post" id="change-img-form">
				<div class="input-group mb-3">
					<input type="file" class="form-control" id="inputGroupFile02">
					<label class="input-group-text" for="inputGroupFile02">Upload</label>
				</div>
			</form>
			<buttton class="btn btn-primary w-100 mt-20" id="change-pic">Change Photo Profile</buttton>
		</div>
	</div> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
	integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="/js/user/profile.js"></script>
</html>
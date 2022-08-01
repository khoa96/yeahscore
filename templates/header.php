<header class="main-header">
	<div class="container-fluid">
		<div class="row g-0 justify-content-between align-items-center">
			<div class="col-auto col-logo">
				<a href="#" class="logo">
					<img src="./images/logo.png" alt="yeahscore" class=" d-none d-lg-block">
					<img src="./images/logo-sp.png" alt="yeascore" class="d-block d-lg-none">
				</a>
			</div>
			<div class="col-auto col-nav">
				<ul class="main-nav d-none d-lg-block">
					<li><a href="live.php" class="">Live Scores</a></li>
					<li><a href="#">Statistics</a></li>
					<li><a href="#">Previews</a></li>
					<li>
						<button class="btn-header btn-signin">Sign in</button>
					</li>
					<li>
						<button class="btn-header btn-signup">Sign up</button>
					</li>
				</ul>
				<button class="btn border-0 d-block d-lg-none btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.42871 4.42871H18.5716M1.42871 10.143H18.5716M1.42871 15.8573H18.5716" stroke="#1A202C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</div>
	</div>
</header>
<!-- /END .main-header -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title">
			<a href="#" class="logo"><img src="./images/logo-sp.png" alt="yeahscore"></a>
		</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<ul class="main-nav">
			<li><a href="#" class="">Live Scores</a></li>
			<li><a href="#">Statistics</a></li>
			<li><a href="#">Previews</a></li>
		</ul>
	</div>
</div>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/jquery.magnific-popup.min.js"></script>
<script src="./js/main.js"></script>
<!-- /END .offcanvas -->
<!-- /.main-header -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eir</title>
	<meta name="description" content="Bodrum - Modular Multi Purpose HTML5 template by tempload." />
	<meta name="keywords" content="bodrum, startup, saas, agency, development, html, template, tempload" />
	<meta name="author" content="tempload" />

	<!-- Favicon -->
	<!-- {{URL::asset('eir-assets/images/costum-images/Logo/favicon.png'); }} -->

	<link rel="icon" type="image/png" href="{{URL::asset('eir-assets/images/costum-images/Logo/favicon.png'); }} " />

	<!-- Bootstrap & Plugins CSS -->
	<link href="{{URL::asset('eir-assets/css/bootstrap.min.css'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('eir-assets/css/font-awesome.min.css'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('eir-assets/css/owl.carousel.min.css'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('eir-assets/css/owl.theme.default.min.css'); }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Custom CSS -->
	<link href="{{URL::asset('eir-assets/css/theme.css'); }}" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- ***** Preloader Start ***** -->
	<!-- <div id="preloader">
		<div id="loader" class="spinner">
			<div id="shadow"></div>
			<div id="box"></div>
		</div>
	</div> -->

	<!-- Pre-Load Disabled -->
	<!-- ***** Preloader End ***** -->

	<!-- Header Start -->
	<header class="main-nav-container box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-nav">
						<!-- Logo Start -->
						<a href="/" class="logo pull-left d-flex align-items-center">
							<img src="{{URL::asset('eir-assets/images/costum-images/Logo/Logo1v2.svg'); }}" alt="">
						</a>
						<!-- Logo End -->

						<!-- Navigation Start -->
						<nav class="menu pull-right">
							<ul class="menu-container list-unstyled d-flex align-items-center">
								<!-- Mega Menu Start -->
								<li class="menu-item open-sub-menu">
									<a class="nav-link submenu-icon" href="#">Home</a>
									<ul class="sub-menu list-unstyled box rounded-bottom">
										<li class="sub-menu-item">
											<a href="/register" class="sub-menu-link">S'inscrire</a>
										</li>
										<li class="sub-menu-item">
											<a href="#" class="sub-menu-link">Blog</a>
										</li>
										<li class="sub-menu-item">
											<a href="/news" class="sub-menu-link">News Letter</a>
										</li>
										<li class="sub-menu-item">
											<a href="/terms" class="sub-menu-link">Terms et
												Conditions</a>
										</li>
									</ul>
								</li>
								<!-- Mega Menu End -->
								<!-- tba - Join Now Entry. -->
								<li class="menu-item d-none d-lg-block">
									<a class="nav-button transition-3d-hover"
										href="/login"
										target="_blank">Connexion</a>
								</li>
							</ul>
						</nav>
						<!-- Navigation End -->

						<a class="menu-trigger">
							<span>Menu</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->


	<!-- Welcome Start -->
	<section class="welcome-overlay d-flex align-items-center m-t-80">
		<div class="background">
			<div class="bg-image imgfix overlay-gradient opacity-70">
				<img src="eir-assets/images/costum-images/slide-x1.webp" alt="">
			</div>
			<div class="bg-1">
				<img src="eir-assets/images/welcome/1.svg " alt="">
			</div>
		</div>
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<h1 class="m-b-10">Nous avons une solution incroyable!</h1>
						<p class="m-b-40">Obtenez des données sur vos médicaments rapidement et facilement!
						</p>
						<div class="buttons d-flex align-items-center">
							<a href="/register"
								class="button button-primary transition-3d-hover m-r-30 sm-m-r-0">S'inscrire!</a>
							<!-- <a href="#" class="video-button oval">
								<div class="play"><i class="fa fa-play"></i></div>
								<span>Watch Video</span>
							</a> -->
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 d-flex align-items-center justify-content-center">
						<!-- <a href="#" class="play-button center-center">
							<i class="fa fa-play"></i>
						</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Welcome End -->


	<!-- Features Start -->
	<section class="p-t-120 p-b-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 text-center m-b-50"
					data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<img src="eir-assets/images/costum-images/slide1.svg" class="m-b-30" alt="">
					<h5 class="m-b-10">Des millions de données médicales.</h5>
					<p class="m-b-20">Nous vous offrons un accès complet et rapide à des données authentiques provenant de sources autorisées..</p>
					<a href="#" class="button button-primary-soft transition-3d-hover">Read More</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 text-center m-b-50"
					data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<img src="eir-assets/images/costum-images/slide2.svg" class="m-b-30" alt="">
					<h5 class="m-b-10">Je vous informe de vos cosumptions.</h5>
					<p class="m-b-20">Obtenez des analyses historiques sur un certain médicament.</p>
					<a href="#" class="button button-primary-soft transition-3d-hover">Read More</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 text-center m-b-50"
					data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<img src="eir-assets/images/costum-images/slide3.svg" class="m-b-30" alt="">
					<h5 class="m-b-10">Soyez en bonne santé!</h5>
					<p class="m-b-20">Recevez des courriels informatifs comprenant des mises à jour sur vos médecins.</p>
					<a href="#" class="button button-primary-soft transition-3d-hover">Read More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Features End -->

	<!-- About Start -->
	<section class="p-t-120 p-b-120 section-blue">
		<div class="container">
			<div class="row d-flex align-items-center">
				<!-- left column start -->
				<div class="col-lg-6 sm-margin-bottom-30">
					<div class="row">
						<div class="col-6">
							<!-- <div class="h-small rounded overflow-hidden imgfix-animate m-b-30" data-scroll-reveal="enter left move 50px over 0.6s after 0.2s">
								<img src="eir-assets/images/costum-images/slide-x1.webp" alt="">
							</div>
							<div class="h-large rounded overflow-hidden imgfix-animate" data-scroll-reveal="enter left move 50px over 0.6s after 0.2s">
								<img src="eir-assets/images/costum-images/slide-x1.webp" alt="">
							</div> -->
							<img src="eir-assets/images/costum-images/slide-x2v3.gif" width="650" alt="">
						</div>
						<div class="col-6">
							<!-- <div class="h-large rounded overflow-hidden imgfix-animate m-b-30" data-scroll-reveal="enter right move 50px over 0.6s after 0.2s">
								<img src="eir-assets/images/costum-images/slide-x1.webp" alt="">
							</div>
							<div class="h-small rounded overflow-hidden imgfix-animate" data-scroll-reveal="enter right move 50px over 0.6s after 0.2s">
								<img src="eir-assets/images/costum-images/slide-x1.webp" alt="">
							</div> -->

						</div>
					</div>
				</div>
				<!-- left column end -->

				<!-- right column start -->
				<div class="offset-lg-1 col-lg-5">
					<div class="header-badge m-b-15">ce que nous faisons?</div>
					<h2 class="m-b-10">Nous associons la technologie à la santé!</h2>
					<p class="m-b-40">Eir Health and Medics associe les technologies de l'information à la gestion de la santé en fournissant un accès facile aux données et aux analyses!<br>
						<div class="row">
							<div class="col-md-6">
								<div class="icon-list d-flex align-items-center m-b-15">
									<div class="icon">
										<i class="fa fa-check"></i>
									</div>
									<p>Accès complet et facile.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="icon-list d-flex align-items-center m-b-15">
									<div class="icon">
										<i class="fa fa-check"></i>
									</div>
									<p>Services sécurisés.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="icon-list d-flex align-items-center m-b-15">
									<div class="icon">
										<i class="fa fa-check"></i>
									</div>
									<p>Technologie solide.</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="icon-list d-flex align-items-center m-b-15">
									<div class="icon">
										<i class="fa fa-check"></i>
									</div>
									<p>Convivial.</p>
								</div>
							</div>
						</div>
				</div>
				<!-- right column end -->
			</div>
		</div>
	</section>
	<!-- About End -->
	<!-- Parallax Start -->
	<section class="parallax overlay-gradient opacity-70" data-image-src="eir-assets/images/costum-images/slide-x1.webp">
		<div class="content">
			<div class="container">
				<div class="row text-center">
					<div class="offset-lg-3 col-lg-6">
						<div class="header-badge-black m-b-15">Qu'est-ce que vous attendez?</div>
						<h1 class="display-4 text-white m-b-40">Inscrivez-vous à <strong>Eir </strong>maintenant!
						</h1>
						<a href="/register" class="button button-primary transition-3d-hover">S'inscrire!</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Parallax End -->
	<!-- Footer Start -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8">
					<div class="divider m-b-60"></div>
				</div>
			</div>
			<div class="row m-b-30">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<img src="eir-assets/images/costum-images/Logo/Logo1v2.svg" class="m-b-20" alt="">
					<div class="text">Eir online Health & Pharmacie est une solution simple pour vous aider à organiser, rechercher et suivre vos médicaments. </div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h6 class="m-b-10">Helpful Links : </h6>
					<ul class="footer-nav list-unstyled">
						<li><a href="/login"><i class="fa fa-angle-right"></i><span>Connexion</span></a></li>
						<li><a href="/register"><i class="fa fa-angle-right"></i><span>S'inscrire</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>News Letter</span></a></li>
						<!-- <li><a href="#"><i class="fa fa-angle-right"></i><span>Contactez-nous</span></a></li> -->
						<li><a href="terms-conditions.html"><i class="fa fa-angle-right"></i><span>Termes</span></a></li>
</ul>
<h6 class="m-b-10">Special Links : </h6>
						<li><a href="/administrator"><i class="bi bi-activity"></i><span></span></a>
						<li><a href="/eid_db"><i class="bi bi-door-open-fill"></i><span></span></a>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12">
					<h6 class="m-b-10">Contact Us : </h6>
					<div class="address">
						<p>42, Lot Hind - Casabarata, 9901<br>Tangier, Kingdom of Morocco.</p>
						<p>Phone: (212)</p>
						<p><span>E-Mail: </span><a href="#">tebbaa.adnane.dev@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="copyright text-center">© 2022 Eir. All Rights Reserved. By Tebbaa adnane.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->


	<!-- jQuery -->
	<script src="eir-assets/js/jquery-2.1.0.min.js"></script>
	<!-- Bootstrap -->
	<script src="eir-assets/js/popper.js"></script>
	<script src="eir-assets/js/bootstrap.min.js"></script>
	<!-- Plugins -->
	<script src="eir-assets/js/scrollreveal.min.js"></script>
	<script src="eir-assets/js/imgfix.min.js"></script>
	<script src="eir-assets/js/owl.carousel.min.js"></script>
	<script src="eir-assets/js/parallax.min.js"></script>
	<script src="eir-assets/js/waypoints.min.js"></script>
	<script src="eir-assets/js/jquery.counterup.min.js"></script>
	<!-- Global Init -->
	<script src="eir-assets/js/global.js"></script>
	<!-- Green Sock - Gsap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
</body>
</html>
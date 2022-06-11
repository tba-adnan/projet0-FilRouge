<!-- @extends('layouts.app') -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eir - Connexion</title>
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
									<a class="nav-link submenu-icon" href="/">Home</a>
									<ul class="sub-menu list-unstyled box rounded-bottom">
										<li class="sub-menu-item">
											<a href="/login" class="sub-menu-link">Connexion</a>
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
								<!-- <li class="menu-item d-none d-lg-block">
									<a class="nav-button transition-3d-hover"
										href="/"
										target="_blank">Connexion</a>
								</li> -->
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
	<br>
	<!-- Header End -->



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("S'inscrire : ") }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom : ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email : ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe : ') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le mot de passe : ') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __("S'inscrire") }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

	<!-- Footer Start -->
	<br> 
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
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Contactez-nous</span></a></li>
						<li><a href="terms-conditions.html"><i class="fa fa-angle-right"></i><span>Termes</span></a></li>
						<li><a href="/administrator"><i class="fa fa-angle-right"></i><span>🔒</span></a></
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


@endsection

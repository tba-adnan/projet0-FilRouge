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
	<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.jss'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); }}" rel="stylesheet" type="text/css">
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
                                <form action="/logout" method="post">
									<a class="nav-link "  href="/logout">Déconnexion</a>
                                </form>
								</li>
							</ul>
						</nav>
						<!-- Navigation End -->
						<a class="menu-trigger">
							<span>Menu  </span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<br>

@section('content')

<div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-6">

                <div class="form">
                  <input type="text" class="form-control form-input" placeholder="Recherche de médicaments...">
                </div>
                {{-- <h1>{{$ppv}}</h1> --}}
				<br>
				@foreach ($data as $item)
				<div class="alert alert-primary" role="alert">
					{{$item["_source"]["name"] }}
				  </div>
				@endforeach
			
              </div>
              
            </div>
            
          </div>
		  
@endsection

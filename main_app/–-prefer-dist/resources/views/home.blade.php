<!-- @extends('layouts.app') -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eir - Tableau de bord</title>
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
	<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.jss'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); }}" rel="stylesheet" type="text/css">
	<link href="{{URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'); }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
<body>



@section('content')
<!-- Search DATA -->
<div class="container">
            <div class="row height d-flex justify-content-center align-items-center">
              <div class="col-md-6">
				<form action="/home" method="GET">
                <div class="form">
                  <input type="text" name="search" class="form-control form-input"  placeholder="Recherche des médicaments...🔍">
				  <!-- <button type="button" class="btn btn-success">chercher</button> -->
                </div>
				</form>
<br>
@foreach ($data as $item)
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
		{{$item["_source"]["name"] }}
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
	  @if(isset($item["_source"]["ppv"] ))
      Prix : {{$item["_source"]["ppv"] }} dh
	  @else
  <p>is not exist or write something here</p>
	  @endif
	  <br>
	  @if(isset($item["_source"]["distributeuroufabriquant"] ))
	  Par :  {{$item["_source"]["distributeuroufabriquant"] }}
	  @endif
	  <br>
	  @if(isset($item["_source"]["tags"][0] ))
	  Du : {{$item["_source"]["tags"][0] }}
	  @endif
	  <br>
	  @if(isset($item["_source"]["principes"][0] ))
	  Principe : {{$item["_source"]["principes"][0] }}
	  @endif
	  <br>
	  
      </div>
    </div>
  </div>

  @endforeach




  

<!-- Search DATA -->


</div>
</div>
</div>  
@endsection


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
    <link href="{{URL::asset('eir-assets/costum-css/side_nav.css'); }}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('eir-assets/costum-css/costum-home.css'); }}" rel="stylesheet" type="text/css">
    <!--  CSS CDNs -->
    <link href="{{URL::asset('eir-assets/css/theme.css'); }}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css'); }}"
        rel="stylesheet" type="text/css">
    <link href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'); }}"
        rel="stylesheet" type="text/css">
    <link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.jss'); }}" rel="stylesheet"
        type="text/css">
    <link href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); }}"
        rel="stylesheet" type="text/css">
    <link href="{{URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'); }}"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"
        integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <header class="main-nav-container box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-nav">
						<a href="/" class="logo pull-left d-flex align-items-center">
							<img src="{{URL::asset('eir-assets/images/costum-images/Logo/Logo1v2.svg'); }}" alt="">
						</a>
						<nav class="menu pull-right">
							<ul class="menu-container list-unstyled d-flex align-items-center">
								<li class="menu-item open-sub-menu">
                                <form action="/logout" method="post">
									<a class="nav-link "  href="/logout">Déconnexion</a>
                                </form>
								</li>
							</ul>
						</nav>
						<a class="menu-trigger">
							<span>Menu  </span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header> -->
    <br>

<body>
    <!-- BST NAVBAR start. -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="cstnav">
        <img scr="http://eir.io/eir-assets/images/costum-images/Logo/Logo1v2.svg">
        <!-- <a class="navbar-brand">Eir</a> -->
        <a href="/" class="logo pull-left d-flex align-items-center">
            <img src="{{URL::asset('eir-assets/images/costum-images/Logo/Logo1v2.svg'); }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <form method="POST">
                        <!-- <a class="nav-link" href="/">Déconnexion<span class="sr-only">(current)</span></a> -->
                        <a class="nav-button transition-3d-hover" href="/login" target="_blank">Déconnexion</a>
                </li>
                </form>
                <li class="nav-item">
                    <!-- <a class="nav-link disabled" href="#">compte</a> -->
                </li>
            </ul>
        </div>
    </nav>
    <!-- BST NAVBAR end. -->
    <!-- 
    <div id="wrapper">
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <hr>
                    <a class="bi bi-person-circle" href="#">
                        Bonjour {{ Auth::user()->name }}!
                    </a>
                </li>
                <li>
                    <a class="bi bi-geo-alt-fill"
                        href="https://www.google.com/search?q=+pharmacies&tbm=lcl&sxsrf=ALiCzsapKiVUgpJZkFYjhwNkpSvJ5OJGww%3A1655667397996&ei=xXqvYsi6PJSjlwSqubh4&oq=+pharmacies&gs_l=psy-ab.3..0i273k1j0i30i7k1l9.5074.5074.0.5265.1.1.0.0.0.0.187.187.0j1.1.0....0...1c.1.64.psy-ab..0.1.186....0.-GaCRqh9sdA#rlfi=hd:;si:;mv:[[35.782399,-5.7794872],[35.7522151,-5.8401784999999995]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3,lf:1"> Pharmacie proche </a>
                </li>
                <li>
        
                </li>
                <li>
                    <hr>
        
                </li>
            </ul>

        </div> -->
    <!-- /#sidebar-wrapper -->





    <!-- Page Content -->
    <br>
    <div id="page-content-wrapper" id="main-show">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Search DATA -->
                    <div class="container">
                        <div class="row height d-flex justify-content-center align-items-center">
                            <div class="col-md-8">
                                <form action="/home" method="GET">
                                    <div class="form">
                                        <!-- <i class="bi bi-search"></i> -->
                                        <input type="text" name="search" class="form-control form-input "
                                            placeholder="Recherche des médicaments...🔍">
                                        <!-- <button type="button" class="btn btn-success">chercher</button> -->
                                    </div>
                                    <br>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"><span
                                                id="checkboxes">Chercher dans
                                                l'API </span></label>

                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label " for="customCheck2"><span
                                                id="checkboxes">Chercher dans la base
                                                donnés du Eir </span></label>

                                    </div>

                                    <hr>
                                    <br>
                                </form>
                                <!-- Main app. -->
                                @foreach ($data as $item)
                                <br>
                                <div id="accordion">
                                    <div class="card" id="ufo">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn " data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <h6 class="bi bi-file-earmark-medical">
                                                        {{$item["_source"]["name"] }}</h6>
                                                </button>
                                            </h5>
                                        </div>
                                        <div class="collapse show" aria-labelledby="headingOne">
                                            <div class="card-body">
                                                @if(isset($item["_source"]["ppv"] ))
                                                <p class="badge badge-pill badge-success"> Prix :
                                                    {{$item["_source"]["ppv"] }} dh </p>
                                                @else
                                                <p style="color:black;  font-style: italic"
                                                    class="badge badge-pill badge-danger">Type : Substence</p>
                                                <p style="color:red;  font-style: italic">les informations sur le
                                                    remboursement n'est pas disponible ❌</p>
                                                <!-- <p href='https://www.google.com/search?q={{$item["_source"]["name"]}}'>Plus d'informations</p> -->
                                                @endif
                                                <!-- bootstrap badge -->
                                                <br>
                                                <i class="bi bi-hospital"></i>
                                                @if(isset($item["_source"]["distributeuroufabriquant"] ))
                                                <span id="main_text"> Laboratoire :
                                                </span>{{$item["_source"]["distributeuroufabriquant"] }}
                                                @endif
                                                <br>
                                                <i class="bi bi-bandaid"></i>
                                                @if(isset($item["_source"]["tags"][0] ))
                                                <span id="main_text"> Système ciblé : </span>
                                                {{$item["_source"]["tags"][0] }}
                                                @endif
                                                <br>
                                                <i class="bi bi-droplet"></i>
                                                @if(isset($item["_source"]["principes"][0] ))
                                                <span id="main_text"> Principe :
                                                </span>{{$item["_source"]["principes"][0] }}
                                                @endif
                                                <br>
                                                <span class="bi bi-tags-fill"> Données d'API</span>
                                                <br>
                                                <!-- Button trigger modal -->
                                                <br>
                                                <button type="button" class="btn btn-primary bi bi-cash-stack"
                                                    data-toggle="modal" data-target="#exampleModal">
                                                    Données de remboursement
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <!-- <i class="bi bi-clipboard2-pulse"></i> -->
                                                                <h5 class="modal-title bi bi-clipboard2-pulse"
                                                                    id="exampleModalLabel">
                                                                    {{$item["_source"]["name"] }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <i class="bi bi-bandaid"></i>
                                                                @if(isset($item["_source"]["tags"][0] ))
                                                                <span id="main_text"> Système ciblé : </span>
                                                                {{$item["_source"]["tags"][0] }}
                                                                @endif
                                                                <br>
                                                                <i class="bi bi-cash-stack"></i>
                                                                <span id="main_text"> Remboursement : </span>
                                                                @if(isset($item["_source"]["ppv"] ))
                                                                {{$item["_source"]["ppv"] * 70 / 100 }}
                                                                @else
                                                                <span>xxx</span>
                                                                @endif
                                                              
                                                                <!--  -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fermer</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save
                                                                    changes</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Search DATA API -->


                                    <!-- Search DATA DB -->
                                    @foreach ($medic as $dbe)
                                    <br>
                                    <div id="accordion">
                                        <div class="card" id="ufo">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn " data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <h6 class="bi bi-file-earmark-medical">
                                                            {{$dbe->nom_medic }}</h6>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div class="collapse show" aria-labelledby="headingOne">
                                                <div class="card-body">
                                                    <p class="badge badge-pill badge-success"> Prix :
                                                        {{$dbe->prix_medic }} dh </p>
                                                    <!-- bootstrap badge -->
                                                    <br>
                                                    <i class="bi bi-hospital"></i>
                                                    <span id="main_text"> Laboratoire :
                                                    </span style="italic">Pas d'informations!
                                                    <br>
                                                    <i class="bi bi-bandaid"></i>
                                                    <span id="main_text"> Système ciblé : Pas d'informations!</span>
                                                    <br>
                                                    <i class="bi bi-droplet"></i>
                                                    <span id="main_text"> Principe : Pas d'informations!
                                                    </span>
                                                    <br>
                                                    <i class="bi bi-cash-stack"></i>
                                                    <span id="price_db"> Remboursement : {{$dbe->rom_medic }} dh.
                                                    </span>
                                                    <br>
                                                    <span class="bi bi-tags-fill"> Données de la base de données</span>
                                                    <br>
                                                    @endforeach
                                                    <!-- Search DATA DB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /#page-content-wrapper -->

                                </div>
                                <!--  -->
                                @section('content')
                            </div>
                        </div>
                    </div>
                    @endsection


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

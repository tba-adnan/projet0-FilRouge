import logo from '../assets/images/costum-images/Logo/Logo1v2.svg';
import '../assets/css/bootstrap-datetimepicker-standalone.css';
import '../assets/css/bootstrap-datetimepicker.css';
import '../assets/css/bootstrap-datetimepicker.min.css';
import '../assets/css/bootstrap-select.css';
import '../assets/css/bootstrap-select.min.css';
import '../assets/css/bootstrap.css';
import '../assets/css/bootstrap.min.css';
import '../assets/css/costum-dev.css';
import '../assets/css/default.css';
import '../assets/css/documentation.css';
import '../assets/css/font-awesome.min.css';
import '../assets/css/monokai-sublime.css';
import '../assets/css/owl.carousel.min.css';
import '../assets/css/owl.theme.default.min.css';
import '../assets/css/theme.css';
import '../assets/css/theme.min.css';

function Footer() {
  return (
	<footer class="footer">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/theme.css" rel="stylesheet" type="text/css"></link>
		<div class="container">
			<div class="row">
				<div class="offset-lg-2 col-lg-8">
					<div class="divider m-b-60"></div>
				</div>
			</div>
			<div class="row m-b-30">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<img src={logo} class="m-b-20" alt=""/>
					<div class="text">Eir online Health & Pharmacie est une solution simple pour vous aider à organiser, rechercher et suivre vos médicaments.</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h6 class="m-b-10">Helpful Links</h6>
					<ul class="footer-nav list-unstyled">
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Connexion</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>S'inscrire</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Blog</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>News Letter</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Contactez-nous</span></a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i><span>Termes</span></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12">
					<h6 class="m-b-10">Contact Us</h6>
					<div class="address">
						<p>42, Lot Hind - Casabarata, 9901, Tangier, Kingdom of Morocco.</p>
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
  );
}
export default Footer;
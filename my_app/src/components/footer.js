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

	<footer className="footer">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
	<link href="../assets/css/theme.css" rel="stylesheet" type="text/css"></link>
		<div className="container">
			<div className="row">
				<div className="offset-lg-2 col-lg-8">
					<div className="divider m-b-60"></div>
				</div>
			</div>
			<div className="row m-b-30">
				<div className="col-lg-5 col-md-12 col-sm-12">
					<img src={logo} className="m-b-20" alt=""/>
					<div className="text">Eir online Health & Pharmacie est une solution simple pour vous aider à organiser, rechercher et suivre vos médicaments.</div>
				</div>
				<div className="col-lg-2 col-md-4 col-sm-6 col-6">
					<h6 className="m-b-10">Helpful Links</h6>
					<ul className="footer-nav list-unstyled">
						<li><a href="#"><i className="fa fa-angle-right"></i><span>Connexion</span></a></li>
						<li><a href="#"><i className="fa fa-angle-right"></i><span>S'inscrire</span></a></li>
						<li><a href="#"><i className="fa fa-angle-right"></i><span>Blog</span></a></li>
						<li><a href="#"><i className="fa fa-angle-right"></i><span>News Letter</span></a></li>
						<li><a href="#"><i className="fa fa-angle-right"></i><span>Contactez-nous</span></a></li>
						<li><a href="#"><i className="fa fa-angle-right"></i><span>Termes</span></a></li>
					</ul>
				</div>
				<div className="col-lg-3 col-md-4 col-sm-12">
					<h6 className="m-b-10">Contact Us</h6>
					<div className="address">
						<p>42, Lot Hind - Casabarata, 9901, Tangier, Kingdom of Morocco.</p>
						<p>Phone: (212)</p>
						<p><span>E-Mail: </span><a href="#">tebbaa.adnane.dev@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div className="row">
				<div className="col-lg-12">
					<p className="copyright text-center">© 2022 Eir. All Rights Reserved. By Tebbaa adnane.</p>
				</div>
			</div>
		</div>
<script src="../assets/js/jquery-2.1.0.min.js"></script>
<script src="../assets/js/popper.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/scrollreveal.min.js"></script>
<script src="../assets/js/imgfix.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/parallax.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
</footer>

  );
}
export default Footer;
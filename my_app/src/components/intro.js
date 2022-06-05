// import logo from '../assets/images/costum-images/Logo/Logo1v2.svg';
import slide from '../assets/images/costum-images/slide-x1.webp';
import slideone from '../assets/images/welcome/1.svg'; 
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

function Intro() {
  return (
<section class="welcome-overlay d-flex align-items-center m-t-80">
		<div class="background">
			<div class="bg-image imgfix overlay-gradient opacity-70">
				<img src={slide} alt=""/>
			</div>
			<div class="bg-1">
				<img src={slideone} alt=""/>
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
							<a href="#"
								class="button button-primary transition-3d-hover m-r-30 sm-m-r-0">Join Now!</a>
						</div>
					</div>
					<div class="offset-lg-2 col-lg-5 d-flex align-items-center justify-content-center">
					</div>
				</div>
			</div>
		</div>
	</section>
  );
}
export default Intro;

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

function Header() {
  return (
    <header className="main-nav-container box">
    <div className="container">
        <div className="row">
            <div className="col-lg-12">
                <div className="main-nav">
                    <a href="home/classNameic-agency.html" className="logo pull-left d-flex align-items-center">
                        <img src={logo} alt=""/>
                    </a>
                    <nav className="menu pull-right">
                        <ul className="menu-container list-unstyled d-flex align-items-center">
                            <li className="menu-item open-sub-menu">
                                <a className="nav-link submenu-icon" href="#">Home</a>
                                <ul className="sub-menu list-unstyled box rounded-bottom">
                                    <li className="sub-menu-item">
                                        <a href="../blog/card-style.html" className="sub-menu-link">Blog</a>
                                    </li>
                                    <li className="sub-menu-item">
                                        <a href="../blog/list-style.html" className="sub-menu-link">News Letter</a>
                                    </li>
                                    <li className="sub-menu-item">
                                        <a href="../blog/profile.html" className="sub-menu-link">Connexion</a>
                                    </li>
                                    <li className="sub-menu-item">
                                        <a href="../blog/single-article.html" className="sub-menu-link">Terms et
                                            Conditions</a>
                                    </li>
                                </ul>
                            </li>
                            <li className="menu-item d-none d-lg-block">
                                <a className="nav-button transition-3d-hover"
                                    href="https://themeforest.net/item/bodrum-modular-multi-purpose-html5-template/25649533"
                                    target="_blank">Login</a>
                            </li>
                        </ul>
                    </nav>
                    <a className="menu-trigger">
                        <span>Menu</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
  );
}
export default Header;

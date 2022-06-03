import logo from './logo.svg';
import './App.css';
import Header from '../src/components/header';
import Footer from '../src/components/footer';
import Calls from './components/js_calls';
// import '../src/assets/css'; 
import '../src/assets/css/bootstrap-datetimepicker-standalone.css';
import '../src/assets/css/bootstrap-datetimepicker.css';
import '../src/assets/css/bootstrap-datetimepicker.min.css';
import '../src/assets/css/bootstrap-select.css';
import '../src/assets/css/bootstrap-select.min.css';
import '../src/assets/css/bootstrap.css';
import '../src/assets/css/bootstrap.min.css';
import '../src/assets/css/costum-dev.css';
import '../src/assets/css/default.css';
import '../src/assets/css/documentation.css';
import '../src/assets/css/font-awesome.min.css';
import '../src/assets/css/monokai-sublime.css';
import '../src/assets/css/owl.carousel.min.css';
import '../src/assets/css/owl.theme.default.min.css';
import '../src/assets/css/theme.css';
import '../src/assets/css/theme.min.css';
// Js files : 



function App() {
  return (
    <div className="App">
      <Header />
      <Footer/>
      <Calls/>
    </div>
  );
}

export default App;
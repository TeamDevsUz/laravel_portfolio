<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TeamDevs - Freelance Team</title>
  <link rel="shortcut icon" href="{{asset('plugins_site/images/favicon-logo.png')}}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="{{asset('plugins_site/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('plugins_site/aos%403.0.0-beta.6/dist/aos.css')}}">
  <link rel="stylesheet" href="{{asset('plugins_site/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins_site/font-awesome/4.7.0/css/font-awesome.min.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="{{asset('plugins_site/css2?family=Open+Sans:wght@300&family=Poppins:wght@500;600;700&display=swap')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('plugins_site/css/custom.css')}}">
  <link href="{{asset('plugins_site/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins_site/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('plugins_site/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins_site/css/owl.theme.default.min.css')}}">
</head>

<body>

  <!-- <div class="loader">
    <div class="loader-content">
      <img src="{{asset('plugins_site/images/Rhombus.gif')}}" alt="Loader" class="loader-loader">
    </div>
  </div> -->
  <!-- loader html -->
  <!-- comon header  -->
  <header>
    <div class="mn-head">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">
            <img src="{{asset('plugins_site/images/logo.png')}}" class="ds-logo" alt="pic">
            <img src="{{asset('plugins_site/images/logo-sc.png')}}" class="sc-logo" alt="pic">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasmenu"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mt-4 mt-lg-0 mb-lg-0 align-items-lg-center">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Bosh sahifa</a>
              </li>
              
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Xizmatlar
                </a>
                <ul class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="webdevelopment.html">Veb-sayt yaratish</a></li>
                  <li><a class="dropdown-item" href="networking.html">Grafik dizayn</a></li>
                  <li><a class="dropdown-item" href="seo.html">UX/UI dizayn</a></li>
                  <li><a class="dropdown-item" href="app.html">App Optimization</a></li>
                  <li><a class="dropdown-item" href="data.html">Data Recovery</a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="projects.html">Portfolio</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="about.html">Biz Haqimizda</a>
              </li>
               
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.html">Aloqa</a>
              </li>

              <!-- <li class="nav-item">
                <a class="signiup" data-bs-toggle="modal" data-bs-target="#quickModal">
                  Get It Support
                </a>
              </li> -->
              
              <div class="lang">
                    <div class="lang__currrent">
                        <span>{{ session('locale') == 'uz' ? "O'zbekcha" : "Русский" }}</span>
                        <div>
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="lang__list"}>
                        <a  href="{{route('changelang', 'uz')}}" ZZ id="uzbek" >O'zbekcha</a>
                        <a  href="{{route('changelang', 'ru')}}" id="russian">Русский</a>
                        <div class="lang__triangle"></div>
                    </div>
                </div>
            </ul>

          </div>
        </nav>
      </div>
    </div>
  </header>
  
  @yield('content')
  
  
  <footer>

    <div class="container">
      <div class="subcribe-div">
        <div class="row row-cols-1 row-cols-lg-2 align-items-center" data-aos="fade-down">
          <div class="col">
            <h2 class="mb-4 m-lg-0"> Sign Up Our Newsletter </h2>
          </div>
          <div class="col">
            <div class="form-group d-lg-flex align-items-center">
              <input type="text" class="form-control" placeholder="Enter your email">
              <input type="Submit" class="btn subcribe-bn mt-4 mt-lg-0" value="Subscribe">
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 footer-bottom-div">
        <div class="col">
          <div class="comon-footer">
            <img src="images/logo.png" alt="logo">
            <p class="text-white"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <ul class="list-unstyled socal">
              <li> <a href="#"> <i class="bi bi-facebook"></i> </a>
                <a href="#"> <i class="bi bi-twitter"></i> </a>
                <a href="#"> <i class="bi bi-instagram"></i></a> </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="comon-footer d-grid justify-content-md-center">
            <h5> Useful Links </h5>
            <ul>
              <li> <a href="#"> About us </a> </li>
              <li> <a href="#"> Projects </a> </li>
              <li> <a href="#"> Blog </a> </li>
              <li> <a href="#"> Services </a> </li>
              <li> <a href="#"> Pricing </a> </li>
            </ul>
          </div>
        </div>

        <div class="col">
          <div class="comon-footer d-grid justify-content-md-center">
            <h5> Support </h5>
            <ul>
              <li> <a href="#"> Refund Policy </a> </li>
              <li> <a href="#"> Contact Us </a> </li>
              <li> <a href="#"> Terms of Service </a> </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="comon-footer d-grid justify-content-md-end">
            <h5> Office Info </h5>
            <ul class="list-unstyled cont-para">
              <li> <i class="fas fa-phone-alt"></i> +1-2345-2345-54 </li>
              <li> <i class="fas fa-envelope"></i> info@gmail.com </li>
              <li> <i class="fas fa-map-marker-alt"></i> Level 1 & 2, Max Towers, C-001/A Sector 16 B </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <hr class="bg-white">
    <div class="container">
      <div class="d-lg-flex justify-content-between">
        <div class="text-center d-table m-auto text-white"> 2022-2023 © IT Firm. All rights reserved. </div>

      </div>
    </div>
  </footer>

  <div class="modal fade cv-up" id="jobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="cv-upload-div">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <select class="form-select" aria-label="Default select example">
                <option selected="">Job Categorie</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group">
              <select class="form-select" aria-label="Default select example">
                <option selected="">Experience</option>
                <option value="1">Fresher</option>
                <option value="1">1 Year</option>
                <option value="2">2 Years</option>
                <option value="3">3 Years</option>
              </select>
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Upload Your CV</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-primary job-ap">Apply Job</button>
        </div>
      </div>
    </div>
  </div>
  <!-- quick Modal -->
  <div class="modal fade quick-contact" id="quickModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get It Support </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="quick-form-div">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Message"></textarea>
            </div>

          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn subimt-comment">Send Message</button>
        </div>
      </div>
    </div>
  </div>


  <!-- menu mobile -->
  <div class="offcanvas offcanvas-start menu-mobile" tabindex="-1" id="offcanvasmenu"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">
        <img src="{{asset('plugins_site/images/logo-sc.png')}}" alt="logo">
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <ul class="navbar-nav ms-auto mb-2 mt-lg-0 mb-lg-0 align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link active" href="index.html">Bosh sahifa</a>
        </li>
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Xizmatlar
          </a>
          <ul class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="itsolution.html">IT Solution</a></li>
            <li><a class="dropdown-item" href="webdevelopment.html">Web Development</a></li>
            <li><a class="dropdown-item" href="networking.html">Networking Services</a></li>
            <li><a class="dropdown-item" href="seo.html">SEO Optimization</a></li>
            <li><a class="dropdown-item" href="app.html">App Optimization</a></li>
            <li><a class="dropdown-item" href="data.html">Data Recovery</a></li>
          </ul>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href="projects.html">Portfolio</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="about.html">Biz Haqimizda</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Aloqa</a>
        </li>

        
        
        <div class="lang my-2">
            <div class="lang__currrent">
                <span>{{ session('locale') == 'uz' ? "O'zbekcha" : "Русский" }}</span>
                <div>
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
            <div class="lang__list">
                <a  href="{{route('changelang', 'uz')}}" ZZ id="uzbek" >O'zbekcha</a>
                <a  href="{{route('changelang', 'ru')}}" id="russian">Русский</a>
                <div class="lang__triangle"></div>
            </div>
        </div>
        
        <li class="nav-item">
          <a class="signiup" data-bs-toggle="modal" data-bs-target="#quickModal">
            Get It Support
          </a>
        </li>
      </ul>

    </div>
  </div>

  <!-- loader js -->
  <script>
    window.onload = function () {
      setTimeout(function () {
        var loader = document.getElementsByClassName("loader")[0];
        loader.className = "loader fadeout";
        setTimeout(function () {
          loader.style.display = "none"
        }, 1000)
      }, 1000)
    }
  </script>

  <script src="{{asset('plugins_site/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('plugins_site/js/jquery.min.js')}}"></script>
  <script src="{{asset('plugins_site/ajax/libs/wow/1.1.2/wow.min.js')}}">
  </script>
  <!-- Owl Carousel -->
  <script src="{{asset('plugins_site/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('plugins_site/js/mixitup.min.js')}}"></script>
  <script>
    var mixer = mixitup('.gallery');
  </script>
  <script src="{{asset('plugins_site/js/custom.js')}}"></script>

  <script src="{{asset('plugins_site/aos%403.0.0-beta.6/dist/aos.js')}}"></script>
  <script>
    AOS.init({
      offset: 100,
      easing: 'ease',
      delay: 0,
      once: true,
      duration: 800,

    });
  </script>



</body>

</html>
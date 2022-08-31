<!DOCTYPE html>
<!-- 412020016 MAHESA RAFIAN SYAH -->
<!-- TUGAS PEMROGRAMAN WEB -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- STYLESHEET -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">





	  
    <link href="css/style.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="css/breakpoints.css" rel="stylesheet">
    <script src="js/script.js"></script>
	<!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
  </head>
  <body>
    		<!-- SECTION NABVAR -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark mr-auto px-3">

          <a class="navbar-brand" href="#"><img src="images/navlogo2.png" style="width:150px;" ></a>	
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Collection of nav links, forms, and other content for toggling -->
          <div id="navbarCollapse" class="collapse navbar-collapse justify-content-end">
            <div class="navbar-nav">
              <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus">Home</a>
                <div class="dropdown-menu">					
                  <a href="index.#home" class="dropdown-item">Home</a>
                  <a href="index.php#about" class="dropdown-item">About </a>
                  <a href="index.php#basics" class="dropdown-item">Learn </a>
                  <a href="index.php#rating" class="dropdown-item">Rating</a>
                  <a href="index.php#contact" class="dropdown-item">Contact</a>
                        </div>
                    </div>
              <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active">Learn</a>
                <div class="dropdown-menu">					
                  <a href="basics.php#bdslr" class="dropdown-item">DSLR Camera Basics</a>
                  <a href="basics.php#bphone" class="dropdown-item">Smartphone Camera Basics</a>
                  <a href="basics.php#bvintage" class="dropdown-item">Vintage Camera Basics</a>
                        </div>
                    </div>
                    <a href="techniques.php" class="nav-item nav-link active">Techniques</a>
              <a href="gallery.php" class="nav-item nav-link active">Discover</a>
              <a href="profile.php" class="nav-item nav-link active">Credits</a>
              
            </div>
            <div class="navbar-nav ml-auto active">			
              <div class="nav-item dropdown search-dropdown active">
                <a data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" href="#"><i class="fa fa-search"></i></a>
                <a data-toggle="dropdown" class="nav-item nav-link dropdown-toggle d-none" href="#"><i class="fa fa-close"></i></a>
                <div class="dropdown-menu">
                  <div>
                                <form>
                                    <div class="input-group search-box">								
                                        <input type="text" id="search" class="form-control" placeholder="Search here...">
                        <div class="input-group-append">
                          <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                                    </div>
                                </form>                        
                            </div>
                        </div>
                    </div>
            <div class="navbar-nav ml-auto action-buttons">
              <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4 active">Login</a>
                        <div class="dropdown-menu action-form">
                  <form action="/examples/actions/confirmation.php" method="post">
                    <p class="hint-text">Sign in with your social media account</p>
                    <div class="form-group social-btn clearfix">
                      <a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i> Facebook</a>
                      <a href="#" class="btn btn-secondary twitter-btn float-right"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <div class="or-seperator"><b>or</b></div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                    <div class="text-center mt-2">
                      <a href="#">Forgot Your password?</a>
                    </div>
                  </form>
                        </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn rounded-pill" style="line-height:1;">Sign up</a>
                        <div class="dropdown-menu action-form">
                  <form action="/examples/actions/confirmation.php" method="post">
                    <p class="hint-text">Fill in this form to create your account!</p>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="form-group">
                      <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" value="Sign up">
                  </form>
                </div>
              </div>
                </div>
          </div>
        </nav>
    <div class=""> <!-- CONTAINER -->
      <div class="container-xxl">
	  
        <div class="row">
		<!-- ASIDE KIRI -->
          
		  <!-- SECTION CONTENT -->
          <div class="col-12 col-md-12 col-xxl-12  text-dark text-justify homebg4" id="indolang-profile"  style="padding-top: 200px">
<div class="container">
<div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card-box text-center">

            <img src="images/dev1.png" class="rounded-circle avatar-xl img-thumbnail"  >
            <h4 class="mb-0">Mahesa Rafian Syah</h4>
            <p class="text-muted">412020016</p>

            <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
            <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>


            <div class="text-left mt-3">
                <h4 class="font-13 text-uppercase">Tentang Saya :</h4>
                <p class="text-muted font-13 mb-3">
                    Halo XELVIIERS!, Nama saya Mahesa Rafian Syah, saya dari Universitas Kristen Krida Wacana dengan jurusan Informatika.
                </p>
                <p class="text-muted mb-2 font-13"><strong>Nama :</strong> <span class="ml-2">Mahesa Rafian Syah</span></p>

                <p class="text-muted mb-2 font-13"><strong>Nomor Telepon :</strong><span class="ml-2">(123)
                        123 1234</span></p>

                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "> <a href="#" onclick="alertEmail()" data-toggle="tooltip" class="text-dark " data-placement="top" title="mahesa.412020016@civitas.ukrida.ac.id">Klik untuk menampilkan</a></span></p>

                <p class="text-muted mb-1 font-13"><strong>Alamat :</strong> <span class="ml-2">Indonesia</span></p>
            </div>

            <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fa fa-google"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fa fa-github"></i></a>
                </li>
            </ul>
        </div> <!-- end card-box -->

        <div class="card-box">
            <h4 class="header-title">Skills</h4>
            <p class="mb-3">Walaupun saya tidak pandai dalam matematika dan logika, saya memiliki kreativitas yang mumpuni. </p>

            <div class="pt-1">
                <h6 class="text-uppercase mt-0">Pemrograman Web <span class="float-right">60%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">90% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">Desain UI/UX <span class="float-right">92%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                        <span class="sr-only">67% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">Desain Grafis <span class="float-right">97%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                        <span class="sr-only">48% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">Pengeditan Video<span class="float-right">97%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                        <span class="sr-only">95% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">Fotografi <span class="float-right">95%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                        <span class="sr-only">72% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
              <h6 class="text-uppercase">Matematika<span class="float-right">40%</span></h6>
              <div class="progress progress-sm m-0">
                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">95% Complete</span>
                  </div>
              </div>
          </div>

        </div> <!-- end card-box-->

    </div> <!-- end col-->

    <div class="col-lg-8 col-xl-8">
        <div class="card-box">


            <div class="tab-content">
                
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
                  <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
              </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
                  <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
              </div>
              
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                <div class="hover hover-1">
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.jpg"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park"
                  />
                  <div class="hover-1-content px-5 py-4">
                    <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Calm Water</h3>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Alex Bryan</p>
                    <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
                  </div>
                </div>
                </div>
              
              
                
              </div>
                <!-- end timeline content-->

                </div>
                <!-- end settings content-->

            </div> <!-- end tab-content -->
        </div> <!-- end card-box-->

    </div> <!-- end col -->
</div>
</div>

<div class="col-12 col-md-12 col-xxl-12  text-dark text-justify homebg4" id="englang-profile"  style="padding-top: 200px; display: none;">
  <div class="container">
  <div class="row">
      <div class="col-lg-4 col-xl-4">
          <div class="card-box text-center">
  
              <img src="images/dev1.png" class="rounded-circle avatar-xl img-thumbnail"  >
              <h4 class="mb-0">Mahesa Rafian Syah</h4>
              <p class="text-muted">412020016</p>
  
              <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
              <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

  
              <div class="text-left mt-3">
                  <h4 class="font-13 text-uppercase">About Me :</h4>
                  <p class="text-muted font-13 mb-3">
                      Hello XELVIIERS!, I'm Mahesa Rafian Syah from Krida Wacana Christian University 
                      in Faculty of Informatics. 
                  </p>
                  <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Mahesa Rafian Syah</span></p>
  
                  <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">(123)
                          123 1234</span></p>
  
                  <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "> <a href="#" onclick="alertEmail()" data-toggle="tooltip" class="text-dark " data-placement="top" title="mahesa.412020016@civitas.ukrida.ac.id">Klik untuk menampilkan</a></span></p>
  
                  <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">Indonesia</span></p>
              </div>
  
              <ul class="social-list list-inline mt-3 mb-0">
                  <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fa fa-google"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li class="list-inline-item">
                      <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fa fa-github"></i></a>
                  </li>
              </ul>
          </div> <!-- end card-box -->
  
          <div class="card-box">
              <h4 class="header-title">Skills</h4>
              <p class="mb-3">Eventough I'm not good at mathematical and logical problems, I had an amazing creativity </p>
  
              <div class="pt-1">
                  <h6 class="text-uppercase mt-0">Web Programming <span class="float-right">60%</span></h6>
                  <div class="progress progress-sm m-0">
                      <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">90% Complete</span>
                      </div>
                  </div>
              </div>
  
              <div class="mt-2 pt-1">
                  <h6 class="text-uppercase">UI/UX Design <span class="float-right">92%</span></h6>
                  <div class="progress progress-sm m-0">
                      <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                          <span class="sr-only">67% Complete</span>
                      </div>
                  </div>
              </div>
  
              <div class="mt-2 pt-1">
                  <h6 class="text-uppercase">Graphic Design <span class="float-right">97%</span></h6>
                  <div class="progress progress-sm m-0">
                      <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                          <span class="sr-only">48% Complete</span>
                      </div>
                  </div>
              </div>
  
              <div class="mt-2 pt-1">
                  <h6 class="text-uppercase">Video Editing <span class="float-right">97%</span></h6>
                  <div class="progress progress-sm m-0">
                      <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                          <span class="sr-only">95% Complete</span>
                      </div>
                  </div>
              </div>
  
              <div class="mt-2 pt-1">
                  <h6 class="text-uppercase">Photography <span class="float-right">95%</span></h6>
                  <div class="progress progress-sm m-0">
                      <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                          <span class="sr-only">72% Complete</span>
                      </div>
                  </div>
              </div>
  
              <div class="mt-2 pt-1">
                <h6 class="text-uppercase">Mathematics <span class="float-right">40%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">95% Complete</span>
                    </div>
                </div>
            </div>
  
          </div> <!-- end card-box-->
  
      </div> <!-- end col-->
  
      <div class="col-lg-8 col-xl-8">
          <div class="card-box">
  
  
              <div class="tab-content">
                  
                  <div class="tab-pane show active" id="about-me">
  
                      <h3 class="mb-4 text-uppercase text-dark float-start" ><i class="mdi mdi-briefcase mr-1"></i>
                          Lifetime Experiencwe</h3>
                          <div class="float-end" style="padding-left: 200px;">
                          <button type="button" class="btn btn-outline-primary rounded-pill" onclick="idnTxt()">ID</button>
                          <button type="button" class="btn btn-primary rounded-pill" onclick="engTxt()">EN</button>
                        </div>
                        <br><br><br>
                      <ul class="list-unstyled timeline-sm clearfix">
                        <li class="timeline-sm-item">
                          <span class="timeline-sm-date">2020-2021</span>
                          <h5 class="mt-0 mb-1">Coordinator of Documentation Division</h5>
                          <p>Christmas Celebration 2021, Krida Wacana Christian University</p>
  
                          <br>
  
  
                             
                                  <h5 class="mt-0 mb-1">Member of Documentation Division</h5>
                              <p>Himpunan Mahasiswa Informatika, UKRIDA</p>
  
  
                      </li>
                      <li class="timeline-sm-item">
                        <span class="timeline-sm-date">2019-2020</span>
                        <h5 class="mt-0 mb-1">School Advertising Designer</h5>
                        <p>SMAK Bethel Jakarta</p>
                        <br>
  
                            <h5 class="mt-0 mb-1">Safety Protocol Video Editor</h5>
                            <p>OMNI Hospital</p>
  
                            <br>

  
  <br>
                    </li>
                    <li class="timeline-sm-item">
                      <span class="timeline-sm-date">2018-2019</span>
                      <h5 class="mt-0 mb-1">Won 1st place for Creative Blog Content Writing</h5>
                      <p>Suku Dinas Perpustakaan dan Kearsipan Jakarta Pusat</p>
  
                      <br>
                          <h5 class="mt-0 mb-1">Won 2nd place for Short Story Writing</h5>
                          <p>Ministry of Tourism and Creative Economy</p>
  
                          <br>
                      
                  </li>
                          <li class="timeline-sm-item">
                              <span class="timeline-sm-date">2017-2018</span>                                                          
                                  <h5 class="mt-0 mb-1">Leader of Design and Social Media Division</h5>
                              <p>MPK (Majelis Perwakilan Kelas)</p>
  
                              <br>
                                
                              <h5 class="mt-0 mb-1">Substitute Teacher</h5>
                              <p>MIT App Inventor Training Program</p>
                              <br>
  
                                <h5 class="mt-0 mb-1">Member of Documentation Team</h5>
                                  <p>REXAR Art & Performing Show</p>
       
                                  <br>
                                <h5 class="mt-0 mb-1">Coordinator of Photography Division</h5>
                                <p>Penabur Open School Program </p>
    
  
                          </li>
  
                        
                      </ul>
  
                      
  
                  </div>
                  <!-- end timeline content-->
  
                  </div>
                  <!-- end settings content-->
  
              </div> <!-- end tab-content -->
          </div> <!-- end card-box-->
  
      </div> <!-- end col -->
  </div>
  </div>




</div>
			</div>
		        </div>

            
		<!-- SECTION FOOTER -->
    <div class="col-12 col-md-12 col-xxl-12">
		  <div class="homebg3" id="contact">
        <div class="" data-aos="fade-up">
        <footer
          class="text-center text-lg-start text-light "

          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-center p-4"

			 id="footerbot"
             >
      <!-- Left -->
      <div class="me-5 footercaption">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div class="">
        <a href="" class="text-white me-4 ">
          <i class="fa fa-facebook-f"></i>
        </a>
        <a href="" class="text-white  me-4">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fa fa-google"></i>
        </a>
        <a href="" class="text-white  me-4">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="" class="text-white  me-4">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="" class="text-white  me-4">
          <i class="fa fa-github"></i>
        </a>
      </div>
		
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <img src="images/navlogo2.png" class="text-uppercase fw-bold" style="width:200px;" >
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 200px; background-color: white; height: 2px"
                />
            <p>
              XELVII.com is developed and maintained by Mahesa Rafian Syah. All contents are shown with their original sources.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #FFFFFF; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-white">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-white">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
            <p><i class="fa fa-home mr-3"></i> Jakarta, West Java, INA</p>
            <p><i class="fa fa-envelope mr-3"></i> xelvii.id@xelvii.com</p>
            <p><i class="fa fa-phone mr-3"></i> +62 811 8833888</p>
            <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3 mt-3"
         >
      © 2021
      <a class="text-white" href="https://mdbootstrap.com/"
         >XELVII.com . All Rights Reserved.</a
        >
    </div>
    <!-- Copyright -->
  </footer>
</div>
			  </div>
      </div> 
            <!-- SECTION SCRIPT -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <script src="jquery.min.js"></script>
        <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
        <script>AOS.init();</script>

        <script>
          var owl = $('.owl-carousel');
          owl.owlCarousel({
            margin: 10,
            loop: true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 2
              },
              1000: {
                items: 3
              }
            }
          })

          $(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});

function checkScroll(){
    var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");
    }else{
        $('.navbar').removeClass("scrolled");
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}

function alertEmail() {
  alert("Halo! Email saya adalah:\nmahesarafiansyah.412020016@ukrida.civitas.ac.id");
}

function idnTxt() {
  var x = document.getElementById("indolang-profile");
  var y = document.getElementById("englang-profile");
  x.style.display = "flex";
    y.style.display = "none";
}

function engTxt() {
  var x = document.getElementById("indolang-profile");
  var y = document.getElementById("englang-profile");
  x.style.display = "none";
    y.style.display = "flex";
    
    // document.getElementById("englang-profile").className = "text-light";
}

        </script>

    </div>
  </body>
</html>
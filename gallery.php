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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>


	  
    <link href="css/style.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
    <link href="https://sarafiansyah.github.io/ProgWeb01/breakpoints.css" rel="stylesheet">
    <script src="js/script.js"></script>

            <!-- MAIN HTML TITLE -->
            <link rel="icon" type="image/x-icon" href="images/navlogo2.png">
            <title>XELVII.com - Discover Gallery</title>

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
                  <a href="index.php#home" class="dropdown-item">Home</a>
                  <a href="index.php#about" class="dropdown-item">About </a>
                  <a href="index.php#basics" class="dropdown-item">Learn </a>
                  <a href="index.php#rating" class="dropdown-item">Rating</a>
                  <a href="index.php#contact" class="dropdown-item">Contact</a>
                        </div>
                    </div>
              <div class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active">Learn</a>
                <div class="dropdown-menu">			
                  <a href="basics.php" class="dropdown-item">Complete Learning</a>		
                  <a href="basics.php#bdslr" class="dropdown-item">DSLR Camera Basics</a>
                  <a href="basics.php#bphone" class="dropdown-item">Smartphone Camera Basics</a>
                  <a href="basics.php#bvintage" class="dropdown-item">Vintage Camera Basics</a>
                        </div>
                    </div>
                    <a href="techniques.php" class="nav-item nav-link active">Techniques</a>
              <a href="gallery.php" class="nav-item nav-link active">Discover</a>
              <a href="devpage.php" class="nav-item nav-link active">Credits</a>
              
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
                    <input type="submit" class="btn btn-primary btn-block" onclick="window.location.href='maintenance.php'" value="Login">
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
                    <input type="submit" class="btn btn-primary btn-block" value="Sign up" onclick="window.location.href='maintenance.php'">
                  </form>
                </div>
              </div>
                </div>
          </div>
        </nav>
    <div class=""> <!-- CONTAINER -->
      <div class="">
	  
        <div class="row">
		<!-- ASIDE KIRI -->
          
		  <!-- SECTION CONTENT -->
      <div class="col-12 col-md-12 col-xxl-12  text-light text-justify " > 
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active discoverbg1 " >
              
              <div  style="margin-top: 180px; ">
                <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">CREATIVE</h1>          
           <div class="" data-aos="fade-left" >
                <p class="intro home1text"  >Telusuri foto-foto kreatif dibawah ini! </p>
                <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
  
  </div>
  </div>
            </div>
            <div class="carousel-item discoverbg1">
   
              <div style="margin-top: 180px;">
                <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">INSPIRATIVE</h1>          
           <div class="" data-aos="fade-left">
                <p class="intro home1text" >Jadikanlah momenmu sebagai inspirasi!</p>
                <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
  
            </div>
  </div>
            </div>
            <div class="carousel-item discoverbg1">
    
              <div style="margin-top: 180px;">
                <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">MINDBLOWING</h1>          
           <div class="" data-aos="fade-left">
                <p class="intro home1text" >Ciptakan kreasi luar biasa! </p>
                <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
              </div>
  </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> 
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify discoverbg1" style="padding-top: 200px;">
            <div style="padding-bottom: 100px;">
            <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">DISCOVER</h1>
            <h5 class="text-uppercase" data-aos="fade-right" style="margin-top: -50px; padding-bottom: 10px;">Temukan foto inspirasimu dalam galeri XELVII.com.</h5>

          </div>


<!-- Gallery -->
<div class="col-12 col-md-12 col-xxl-12 flex-wrap  text-light text-justify" style="display:block;" >
  <video autoplay muted loop id="myVideo">
    <source src="videos/discbg1.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <!-- Gallery -->
<!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
    <div class="hover hover-1">
    <img
      src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
    <div class="hover-1-content px-5 py-4">
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>    Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>  Mahesa R.</p>
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
      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i>   Mahesa R.</p>
      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i>  15 Desember 2021</p>
    </div>
  </div>
  </div>


  
</div>
  </div>
  </div>
</div>

<!-- Gallery -->


</div>
			</div>
		        </div>

            
		<!-- SECTION FOOTER -->
    <div class="col-12 col-md-12 col-xxl-12">
		  <div class="discoverbg1" id="contact">
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
              XELVII.com is developed and maintained by Mahesa Rafian Syah. All contents are licensed to their own.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h5 class="text-uppercase fw-bold">LEARN</h5>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #FFFFFF; height: 2px"
                />
                <p>
                  <a href="#!" class="text-white">Complete Learning</a>
                </p>
            <p>
              <a href="#!" class="text-white">DSLR basics</a>
            </p>
            <p>
              <a href="#!" class="text-white">Smartphone Basics</a>
            </p>
            <p>
              <a href="#!" class="text-white">Vintage Basics</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Navigate</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: white; height: 2px"
                />
            <p>
              <a href="index.php#home" class="text-white">Home</a>
            </p>
            <p>
              <a href="index.php#about" class="text-white">About</a>
            </p>
            <p>
              <a href="index.php#rating" class="text-white">Ratings</a>
            </p>
            <p>
              <a href="devpage.php" class="text-white">Credits</a>
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

        </script>

    </div>
  </body>
</html>
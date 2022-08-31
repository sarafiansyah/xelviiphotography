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



        <!-- MAIN HTML TITLE -->
        <link rel="icon" type="image/x-icon" href="images/navlogo2.png">
    <title>XELVII.com - Techniques</title>

	  
    <link href="css/style.css" rel="stylesheet">
    <link href="css/techniques.css" rel="stylesheet">
    <link href="https://sarafiansyah.github.io/ProgWeb01/breakpoints.css" rel="stylesheet">
    <link href="css/socialmedia.css" rel="stylesheet">
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
      <div class="container-fluid">
	  
        <div class="row">
		<!-- ASIDE KIRI -->
          
		  <!-- SECTION CONTENT -->
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify tmainbg1"  style="padding-top: 200px">
            <h1 class="mb-5 text-uppercase " data-aos="fade-right" id="maintitle">TEKNIK FOTOGRAFI</h1>
            <div  style="margin-top: -50px;">
              <div class="wrapperSM" >
                <div class="icon facebook">
                  <div class="tooltip">Facebook</div>
                  <span><i class="fa fa-facebook-f"></i></span>
                </div>
                <div class="icon twitter">
                  <div class="tooltip">Twitter</div>
                  <span><i class="fa fa-twitter"></i></span>
                </div>
                <div class="icon instagram">
                  <div class="tooltip">Instagram</div>
                  <span><i class="fa fa-instagram"></i></span>
                </div>
                <div class="icon github">
                  <div class="tooltip">Whatsapp</div>
                  <span><i class="fa fa-whatsapp"></i></span>
                </div>
                <div class="icon youtube">
                  <div class="tooltip">Youtube</div>
                  <span><i class="fa fa-youtube"></i></span>
                </div>
              </div>
            </div>
            <h6 class="mb-5 text-uppercase" data-aos="fade-right">Telusuri banyak teknik dan cara penggunaan kamera yang kamu gunakan disini!</h6>
            <section class="wrapper " data-aos="fade-left" style="padding-bottom: 0px;"> 			   
              <div class="container">
              
              <div class="row">
             <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="t-panning.php">Panning</a></h4>
                       <small><i class="fa fa-calendar"></i>  10 Februari 2021</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="https://media.pricebook.co.id/author/60f548ff632ce5440c780d3a/nur-abdillah_OCaO1HfW@48.jpg" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Nur Abdillah</h6>
                 <small>Content Writer</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
                 <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="maintenance.php">Bokeh</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
              <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="maintenance.php">Levitasi</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
              
            </div>
              
            </div>
            </section></div></div></div>
            <div class="container-fluid tmainbg2">
            <section class="wrapper" data-aos="fade-right">
              <div class="container">
              
              <div class="row">
             <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="maintenance.php">Zoom In & Zoom Out</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
                 <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="maintenance.php">Bulb</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
              <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="maintenance.php">Fotografi Malam Hari</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
              
            </div>
              
            </div>
            </section> </div>
            <div class="container-fluid tmainbg3">
            <section class="wrapper" data-aos="fade-left">
              <div class="container">
              
              <div class="row">
             <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" herf="maintenance.php">Fotografi Pernikahan</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
                 <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" herf="maintenance.php">Sports Photography</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
              <div class="col-md-4" style="padding-bottom: 50px;"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
                     <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                     <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" herf="maintenance.php">Food Photography</a></h4>
                       <small><i class="fa fa-calendar"></i> October 15, 2020</small>
                      </div>
                      <div class="card-footer">
                       <div class="media">
              <img class="mr-3 rounded-circle" src="images/dev1.png" alt="Generic placeholder image" style="max-width:50px">
              <div class="media-body">
                <h6 class="my-0 text-white d-block">Mahesa Rafian Syah</h6>
                 <small>Developer of XELVII.com</small>
              </div>
            </div>
                      </div>
                    </div>
                  </div></div>
              
            </div>
              
            </div>
            </section>
          </div>



<!-- DISINI -->
</div>
			</div>
      </div>
		        
          </body>

            
		<!-- SECTION FOOTER -->
    <div class="col-12 col-md-12 col-xxl-12">
		  <div class="contentfooter" id="contact">
        <div class="" data-aos="fade-up">
        <?php include 'footer-content.php';?>
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

</html>
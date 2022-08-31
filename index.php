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
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- MAIN HTML TITLE -->
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>XELVII.com - Multidevice Photography Learning Website</title>
 

    <link href="https://sarafiansyah.github.io/ProgWeb01/style.css" rel="stylesheet">
    <link href="css/breakpoints.css" rel="stylesheet">
    <script src="js/script.js"></script>
	<!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
      <div class="homebg1" id="home"  >
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify " >
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="float-start float-left img-fluid" data-aos="fade-right" data-aos-duration="1500" id="mainimg1" style="padding-right: 50px">
                    <img src="images/homecar1.png" style="width:450px; height: 550px; margin-top: 90px; padding-left: 50px;">
                      
      
                  </div>
                  <div  style="margin-top: 180px; ">
                    <h1 class="mb-5 text-uppercase home1title " data-aos="fade-up" data-aos-duration="1500" id="maintitle">MULTI VISION</h1>          
               <div class="" data-aos="fade-up" >
                    <p class="intro home1text"  >Satu jendela bidik, beragam jenis teknik . Tingkatkan kemampuan fotografimu bersama XELVII.com! </p>
                    <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php.php'">PELAJARI LEBIH LANJUT</button>
    
      </div>
    </div>
                </div>
                <div class="carousel-item">
                  <div class="float-start float-left img-fluid" data-aos="fade-up" data-aos-duration="1500" id="mainimg1" style="padding-right: 50px">
                    <img src="images/homecar2.png" style="width:550px; height: 550px; margin-top: 90px; padding-left: 50px;" >
                      
      
                  </div>
                  <div style="margin-top: 180px;">
                    <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">MULTI PLATFORM</h1>          
               <div class="" data-aos="fade-up">
                    <p class="intro home1text" >Ingin membaca di Handphone? Komputer? Laptop? Tablet? XELVII.com bisa! </p>
                    <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
                    

                </div>
      </div>
                </div>
                <div class="carousel-item">
                  <div class="float-start float-left img-fluid" data-aos="fade-up" id="mainimg1" style="padding-right: 50px">
                    <img src="images/homecar3.png" style="width:550px; height: 550px; margin-top: 90px; margin-left: 0px;" >
                      
      
                  </div>
                  <div style="margin-top: 180px;">
                    <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">MULTI VARIANTS</h1>          
               <div class="" data-aos="fade-up">
                    <p class="intro home1text" >Kamera DSLR, Smartphone, Analog? Tenang, semua teknik dan cara penggunaanya di XELVII.com ada!  </p>
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
        </div>
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify homebg2" id="about">
            
			  
            <h1 class="mb-5 text-uppercase" data-aos="fade-right">ABOUT US</h1>
      
               
       <div data-aos="fade-up">
          
      


      <p style="font-size: 28px; text-align: justify;">Fotografi menjadi salah satu kebiasaan masyarakat sejak dulu. Seiring dengan kemajuan teknologi, Kamera yang dulu berfisik kotak klasik kini mengecil dan disematkan pada smartphone. Sebagai generasi modern, sudah semestinya kita memahami teknik dasar dari fotografi. XELVII.com menyediakan penjelasan teknik dasar untuk berbagai jenis kamera, dari DSLR hingga Samartphone!</p>
      
      <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='techniques.php'">PELAJARI LEBIH LANJUT</button>
      <button type="button" class="btn btn-outline-light rounded-pill" onclick="window.location.href='devpage.php'">BIODATA DEVELOPER</button>

         
</div>
        </div>
		  
        <div class="owlBG  " id="basics">
          <h1 class="mb-5 text-uppercase text-light text-justify" data-aos="fade-right">YOUR PHOTOGRAPHY STYLE</h1>
          <p class="text-light text-justify home1cardtext" >Fotografer jenis apakah anda? Geser untuk melihat lebih banyak!</p>
        <div class= "owlcarouselBG" id="cards" style="margin-top: -100px;">
          <div data-aos="fade-up"
          data-aos-duration="2000">
        <div class="slider owl-carousel">
          <div class="card">
             <div class="img">
                <img src="https://i.ytimg.com/vi/_E0QnZJVMSA/maxresdefault.jpg" alt="">
             </div>
             <div class="content">
                <div class="title">
                   D-SLER
                </div>
                <div class="sub-title">
                   DSLR CAMERA
                </div>
                <p>
                  Entry Level? Professional? XELVII.com diciptakan untuk semua pengguna kamera! Carilah teknik pemotretan DSLR yang kalian ingin pelajari!
                </p>
                <div class="btn">
                   <button>Read more</button>
                </div>
             </div>
          </div>
          <div class="card">
             <div class="img">
                <img src="https://images.unsplash.com/photo-1584006682522-dc17d6c0d9ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80" alt="">
             </div>
             <div class="content">
                <div class="title">
                   SMARTPHONER
                </div>
                <div class="sub-title">
                   Smartphone Camera
                </div>
                <p>
                   Memotret makanan, selfie, dan buat snap? carilah teknik up-to-date untuk memaksimalkan fotografimu di XELVII.com
                </p>
                <div class="btn">
                   <button>Read more</button>
                </div>
             </div>
          </div>
          <div class="card">
             <div class="img">
                <img src="https://images.unsplash.com/photo-1551232865-e0a56728e881?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">
             </div>
             <div class="content">
                <div class="title">
                  VINTAGER
                </div>
                <div class="sub-title">
                   Vintage Camera
                </div>
                <p>
                   Anda adalah penerus generasi lama! Carilah teknik-teknik Kamera Vintage dalam situs XELVII.com dan ciptakan mahakarya mu!
                </p>
                <div class="btn">
                   <button>Read more</button>
                </div>
             </div>
          </div>
          <div class="card">
             <div class="img">
                <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
             </div>
             <div class="content">
                <div class="title">
                   NEWCOMER
                </div>
                <div class="sub-title">
                   Just Owned A Camera
                </div>
                <p>
                  Apakah anda baru pernah memiliki sebuah kamera dan ingin tahu cara menggunakannya? anda berkunjung di website yang tepat!
                </p>
                <div class="btn">
                   <button>Read more</button>
                </div>
             </div>
          </div>
       </div>
       </div>
       
 

        <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel();
        });
        </script>
</div>
</div>


<div class="testires homebg4" id="rating">
  <div class="" data-aos="fade-up">
<h1 class="mb-5 text-uppercase text-light text-justify" data-aos="fade-right">RATING AND REVIEWS</h1>
<p class="text-light text-justify" style="font-size: 28px;">Seberapa baik penyajian konten web XELXII.com?</p>
<div class="container ">
 <div class="accordion d-block justify-content-center align-items-center height" id="accordionExample">
     <div class="row">
         <div class="col-md-6">
             <div class="p-3">
                 <ul class="testimonial-list">
                     <li>
                         <div class="card p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
                                 <div class="d-flex flex-column ml-2 " style="padding-left: 20px;"> <strong class="font-weight-normal">ALAN BUDIANTO</strong> 
                                   <span>Photographer</span> </div>
                             </div>
                         </div>
                     </li>
                     <li>
                         <div class="card p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/udGH5tO.jpg" width="50" class="rounded-circle">
                                 <div class="d-flex flex-column ml-2" style="padding-left: 20px;"> <strong class="font-weight-normal">CELINE DELLION</strong> <span>Professional Photographer</span> </div>
                             </div>
                         </div>
                     </li>
                     <li>
                         <div class="card p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/Uz4FjGZ.jpg" width="50" class="rounded-circle">
                                 <div class="d-flex flex-column ml-2" style="padding-left: 20px;"> <strong class="font-weight-normal">ELIANA TANUWIJAYA</strong> <span>Entry Level Photographer</span> </div>
                             </div>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="col-md-6 text-light">
             <div class="p-3 testimonials-margin">
                 <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                     <div class="card-body">
                         <h4>Halaman web menarik dan informasi bermanfaat</h4>
                         <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </div>
                         <p>Halaman web XELVII.com cukup menarik dan mudah digunakan! Informasi-informasi seputar dunia pemotretan juga disajikan dengan baik dan mudah dimegerti!</p>
                     </div>
                 </div>
                 <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                     <div class="card-body">
                         <h4>It was a great experience!</h4>
                         <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <p>As a senior photographer, I found this website is great throwback of techniques and basics I've learned long time ago. Thanks for remind me about skills I may have forgotten before!</p>
                     </div>
                 </div>
                 <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                     <div class="card-body">
                         <h4>Artikel sangat mudah dipahami!</h4>
                         <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <p>Sebagai fotografer pemula, saya cukup terbantu dengan web XELVII.com </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
</div>
			</div>
		        </div> 
           </body>
		<!-- SECTION FOOTER -->
    <div class="col-12 col-md-12 col-xxl-12">
		  <div class="homebg3" id="contact">
        <div class="" data-aos="fade-up">
<?php include 'footer-main.php';?>
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
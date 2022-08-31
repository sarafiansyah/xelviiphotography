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
    <title>XELVII.com - Techniques - Panning</title>


	  
    <link href="css/style.css" rel="stylesheet">
    <link href="css/basics.css" rel="stylesheet">
    <link href="css/t-panning.css" rel="stylesheet">
    <link href="https://sarafiansyah.github.io/ProgWeb01/breakpoints.css" rel="stylesheet">
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
                    <input type="submit" class="btn btn-primary btn-block" value="Sign up" onclick="window.location.href='maintenance.php.php'">
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
      <div class="col-12 col-md-12 col-xxl-12  text-light text-justify tecbg1" id="about">
            
			  
        <h1 class="mb-5 text-uppercase" data-aos="fade-right">TEKNIK FOTOGRAFI PANNING</h1>
<div  style="margin-top: -50px;">
        <div class="wrapper" >
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
        <h6 class="mb-5 text-uppercase" data-aos="fade-right">TEKNIK FOTOGRAFI PANNING</h6>
  
        <div class=" img-fluid justify-content-center" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
          <img src="https://images.unsplash.com/photo-1613033686399-aa7c18d6d760?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width: 100%; " >
            </div>
            <div class="text-justify">
   <div data-aos="fade-up" class="text-justify">
  <p class="text-justify articletxt" >Panning adalah salah satu teknik fotografi yang digunakan untuk membekukan gerakan benda yang bergerak. Ide dibalik teknik ini ialah mengatasi masalah mengambil gambar subjek yang bergerak cepat.</p>
<br><br>
  <p class="text-justify articletxt">Ciri-ciri foto dengan menggunakan teknik ini biasanya memiliki fokus yang tajam terhadap objek yang bergerak, sedangkan backgroundnya tampak blur atau kabur. Alhasil mengambil foto dengan teknik Panning memiliki kesulitas tersendiri bagi fotografer pemula.</p>
  <br><br>
  <p class="text-justify articletxt">Teknik Panning memang menekankan kesan artistik dari objek yang bergerak dengan cepat. Tak ada yang bisa menjamin foto dengan teknik ini akan sempurna. Namun, dengan berbagai latihan, kesabaran dan momen yang pas, maka akan tercipta sebuah foto Panning yang dramatis dan menarik.</p>
  
</div>
    </div>

    <div class="float-start float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
      <img src="https://64.media.tumblr.com/tumblr_m84qmym7Oh1rbdguuo1_400.gif" style="width: 100%; height: auto; " >
        </div>
        <div class="text-justify">
<div data-aos="fade-up" class="text-justify">
<p class="text-justify articletxt">Cara Foto Panning yang Benar</p>
  <p class="text-justify articletxt">1. Memilih Shutter Speed yang Tepat
  <p class="text-justify articletxt">Salah satu hal yang penting dalam melakukan teknik panning ialah shutter speed. Kamu bisa mengatur shutter speed tergantung seberapa cepat subjek bergerak dan seberapa banyak efek kecepatan yang kamu ingin abadikan.</p>
  <br><br>
  <p class="text-justify articletxt">Kamu bisa memilih shutter speed yang lebih rendah dari yang biasa kamu gunakan. Kamu bisa mencoba menggunakan 1/30 sec. Kemudian coba juga shutter speed yang lebih rendah 1/60 sec hingga 1/8 sec. Ingat pemilihan shutter speed tergantung pada kondisi cahaya dan kecepatan subjek.</p>
  <br><br>
  <p class="text-justify articletxt">Ingat shutter speed untuk memotret orang naik sepeda berbeda dengan shutter speed kala memotret motor. Bila subjek foto yang dibidik tampak kurang tajam, cobalah naikkan shutter speednya. Saat background kurang blur, kamu turunkan shutter speednya.</p>
  <br><br>
  <p class="text-justify articletxt">2. Mengatur Posisi Kamera</p>
  <p class="text-justify articletxt">Posisikan kamu di tempat yang memiliki pandangan luas terhadap subjek. Jangan sampai kamu memotret teknik panning di lokasi yang terhalang. Pertimbangkan juga bagian latar belakang subjek.</p>
  <br><br>
  <p class="text-justify articletxt">Sebagai catatan, background yang berwarna akan cenderung menghasilkan blur yang bagus.</p>
  <br><br>
  <p class="text-justify articletxt">3. Gunakan Flash</p>
  <p class="text-justify articletxt">Untuk menghadirkan foto yang memiliki bentuk jelas, kamu bisa menggunakan flash. Sebaiknya atur speedlight dengan baik. Bila kombinasi flash dan low shutter speeds berhasil, akan menghasilkan efek blur yang menarik.</p>
  <br><br>
  <div class="float-end float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
    <img src="https://images.unsplash.com/photo-1506395474577-242f168d2e2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" style="width: 100%; height: auto; " >
      </div>
  <p class="text-justify articletxt">4. Atur Fokus</p>
  <p class="text-justify articletxt">Cara foto panning dengan benar bisa kamu lakukan dengan memakai autofocus ataupun manual fokus. Namun, untuk fotografer pemula kamu bisa menggunakan autofocus mode. Kamu bisa menggunakan mode AF-C pada Nikon atau mode Al Servo pada Canon.</p>
  <br><br>
  <p class="text-justify articletxt">Dengan mode ini, kamera melakukan focus mengikuti pergerakan objek dengan menekan setengah tombol shutter. Mode autofocus bisa digunakan bila subjek bergerak dengan konsisten.</p>
  <br><br>
  <p class="text-justify articletxt">Bila kamera kamu tidak memiliki autofocus yang cepat, kamu bisa menggunakan mode pre-fokus. Ikuti pergerakan objek sambil menekan setengah tombol shutter untuk mengambil fokus subjek.</p>
  <br><br>
  <p class="text-justify articletxt">Bila pergerakan kamera sudah sama dengan subjek, kamu bisa menekan penuh tombol tanpa menghadirkan guncangan kamera.</p>
  <br><br>
  <p class="text-justify articletxt">5. Gunakan Tripod</p>
  <p class="text-justify articletxt">Bila subjek bisa diprediksi dan dekat dengan kamu, sebaiknya gunakan tripod agar hasil foto teknik panning lebih bagus. Namun, bila kamu mencari subjek yang tidak bisa diprediksi misal saat menonton balap motor, kamu bisa gunakan tangan saja. Namun, dibutuhkan keseimbangan dan kestabilan pada tangan agar kamera tidak goyang.</p>
  <br><br>
  <p class="text-justify articletxt">6. Pertimbangkan Jarak</p>
  <p class="text-justify articletxt">Semakin dekat subjek, maka semakin menghasilkan foto yang fokus. Namun, dibeberapa fotografer subjek juga harus diimbangi oleh background.</p>
  <br><br>
  <p class="text-justify articletxt">Maka kamu harus pertimbangkan jarak subjek agar sesuai dengan kamera yang kamu pilih. Kamu bisa menggunakan lensa zoom 70 – 200 mm untuk membuat teknik panning lebih mudah.</p>
  <br><br>
  <div class="float-start float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
    <img src="http://nickdidlick.com/wp-content/uploads/vr-300x262.jpg" style="width:100%;" >
      </div>
  <p class="text-justify articletxt">7. Gunakan Fitur VR atau Vibration Reduction</p>
  <p class="text-justify articletxt">Untuk menghindari guncangan kala memotret, kamu bisa menggunakan fitur VR yang sudah terdapat dibeberapa kamera. Ingat fitur ini penting dinyalakan karena memotret panning butuh kestabilan.</p>
  <br><br>
  <p class="text-justify articletxt">8. Menggerakkan Kamera
  <p class="text-justify articletxt">Setelah semua hal di atas kamu persiapkan, saatnya kamu mulai memotret. Kamu harus memastikan kembali posisi kamu pas tanpa halangan. Agar subjek terlihat tajam, kamu bisa menggerakkan lensa dengan tenang dan stabil.</p>
  <br><br>
  <p class="text-justify articletxt">Arahkan kamera secara horizontal atau ke arah kanan dan kiri. Dibutuhkan latihan agar gerakan kamera stabil sehingga hasil foto lebih tajam.</p>
  <br><br>
  <p class="text-justify articletxt">Pilih background yang memiliki warna cerah dan memiliki warna-warna menarik. Namun, jangan terlalu banyak detail agar fokus tetap terarah pada subjek untuk mendapatkan foto subjek yang memiliki background menarik.</p>
  <br><br>
  <p class="text-justify articletxt">Arahkan kamera mengikuti subjek yang bergerak dan tekan tombol shutter secara tepat untuk mengambil fokus. Perlu digarisbawahi, gerakan yang mengejutkan secara mendadak bisa mengakibatkan hasil foto yang kurang sempurna.</p>
  <br><br>
  <p class="text-justify articletxt">Semakin lembut dan tenang cara kamu menggerakkan kamera mengikuti subjek, maka semakin tajam hasil foto panning .</p>
  <br><br>
  <p class="text-justify articletxt">Jangan hanya mengambil 1 atau 2 foto saja. Seorang fotografer professional bahkan bisa mengambil 20 – 30 foto untuk menghasilkan sebuah foto panning yang sempurna. Disinilah dibutuhkan latihan yang serius dan kesabaran untuk menemukan momen yang tepat dalam mengambil foto teknik panning.</p>
  <br><br>
  <p class="text-justify articletxt">Selamat mencoba.</p>
  <br><br>
</div>

</div>

     

</div>
    


			</div>
		        </div>
          </div>

            
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
  </body>
</html>
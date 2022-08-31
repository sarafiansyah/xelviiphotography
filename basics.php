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
    <title>XELVII.com - Basic Learning</title>



	  
    <link href="css/style.css" rel="stylesheet">
    <link href="css/basics.css" rel="stylesheet">
    <link href="https://sarafiansyah.github.io/ProgWeb01/breakpoints.css" rel="stylesheet">
    <link href="css/socialmedia.css" rel="stylesheet">
    <link href="css/basics.css" rel="stylesheet">
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
  
		<!-- ASIDE KIRI -->
          
		  <!-- SECTION CONTENT -->
      <div class="col-12 col-md-12 col-xxl-12  text-light text-justify " > 
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active basicsbg1 " >

            <div  style="margin-top: 180px; ">
              <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">DSLR</h1>          
         <div class="" data-aos="fade-left" >
              <p class="intro home1text"  >Kamera yang digunakan para fotografer profesional. Pelajari caranya dibawah! </p>
              <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>

</div>
</div>
          </div>
          <div class="carousel-item basicsbg2">
 
            <div style="margin-top: 180px;">
              <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">SMARTPHONE</h1>          
         <div class="" data-aos="fade-left">
              <p class="intro home1text" >Handphonemu bisa menjadi alat fotografi tingkat atas loh! Simak penjelasannya dibawah! </p>
              <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>

          </div>
</div>
          </div>
          <div class="carousel-item basicsbg3">
  
            <div style="margin-top: 180px;">
              <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">ANALOG</h1>          
         <div class="" data-aos="fade-left">
              <p class="intro home1text" >Kamu adalah penerus generasi! ayo tingkatkan kemampuanmu sekarang! </p>
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

    <div class="container-fluid">
	  
      <div class="row">
      <div class="col-12 col-md-12 col-xxl-12  text-light text-justify basicsbgC" id="bdslr">
        <h1 class="mb-5 text-uppercase" data-aos="fade-right">DSLR BASICS</h1>
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
                <h5 class="text-uppercase" data-aos="fade-right">Teknik dasar dan cara penggunaan umum kamera DSLR.</h5>
               
                       <h5 style="margin-top: 0px; "><i class="fa fa-calendar" ></i> October 15, 2020</h5>
  
        <div class="float-start float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px; padding-top: 50px;">
          <img src="https://i.ytimg.com/vi/_E0QnZJVMSA/maxresdefault.jpg" style="width:100%; height: auto;" >
            </div>
            <div class="text-justify">
   <div data-aos="fade-up" class="text-justify">
    
  <p class="text-justify articletxt">Cara menggunakan kamera DSLR bagi pemula perlu diperhatikan secara detail dan langsung mempraktikkannya. Memotret objek dengan menggunakan kamera DSLR bisa dibilang bukan sesuatu hal yang mudah, namun bukan hal yang sulit untuk dipraktikkan.</p>
<br><br>
<p class="text-justify articletxt">Bentuknya yang sangat berbeda dengan kamera saku, mempelajari cara menggunakan kamera DSLR bagi pemula maka sangat dianjurkan. Kamera DSLR cocok digunakan bagi kamu ingin menciptakan hasil gambar yang lebih tajam, detail, dan lebih kreatif.</p>
<br><br>   
<p class="text-justify articletxt">Untuk menghasilkan gambar yang bagus dan sempurna, sebagai dasarnya kamu perlu mempelajari cara menggunakan kamera DSLR. Dengan memahami komponen-komponen ditambah dengan latihan berulang akan membantu kamu untuk menciptakan gambar yang keren.</p>
<br><br>
</div>
    </div>

    <div class="float-start float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCK6ypgyW_c7R-PDP4iebgpu96qlFWHTqo_RoRfZ7L-RbhryjQcr0ifqvDk5SARWMpV14&usqp=CAU" style="width:100%; height: auto;" >
        </div>
        <div class="text-justify">
<div data-aos="fade-up" class="text-justify">
<p class="text-justify articletxt">Kenali Komponen Kamera DSLR</p>
<p class="text-justify articletxt">Cara menggunakan kamera DSLR bagi pemula pertama yang perlu dipahami adalah mengenali fungsi tombol-tombol pada kamera. Bagi pemula, kamu pasti akan sedikit kebingunan dengan banyaknya tombol pada kemara DSLR.</p>
<br><br>   
<p class="text-justify articletxt">Pasalnya, akan terasa perbedaan dibanding menggunakan kamera saku dengan kamera DSLR. Untuk mempermudah mengoperasikan kamera DSLR, pelajari terlebih dahulu fungsi setiap tombol kamera dengan membaca buku panduan yang tersedia.</p>
<br><br> 
<p class="text-justify articletxt">Mengoptimalkan Viewfinder</p>
  <p class="text-justify articletxt">Viewfinder merupakan celah kaca kecil di bagian belakang kamera yang biasa digunakan untuk membidik objek. Walaupun banyak kamera DSLR keluaran terbaru yang sudah menghadirkan fitur layar LCD untuk melihat objek, namun penggunaan viewfinder memungkinkan kamu untuk menangkap objek lebih jelas, akurat, dan kamu dapat memegang bodi kamera dengan lebih stabil. </p>
  <br><br> 
</div>

</div>
    <div class="float-end float-left img-fluid mainimg2" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
      <img src="https://www.ephotozine.com/articles/p--a--s--m--manual-shooting-modes-and-exposure-explained-32591/images/1000-Canon-EOS-600D-Mode-Dial-P8150004_1534339998.jpg"  class="mainimg2" >
        </div>
        <div class="text-justify">
<div data-aos="fade-up" class="text-justify">
  <p class="text-justify articletxt">M – singkatan dari Manual Mode</p>
  <p class="text-justify articletxt">Pada mode ini, semua pengaturan setting kamera seperti Shutter Speed, ISO, Apertur, diserahkan kepada fotografer.Biasanya dipergunakan oleh mereka yang sudah mahir.</p>
  <br><br>   
  <p class="text-justify articletxt">A – singkatan dari Aperture Priority</p>
  <p class="text-justify articletxt">Mengaktifkan mode ini berarti fotografer akan menentukan besaran aperture yang akan digunakan sedangkan kamera akan menyesuaikan secara otomatis setting untuk yang lain. Padanan pada kamera Canon adalah Av.</p>
  <br><br>
  <p class="text-justify articletxt">S – singkatan dari Speed</p>
  <p class="text-justify articletxt">Jika mode ini diaktifkan, maka fotografer akan menjadi penentu bagi Shutter Speed alias kecepatan buka rana. Setting selebihnya akan dilakukan oleh kamera. Padanan pada kamera Canon adalah Tv.</p>
  <br><br>
  <p class="text-justify articletxt">P – singkatan dari Programmed</p>
  <p class="text-justify articletxt">Mode ini akan mengaktifkan setting kamera yang sudah “tersimpan” sebelumnya. Banyak fotografer yang memiliki settingan favorit dan menyimpannya di kamera. Dengan menggunakan mode ini, maka settingan tersebut akan aktif.</p>
  <br><br>

</div>

</div>




    
<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="https://mdbootstrap.com/img/new/slides/041.jpg"
        class="d-block w-100"
        alt="Wild Landscape"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/new/slides/042.jpg"
        class="d-block w-100"
        alt="Camera"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/new/slides/043.jpg"
        class="d-block w-100"
        alt="Exotic Fruits"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselExampleCaptions"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselExampleCaptions"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

			</div>
      <div class="col-12 col-md-12 col-xxl-12  text-light text-justify basicsbgC" id="bphone">
            
			  
        <h1 class="mb-5 text-uppercase" data-aos="fade-right">SMARTPHONE BASICS</h1>
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
                <h5 class="text-uppercase" data-aos="fade-right">Teknik dasar dan cara penggunaan umum kamera pada smartphone atau handphone.</h5>
               
                       <h5 style="margin-top: 0px; "><i class="fa fa-calendar" ></i> October 15, 2020</h5>
  
        <div class="float-start float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;  padding-top: 50px;">
          <img src="https://images.unsplash.com/photo-1584006682522-dc17d6c0d9ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80" style="width:100%; height: auto;" >
            </div>
            <div class="text-justify">
   <div data-aos="fade-up" class="text-justify">
    <p class="text-justify articletxt">Beberapa alasan mengapa saat ini banyak orang lebih suka mengambil foto melalui kamera HP dibanding kamera profesional diantaranya karena HP merupakan perangkat wajib yang akan kamu bawa kemana-mana setiap saat, 
      Kamera HP telah mengalami peningkatan drastis dari sisi software, hardware serta teknologi yang disematkan untuk meningkatkan kualitas foto yang dihasilkan, Sebagian orang merasa ribet kalau harus membawa kamera DSLR/Mirrorless setiap saat, Kamera profesional terbilang sangat mahal dan tidak semua orang rela merogoh kocek sebanyak itu.
      Jadi, kemampuan memaksimalkan kamera HP adalah suatu hal penting, simak tips berikut untuk membantumu :</p>

</div>
    </div>
    <br>

    <div class="float-start float-left img-fluid mainimg2" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
      <img src="https://images.unsplash.com/photo-1608547492989-e91bab9ce286?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%; " >
        </div>
        <div class="text-justify">
<div data-aos="fade-up" class="text-justify">
<p class="text-justify articletxt">1. Gunakan HP Terbaik sesuai Kemampuan</p>

  <p class="text-justify articletxt">Pintar-pintarlah memilih smartphone yang sesuai dengan kemampuan keuangan kamu. Harga HP yang lebih mahal belum tentu berbanding lurus dengan kualitas kamera yang disematkan, bisa jadi ada HP yang lebih murah dengan kualitas kamera yang mumpuni.</p>
  
  <p class="text-justify articletxt">Jangan tergoda dengan ukuran megapixels besar karena megapixels bukanlah patokan kualitas foto, kebanyakan ini hanya gimmick dari produsen HP saja.</p>

</div>

</div>
    <div class="float-end float-left img-fluid mainimg2" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
      <img src="https://images.unsplash.com/photo-1472393365320-db77a5abbecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%; height: auto;" >
        </div>
        <br>
        <div class="text-justify">
<div data-aos="fade-up" class="text-justify">
<p class="text-justify articletxt">2. Jangan Goyang, Pegang HP Sestabil Mungkin atau Gunakan Gimbal</p>
  <p class="text-justify articletxt">Hampir semua lensa kamera DSLR memiliki fitur IS (Image Stabilizer) atau VR (Vibration Reduction). Fitur ini berguna untuk meminimalisir getaran atau guncangan saat pengambilan foto agar foto tidak kabur atau goyang (shake).</p>

  <p class="text-justify articletxt"> Sebagian kamera HP high-end ada yang menyematkan fitur ini meski hasilnya tentu tidak semaksimal DSLR/Mirrorless. Jadi, metode utama untuk menghindari foto kabur, usahakan pegang HP sestabil mungkin.</p>

    <p class="text-justify articletxt"> Jangan memegang HP terlalu jauh dari posisi tubuh, tapi dekatkan sedikit ke dada agar tangan ada topangan atau penyangga.</p>

</div>

</div>
<br>
<div class="float-start float-left img-fluid mainimg2" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
  <img src="https://images.unsplash.com/photo-1614442804207-4d864251c528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" style="width:100%; height: auto;" >
    </div>
    <br>
    <div class="text-justify">
<div data-aos="fade-up" class="text-justify">
<p class="text-justify articletxt">3.Pastikan Cahaya yang Menerangi Objek Cukup</p>
  <p class="text-justify articletxt">Minimnya cahaya akan memaksa kamera untuk mem-push ISO ke tingkat yang lebih tinggi. Imbasnya, foto akan terlihat berbintik dan buram atau istilahnya noise.</p>
  
  <p class="text-justify articletxt">Pastikan Cahaya yang Menerangi Objek Cukup</p>

  <p class="text-justify articletxt">Jadi, usahakan lokasi pengambilan foto tersedia cahaya yang cukup. Coba nyalakan lampu jika ada atau buka jendela agar sinar matahari bisa leluasa masuk ke dalam ruangan.</p>
  
  <p class="text-justify articletxt">Kalau tidak ada juga, aktifkan flash di kamera kamu.</p>

</div>

</div>

    
<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="https://mdbootstrap.com/img/new/slides/041.jpg"
        class="d-block w-100"
        alt="Wild Landscape"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/new/slides/042.jpg"
        class="d-block w-100"
        alt="Camera"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/new/slides/043.jpg"
        class="d-block w-100"
        alt="Exotic Fruits"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselExampleCaptions"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselExampleCaptions"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

			</div>
      <div class="col-12 col-md-12 col-xxl-12  text-light text-justify basicsbgC" id="bvintage">
            
			  
        <h1 class="mb-5 text-uppercase" data-aos="fade-right">ANALOG BASICS</h1>
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
                <h5 class="text-uppercase" data-aos="fade-right">Teknik dasar dan cara penggunaan kamera analog.</h5>
               
                       <h5 style="margin-top: 0px; "><i class="fa fa-calendar" ></i> October 15, 2020</h5>
  
        <div class="float-start float-left img-fluid mainimg3" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;  padding-top: 50px;">
          <img src="https://images.unsplash.com/photo-1551232865-e0a56728e881?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" class="mainimg3">
            </div>
            <div class="text-justify">
   <div data-aos="fade-up" class="text-justify">
  <p class="text-justify articletxt">Di kesempatan ini admin akan coba membahas 12 Langkah Cara Menggunakan Kamera Analog Film 35mm Secara Umum. Admin membahas hal ini dikarenakan masih banyak yang bertanya bagaimana cara menggunakan kamera analog ini atau itu, terutama yang bertipe SLR.</p>
<br><br>
  <p class="text-justify articletxt">Saran dan komentar sobat-sobat admin harapkan agar kita bisa belajar dan diskusi bersama-sama. Sekali lagi admin tekankan bahwa media ini bukan hanya untuk jualan, tapi terbuka bagi sobat-sobat pecinta dan pengguna kamera analog, pemula maupun yag sudah expert untuk saling berbagi ilmu. Di kesempatan yang lain, admin telah membahas cara memilih kamera analog idaman sobat: Klik Di sini</p>
  <br><br>
  <p class="text-justify articletxt">Setelah sobat memiliki kamera analog yang pas dengan sobat, biasanya untuk yang pemula atau yang baru pertama kali pegang kamera analog akan bingung dan berkata "Ini kamera gimana cara pakainya ya?" atau "Ini kamera sama umur gue tuaan ini kamera, pakainya gimana ya?" Apalagi kalau kameranya pemberian seseorang atau kebetulan nemu di gudang bekas peninggalan kakek atau ayah. Gak usah bingung sobat. Berikut sedikit admin ulas langkah-langkah menggunakan kamera analog 35mm secara umum:</p>
  <br><br>
  <div class="float-start float-left img-fluid mainimg2" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;  padding-top: 50px;">
    <img src="https://images.unsplash.com/photo-1532601726018-c7b30abe3a22?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" style="width:100%; height: auto;" >
      </div>
  

  <p class="text-justify articletxt">1. Lihat basic kontrol pada kamera. Setiap kamera analog film 35mm memiliki kontrol dasar yang berbeda-beda. Oleh karena itu, pertama-tama sobat harus benar-benar memperhatikan dan mengerti fungsi dari setiap kantrol dasar tersebut. Bagi yang belum memahami kontrol dasar dari kamera analog, admin telah membahasnya pada artikel dasar-dasar kamera analog.</p>
  <br><br>
  <p class="text-justify articletxt" >A. Shutter speed dial. Setshutter speed mengikuti kondisi cahaya.Shutter speedberfungsi untuk mengatur kecepatan film ketika terkena cahaya. Bisanya kamera analog tahun 1960 dan seterusnya akan menunjukkanshutter speeddengan angka yang semakin meningkat, seperti B, 1/125, 1/250, 1/500 dan seterusnya.</p>
  <br><br>
  <p class="text-justify articletxt">Shutter Speedkamera analog yang usianya lebih tua lagi, biasanya menggunakan angka-angka yang lebih aneh dan sewenang-wenang letaknya. Sedangkan letakshutter speed sendiri berbeda-beda setiap kamera analog. Secara umum letaknya ada di sebelah kanan atas. Tapi ada juga yang menyatu denganmounting lensanya, seperti Olympus OM.</p>
  <br><br>
  <p class="text-justify articletxt">B. Aperture Ring. Kontrol Aperture di setiap kondisi cahaya yang berbeda-beda. Aperture sendiri biasanya disebut diafragma atau bukaan, yakni bilah-bilah plat besi seperti kipas yag ada di lensa berfungsi untuk mengatur jumlah cahaya yang masuk melalui lensa. Untuk mengontrol aperture ini, ada ring (cincin) yang letaknya di lensa itu sendiri. </p>
  <br><br>
  <p class="text-justify articletxt">Tetapi tidak selalu di lensa, aperture beberapa kamera analog SLR tahun 1980an dan seterusnya sudah bisa dikontrol dari kamera itu sendiri. Contohya sistem seperti Canon EOS tidak memiliki aperture ring sama sekali. Umumnya aperture ring yang ada di lensa, terletak di bagian belakang lensa atau di depan seperti lensa Industar dari Uni Soviet dan lensa OM-sistem. Aperture ditunjukkan dengan angka-angka seperti f/8, f/11 dan seterusnya. Semakin kecil angkanya, semakin besar bukaannya dan sebaliknya.</p>
  <br><br>
  <div class="float-start sliderbrightness" >
    <h6>Geser untuk menggelapkan halaman web</h6>
    <h6>Refresh halaman web jika terdapat kesalahan.</h6>
    <input type="range" id="opacity-slider" min=".4" max="1" step=".01" value="10">
  </div>
  <p class="text-justify articletxt">C. ASA Dial. Set ASA untuk untuk mendapatkan exposure yang berbeda. Pada kamera analog di tandai dengan tulisan ASA, yaitu sensitivitas film terhadap cahaya. Semakin tinggi ASA yang sobat gunakan, semakin sensitif filmnya terhadap cahaya. Hal ini akan berpengaruh kepada kecerahan hasil gambar yag sobat ambil. ASA sangat berguna pada kamera analog jenisautomatic exposure. Letak ASA umumnya berdekatan denganshutter speed dial, tapi ada juga yang terpisah di lensanya. </p>
  <br><br>
  <p class="text-justify articletxt">Pada kamera SLR 35mm, set ASA dengan mengangkat ke atasshutter speed dialkemudian putar kanan-kiri. ASA sangat dipegaruhi oleh jenis film. Film yang berbebeda, membutuhkan exposure yang berbeda pula, misalnya film ASA 50 membutuhkan 2xexposurelebih lama dari film ASA 100. Beberapa kamera analog tidak membutuhkan ASA sama sekali, terutama kamera yang memiliki kontak elektrik.</p>
  <br><br>
  <p class="text-justify articletxt">D. Mode Dial. Mode dial ini berhubungan dengan jenis kamera analog yang sobat miliki. Apakah full manual, semi-automatic ataufull automatic exposureatauautomatic exposure program. Jika kamera analog sobat full manual, maka tidak ada mode yang perlu di set. Sobat hanya memainkanshutter speed, ASA danaperture. Bila semi-automatic, maka kamera analog sobat bisa digunakan secara manual dan auto dengan ditandai huruf 'A', seperti Nikon F3. Full automatic exposure, set mode keautomatic exposuredengan cara yang sama ke huruf 'A'. Maka kamera analog sobat akan secara otomatis mencariexposureyang memungkinkan, seperti Canon AE-1. </p>
  <br><br>
  <p class="text-justify articletxt">Kemudian ada juga kamera analog dengan modeautomatic exposure programditandai dengan tulisan 'Program' atau 'P' pada meteringnya, yakniexposure telah ditentukan secara otomatis oleh kamera, akan tetapi sobat masih dapat memainkanshutter speeddanaperture ring. Hal ini memberikan keuntungan pada sobat utuk hanya lebih berkonsentrasi penuh kepada objek, seperti Canon AE-1 Program dan Nikon FA.</p>
  <br><br>
  <p class="text-justify articletxt">E. Focusing Ring. Fokuskan lensa kamera sobat dengan melihat jarak ke objek. Pada umumnya, distance (jarak) lensa kamera analog terdiri dari feet (kaki) dan meter. Serta ada pula tanda infinity, yakni untuk memfokuskan jarak yang tak terbatas jauhnya. Beberapa kamera analog 35mm memiliki sistem fokus yang berbeda-beda, seperti kamera analog half frame dan compact (Olympus Pen EE dan Olympus Trip 35) menggunakan sistem zona yang sudah memiliki simbol. </p>
  <br><br>
  <p class="text-justify articletxt">Ada pula jenis rangefinder (Zorki dan Fed) yang memiliki focusing ring berupa tuas di dekat viewfinder-nya. Sistem fokusing kamera analog ini nantinya juga akan berpengaruh kepada reflective metering untuk mendapatkan eksposur yang berbeda-beda.</p>
  


</div>
    </div>



   
    
<div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
        src="https://mdbootstrap.com/img/new/slides/041.jpg"
        class="d-block w-100"
        alt="Wild Landscape"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/new/slides/042.jpg"
        class="d-block w-100"
        alt="Camera"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img
        src="https://mdbootstrap.com/img/new/slides/043.jpg"
        class="d-block w-100"
        alt="Exotic Fruits"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselExampleCaptions"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselExampleCaptions"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
document.getElementById('opacity-slider').addEventListener('input', function (e) {
  document.body.style.opacity = this.value;
});

        </script>

    </div>
  </body>
</html>
<?php
include "functions.php";
session_start();
verifyCookie();

if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  return;
}

$no = 1;
$username = $_SESSION['username'];
$showdata = mysqli_fetch_array(mysqli_query($conn, "SELECT users.*,users_dp.dpname,users_dp.path_name FROM users LEFT JOIN users_dp ON users.usr_img=users_dp.id WHERE username = '$username'"));



?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- MAIN HTML TITLE -->
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <title>XELVII.com - Discover Gallery</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/sidebar-09/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
  <div class="userMainbg1" id="home">
    <?php include '_fw/nav-log.php'; ?>
    <div class=""></div>

    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" style="margin-top: 70px;">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
          </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(./assets/sidebar-09/images/bg_1.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(<?php echo $showdata['path_name'] ?>);"></div>
            <h3 style="font-size: 22px;"><b><?php echo $showdata['nama_depan'] . " " . $showdata['nama_belakang'] ?></b></h3>
            <h3 style="margin-top: -10px "><?php echo $showdata['occupancy'] ?></h3>
            <h3 style="margin-top: -10px"><?php echo $showdata['address'] ?></h3>
          </div>
        </div>
        <ul class="list-unstyled components mb-5">
          <li class="active" id="pageHome">
            <a href="#" onclick="switchHome()"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li class="" id="pageLearn">
            <a href="#" onclick="switchLearn()"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Learn</a>
          </li>
          <li class="" id="pageTech">
            <a href="#" onclick="switchTech()"><span class="fa fa-gift mr-3"></span> Techniques</a>
          </li>
          <li class="" id="pageDiscover">
            <a href="#" onclick="switchDiscover()"><span class="fa fa-trophy mr-3"></span> Discover</a>
          </li>
          <li class="" id="pageCameras">
            <a href="#" onclick="switchCameras()"><span class="fa fa-cog mr-3"></span> Cameras</a>
          </li>
          <li class="" id="pageSupport">
            <a href="#" onclick="switchSupport()"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li class="pb-3" id="pageSignout">
            <a href="#" onclick="switchSignout()"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
          <p style="text-align: center; color: gray; ">&copy; 2022 XELVII.com</p>

        </ul>

      </nav>

      <!-- Page Content  -->


      <div id="content" class="p-4 p-md-5 pt-5" style="margin-top: 70px;">
        <div class="">

          <!-- CONTAINER -->

          <!-- ASIDE KIRI -->

          <!-- SECTION CONTENT -->
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify ">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active basicsbg1 ">

                  <div style="margin-top: 180px; ">
                    <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">DSLR</h1>
                    <div class="" data-aos="fade-up">
                      <p class="intro home1text">Kamera yang digunakan para fotografer profesional. Pelajari caranya dibawah! </p>
                      <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>

                    </div>
                  </div>
                </div>
                <div class="carousel-item basicsbg2">

                  <div style="margin-top: 180px;">
                    <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">SMARTPHONE</h1>
                    <div class="" data-aos="fade-up">
                      <p class="intro home1text">Handphonemu bisa menjadi alat fotografi tingkat atas loh! Simak penjelasannya dibawah! </p>
                      <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>

                    </div>
                  </div>
                </div>
                <div class="carousel-item basicsbg3">

                  <div style="margin-top: 180px;">
                    <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">ANALOG</h1>
                    <div class="" data-aos="fade-up">
                      <p class="intro home1text">Kamu adalah penerus generasi! ayo tingkatkan kemampuanmu sekarang! </p>
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

          <div class="">

            <div class="">
              <div class="col-12 col-md-12 col-xxl-12  text-light text-justify basicsbgC" id="bdslr">
                <div class="container">
                  <h1 class="mb-5 text-uppercase" data-aos="fade-right">DSLR BASICS</h1>
                  <div style="margin-top: -50px;">
                    <div class="wrapperSM">
                      <div class="icon facebook">
                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>
                      </div>
                      <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                      </div>
                      <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                      </div>
                      <div class="icon github">
                        <div class="tooltip">Whatsapp</div>
                        <span><i class="fab fa-whatsapp"></i></span>
                      </div>
                      <div class="icon youtube">
                        <div class="tooltip">Youtube</div>
                        <span><i class="fab fa-youtube"></i></span>
                      </div>
                    </div>
                  </div>

                  <h5 class="text-uppercase" data-aos="fade-right">Teknik dasar dan cara penggunaan umum kamera DSLR.</h5>

                  <h5 style="margin-top: 0px; "><i class="fa fa-calendar"></i> October 15, 2020</h5>

                  <div class="float-start float-left img-fluid" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px; padding-top: 50px;">
                    <img src="https://i.ytimg.com/vi/_E0QnZJVMSA/maxresdefault.jpg" style="width:100%; height: auto;">
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

                  <div class="float-start float-left img-fluid" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCK6ypgyW_c7R-PDP4iebgpu96qlFWHTqo_RoRfZ7L-RbhryjQcr0ifqvDk5SARWMpV14&usqp=CAU" style="width:100%; height: auto;">
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
                  <div class="float-end float-left img-fluid mainimg2" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
                    <img src="https://www.ephotozine.com/articles/p--a--s--m--manual-shooting-modes-and-exposure-explained-32591/images/1000-Canon-EOS-600D-Mode-Dial-P8150004_1534339998.jpg" class="mainimg2">
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
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://mdbootstrap.com/img/new/slides/041.jpg" class="d-block w-100" alt="Wild Landscape" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/slides/042.jpg" class="d-block w-100" alt="Camera" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/slides/043.jpg" class="d-block w-100" alt="Exotic Fruits" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                </div>
              </div>

              <div class="col-12 col-md-12 col-xxl-12  text-light text-justify basicsbgC" id="bphone">

                <div class="container">
                  <h1 class="mb-5 text-uppercase" data-aos="fade-right">SMARTPHONE BASICS</h1>
                  <div style="margin-top: -50px;">
                    <div class="wrapperSM">
                      <div class="icon facebook">
                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>
                      </div>
                      <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                      </div>
                      <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                      </div>
                      <div class="icon github">
                        <div class="tooltip">Whatsapp</div>
                        <span><i class="fab fa-whatsapp"></i></span>
                      </div>
                      <div class="icon youtube">
                        <div class="tooltip">Youtube</div>
                        <span><i class="fab fa-youtube"></i></span>
                      </div>
                    </div>
                  </div>
                  <h5 class="text-uppercase" data-aos="fade-right">Teknik dasar dan cara penggunaan umum kamera pada smartphone atau handphone.</h5>

                  <h5 style="margin-top: 0px; "><i class="fa fa-calendar"></i> October 15, 2020</h5>

                  <div class="float-start float-left img-fluid" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;  padding-top: 50px;">
                    <img src="https://images.unsplash.com/photo-1584006682522-dc17d6c0d9ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80" style="width:100%; height: auto;">
                  </div>
                  <div class="text-justify">
                    <div data-aos="fade-up" class="text-justify">
                      <p class="text-justify articletxt">Beberapa alasan mengapa saat ini banyak orang lebih suka mengambil foto melalui kamera HP dibanding kamera profesional diantaranya karena HP merupakan perangkat wajib yang akan kamu bawa kemana-mana setiap saat,
                        Kamera HP telah mengalami peningkatan drastis dari sisi software, hardware serta teknologi yang disematkan untuk meningkatkan kualitas foto yang dihasilkan, Sebagian orang merasa ribet kalau harus membawa kamera DSLR/Mirrorless setiap saat, Kamera profesional terbilang sangat mahal dan tidak semua orang rela merogoh kocek sebanyak itu.
                        Jadi, kemampuan memaksimalkan kamera HP adalah suatu hal penting, simak tips berikut untuk membantumu :</p>

                    </div>
                  </div>
                  <br>

                  <div class="float-start float-left img-fluid mainimg2" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
                    <img src="https://images.unsplash.com/photo-1608547492989-e91bab9ce286?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%; ">
                  </div>
                  <div class="text-justify">
                    <div data-aos="fade-up" class="text-justify">
                      <p class="text-justify articletxt">1. Gunakan HP Terbaik sesuai Kemampuan</p>

                      <p class="text-justify articletxt">Pintar-pintarlah memilih smartphone yang sesuai dengan kemampuan keuangan kamu. Harga HP yang lebih mahal belum tentu berbanding lurus dengan kualitas kamera yang disematkan, bisa jadi ada HP yang lebih murah dengan kualitas kamera yang mumpuni.</p>

                      <p class="text-justify articletxt">Jangan tergoda dengan ukuran megapixels besar karena megapixels bukanlah patokan kualitas foto, kebanyakan ini hanya gimmick dari produsen HP saja.</p>

                    </div>

                  </div>
                  <div class="float-end float-left img-fluid mainimg2" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
                    <img src="https://images.unsplash.com/photo-1472393365320-db77a5abbecc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%; height: auto;">
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
                  <div class="float-start float-left img-fluid mainimg2" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
                    <img src="https://images.unsplash.com/photo-1614442804207-4d864251c528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" style="width:100%; height: auto;">
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
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://mdbootstrap.com/img/new/slides/041.jpg" class="d-block w-100" alt="Wild Landscape" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/slides/042.jpg" class="d-block w-100" alt="Camera" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/slides/043.jpg" class="d-block w-100" alt="Exotic Fruits" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
              </div>


              <div class="col-12 col-md-12 col-xxl-12  text-light text-justify basicsbgC" id="bvintage">
                <div class="container">

                  <h1 class="mb-5 text-uppercase" data-aos="fade-right">ANALOG BASICS</h1>
                  <div style="margin-top: -50px;">
                    <div class="wrapperSM">
                      <div class="icon facebook">
                        <div class="tooltip">Facebook</div>
                        <span><i class="fab fa-facebook-f"></i></span>
                      </div>
                      <div class="icon twitter">
                        <div class="tooltip">Twitter</div>
                        <span><i class="fab fa-twitter"></i></span>
                      </div>
                      <div class="icon instagram">
                        <div class="tooltip">Instagram</div>
                        <span><i class="fab fa-instagram"></i></span>
                      </div>
                      <div class="icon github">
                        <div class="tooltip">Whatsapp</div>
                        <span><i class="fab fa-whatsapp"></i></span>
                      </div>
                      <div class="icon youtube">
                        <div class="tooltip">Youtube</div>
                        <span><i class="fab fa-youtube"></i></span>
                      </div>
                    </div>
                  </div>
                  <h5 class="text-uppercase" data-aos="fade-right">Teknik dasar dan cara penggunaan kamera analog.</h5>

                  <h5 style="margin-top: 0px; "><i class="fa fa-calendar"></i> October 15, 2020</h5>

                  <div class="float-start float-left img-fluid mainimg3" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;  padding-top: 50px;">
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
                      <div class="float-start float-left img-fluid mainimg2" data-aos="fade-up" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;  padding-top: 50px;">
                        <img src="https://images.unsplash.com/photo-1532601726018-c7b30abe3a22?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80" style="width:100%; height: auto;">
                      </div>


                      <p class="text-justify articletxt">1. Lihat basic kontrol pada kamera. Setiap kamera analog film 35mm memiliki kontrol dasar yang berbeda-beda. Oleh karena itu, pertama-tama sobat harus benar-benar memperhatikan dan mengerti fungsi dari setiap kantrol dasar tersebut. Bagi yang belum memahami kontrol dasar dari kamera analog, admin telah membahasnya pada artikel dasar-dasar kamera analog.</p>
                      <br><br>
                      <p class="text-justify articletxt">A. Shutter speed dial. Setshutter speed mengikuti kondisi cahaya.Shutter speedberfungsi untuk mengatur kecepatan film ketika terkena cahaya. Bisanya kamera analog tahun 1960 dan seterusnya akan menunjukkanshutter speeddengan angka yang semakin meningkat, seperti B, 1/125, 1/250, 1/500 dan seterusnya.</p>
                      <br><br>
                      <p class="text-justify articletxt">Shutter Speedkamera analog yang usianya lebih tua lagi, biasanya menggunakan angka-angka yang lebih aneh dan sewenang-wenang letaknya. Sedangkan letakshutter speed sendiri berbeda-beda setiap kamera analog. Secara umum letaknya ada di sebelah kanan atas. Tapi ada juga yang menyatu denganmounting lensanya, seperti Olympus OM.</p>
                      <br><br>
                      <p class="text-justify articletxt">B. Aperture Ring. Kontrol Aperture di setiap kondisi cahaya yang berbeda-beda. Aperture sendiri biasanya disebut diafragma atau bukaan, yakni bilah-bilah plat besi seperti kipas yag ada di lensa berfungsi untuk mengatur jumlah cahaya yang masuk melalui lensa. Untuk mengontrol aperture ini, ada ring (cincin) yang letaknya di lensa itu sendiri. </p>
                      <br><br>
                      <p class="text-justify articletxt">Tetapi tidak selalu di lensa, aperture beberapa kamera analog SLR tahun 1980an dan seterusnya sudah bisa dikontrol dari kamera itu sendiri. Contohya sistem seperti Canon EOS tidak memiliki aperture ring sama sekali. Umumnya aperture ring yang ada di lensa, terletak di bagian belakang lensa atau di depan seperti lensa Industar dari Uni Soviet dan lensa OM-sistem. Aperture ditunjukkan dengan angka-angka seperti f/8, f/11 dan seterusnya. Semakin kecil angkanya, semakin besar bukaannya dan sebaliknya.</p>
                      <br><br>
                      <div class="float-start sliderbrightness">
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
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://mdbootstrap.com/img/new/slides/041.jpg" class="d-block w-100" alt="Wild Landscape" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/slides/042.jpg" class="d-block w-100" alt="Camera" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/new/slides/043.jpg" class="d-block w-100" alt="Exotic Fruits" />
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./assets/sidebar-09/js/jquery.min.js"></script>
    <script src="./assets/sidebar-09/js/popper.js"></script>
    <script src="./assets/sidebar-09/js/bootstrap.min.js"></script>
    <script src="./assets/sidebar-09/js/main.js"></script>
    <script>
      AOS.init();
    </script>



</body>

</html>
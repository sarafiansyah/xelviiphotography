<?php
include "functions.php";
session_start();
verifyCookie();

if (!isset($_SESSION['username'])) {
  error_reporting(0);
  ini_set('display_errors', 0);
}

$no = 1;
$username = $_SESSION['username'];
$showdata = mysqli_fetch_array(mysqli_query($conn, "SELECT users.*,users_dp.dpname,users_dp.path_name FROM users LEFT JOIN users_dp ON users.usr_img=users_dp.id WHERE username = '$username'"));


?>

<!DOCTYPE html>
<!-- 412020016 MAHESA RAFIAN SYAH -->
<!-- TUGAS PEMROGRAMAN WEB -->
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <!-- STYLESHEET -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


  <!-- MAIN HTML TITLE -->
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <title>XELVII.com - Multidevice Photography Learning Website</title>



  <link href="./css/styles.css" rel="stylesheet">
  <link href="css/basics.css" rel="stylesheet">
  <link href="css/t-panning.css" rel="stylesheet">
  <link type="text/css" href="css/responsive.css" rel="stylesheet">
  <script src="js/script.js"></script>
  <!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- SECTION NABVAR -->
  <?php
  if (!empty($_SESSION['username'])) {
    include '_fw/nav-log.php';
  } else if (!isset($_SESSION['username'])) {
    include '_fw/nav-main.php';
  }
  ?>

  <div class="">
    <!-- CONTAINER -->
    <div class="container-fluid">

      <div class="row">
        <!-- ASIDE KIRI -->

        <!-- SECTION CONTENT -->
        <div class="col-12 col-md-12 col-xxl-12  text-light text-justify tecbg1" id="about">
          <div class="container">

            <h1 class="mb-5 text-uppercase" data-aos="fade-right">TEKNIK FOTOGRAFI PANNING</h1>
            <div style="margin-top: -50px;">
              <div class="wrapper">
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
            <h6 class="mb-5 text-uppercase" data-aos="fade-right">Teknik Fotografi panning oleh Nurabdillah</h6>

            <div class=" img-fluid justify-content-center" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
              <img src="https://images.unsplash.com/photo-1613033686399-aa7c18d6d760?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width: 100%; ">
            </div>
            <div class="text-justify">
              <div data-aos="fade-up" class="text-justify">
                <p class="text-justify articletxt">Panning adalah salah satu teknik fotografi yang digunakan untuk membekukan gerakan benda yang bergerak. Ide dibalik teknik ini ialah mengatasi masalah mengambil gambar subjek yang bergerak cepat.</p>
                <br><br>
                <p class="text-justify articletxt">Ciri-ciri foto dengan menggunakan teknik ini biasanya memiliki fokus yang tajam terhadap objek yang bergerak, sedangkan backgroundnya tampak blur atau kabur. Alhasil mengambil foto dengan teknik Panning memiliki kesulitas tersendiri bagi fotografer pemula.</p>
                <br><br>
                <p class="text-justify articletxt">Teknik Panning memang menekankan kesan artistik dari objek yang bergerak dengan cepat. Tak ada yang bisa menjamin foto dengan teknik ini akan sempurna. Namun, dengan berbagai latihan, kesabaran dan momen yang pas, maka akan tercipta sebuah foto Panning yang dramatis dan menarik.</p>

              </div>
            </div>

            <div class="float-start float-left img-fluid" data-aos="fade-left" id="mainimg2" style="padding-right: 20px; padding-left: 20px; padding-bottom: 50px;">
              <img src="https://64.media.tumblr.com/tumblr_m84qmym7Oh1rbdguuo1_400.gif" style="width: 100%; height: auto; ">
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
                  <img src="https://images.unsplash.com/photo-1506395474577-242f168d2e2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" style="width: 100%; height: auto; ">
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
                  <img src="http://nickdidlick.com/wp-content/uploads/vr-300x262.jpg" style="width:100%;">
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
  </div>


  <!-- SECTION FOOTER -->
  <div class="col-12 col-md-12 col-xxl-12">
    <div class="contentfooter" id="contact">
      <div class="" data-aos="zoom-in">
        <?php include '_fw/footer-content.php'; ?>
      </div>
    </div>
  </div>
  <!-- SECTION SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
  <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
  <script>
    AOS.init();

    function checkScroll() {
      var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

      if ($(window).scrollTop() > startY) {
        $('.navbar').addClass("scrolled");
      } else {
        $('.navbar').removeClass("scrolled");
      }
    }

    function myFunction(x) {
      if (x.matches) { // If media query matches
        $('.navbar').addClass("scrolled");
      }
    }

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes

    if ($('.navbar').length > 0) {
      $(window).on("scroll load resize", function() {
        checkScroll();
        myFunction(x);
      });
    }
  </script>
  <script src="/js/script.js"></script>




  </div>
</body>

</html>
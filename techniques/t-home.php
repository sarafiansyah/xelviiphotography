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


  <link href="css/styles.css" rel="stylesheet">
  <link href="css/techniques.css" rel="stylesheet">
  <link type="text/css" href="css/responsive.css" rel="stylesheet">

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
        <div class="col-12 col-md-12 col-xxl-12  text-light text-justify tmainbg1" style="padding-top: 200px">
          <h1 class="mb-5 text-uppercase " data-aos="fade-right" id="maintitle">TEKNIK FOTOGRAFI</h1>
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
          <h6 class="mb-5 text-uppercase" data-aos="fade-right">Telusuri banyak teknik dan cara penggunaan kamera yang kamu gunakan disini!</h6>
          <section class="wrapper " data-aos="fade-left" style="padding-bottom: 0px;">
            <div class="container">

              <div class="row">
                <div class="col-md-4" style="padding-bottom: 50px;">
                  <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?panning');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?panning" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                      <div class="card-body">
                        <small class="card-meta mb-2">TEKNIK FOTOGRAFI</small>
                        <h4 class="card-title mt-0 "><a class="text-white" href="techniques.php?page=t-article1">Panning</a></h4>
                        <small><i class="fa fa-calendar"></i> 10 Februari 2021</small>
                      </div>
                      <div class="card-footer">
                        <div class="media">
                          <img class="mr-3 rounded-circle" src="https://media.pricebook.co.id/author/60f548ff632ce5440c780d3a/nur-abdillah_OCaO1HfW@48.jpg" alt="Generic placeholder image" style="max-width:50px">
                          <div class="media-body">
                            <h6 class="my-0 text-white d-block">Nur Abdillah</h6>
                            <small>Content Writer</small><br>
                            <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-4" style="padding-bottom: 50px;">
                  <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?bokeh');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?bokeh" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                            <small>Developer of XELVII.com</small><br>
                            <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="padding-bottom: 50px;">
                  <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?levitate');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?levitate" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                            <small>Developer of XELVII.com</small><br>
                            <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section>
        </div>
      </div>
    </div>
    <div class="container-fluid tmainbg2">
      <section class="wrapper" data-aos="fade-right">
        <div class="container">

          <div class="row">
            <div class="col-md-4" style="padding-bottom: 50px;">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?macro');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?zoomin" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                        <small>Developer of XELVII.com</small><br>
                        <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="padding-bottom: 50px;">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?blur');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?blur" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                        <small>Developer of XELVII.com</small><br>
                        <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="padding-bottom: 50px;">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?night');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?night" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                        <small>Developer of XELVII.com</small><br>
                        <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section>
    </div>
    <div class="container-fluid tmainbg3">
      <section class="wrapper" data-aos="fade-left">
        <div class="container">

          <div class="row">
            <div class="col-md-4" style="padding-bottom: 50px;">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?bride');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?wedding" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                        <small>Developer of XELVII.com</small><br>
                        <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="padding-bottom: 50px;">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?sport');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?sport" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                        <small>Developer of XELVII.com</small><br>
                        <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4" style="padding-bottom: 50px;">
              <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?food');">
                <img class="card-img d-none" src="https://source.unsplash.com/600x900/?food" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
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
                        <small>Developer of XELVII.com</small><br>
                        <div class="ratings"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i> <small> 4.5</small><br></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
<script src="js/script.js"></script>

</div>

</html>
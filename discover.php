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






  <link href="css/styles.css" rel="stylesheet">
  <link href="css/gallery.css" rel="stylesheet">
  <link type="text/css" href="css/responsive.css" rel="stylesheet">
  <script src="js/script.js"></script>

  <!-- MAIN HTML TITLE -->
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <title>XELVII.com - Discover Gallery</title>

  <!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <?php if (!empty($_SESSION['username'])) {
        ?>
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Upload Your Masterpiece!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
              <div class="form-group p-2">
                <label for="name">Uploader's Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $showdata['nama_depan'] . ' ' . $showdata['nama_belakang'] ?>" required />
              </div>
              <div class="form-group p-2">
                <label for="name">Image Title</label>
                <input type="text" class="form-control" id="imgtitle" name="imgtitle" placeholder="Enter name" value="" required />
              </div>
              <div class="form-group p2">
                <label for="formFile">Default file input example</label>
                <input class="form-control" type="file" id="formFile" id="uploadImage" type="file" accept="image/*" name="image" />
              </div>

              <br>
              <input class=" btn btn-success" type="submit" value="Upload">
            </form>
            <div id="err"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        <?php } else if (!isset($_SESSION['username'])) {
        ?>
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><b>Upload Your Masterpiece!</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
              <div>
                <h5><b>Please Login First</b></h5>
                <p>Untuk mengupload hasil karyamu, kamu perlu Login , Signup terlebih dahulu.</p>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a type="button" href="logform02.php" class="btn btn-primary text-light">Login</a>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>

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
    <div class="">

      <div class="row">
        <!-- ASIDE KIRI -->

        <!-- SECTION CONTENT -->
        <div class="col-12 col-md-12 col-xxl-12  text-light text-justify discoverbg1" style="padding-top: 200px;">
          <div class="container">
            <div style="padding-bottom: 100px;">
              <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">DISCOVER</h1>
              <h5 class="text-uppercase" data-aos="fade-right" style="margin-top: -50px; padding-bottom: 10px;">Temukan foto inspirasimu dalam galeri XELVII.com.</h5>
              <a class="btn btn-primary rounded-pill text-light" data-aos="fade-right" onclick="" href="discover.php#xelviipicks" role="button" style="">FIND OUT MORE</a>
              <a class="btn btn-primary rounded-pill text-light" data-aos="fade-right" onclick="" href="discover.php#xelviimp" role="button" style="">USERS MASTERPIECE</a>
            </div>

            <!-- Gallery -->
            <div class="col-12 col-md-12 col-xxl-12 flex-wrap  text-light text-justify" style="display:block;">
              <video autoplay muted loop id="myVideo">
                <source src="videos/discbg1.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
              <!-- Gallery -->
              <!-- Gallery -->



              <div class="row">
                <div class="container">
                  <h5 style="font-size: 40px;   font-family: 'Raleway', sans-serif; padding-top: 100px;" class="mb-5 text-uppercase home1title " data-aos="fade-right" id="xelviipicks">XELVII BEST PICKS</h5>
                  <a class="btn btn-primary rounded-pill text-light" data-aos="fade-right" onclick="" href="discover.php" role="button" style="margin-top: -50px;">FIND OUT MORE</a>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?family" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?landscape" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?food" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?sunset" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?mountain" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?beach" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?night" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?street" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?sport" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?girl" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?boy" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?city" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?travel" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?indonesia" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?sunrise" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?neon" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?night" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                  <div class="hover hover-1">
                    <img src="https://source.unsplash.com/414x512/?auto" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    <div class="hover-1-content px-5 py-4">
                      <h3 class="hover-1-description text-uppercase font-weight-bold mb-0">Wonderful</h3>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-user"></i> Unsplash</p>
                      <p class="hover-1-description font-weight-light mb-0"><i class="fa fa-calendar"></i> 15 Desember 2021</p>
                    </div>
                  </div>
                </div>



              </div>
            </div>
            <div class="container">
              <h5 style="font-size: 40px;   font-family: 'Raleway', sans-serif; padding-top: 10px;" class="mb-5 text-uppercase home1title " data-aos="fade-right" id="xelviimp">USERS MASTERPIECE</h5>
              <a type="button" class="btn btn-primary rounded-pill text-light" href="#" role="button" data-aos="fade-right" style="margin-top: -50px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">UPLOAD YOURS</a>

            </div>

            <table class="table table-striped table-hover text-center">



              <?php
              $result = $conn->query("SELECT * FROM users_img;");
              //var_dump($rows);
              while ($row = $result->fetch_assoc()) {

                echo "<tr>";


                echo "<div class='col-lg-4 col-md-12 mb-4   mb-lg-0 float-start'>
    <div class='hover hover-1' >
      <img src='" . $row['file_name'] . "' class='w-100 shadow-1-strong rounded mb-4 px-3 ' style='width: 412px; height: 512px; alt='Boat on Calm Water' />
      <div class='hover-1-content px-5 py-4'>
        <h3 class='hover-1-description text-uppercase font-weight-bold mb-0'>" . $row['img_title'] . "</h3>
        <p class='hover-1-description font-weight-light mb-0'><i class='fa fa-user'></i>" . $row['name'] . "</p>
        <p class='hover-1-description font-weight-light mb-0'><i class='fa fa-calendar'></i> 15 Desember 2021</p>
      </div>
    </div>"


              ?>


              <?php

              }

              ?>

            </table>
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
      <div class="" data-aos="zoom-in">
        <footer class="text-center text-lg-start text-light ">
          <!-- Section: Social media -->
          <section class="d-flex justify-content-center p-4" id="footerbot">
            <!-- Left -->
            <div class="me-5 footercaption">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="">
              <a href="" class="text-white me-4 ">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="text-white  me-4">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="text-white  me-4">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="text-white  me-4">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="text-white  me-4">
                <i class="fab fa-github"></i>
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
                  <img src="images/navlogo2.png" class="text-uppercase fw-bold" style="width:200px;">
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 200px; background-color: white; height: 2px" />
                  <p>
                    XELVII.com is developed and maintained by Mahesa Rafian Syah. All contents are licensed to their own.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h5 class="text-uppercase fw-bold">LEARN</h5>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #FFFFFF; height: 2px" />
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
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px" />
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
                    <a href="credits.php" class="text-white">Credits</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px" />
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
          <div class="text-center p-3 mt-3">
            © 2021
            <a class="text-white" href="https://mdbootstrap.com/">XELVII.com . All Rights Reserved.</a>
          </div>
          <!-- Copyright -->
        </footer>
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
  <script src="js/scripts.js"></script>



  </div>
</body>

</html>
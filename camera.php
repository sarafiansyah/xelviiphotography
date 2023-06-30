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

<style>
  a {
    text-decoration: none;
  }

  /* Card Styles */

  .card-sl {
    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .card-image img {
    max-height: 100%;
    max-width: 100%;
    border-radius: 8px 8px 0px 0;
  }

  .card-action {
    position: relative;
    float: right;
    margin-top: -25px;
    margin-right: 20px;
    z-index: 2;
    color: #E26D5C;
    background: #fff;
    border-radius: 100%;
    padding: 15px;
    font-size: 15px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
  }

  .card-action:hover {
    color: #fff;
    background: #E26D5C;
    -webkit-animation: pulse 1.5s infinite;
  }

  .card-heading {
    font-size: 18px;
    font-weight: bold;
    background: #fff;
    padding: 10px 15px;
  }

  .card-text {
    padding: 10px 15px;
    background: #fff;
    font-size: 14px;
    color: #636262;
  }

  .card-button {
    display: flex;
    justify-content: center;
    padding: 10px 0;
    width: 100%;
    background-color: #1F487E;
    color: #fff;
    border-radius: 0 0 8px 8px;
  }

  .card-button:hover {
    text-decoration: none;
    background-color: #1D3461;
    color: #fff;

  }


  @-webkit-keyframes pulse {
    0% {
      -moz-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -webkit-transform: scale(0.9);
      transform: scale(0.9);
    }

    70% {
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -webkit-transform: scale(1);
      transform: scale(1);
      box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
    }

    100% {
      -moz-transform: scale(0.9);
      -ms-transform: scale(0.9);
      -webkit-transform: scale(0.9);
      transform: scale(0.9);
      box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
    }
  }
</style>

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
          <h1 class="mb-5 text-uppercase " data-aos="fade-right" id="maintitle">CAMERAS</h1>
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
              <div class="container mt-3">
                <div class="">
                  <h2 class="text-center mb-3"><strong>BEST CAMERA DEVICES IN 2022</strong></h2>
                  <table class="table table-striped table-hover text-center">

                    <thead class="table-dark">
                      <tr>
                        <th scope="row">#</th>
                        <th scope="row">Manufacturer</th>
                        <th scope="row">Model</th>
                        <th scope="row">Type</th>
                        <th scope="row">Origin</th>
                        <th scope="row">Year</th>


                      </tr>
                    </thead>
                    <tbody class="table-light">
                      <?php


                      $result = $conn->query("SELECT camera.id,manufacturer,model,devices.device_type,origin,device_year FROM camera
						LEFT JOIN devices ON id_devices=devices.id;");


                      //var_dump($rows);
                      while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['manufacturer'] . "</td>";
                        echo "<td>" . $row['model'] . "</td>";
                        echo "<td>" . $row['device_type'] . "</td>";
                        echo "<td>" . $row['origin'] . "</td>";
                        echo "<td>" . $row['device_year'] . "</td>";


                      ?>

                      <?php

                        echo "</tr>";
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
                <h6 class="text-end fst-italic">412020016 MAHESA RAFIAN SYAH</h6>

              </div>

              <div class="container" style="margin-top:50px;">
                <h2 class="text-center mb-3"><strong>BEST CAMERA DEVICES IN 2022</strong></h2>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://s0.bukalapak.com/uploads/content_attachment/0aaa10830635c66f0dc40ea5/original/Nikon-D80-Main.jpg" style="width: 200px; height: 120px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Nikon D80
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://foto.co.id/wp-content/uploads/2018/06/EOS-80D.jpg" style="width: 200px; height: 120px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Canon 80D
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://m.media-amazon.com/images/I/41irXDbe-eL._AC_SY1000_.jpg" style="width: 200px; height: 120px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Pentax K1000
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://b2c-contenthub.com/wp-content/uploads/2022/06/vivo_x80_pro_review.jpg?quality=50&strip=all" style="width: 200px; height: 120px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Vivo X80
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3 pt-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://images.bisnis-cdn.com/posts/2022/02/07/1497368/samsung-galaxy-s22-ultra-5g.jpg" style="width: 200px; height: 120px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Samsung Galaxy S22 Ultra
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3 pt-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://images.techadvisor.com/cmsdata/slideshow/3797871/vivo_x70_pro_plus_review_6.jpg" style="width: 200px; height: 150px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Vivo X70
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3 pt-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://media.suara.com/pictures/653x366/2022/03/09/41183-iphone-13-hijau.jpg" style="width: 200px; height: 150px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Iphone 13
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                  <div class="col-md-3 pt-3">
                    <div class="card-sl">
                      <div class="card-image">
                        <img src="https://www.lifewire.com/thmb/II4h04nAMnlybgLYCTEQ0ez6yrU=/640x640/smart/filters:no_upscale()/sony-a77-8710894b2e2845f3aeb5b94d3c2323ed.jpg" style="width: 200px; height: 120px;" />
                      </div>

                      <a class="card-action" href="#"><i class="fa fa-heart"></i></a>
                      <div class="card-heading" style="color: black;">
                        Sony Alpha 77
                      </div>
                      <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias.
                      </div>
                      <div class="card-text">
                        $67,400
                      </div>
                      <a href="#" class="card-button text-light"> Purchase</a>
                    </div>
                  </div>
                </div>

              </div>
          </section>
        </div>
      </div>
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
</script>
<script src="js/script.js"></script>

</div>

</html>
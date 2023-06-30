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
$showdataadm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM administrators WHERE username = '$username'"));



$userCount = mysqli_query($conn, "SELECT COUNT(*) as total FROM users");
$admCount = mysqli_query($conn, "SELECT COUNT(*) as total2 FROM administrators");
$rptCount = mysqli_query($conn, "SELECT COUNT(*) as total FROM reports");
$fbCount = mysqli_query($conn, "SELECT COUNT(*) as total FROM users_feedback");

$users_count = mysqli_fetch_assoc($userCount);
$adm_count = mysqli_fetch_assoc($admCount);
$rpt_count = mysqli_fetch_assoc($rptCount);
$fb_count = mysqli_fetch_assoc($fbCount);


?>

<!DOCTYPE html>
<!-- 412020016 MAHESA RAFIAN SYAH -->
<!-- TUGAS PEMROGRAMAN WEB -->
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <!-- STYLESHEET : CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <!-- STYLESHEET : LOCAL -->
  <link type="text/css" href="css/responsive.css" rel="stylesheet">
  <link type="text/css" href="css/styles.css" rel="stylesheet">
  <link type="text/css" href="css/wavebutton.css" rel="stylesheet">
  <link type="text/css" href="css/feedback.css" rel="stylesheet">


  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">



  <!-- MAIN HTML TITLE -->
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <title>XELVII.com - Multidevice Photography Learning Website</title>


  <!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">

  <style>
    .order-card {
      color: #fff;
    }

    .bg-c-blue {
      background: linear-gradient(45deg, #4099ff, #73b4ff);
    }

    .bg-c-green {
      background: linear-gradient(45deg, #2ed8b6, #59e0c5);
    }

    .bg-c-yellow {
      background: linear-gradient(45deg, #FFB64D, #ffcb80);
    }

    .bg-c-pink {
      background: linear-gradient(45deg, #FF5370, #ff869a);
    }


    .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
      box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
      border: none;
      margin-bottom: 30px;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .card .card-block {
      padding: 25px;
    }

    .order-card i {
      font-size: 26px;
    }

    .f-left {
      float: left;
    }

    .f-right {
      float: right;
    }
  </style>


</head>



<body>
  <!-- SECTION NABVAR -->
  <?php include '_fw/nav-adm.php'; ?>

  <div class="">
    <!-- CONTAINER -->
    <div class="container-fluid">

      <div class="row">
        <!-- ASIDE KIRI -->

        <!-- SECTION CONTENT -->
        <div class="homebg1" id="home">
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify ">


            <div class="container" style="margin-top: 100px;">
              <div style="padding-bottom: 50px; padding-top: 100px;">
                <h1 style="color: white; font-size: 50px" class="mb-5 text-uppercase home1title " data-aos="fade-up" data-aos-duration="1500" id="maintitle">WELCOME, <?php echo $showdataadm['nama_depan'] ?></h1>
                <p data-aos="fade-up" data-aos-duration="1500" class="intro home1text" style="color: white; font-size: 24px; margin-top: -50px; padding-bottom: 100px;">This is XELVII Administrator Dashboard. Here you can manage XELVII web users activity and maintenance on going. </p>
              </div>
              <div class="row">
                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-blue order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Public Users</h6>
                      <h2 class="text-right "><i class="fas fa-user f-left mt-1 pe-2"></i><span> <?php echo $users_count['total']; ?></span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-green order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Administrators</h6>
                      <h2 class="text-right"><i class="fas fa-user f-left mt-1 pe-2"></i><span> <?php echo $adm_count['total2']; ?></span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-pink order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Reports</h6>
                      <h2 class="text-right"><i class="<i fas fa-exclamation-triangle f-left mt-1 pe-2"></i><span> <?php echo $rpt_count['total']; ?></span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Reviews</h6>
                      <h2 class="text-right"><i class="fas fa-comments f-left mt-1 pe-2"></i><span> <?php echo $fb_count['total']; ?></span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container" style="padding-bottom: 100px;">
              <div class="row">
                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-green order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Total Income</h6>
                      <h2 class="text-right" style="font-size: 24px;"><i class="fas fa-dollar-sign fa-left mt-1 pe-2"></i></i><span>23.342K IDR</span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-pink order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Total Outcome</h6>
                      <h2 class="text-right" style="font-size: 24px;"><i class="fas fa-dollar-sign fa-left mt-1 pe-2"></i></i><span>23.342K IDR</span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Charity & Donations</h6>
                      <h2 class="text-right" style="font-size: 24px;"><i class="fas fa-dollar-sign fa-left mt-1 pe-2"></i></i><span>23.342K IDR</span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-xl-3">
                  <div class="card bg-c-green order-card">
                    <div class="card-block">
                      <h6 class="m-b-20">Sponsorship</h6>
                      <h2 class="text-right" style="font-size: 24px;"><i class="fas fa-dollar-sign fa-left mt-1 pe-2"></i></i><span>23.342K IDR</span></h2>
                      <p class="m-b-0">XELVII Main Database</p>
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
    <div class="" data-aos="zoom-in">
      <?php include '_fw/footer-main.php'; ?>
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

<script src="vendor/animsition/js/animsition.min.js"></script>


<script src="vendor/select2/select2.min.js"></script>



</div>

</html>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/sidebar-09/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">


  <style>
    h3 {
      font-size: 24px;

    }

    .card {
      border: none;
      border-radius: 10px
    }

    .c-details span {
      font-weight: 300;
      font-size: 13px
    }

    .icon {
      width: 50px;
      height: 50px;
      background-color: #eee;
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 39px
    }

    .badge span {
      background-color: #fffbec;
      width: 60px;
      height: 25px;
      padding-bottom: 3px;
      border-radius: 5px;
      display: flex;
      color: #fed85d;
      justify-content: center;
      align-items: center
    }

    .progress {
      height: 10px;
      border-radius: 10px
    }

    .progress div {
      background-color: red
    }

    .text1 {
      font-size: 14px;
      font-weight: 600
    }

    .text2 {
      color: #a5aec0
    }
  </style>

</head>

<body>

  <div class="" style="">
    <?php include '_fw/nav-log.php'; ?>
  </div>
  <div class="userMainbg1" id="home">

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
            <a href="usermain.php?page=home" onclick="switchHome()"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li class="active" id="pageProfile">
            <a href="userProfile.php" onclick="switchHome()"><span class="fa fa-user mr-3"></span> Profile</a>
          </li>
          <li class="active" id="pageLearn">
            <a href="usermain.php?page=learn" onclick="switchLearn()"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Learn</a>
          </li>
          <li class="active" id="pageTech">
            <a href="usermain.php?page=techniques" onclick="switchTech()"><span class="fa fa-gift mr-3"></span> Techniques</a>
          </li>
          <li class="active" id="pageDiscover">
            <a href="usermain.php?page=discover" onclick="switchDiscover()"><span class="fa fa-trophy mr-3"></span> Discover</a>
          </li>
          <li class="active" id="pageCameras">
            <a href="usermain.php?page=camera" onclick="switchCameras()"><span class="fa fa-cog mr-3"></span> Cameras</a>
          </li>
          <li class="active" id="pageSupport">
            <a href="usermain.php?page=support" onclick="switchSupport()"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li class="pb-3 active" id="pageSignout">
            <a href="logout.php" onclick="switchSignout()"><span class="fas fa-sign-out-alt mr-3"></i></span> Sign Out</a>
          </li>
          <p style="text-align: center; color: gray; ">&copy; 2022 XELVII.com</p>

        </ul>

      </nav>

      <!-- Page Content  -->


      <div id="content" class="p-4 p-md-5 pt-5" style="margin-top: 70px;">
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          switch ($page) {
            case 'home':
              $display = 'usermainHome.php';
              break;
            case 'learn':
              $display = 'usermainLearn.php';
              break;
            case 'techniques':
              $display = 'usermainTechniques.php';
              break;
            case 'discover':
              $display = 'usermainDiscover.php';
              break;
            case 'camera':
              $display = 'usermainCamera.php';
              break;
            case 'support':
              $display = 'usermainSupport.php';
              break;
            case 'logout':
              $display = 'logout.php';
              break;
          }
        } else $display = "usermainHome.php";

        include($display);
        ?>





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



</body>

</html>
<?php
include "../functions.php";
session_start();
verifyCookie();

if (!isset($_SESSION['username'])) {
  header('Location: index.php');
  return;
}

$no = 1;
$username = $_SESSION['username'];
$showdataadm = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM administrators WHERE username = '$username'"));



?>

<!-- SECTION NABVAR -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark mr-auto px-3">

  <a class="navbar-brand" href="#"><img src="../images/navlogo2.png" style="width:150px;"></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-end">
    <div class="navbar-nav">
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus">Pages</a>
        <div class="dropdown-menu">
          <a href="../admlog.php?page=admhome" class="dropdown-item">Home</a>
          <a href="index.php#about" class="dropdown-item">About </a>
          <a href="index.php#basics" class="dropdown-item">Learn </a>
          <a href="index.php#rating" class="dropdown-item">Rating</a>
          <a href="index.php#feedback" class="dropdown-item">Feedback</a>
          <a href="index.php#contact" class="dropdown-item">Contact</a>
          <a href="techniques.php" class="dropdown-item ">Techniques</a>
          <a href="discover.php" class="dropdown-item ">Discover</a>
          <a href="camera.php" class="dropdown-item ">Cameras</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active">Users</a>
        <div class="dropdown-menu">
          <a href="index.php?page=public-db" class="dropdown-item">XELVII Public</a>
          <a href="index.php?page=public-db" class="dropdown-item">XELVII Admin</a>

        </div>
      </div>

      <a href="index.php?page=feedback-db" class="nav-item nav-link active">Feedbacks</a>
      <a href="index.php?page=report-db" class="nav-item nav-link active">Reports</a>


    </div>
    <div class="navbar-nav ml-auto active">

      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus"><img class="mr-3 rounded-circle" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="width: 25px; height: 25px; margin-top: 0px;"><?php echo $showdataadm['nama_depan'] ?></a>
        <div class="dropdown-menu">
          <li><a class="dropdown-item" href="userProfile.php">Premium User</a></li>
          <li><a class="dropdown-item" href="userProfile.php">Profile</a></li>
          <li><a class="dropdown-item" href="#">Feedback</a></li>
          <li><a class="dropdown-item" href="#">Something</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item text-danger" href="../admlog.php?page=logout">Log Out</a></li>
        </div>
      </div>

    </div>
</nav>
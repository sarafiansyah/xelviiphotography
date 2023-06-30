<!-- SECTION NABVAR -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark mr-auto px-3">

  <a class="navbar-brand" href="#"><img src="images/navlogo2.png" style="width:150px;"></a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-end">
    <div class="navbar-nav">
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus">Home</a>
        <div class="dropdown-menu">
          <a href="userMain.php#home" class="dropdown-item">Home</a>
          <a href="index.php#about" class="dropdown-item">About </a>
          <a href="index.php#basics" class="dropdown-item">Learn </a>
          <a href="index.php#rating" class="dropdown-item">Rating</a>
          <a href="index.php#feedback" class="dropdown-item">Feedback</a>
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
      <a href="discover.php" class="nav-item nav-link active">Discover</a>
      <a href="camera.php" class="nav-item nav-link active">Cameras</a>
      <a href="help.php" class="nav-item nav-link active">Help</a>
      <a href="credits.php" class="nav-item nav-link active">Credits</a>

      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus">Support</a>
        <div class="dropdown-menu">
          <a href="index.php#about" class="dropdown-item"><i class="fas fa-file-alt"></i> Terms Condition</a>
          <li><a class="dropdown-item" href="feedback.php"><i class="fas fa-comment"></i> Feedback</a></li>
          <a href="help.php" class="dropdown-item"><i class="fas fa-question-circle"></i> Help</a>
          <li>
            <hr class="dropdown-divider">
          </li>
          <a href="credits.php" class="dropdown-item"><i class="fas fa-users"></i> Credits</a>
        </div>
      </div>

    </div>
    <div class="navbar-nav ml-auto active">

      <div class="btn-group">
        <button type="button" class="btn  dropdown-toggle dropleft text-light" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="mr-3 rounded-circle" src="<?php echo $showdata['path_name'] ?>" alt="Generic placeholder image" style="width: 25px; height: 25px; margin-right: 10px;">

          <?php echo $showdata['nama_depan'] ?>

        </button>
        <ul class="dropdown-menu dropdown-menu-lg-right">

          <li><a class="dropdown-item" href="userProfile.php">Profile</a></li>
          <li><a class="dropdown-item" href="feedback.php">Feedback</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item text-danger" href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
</nav>
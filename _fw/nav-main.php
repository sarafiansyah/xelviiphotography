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
          <a href="index.php#home" aria-current="page" class="dropdown-item"><i class="fas fa-home"></i> Home</a>
          <a href="index.php#about" class="dropdown-item"><i class="fas fa-info"></i> About </a>
          <a href="index.php#basics" class="dropdown-item"><i class="fas fa-graduation-cap"></i> Learn </a>
          <a href="index.php#rating" class="dropdown-item"><i class="fas fa-star-half-alt"></i> Rating</a>
          <a href="index.php#feedback" class="dropdown-item"><i class="fas fa-comment"></i> Feedback</a>
          <a href="index.php#contact" class="dropdown-item"><i class="fas fa-phone-alt"></i> Contact</a>
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active">Learn</a>
        <div class="dropdown-menu">
          <a href="<?php if (!empty($_SESSION['username'])) {
                      echo "basics.php";
                    } else if (!isset($_SESSION['username'])) {
                      echo "logform04.php";
                    } ?>" class="dropdown-item"><i class="fas fa-graduation-cap"></i> Complete Learning</a>
          <a href="<?php if (!empty($_SESSION['username'])) {
                      echo "basics.php#bdslr";
                    } else if (!isset($_SESSION['username'])) {
                      echo "logform04.php";
                    } ?>" class="dropdown-item"><i class="fas fa-camera"></i> DSLR Camera Basics</a>
          <a href="<?php if (!empty($_SESSION['username'])) {
                      echo "basics.php#bphone";
                    } else if (!isset($_SESSION['username'])) {
                      echo "logform04.php";
                    } ?>" class="dropdown-item"><i class="fas fa-mobile-alt"></i> Smartphone Camera Basics</a>
          <a href="<?php if (!empty($_SESSION['username'])) {
                      echo "basics.php#bvintage";
                    } else if (!isset($_SESSION['username'])) {
                      echo "logform04.php";
                    } ?>" class="dropdown-item"><i class="fas fa-camera-retro"></i> Vintage Camera Basics</a>
        </div>
      </div>
      <a href="<?php if (!empty($_SESSION['username'])) {
                  echo "techniques.php";
                } else if (!isset($_SESSION['username'])) {
                  echo "logform04.php";
                } ?>" class="nav-item nav-link active">Techniques</a>
      <a href="discover.php" class="nav-item nav-link active">Discover</a>
      <a href="camera.php" class="nav-item nav-link active">Cameras</a>

      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus">Membership</a>
        <div class="dropdown-menu">
          <a href="index.php#about" class="dropdown-item"><i class="fas fa-file-alt"></i> Terms Condition</a>
          <li><a class="dropdown-item" href="<?php if (!empty($_SESSION['username'])) {
                                                echo "feedback.php";
                                              } else if (!isset($_SESSION['username'])) {
                                                echo "logform04.php";
                                              } ?>"><i class="fas fa-comment"></i> Feedback</a></li>
          <a href="help.php" class="dropdown-item"><i class="fas fa-question-circle"></i> Help</a>
          <li>
            <hr class="dropdown-divider">
          </li>
          <a href="credits.php" class="dropdown-item"><i class="fas fa-users"></i> Credits</a>
        </div>
      </div>


      <div class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle active" data-toggle="tooltip" data-placement="top" title="See all home menus" style="color: blue;"><b>Login</b></a>
        <div class="dropdown-menu">
          <a class="btn dropdown-item " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-user-check"></i> Sign in to Admin</a>
          <a href="index.php?page=userlogin" class="dropdown-item"><i class="fas fa-user"></i> Sign In to Public</a>

        </div>
      </div>
      <a class="btn btn-primary rounded-pill basicbtn" href="index.php?page=usersignup" style="padding-left: 20px; padding-right: 20px;" role="button">Sign Up</a>
      <a class="wavebtn " href="index.php?page=usersignup"><span>SIGN UP</span>
        <div class="wave"></div>
      </a>


    </div>


</nav>
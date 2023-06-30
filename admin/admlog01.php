<?php
//REG
require 'functions.php';
session_start();
verifyCookie();

if(isset($_GET['page'])){
   $page=$_GET['page'];

   switch($page){
      case 'admlog01' : $display='admin/admlog01.php'; break;
      case 'admlog03' : $display='admin/admlog03.php'; break;
      case 'admhome' : $display='admin/admhome.php'; break;
 

      
   }
} 



if (isset($_SESSION['username'])) {
   header("Location: admhome.php");
}

if(isset($_POST['register'])) {
  if(adm_registration($_POST) > 0){
    echo "<script>
          alert('User baru berhasil');
          </script>";
  }
}
else {
  echo mysqli_error($conn);
}


//LOG
if(isset($_POST['loginBtn'])) {
  $username = $_POST["loginUsername"];
  $password = $_POST["loginPassword"];
  $resultLog = mysqli_query($conn, "SELECT * FROM administrators WHERE username ='$username'");

  //Username check
  if(mysqli_num_rows($resultLog) === 1){
    //Password Check
    $row = mysqli_fetch_assoc($resultLog);
    if(password_verify($password, $row["password"])){
       $_SESSION['username'] = $username;
      // remember me
      if(isset($_POST['rememberme'])) {
         setcookie('id', $row['id'], mktime(0, 0, 0, 0, 0, 25));
         setcookie('key', hash('sha256', $username), mktime(0, 0, 0, 0, 0, 25));
      }
      header("Location: admlog.php?page=admhome");
      exit;
    }
  }

  $error = true;

  

}
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
    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- MAIN HTML TITLE -->
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>XELVII.com - Multidevice Photography Learning Website</title>
 

    <link type="text/css" href="css/responsive.css" rel="stylesheet">
     <link type="text/css" href="css/styles.css" rel="stylesheet">
    <link href="css/logstyle.css" rel="stylesheet">
    <script src="js/script.js"></script>
	<!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">


   

  </head>
  <body>
    	<!-- SECTION NABVAR -->
      <?php include '_fw/nav-main.php';?>
      <?php if(isset($error)) : ?>
                  <div class="alert alert-danger alert-dismissible fade show d-none sc-alert"  role="alert" style="margin-top: 80px;">
  <strong>Login Gagal!</strong> Username dan password salah.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>		
const successAlert = document.querySelector('.sc-alert');
		successAlert.classList.toggle('d-none'); </script>
                <?php endif; ?>
      <div class="container logbox">
    <section id="formHolder">
 
       <div class="row">
 
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
             <a href="#" class="logo">Administrator</a>
             
 
             <div class="heading">
             <div class="heading">
             <img src="images/navlogo2.png" style="width:350px;" >
             </div>
             </div>
 
             <div class="success-msg">
                <p>Great! You are one of our members now</p>
                <a href="#" class="profile">Your Profile</a>
             </div>
          </div>
 
 
          <!-- Form Box -->
          <div class="col-sm-6 form">
 
             <!-- Login Form -->
             <div class="login form-peice switched">

                <form class="" action="#" method="post">
                   <div class="form-group"  style="color: black;">
                   <h3 class="text-center" >Login</h3>
                      <label for="loginUsername">Username</label>
                      <input type="text" name="loginUsername" id="loginUsername" required>
                   </div>
 
                   <div class="form-group"  style="color: black;">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="loginPassword" id="loginPassword" required>
                   </div>
 
                   <div class="CTA">
                      <input type="submit" name="loginBtn" value="Login" style="background-color: blue;">
                      <a href="#" class="switch" style="color: black;">I'm New</a>
                   </div>
                </form>
             </div><!-- End Login Form -->
 
 
             <!-- Signup Form -->
             <div class="signup form-peice">
                <form class="" action="#" method="post">
 
                   <div class="form-group" style="color: black;">
                     <h3 class="text-center">Sign Up</h3>
                      <label for="username" >Username</label>
                      <input type="text" name="username" id="username" class="">
                      <span class="error"></span>
                   </div>

                   <div class="form-group" style="color: black;">
                      <label for="namadepan">Nama Depan</label>
                      <input type="text" name="namadepan" id="namadepan" class="">
                      <span class="error"></span>
                   </div>

                   <div class="form-group" style="color: black;">
                      <label for="namabelakang">Nama Belakang</label>
                      <input type="text" name="namabelakang" id="namabelakang" class="">
                      <span class="error"></span>
                   </div>
 
                   <!--<div class="form-group">
                      <label for="email">Email Adderss</label>
                      <input type="email" name="emailAdress" id="email" class="email">
                      <span class="error"></span>
                   </div>-->
 
                   <!--<div class="form-group">
                      <label for="phone">Phone Number - <small>Optional</small></label>
                      <input type="text" name="phone" id="phone">
                   </div>-->
 
                   <div class="form-group" style="color: black;">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group" style="color: black;">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="password2" id="password2" class="">
                      <span class="error"></span>
                   </div>
 
                   <div class="CTA text-center">
                   <input type="submit" name="register" id="register" value="Sign Up"  style="background-color: blue;">
                   
                      <a href="#" class="switch" style="color: black;">I have an account</a>
                   </div>
                </form>
             </div><!-- End Signup Form -->
          </div>
       </div>
 
    </section>
 
 
    
 
 </div>
           </body>
		<!-- SECTION FOOTER -->
    <div class="col-12 col-md-12 col-xxl-12">
		  <div class="homebg3" id="contact">
        <div class="" data-aos="zoom-in">
<?php include '_fw/footer-main.php';?>
</div>
			  </div>
      </div> 
            <!-- SECTION SCRIPT -->
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <script src="jquery.min.js"></script>
        <script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <script>AOS.init();</script>
        <script src="js/scripts.js"></script>
        <script src="js/logform.js"></script>

        

    </div>

</html>
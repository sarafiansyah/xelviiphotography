<?php
header("refresh:2;url=userMain.php");
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

  <script src="js/script.js"></script>
  <!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,700&display=swap" rel="stylesheet">




</head>

<body>
  <!-- SECTION NABVAR -->
  <?php include '_fw/nav-main.php'; ?>
  <?php if (isset($error)) : ?>
    <div class="alert alert-danger alert-dismissible fade show d-none sc-alert" role="alert" style="margin-top: 80px;">
      <strong>Login Gagal!</strong> Username dan password salah.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
      const successAlert = document.querySelector('.sc-alert');
      successAlert.classList.toggle('d-none');
    </script>
  <?php endif; ?>
  <div class="col-12 col-md-12 col-xxl-12  text-light text-justify homebg1" id="home" style="padding-bottom: 200px; padding-top: 200px">
    <div class="container">
      <div>
        <h1 class="mb-5 text-uppercase text-center" data-aos="fade-right" id="maintitle">SUCCESSFULLY LOGGED IN</h1>



        <div class="mx-auto justify-content-center text-center" data-aos="fade-left">
          <p class="intro text-center" style="font-size: 24px;">You have successfully logged in to our servers! <br>Please wait while we redirects you to the users homepage..</p>
          <div class="d-flex justify-content-center">
            <div class="spinner-border" role="status" style="">
              <span class="visually-hidden">Loading...</span>
            </div>
            <p style="font-size: 24px; padding-left: 10px;"> Loading...</p>
          </div>
        </div>
      </div>
      <div class="d-none">
        <h1 class="mb-5 text-uppercase " data-aos="fade-right" id="maintitle">LOGIN FAILED</h1>



        <div class="mx-auto justify-content-center text-center" data-aos="fade-left">
          <p class="intro text-center" style="font-size: 24px;">This is common issue that might come from your device. <br>Please check your device connection..</p>


        </div>
      </div>
    </div>

  </div>

</body>
<!-- SECTION FOOTER -->

<!-- SECTION SCRIPT -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script>
  AOS.init();
</script>
<script src="js/scripts.js"></script>
<script src="js/logform.js"></script>



</div>

</html>
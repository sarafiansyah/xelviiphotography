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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <div class="homebg1" id="home">
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify ">
            <div class="float-start float-left img-fluid" data-aos="fade-right" data-aos-duration="1500" id="mainimg1" style="padding-right: 50px">
              <img src="images/help-img03.png" style="width: 550px; height: 480px; margin-top: -100px; padding-left: 0px; ">


            </div>
            <div style="margin-top: 180px; ">
              <h1 class="mb-5 text-uppercase home1title " data-aos="fade-up" data-aos-duration="1500" id="maintitle">NEED HELP?</h1>
              <div class="" data-aos="fade-up">
                <p class="intro home1text">Kamu menemukan hal kurang baik dalam XELVII.com? sampaikan laporanmu melalui tombol dibawah!</p>
                <!-- Button trigger modal -->
                <button type="button" id="btnAdd" class="btn btn-danger mb-3" data-bs-toggle="modal">
                  <i class="fas fa-exclamation-triangle"></i></i> Report
                </button>

              </div>
            </div>

          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Report Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="formAdd">
                  <div class="mb-3">
                    <label class="form-label">Nama Pengguna</label>
                    <input type="text" name="helpNama" class="form-control" value="">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="helpEmail" class="form-control" value="">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Messages</label>
                    <textarea class="form-control" name="helpMessages" placeholder="Masukan 10 kata atau lebih..." id="floatingTextarea2" style="height: 100px" required></textarea>
                  </div>
                  <!-- <div class="mb-3">
    <label class="form-label">Sent Time</label>
    <input type="text" name="helpTime" class="form-control" value=""> 
  </div>
  <div class="mb-3">
    <label class="form-label">Sent Date</label>
    <input type="text" name="helpDate" class="form-control" value=""> 
  </div> -->

                  <!-- <div class="mb-3">
  <label class="form-label">Status Pembalap</label>
  <select class="form-select form-select-md" id="selectStatus" name="status" aria-label=".form-select-sm example">
  <option selected>Status Pembalap</option>
  <option value="Aktif">Aktif</option>
  <option value="Pensiun">Pensiun</option>
</select>
  </div> -->

                  <!-- <div class="mb-3">
    <label class="form-label">Nama Tim</label>
  <select class="form-select form-select-md" id="selectNama_tim" name="nama_tim" aria-label=".form-select-sm example">
	  <option selected>Pilih Tim</option>
</select>
</div>

<div class="mb-3">
    <label class="form-label">Motor</label>
  <select class="form-select form-select-md" id="selectMotor" name="motorbalap"aria-label=".form-select-sm example">
	  <option selected>Pilih Tim</option>
</select>
</div> -->


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button id="btnSave" type="button" class="btn btn-primary">Send</button>
              </div>
              </form>
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
<script src="./js/help.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>


<script src="vendor/select2/select2.min.js"></script>



<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwu00AxAXs0-ElTW1D6T21NxM9Sl2ejDm8l_jWoKOZlcsHAyL8Mm56oKSWvr_ttm1WIYA/exec'
  const form = document.forms['xelvii_cs'];
  const successAlert = document.querySelector('.sc-alert');
  const submitBtn = document.querySelector('.submitBtn');
  const loadingBtn = document.querySelector('.loadingBtn');


  form.addEventListener('submit', e => {
    e.preventDefault()
    submitBtn.classList.toggle('d-none')
    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
      })
      .then((response) => {
        successAlert.classList.toggle('d-none');

        loadingBtn.classList.toggle('d-none');
        submitBtn.classList.toggle('d-none')

        form.reset();
        document.getElementById('feedback').scrollIntoView();
        console.log('Success!', response)
      })

    loadingBtn.classList.toggle('d-none')


      .catch(error => console.error('Error!', error.message))
  })

  function loading() {
    var x = document.getElementById("loadingbtn");
    x.style.display = "none";
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>


</div>

</html>
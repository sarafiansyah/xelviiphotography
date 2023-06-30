<!DOCTYPE html>
<!-- 412020016 MAHESA RAFIAN SYAH -->
<!-- TUGAS PEMROGRAMAN WEB -->
<html>

<head>
  <!-- HTML HEAD -->

  <?php include '_fw/html-head1.php'; ?>
</head>

<body>
  <!-- SECTION NABVAR -->

  <?php include '_fw/nav-main.php'; ?>

  <!-- CONTAINER -->
  <div class="">
    <div class="container-fluid">

      <div class="row">
        <!-- ASIDE KIRI -->

        <!-- SECTION CONTENT -->
        <div class="homebg1" id="home">
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify ">
            <div class="container">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="float-start float-left img-fluid" data-aos="fade-right" data-aos-duration="1500" id="mainimg1" style="padding-right: 50px">
                      <img src="images/homecar1.png" style="width:450px; height: 550px; margin-top: 90px; padding-left: 50px; ">
                    </div>
                    <div style="margin-top: 180px; ">
                      <h1 class="mb-5 text-uppercase home1title " data-aos="fade-up" data-aos-duration="1500" id="maintitle">MULTI VISION</h1>
                      <div class="" data-aos="fade-up">
                        <p class="intro home1text">Satu jendela bidik, beragam jenis teknik . Tingkatkan kemampuan fotografimu bersama XELVII.com! </p>
                        <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="float-start float-left img-fluid" data-aos="fade-up" data-aos-duration="1500" id="mainimg1" style="padding-right: 50px">
                      <img src="images/homecar2.png" style="width:550px; height: 550px; margin-top: 90px; padding-left: 50px;">
                      <!-- <img src="https://source.unsplash.com/512x512/?photography" style="width:500px; height: 500px; margin-top: 90px; padding-left: 50px; border-radius: 0% 100% 0% 100% / 42% 70% 30% 58%  " >-->
                      <!--50% 50% 50% 50% / 50% 50% 50% 50% -->

                    </div>
                    <div style="margin-top: 180px;">
                      <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">MULTI PLATFORM</h1>
                      <div class="" data-aos="fade-up">
                        <p class="intro home1text">Ingin membaca di Handphone? Komputer? Laptop? Tablet? XELVII.com bisa! </p>
                        <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="float-start float-left img-fluid" data-aos="fade-up" id="mainimg1" style="padding-right: 50px">
                      <img src="images/homecar3.png" style="width:550px; height: 550px; margin-top: 90px; margin-left: 0px;">
                    </div>
                    <div style="margin-top: 180px;">
                      <h1 class="mb-5 text-uppercase home1title " data-aos="fade-right" id="maintitle">MULTI VARIANTS</h1>
                      <div class="" data-aos="fade-up">
                        <p class="intro home1text">Kamera DSLR, Smartphone, Analog? Tenang, semua teknik dan cara penggunaanya di XELVII.com ada! </p>
                        <button type="button" class="btn btn-primary rounded-pill" onclick="window.location.href='basics.php'">PELAJARI LEBIH LANJUT</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-xxl-12  text-light text-justify homebg2" id="about">
          <div class="container ">
            <h1 class="mb-5 text-uppercase" data-aos="fade-right" style="font-family: 'Raleway', sans-serif;">ABOUT US</h1>
            <hr class="d-none d-lg-block d-xl-block" style="border: 3px solid white; border-radius: 50px; width: 300px; margin-top: -40px;">
            <div data-aos="fade-up">
              <div>
                <img src="https://source.unsplash.com/512x512/?photography" class="aboutImg float-end" style=" border-radius: 50% 50% 50% 50% / 50% 50% 50% 50%; ">


                <div class="aboutText ">
                  <p class="aboutText" style=" ">XELVII.com menyediakan penjelasan teknik dasar untuk berbagai jenis kamera, dari DSLR hingga Smartphone!</p>
                  <button type="button" class="btn btn-primary rounded-pill" style="clear: both;" onclick="window.location.href='techniques.php'">PELAJARI LEBIH LANJUT</button>
                  <button type="button" class="btn btn-outline-light rounded-pill" onclick="window.location.href='credits.php'">BIODATA DEVELOPER</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="owlBG  " id="basics">
          <div class="container ">
            <h1 class="mb-5 text-uppercase text-light text-justify" data-aos="fade-right" style="font-family: 'Raleway', sans-serif;">YOUR STYLE</h1>
            <p class="text-light text-justify home1cardtext">Fotografer jenis apakah anda? Geser untuk melihat lebih banyak!</p>
            <div class="owlcarouselBG" id="cards" style="margin-top: -100px;">
              <div data-aos="fade-up" data-aos-duration="2000">
                <div class="slider owl-carousel">
                  <div class="card cardOWL">
                    <div class="img">
                      <img src="images/img-owl/img-owl1.jpg" style="border-radius: 10px" alt="">
                    </div>
                    <div class="content">
                      <div class="title">
                        D-SLER
                      </div>
                      <div class="sub-title">
                        DSLR CAMERA
                      </div>
                      <p class="">
                        Entry Level? Semi Profesional? Profesional? Carilah teknik pemotretan DSLR yang kalian ingin pelajari!
                      </p>
                      <div class="btn">
                        <button>Read more</button>
                      </div>
                    </div>
                  </div>
                  <div class="card cardOWL">
                    <div class="img">
                      <img src="images/img-owl/img-owl4.png" style="border-radius: 10px" alt="">
                    </div>
                    <div class="content">
                      <div class="title">
                        SMARTPHONER
                      </div>
                      <div class="sub-title">
                        Smartphone Camera
                      </div>
                      <p>
                        Memotret makanan, selfie, dan buat snap? carilah teknik up-to-date untuk memaksimalkan fotografimu di XELVII.com
                      </p>
                      <div class="btn">
                        <button>Read more</button>
                      </div>
                    </div>
                  </div>
                  <div class="card cardOWL">
                    <div class="img">
                      <img src="images/img-owl/img-owl3.png" style="border-radius: 10px" alt="">
                    </div>
                    <div class="content">
                      <div class="title">
                        VINTAGER
                      </div>
                      <div class="sub-title">
                        Vintage Camera
                      </div>
                      <p>
                        Anda adalah penerus generasi lama! Carilah teknik-teknik Kamera Vintage dalam situs XELVII.com dan ciptakan mahakarya mu!
                      </p>
                      <div class="btn">
                        <button>Read more</button>
                      </div>
                    </div>
                  </div>
                  <div class="card cardOWL">
                    <div class="img">
                      <img src="images/img-owl/img-owl2.png" style="border-radius: 10px" alt="">
                    </div>
                    <div class="content">
                      <div class="title">
                        NEWCOMER
                      </div>
                      <div class="sub-title">
                        Just Owned A Camera
                      </div>
                      <p>
                        Apakah anda baru pernah memiliki sebuah kamera dan ingin tahu cara menggunakannya? anda berkunjung di website yang tepat!
                      </p>
                      <div class="btn">
                        <button>Read more</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <script>
          $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
          });
        </script>

        <div class="testires homebg4" id="rating">
          <div class="container">
            <div class="" data-aos="fade-up">
              <h1 class="mb-5 text-uppercase text-light text-justify" data-aos="fade-right" style="font-family: 'Raleway', sans-serif;">RATING AND REVIEWS</h1>
              <p class="text-light text-justify home1cardtext" style=" margin-top: -50px;">Seberapa baik penyajian konten web XELXII.com?</p>
              <div class="container ">
                <div class="accordion d-block justify-content-center align-items-center" id="accordionExample">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="p-3">
                        <ul class="testimonial-list">
                          <li>
                            <div class="card p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
                                <div class="d-flex flex-column ml-2 " style="padding-left: 20px;"> <strong class="font-weight-normal">ALAN BUDIANTO</strong>
                                  <span>Photographer</span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="card p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/udGH5tO.jpg" width="50" class="rounded-circle">
                                <div class="d-flex flex-column ml-2" style="padding-left: 20px;"> <strong class="font-weight-normal">CELINE DELLION</strong> <span>Professional Photographer</span> </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="card p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/Uz4FjGZ.jpg" width="50" class="rounded-circle">
                                <div class="d-flex flex-column ml-2" style="padding-left: 20px;"> <strong class="font-weight-normal">ELIANA TANUWIJAYA</strong> <span>Entry Level Photographer</span> </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6 text-light">
                      <div class="p-3 testimonials-margin">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <h4>Halaman web menarik dan informasi bermanfaat</h4>
                            <div class="ratings"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                            <p>Halaman web XELVII.com cukup menarik dan mudah digunakan! Informasi-informasi seputar dunia pemotretan juga disajikan dengan baik dan mudah dimegerti!</p>
                          </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <h4>It was a great experience!</h4>
                            <div class="ratings"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                            <p>As a senior photographer, I found this website is great throwback of techniques and basics I've learned long time ago. Thanks for remind me about skills I may have forgotten before!</p>
                          </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            <h4>Artikel sangat mudah dipahami!</h4>
                            <div class="ratings"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                            <p>Sebagai fotografer pemula, saya cukup terbantu dengan web XELVII.com </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="homebg5" id="feedback">
          <div class="container">
            <h1 class="mb-5 text-uppercase text-light text-justify" data-aos="fade-right" style="font-family: 'Raleway', sans-serif;">FEEDBACK</h1>
            <p class="text-light text-justify home1cardtext">Kirimkan kesan-kesanmu terhadap XELVII.com!</p>
            <div class="alert alert-success alert-dismissible fade show d-none sc-alert" role="alert">
              <strong>Data Berhasil Ditambahkan!</strong> Menunggu respon dari pihak admin.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="" data-aos="fade-up">
              <div class="container-contact100">
                <div class="wrap-contact100">
                  <form class="contact100-form validate-form" name="xelvii_cs">
                    <span class="contact100-form-title">My Feedback</span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                      <span class="label-input100">Full Name</span>
                      <input class="input100" type="text" name="name" placeholder="Enter your name">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Email</span>
                      <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                      <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                      <span class="label-input100">Details</span>
                      <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                      <span class="focus-input100"></span>
                    </div>
                    <div class="mb-3 d-none">
                      <label for="disabledTextInput" class="form-label">Time</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="time_posted" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                                                                                              echo date("H:i:s"); ?>">

                    </div>
                    <div class="mb-3 d-none">
                      <label for="disabledTextInput" class="form-label">Date</label>
                      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="date_posted" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                                                                                              echo date("d/m/Y"); ?>">
                    </div>

                    <div class="container-contact100-form-btn">
                      <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn submitBtn" type="submit" name="addpoint">
                          <span>
                            Submit
                            <i class="fas fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                          </span>
                        </button>
                      </div>
                    </div>
                    <div class="container-contact100-form-btn">
                      <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn loadingBtn d-none" type="submit" name="addpoint">
                          <span>
                            Harap Tunggu
                            <div class="spinner-border spinner-border-sm" role="status">
                              <span class="visually-hidden">Loading...</span>
                            </div>

                          </span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-xxl-12  text-light text-justify homebgPTR" id="about">
          <div class="container ">
            <h1 class="mb-5 text-uppercase" data-aos="fade-right" style="font-family: 'Raleway', sans-serif;">PARTNERS</h1>
            <hr class="d-none d-lg-block d-xl-block" style="border: 3px solid white; border-radius: 50px; width: 300px; margin-top: -40px;">
            <div data-aos="fade-up">
              <div class="container mx-auto  justify-content-center text-center" id="partnersImg">
                <div class="row g-4">
                  <div class="col-4">
                    <div class="card " style="width: 18rem; height: 150px; padding: 0px; ">
                      <div class="card-body">
                        <img src="images/img-partners/logo-nikon.jpg" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-canon.jpg" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-vivo.png" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-pentax.png" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class=" card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-unsplash.jpeg" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class=" col-4">
                    <div class=" card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-rd.png" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="container row mx-auto  justify-content-center text-center" id="partnersImg2">
                <div class="row g-4">
                  <div class="">
                    <div class="card " style="width: 18rem; height: 150px; padding: 0px; ">
                      <div class="card-body">
                        <img src="images/img-partners/logo-nikon.jpg" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-canon.jpg" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-vivo.png" class=" img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-pentax.png" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class=" ">
                    <div class=" card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-unsplash.jpeg" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                  <div class=" ">
                    <div class=" card" style="width: 18rem; height: 150px; padding: 0px;">
                      <div class="card-body">
                        <img src="images/img-partners/logo-rd.png" class="img-fluid" alt="..." style="width: 300px; height: 120px;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>

  <!-- SECTION FOOTER -->
  <div class="col-12 col-md-12 col-xxl-12">
    <div class="homebg3" id="contact">
      <div class="" data-aos="zoom-in">
        <?php include '_fw/footer-main.php'; ?>
      </div>
    </div>
  </div>
</body>

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

</html>
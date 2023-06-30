<!DOCTYPE html>
<!-- 412020016 MAHESA RAFIAN SYAH -->
<!-- TUGAS PEMROGRAMAN WEB -->
<html>

<head>
  <!-- HTML HEAD -->


</head>

<body>
  <!-- SECTION NABVAR -->



  <!-- CONTAINER -->
  <div class="">
    <div class="container-fluid">

      <div class="row">
        <!-- ASIDE KIRI -->

        <!-- SECTION CONTENT -->
        <div class="homebg1" id="home">
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify " style="padding-top: 100px; padding-bottom: 100px;">
            <div class="container">



              <div class="">
                <h2 class="text-center mb-3"><strong>XELVII PUBLIC USERS LIST</strong></h2>
                <table class="table table-light table-striped table-hover text-center">

                  <thead class="table-dark">
                    <tr>
                      <th scope="row">#</th>
                      <th scope="row">DP</th>
                      <th scope="row">Username</th>
                      <th scope="row">Nama Depan</th>
                      <th scope="row">Nama Belakang</th>
                      <th scope="row">Time Joined</th>
                      <th scope="row">Date Joined</th>

                      <th scope="row">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM users;");
                    //var_dump($rows);
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row['id'] . "</td>";

                      $usrImg = $conn->query("SELECT * FROM users_dp ");
                      while ($rowimg = $usrImg->fetch_assoc()) {
                        if ($row['usr_img'] == $rowimg['id']) {

                          $imageURL = 'uploads/' . $rowimg["path_name"];
                    ?>
                          <td><img src="<?php echo $rowimg['path_name'] ?>" alt="Admin" class="rounded-circle" style="width: 30px; height: 30px;"></td>
                    <?php
                        }
                      }
                      echo "<td>" . $row['username'] . "</td>";
                      echo "<td>" . $row['nama_depan'] . "</td>";
                      echo "<td>" . $row['nama_belakang'] . "</td>";
                      echo "<td>" . $row['join_time'] . "</td>";
                      echo "<td>" . $row['join_date'] . "</td>";

                      echo "<td><a href='index.php?page=delete_user&id=$row[id]' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a></td>";
                      echo "</tr>";
                    }

                    ?>
                  </tbody>
                </table>
              </div>
              <h6 class="text-end fst-italic">412020016 MAHESA RAFIAN SYAH</h6>

            </div>
          </div>
        </div>

        <div class="homebg1" id="home">
          <div class="col-12 col-md-12 col-xxl-12  text-light text-justify " style="padding-top: 100px; padding-bottom: 100px;">
            <div class="container">



              <div class="">
                <h2 class="text-center mb-3"><strong>XELVII ADMINISTRATORS LIST</strong></h2>
                <table class="table table-light table-striped table-hover text-center">

                  <thead class="table-dark">
                    <tr>
                      <th scope="row">#</th>
                      <th scope="row">Username</th>
                      <th scope="row">Nama Depan</th>
                      <th scope="row">Nama Belakang</th>
                      <th scope="row">Time Joined</th>
                      <th scope="row">Date Joined</th>

                      <th scope="row">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $result = $conn->query("SELECT * FROM administrators;");
                    //var_dump($rows);
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row['id'] . "</td>";
                      echo "<td>" . $row['username'] . "</td>";
                      echo "<td>" . $row['nama_depan'] . "</td>";
                      echo "<td>" . $row['nama_belakang'] . "</td>";
                      echo "<td>" . $row['join_time'] . "</td>";
                      echo "<td>" . $row['join_date'] . "</td>";

                      echo "<td><a href='index.php?page=delete_admin&id=$row[id]' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a></td>";
                      echo "</tr>";
                    }

                    ?>
                  </tbody>
                </table>
              </div>
              <h6 class="text-end fst-italic">412020016 MAHESA RAFIAN SYAH</h6>

            </div>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
          });
        </script>
      </div>
    </div>
  </div>


  <!-- SECTION FOOTER -->
  <div class="col-12 col-md-12 col-xxl-12">
    <div class="homebg3" id="contact">
      <div class="" data-aos="zoom-in">
        <?php include 'framework/footer-main.php'; ?>
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
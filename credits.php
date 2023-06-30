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
    <!-- STYLESHEET -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link href="css/styles.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link type="text/css" href="css/responsive.css" rel="stylesheet">
    <script src="js/script.js"></script>

    <!-- MAIN HTML TITLE -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>XELVII.com - Multidevice Photography Learning Website</title>

    <!-- CUSTOM FONT : Alegreya Sans SC 800, Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@800&family=Poppins&display=swap" rel="stylesheet">
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
                <div class="col-12 col-md-12 col-xxl-12  text-dark text-justify creditsbg1" id="indolang-profile" style="padding-top: 200px">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">

                                    <img src="images/dev1.png" class="rounded-circle avatar-xl img-thumbnail">
                                    <h4 class="mb-0">Mahesa Rafian Syah</h4>
                                    <p class="text-muted">412020016</p>

                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light" href="https://www.instagram.com/sa_rafiansyah/?hl=en">Ikuti</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Pesan</button>


                                    <div class="text-left mt-3">
                                        <h4 class="font-13 text-uppercase">Tentang Saya :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            Halo XELVIIERS!, Nama saya Mahesa Rafian Syah, saya dari Universitas Kristen Krida Wacana dengan jurusan Informatika.
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Nama :</strong> <span class="ml-2">Mahesa Rafian Syah</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Nomor Telepon :</strong><span class="ml-2">(123)
                                                123 1234</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "> <a href="#" onclick="alertEmail()" data-toggle="tooltip" class="text-dark " data-placement="top" title="mahesa.412020016@civitas.ukrida.ac.id">Klik untuk menampilkan</a></span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Alamat :</strong> <span class="ml-2">Indonesia</span></p>
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fab fa-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fab fa-github"></i></a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-box -->

                                <div class="card-box">
                                    <h4 class="header-title">Skills</h4>
                                    <p class="mb-3">Walaupun saya tidak pandai dalam matematika dan logika, saya memiliki kreativitas yang mumpuni. </p>

                                    <div class="pt-1">
                                        <h6 class="text-uppercase mt-0">Pemrograman Web <span class="float-right">60%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Desain UI/UX <span class="float-right">92%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                <span class="sr-only">67% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Desain Grafis <span class="float-right">97%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                                                <span class="sr-only">48% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Pengeditan Video <span class="float-right">97%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Fotografi <span class="float-right">95%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">72% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Matematika<span class="float-right">40%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-box-->

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">


                                    <div class="tab-content">

                                        <div class="tab-pane show active" id="about-me">

                                            <h3 class="mb-4 text-uppercase text-dark float-start"><i class="mdi mdi-briefcase mr-1"></i>
                                                Pengalaman</h3>
                                            <div class="float-end" style="padding-left: 200px;">
                                                <button type="button" class="btn btn-primary rounded-pill" onclick="idnTxt()">ID</button>
                                                <button type="button" class="btn btn-outline-primary rounded-pill" onclick="engTxt()">EN</button>
                                            </div>
                                            <br><br><br>
                                            <ul class="list-unstyled timeline-sm clearfix">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2020-2021</span>
                                                    <h5 class="mt-0 mb-1">Koordinator Divisi Dokumentasi</h5>
                                                    <p>Natal Sivitas 2021, Universitas Krida Wacana</p>

                                                    <br>


                                                    <h5 class="mt-0 mb-1">Anggota Divisi Publikasi dan Dokumentasi</h5>
                                                    <p>Himpunan Mahasiswa Informatika, UKRIDA</p>


                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2019-2020</span>
                                                    <h5 class="mt-0 mb-1">Desainer Pemasaran Sekolah</h5>
                                                    <p>SMAK Bethel Jakarta</p>
                                                    <br>


                                                    <h5 class="mt-0 mb-1">Video Editor untuk Protokol Kesehatan</h5>
                                                    <p>Rumah Sakit OMNI, Pulomas</p>

                                                    <br>
                                                    <h5 class="mt-0 mb-1">Member of Documentation Division</h5>
                                                    <p>Himpunan Mahasiswa Informatika, UKRIDA</p>

                                                    <br>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2018-2019</span>
                                                    <h5 class="mt-0 mb-1">Won 1st place for Creative Blog Content Writing</h5>
                                                    <p>Suku Dinas Perpustakaan dan Kearsipan Jakarta Pusat</p>

                                                    <br>
                                                    <h5 class="mt-0 mb-1">Juara 2 Lomba Cerpen Tingkat Nasional</h5>
                                                    <p>Kementerian Pariwisata dan Ekonomi Kreatif Republik Indonesia</p>

                                                    <br>

                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2017-2018</span>
                                                    <h5 class="mt-0 mb-1">Ketua Divisi Publikasi dan Dokumentasi</h5>
                                                    <p>MPK (Majelis Perwakilan Kelas)</p>

                                                    <br>

                                                    <h5 class="mt-0 mb-1">Guru Pengganti</h5>
                                                    <p>MIT App Inventor Training Program</p>
                                                    <br>

                                                    <h5 class="mt-0 mb-1">Anggota Divisi Publikasi dan Dokumentasi</h5>
                                                    <p>Pentas Seni REXAR, Sekolah Menengah Keatas </p>

                                                    <br>
                                                    <h5 class="mt-0 mb-1">Koordinator Tim Fotografi Sekolah</h5>
                                                    <p>Sekolah Menengah Keatas</p>


                                                </li>


                                            </ul>



                                        </div>
                                        <!-- end timeline content-->

                                    </div>
                                    <!-- end settings content-->

                                </div> <!-- end tab-content -->
                            </div> <!-- end card-box-->

                        </div> <!-- end col -->
                    </div>
                </div>

                <div class="col-12 col-md-12 col-xxl-12  text-dark text-justify creditsbg2" id="englang-profile" style="padding-top: 200px; display: none;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">

                                    <img src="images/dev1.png" class="rounded-circle avatar-xl img-thumbnail">
                                    <h4 class="mb-0">Mahesa Rafian Syah</h4>
                                    <p class="text-muted">412020016</p>

                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>


                                    <div class="text-left mt-3">
                                        <h4 class="font-13 text-uppercase">About Me :</h4>
                                        <p class="text-muted font-13 mb-3">
                                            Hello XELVIIERS!, I'm Mahesa Rafian Syah from Krida Wacana Christian University
                                            in Faculty of Informatics.
                                        </p>
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Mahesa Rafian Syah</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">(123)
                                                123 1234</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "> <a href="#" onclick="alertEmail()" data-toggle="tooltip" class="text-dark " data-placement="top" title="mahesa.412020016@civitas.ukrida.ac.id">Click to Show</a></span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">Indonesia</span></p>
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fab fa-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fab fa-github"></i></a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-box -->

                                <div class="card-box">
                                    <h4 class="header-title">Skills</h4>
                                    <p class="mb-3">Eventough I'm not good at mathematical and logical problems, I had an amazing creativity </p>

                                    <div class="pt-1">
                                        <h6 class="text-uppercase mt-0">Web Programming <span class="float-right">60%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">UI/UX Design <span class="float-right">92%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                <span class="sr-only">67% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Graphic Design <span class="float-right">97%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                                                <span class="sr-only">48% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Video Editing <span class="float-right">97%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Photography <span class="float-right">95%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">72% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-2 pt-1">
                                        <h6 class="text-uppercase">Mathematics <span class="float-right">40%</span></h6>
                                        <div class="progress progress-sm m-0">
                                            <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-box-->

                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">


                                    <div class="tab-content">

                                        <div class="tab-pane show active" id="about-me">

                                            <h3 class="mb-4 text-uppercase text-dark float-start"><i class="mdi mdi-briefcase mr-1"></i>
                                                Lifetime Experience</h3>
                                            <div class="float-end" style="padding-left: 200px;">
                                                <button type="button" class="btn btn-outline-primary rounded-pill" onclick="idnTxt()">ID</button>
                                                <button type="button" class="btn btn-primary rounded-pill" onclick="engTxt()">EN</button>
                                            </div>
                                            <br><br><br>
                                            <ul class="list-unstyled timeline-sm clearfix">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2020-2021</span>
                                                    <h5 class="mt-0 mb-1">Coordinator of Documentation Division</h5>
                                                    <p>Christmas Celebration 2021, Krida Wacana Christian University</p>

                                                    <br>



                                                    <h5 class="mt-0 mb-1">Member of Documentation Division</h5>
                                                    <p>Himpunan Mahasiswa Informatika, UKRIDA</p>


                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2019-2020</span>
                                                    <h5 class="mt-0 mb-1">School Advertising Designer</h5>
                                                    <p>SMAK Bethel Jakarta</p>
                                                    <br>

                                                    <h5 class="mt-0 mb-1">Safety Protocol Video Editor</h5>
                                                    <p>OMNI Hospital</p>

                                                    <br>


                                                    <br>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2018-2019</span>
                                                    <h5 class="mt-0 mb-1">Won 1st place for Creative Blog Content Writing</h5>
                                                    <p>Suku Dinas Perpustakaan dan Kearsipan Jakarta Pusat</p>

                                                    <br>
                                                    <h5 class="mt-0 mb-1">Won 2nd place for Short Story Writing</h5>
                                                    <p>Ministry of Tourism and Creative Economy</p>

                                                    <br>

                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2017-2018</span>
                                                    <h5 class="mt-0 mb-1">Leader of Design and Social Media Division</h5>
                                                    <p>MPK (Majelis Perwakilan Kelas)</p>

                                                    <br>

                                                    <h5 class="mt-0 mb-1">Substitute Teacher</h5>
                                                    <p>MIT App Inventor Training Program</p>
                                                    <br>

                                                    <h5 class="mt-0 mb-1">Member of Documentation Team</h5>
                                                    <p>REXAR Art & Performing Show</p>

                                                    <br>
                                                    <h5 class="mt-0 mb-1">Coordinator of Photography Division</h5>
                                                    <p>Penabur Open School Program </p>


                                                </li>


                                            </ul>



                                        </div>
                                        <!-- end timeline content-->

                                    </div>
                                    <!-- end settings content-->

                                </div> <!-- end tab-content -->
                            </div> <!-- end card-box-->

                        </div> <!-- end col -->
                    </div>
                </div>




            </div>
        </div>
    </div>


    <!-- SECTION FOOTER -->
    <div class="col-12 col-md-12 col-xxl-12">
        <div class="contentfooter" id="contact">
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
    <script src="js/credits.js"></script>


    </div>
</body>

</html>
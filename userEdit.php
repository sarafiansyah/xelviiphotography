<?php
include "./functions.php";
session_start();
verifyCookie();

if (!isset($_SESSION['username'])) {
	header('Location: index.php');
	return;
}

$no = 1;
$username = $_SESSION['username'];
$showdata = mysqli_fetch_array(mysqli_query($conn, "SELECT users.*,users_dp.dpname,users_dp.path_name FROM users LEFT JOIN users_dp ON users.usr_img=users_dp.id WHERE username = '$username'"));

if (isset($_POST['submit'])) {



	$edtnamadepan = $_POST['edt_namadepan'];
	$edtnamabelakang = $_POST['edt_namabelakang'];
	$edtemail = $_POST['edt_email'];
	$edtphone = $_POST['edt_phone'];
	$edtbirthday = $_POST['edt_birthday'];
	$edtoccupancy = $_POST['edt_occupancy'];
	$edtaddress = $_POST['edt_address'];
	$edtwebsite = $_POST['edt_website'];
	$edtgithub = $_POST['edt_github'];
	$edtinstagram = $_POST['edt_instagram'];
	$edtfacebook = $_POST['edt_facebook'];
	$edttwitter = $_POST['edt_twitter'];


	if (isset($_POST['id'])) { // ini adalah proses edit

		$id = $_POST['id'];
		$sql = 	"UPDATE users SET 
      nama_depan='$edtnamadepan', 
      nama_belakang='$edtnamabelakang',
      email='$edtemail',
      phone='$edtphone',
      birthday='$edtbirthday',
      occupancy='$edtoccupancy',
      address='$edtaddress',
      usr_web='$edtwebsite',
      usr_github='$edtgithub',
      usr_insta='$edtinstagram',
      usr_facebook='$edtfacebook',
      usr_twitter='$edttwitter'

       WHERE id='$id'";


		if ($conn->query($sql)) {
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Changes Saved!</strong> Your profile has been updated.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div></p>";
			header("Refresh:3");
		} else {
			echo "<p>Proses edit gagal.</p>";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}


if (isset($_POST['btnDp'])) {
	$DisPic = $_POST['btnDp'];
	if (isset($_POST['id'])) { // ini adalah proses edit

		$id = $_POST['id'];
		$sql = 	"UPDATE users SET 
usr_img='$DisPic'
WHERE id='$id'";


		if ($conn->query($sql)) {
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Changes Saved!</strong> Your profile has been updated.
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div></p>";
			header("Refresh:3");
		} else {
			echo "<p>Proses edit gagal.</p>";
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}


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

	<!-- STYLESHEET : LOCAL -->
	<link type="text/css" href="css/responsive.css" rel="stylesheet">
	<link type="text/css" href="css/styles.css" rel="stylesheet">
	<link type="text/css" href="css/wavebutton.css" rel="stylesheet">
	<link type="text/css" href="css/feedback.css" rel="stylesheet">
	<link type="text/css" href="css/userprofile.css" rel="stylesheet">




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



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">XELVII Avatars</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="form" method="post">
					<table class="table table-striped table-hover text-center">
						<p>Select image to change</p>
						<input type="hidden" class="form-control" name="id" value="<?php echo $showdata['id'] ?>">



						<?php
						$result = $conn->query("SELECT * FROM users_dp;");
						//var_dump($rows);
						while ($row = $result->fetch_assoc()) {

							echo "<tr>";


							echo "<div class='col-lg-4 col-md-12 mb-4   mb-lg-0 float-start'>
<div class='hover hover-1' >

<button type='submit' class='w-100 shadow-1-strong rounded mb-4 px-3 ' value='" . $row['id'] . "' name='btnDp' id='btnDp' ><img src='" . $row['path_name'] . "' class='w-100 shadow-1-strong rounded mb-4 px-3 ' alt='Boat on Calm Water' /></button>
</div>"


						?>


						<?php

						}

						?>

					</table>
				</form>
				<div id="err"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<body>
	<!-- SECTION NABVAR -->
	<?php include '_fw/nav-log.php'; ?>

	<div class="">
		<!-- CONTAINER -->
		<div class="container">
			<div class="main-body">

				<!-- Breadcrumb -->
				<nav aria-label="breadcrumb" class="main-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
						<li class="breadcrumb-item active" aria-current="page">User Profile</li>
					</ol>
				</nav>
				<!-- /Breadcrumb -->

				<div class="row gutters-sm">
					<div class="col-md-4 mb-3">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
									<img src="<?php echo $showdata['path_name'] ?>" alt="Admin" class="rounded-circle" style="width: 150px; height: 150px;">
									<div class="mt-3">
										<h4><?php echo $showdata['nama_depan'] . ' ' . $showdata['nama_belakang'] ?></h4>
										<p class="text-secondary mb-1"><?php echo $showdata['occupancy'] ?></p>
										<p class="text-muted font-size-sm"><?php echo $showdata['address'] ?></p>
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
											Change Photo
										</button>

									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-lg-8">
						<form method="POST">

							<div class="card">
								<div class="card-body">
									<h5 class="mb-3"><b>Profile</b></h5>
									<input type="hidden" class="form-control" name="id" value="<?php echo $showdata['id'] ?>">
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-user"></i> First Name</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" placeholder="" name="edt_namadepan" value="<?php echo $showdata['nama_depan'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class=' fas fa-user'></i> Last Name</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" placeholder="" name="edt_namabelakang" value="<?php echo $showdata['nama_belakang'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-at"></i> Email</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_email" value="<?php echo $showdata['email'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-phone-alt"></i> Phone</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_phone" value="<?php echo $showdata['phone'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-birthday-cake"></i> Birthday</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="date" class="form-control" name="edt_birthday" value="<?php echo $showdata['birthday'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-briefcase"></i> Occupancy</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_occupancy" value="<?php echo $showdata['occupancy'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-home"></i> Address</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_address" value="<?php echo $showdata['address'] ?>">
										</div>
									</div>
									<h5 class="mb-3"><b>Social Media</b></h5>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fas fa-globe"></i> Website</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_website" value="<?php echo $showdata['usr_web'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fab fa-github"></i> Github</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_github" value="<?php echo $showdata['usr_github'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fab fa-instagram"></i> Instagram</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_instagram" value="<?php echo $showdata['usr_insta'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fab fa-facebook"></i> Facebook</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_facebook" value="<?php echo $showdata['usr_facebook'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0"><i class="fab fa-twitter"></i> Twitter</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_twitter" value="<?php echo $showdata['usr_twitter'] ?>">
										</div>
									</div>
									<!-- <div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Picture</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="edt_usrimg" value="<?php echo $showdata['usr_img'] ?>">
										</div>
									</div> -->

									<div class="row">

										<div class="col-sm-9 text-secondary">

											<input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
											<a class="btn btn-danger text-light" href="userProfile.php" role="button">Return</a>
										</div>

									</div>
								</div>
							</div>
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
	<div class="" id="contact">
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

<script src="vendor/animsition/js/animsition.min.js"></script>


<script src="vendor/select2/select2.min.js"></script>



</div>

</html>
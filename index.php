<!DOCTYPE html>
<html>

<?php
include('_fw/html-head1.php');
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><b>Verify Admin</b></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php
				if (isset($_POST['verifyAdm'])) {
					// echo "<script>alert('SALAH PASS masa sih');</script>";
					if (in_array($_POST['admpass'], array("admin123"))) {

						header("Location: admlog.php");
					} else {
						echo "<script>swal('Wrong Password!', 'Password yang anda masukan salah!', 'error');</script>";
					}
				}
				?>
				<form method="POST" enctype="multipart/form-data">
					<div class="mb-3">
						<h6>Enter Admin Pass:</h6>
						<input type="password" class="form-control" name="admpass" id="recipient-name" placeholder="admin123">
						<p>Untuk masuk ke bagian Admin anda perlu login terlebih dahulu </p>
					</div>
					<button type="submit" name="verifyAdm" id="verifyAdm" class="btn btn-primary" href="#" role="button">Login</button>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<body>



	<div class="">

		<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];

			switch ($page) {
				case 'usersignup':
					$display = 'logform01.php';
					break;
				case 'userlogin':
					$display = 'logform02.php';
					break;
				case 'admlog':
					$display = 'admin/admlog.php';
					break;
				case 'admlog01':
					$display = 'admlog.php';
					break;
				case 'admlog03':
					$display = 'admin/admlog03.php';
					break;
				case 'admhome':
					$display = 'admin/admhome.php';
					break;
				case 'help':
					$display = 'help.php';
					break;
			}
		} else $display = "home.php";

		include($display);
		?>
	</div>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</body>

</html>
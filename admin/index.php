<!DOCTYPE html>
<html>

<?php
require('dbconn.php');
include('framework/html_head.php');
?>

<body>

	<?php include('framework/nav-adm.php'); ?>
	<div class="">

		<?php

		if (isset($_GET['page'])) {
			$page = $_GET['page'];

			switch ($page) {

				case 'public-db':
					$display = 'public-db.php';
					break;
				case 'feedback-db':
					$display = 'feedback-db.php';
					break;
				case 'report-db':
					$display = 'report-db.php';
					break;
				case 'edit_user':
					$display = 'edit_user.php';
					break;
				case 'delete_user':
					$display = 'delete_user.php';
					break;
				case 'delete_fb':
					$display = 'delete_fb.php';
					break;
				case 'delete_report':
					$display = 'delete_report.php';
					break;
				case 'edit_adm':
					$display = 'edit_admin.php';
					break;
				case 'edit_adm':
					$display = 'edit_admin.php';
					break;



				default:
					$display = 'home.php';
			}
		} else $display = "home.php";

		include($display);

		?>
	</div>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
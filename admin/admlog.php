<!DOCTYPE html>
<html>

<?php

include('_fw/html-head1.php');
?>

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
				case 'admlog03':
					$display = 'admin/admlog03.php';
					break;
				case 'admhome':
					$display = 'admin/admhome.php';
					break;
				case 'public-db':
					$display = 'admin/public-db.php';
					break;
				case 'feedback-db':
					$display = 'admin/feedback-db.php';
					break;
				case 'admlogout':
					$display = 'admin/logout.php';
					break;
			}
		} else $display = "admlog01.php";

		include($display);

		?>
	</div>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html>



<body>


	<div class="">

		<?php
		$conn = mysqli_connect("localhost", "root", "", "20212_wp2_4120200016");
		$result = $conn->query("SELECT * FROM writers;");
		$row = $result->fetch_assoc();

		if (isset($_GET['page'])) {
			$page = $_GET['page'];

			switch ($page) {
				case 't-article1':
					$display = 'techniques/content-article/' . $row['content'] . '.php';
					break;
				case 't-article2':
					$display = 'techniques/content-article/nurabdillahpanning.php';
					break;
				case 't-article3':
					$display = 'techniques/content-article/nurabdillahpanning.php';
					break;
				case 't-article4':
					$display = 'techniques/content-article/nurabdillahpanning.php';
					break;
				case 't-article5':
					$display = 'techniques/content-article/nurabdillahpanning.php';
					break;
				case 't-article6':
					$display = 'techniques/content-article/nurabdillahpanning.php';
					break;
			}
		} else $display = "techniques/t-home.php";


		include($display);
		?>
	</div>
</body>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
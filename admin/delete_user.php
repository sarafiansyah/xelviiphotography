<div class="homebg1 text-light" id="home">
	<div class="col-12 col-md-12 col-xxl-12  text-light text-justify " style="padding-top: 0px; padding-bottom: 100px;"></div>
	<div class="container mt-3">
		<h3 class="text-center mt-3"><strong>HAPUS USER</strong></h3>
		<?php

		if (isset($_POST['submit'])) {

			if (isset($_POST['id'])) {

				$id = $_POST['id'];
				$sql = "DELETE FROM users WHERE id='$id'";

				if ($conn->query($sql)) {
					echo "<p>Proses hapus berhasil.</p>";
				} else {
					echo "<p>Proses edit gagal.</p>";
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				echo "<a href='index.php?page=public-db' class='btn btn-primary'>Home</a>";
			}
		} else {

			//print_r($_SERVER);

			if (isset($_GET['id'])) {
				$id = $_GET['id'];

				$sql = "SELECT * FROM users WHERE id=$id";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				//var_dump($row);
			}
		?>

			<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">

				<input type="hidden" name="id" value="<?php if (isset($id)) echo $id; ?>">





				<div class="mb-3">
					<label class="form-label">Nomor</label>
					<input type="text" name="nomor" class="form-control" value="<?php if (isset($row)) echo $row['id']; ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">Nama Depan</label>
					<input type="text" name="nama_depan" class="form-control" value="<?php if (isset($row)) echo $row['nama_depan'] ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">Nama Belakang</label>
					<input type="text" name="nama_belakang" class="form-control" value="<?php if (isset($row)) echo $row['nama_belakang'] ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">Status</label>
					<input type="text" name="status" class="form-control" value="<?php if (isset($row)) echo $row['join_time'] ?>">
				</div>








				<input type="submit" name="submit" class="btn btn-primary mb-3" value="Submit">
				<a href='index.php?page=rider' class='btn btn-danger mb-3'>Back</a>
			</form>

		<?php } ?>
	</div>
</div>
<?php 
	include "config.php";

	if (isset($_POST['submit'])) {
		$nama = htmlentities($_POST['nama']);
		$email = htmlentities($_POST['email']);
		$alamat = htmlentities($_POST['alamat']);
		$hp = htmlentities($_POST['hp']);

		$crud->Create($nama, $email, $alamat, $hp);
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 centered">
				<h1>Create Biodata</h1>
				<form method="post" class="form-horizontal">
					<div class="form-group" >
						<label>Nama:</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama" required>
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input type="email" class="form-control" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label>Alamat:</label>
						<input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
					</div>
					<div class="form-group">
						<label>No. HP:</label>
						<input type="text" class="form-control" name="hp" placeholder="Nomor Handphone" required>
					</div>
					<div class="form-group">
						<a href="index.php" type="button" name="back" class="btn btn-warning pull-left"><< Kembali</a>
						<input type="submit" name="submit" value="Tambah" class="btn btn-primary pull-right">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
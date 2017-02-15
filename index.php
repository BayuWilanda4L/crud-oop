<?php 
	include "config.php";
	
	$data = $crud->Read()->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Biodata</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Daftar Biodata</h1>
			    <a href="create.php" type="button" class="btn btn-info" style="margin:20px 0">Tambah Data</a>
				<table class="table table-striped">
					<tr>
		                <th>
		                    No.
		                </th>
		                <th>
		                    Nama
		                </th>
		                <th>
		                	Email
		                </th>
		                <th>
		                    Alamat
		                </th>
		                <th>
		                    No HP
		                </th>
		                <th colspan="2">
		                    <center>Aksi</center>
		                </th>
		            </tr>

		            <?php foreach ($data as $value) {
		            	$no++;
		            	echo "
							<tr>
								<td>$no</td>
								<td>$value[nama]</td>
								<td>$value[email]</td>
								<td>$value[alamat]</td>
								<td>$value[hp]</td>
								<td>
									<center><a href='edit.php?id=$value[id]' type='button' class='btn btn-success'>Edit</a></center>
								</td>
								<td>
									<center><a href='delete.php?id=$value[id]' type='button' class='btn btn-danger' onclick='return konfirmasi()'>Hapus</a></center>
								</td>
							</tr>
		            	";
		            	}
		            ?>

				</table>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" language="JavaScript">
	function konfirmasi() {
		tanya = confirm("Anda yakin ingin menghapus data ini?");
		if (tanya == true) {
			return true;
		} else {
			return false;
		}
	}
</script>
</html>
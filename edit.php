<?php  
    include 'config.php';

    if(!isset($_GET['id'])){
        die("Error: ID Tidak Dimasukkan");
    }

    $query = $db_conn->prepare("SELECT * FROM tb_biodata WHERE id = :id");
    $query->bindParam(":id", $_GET['id']);
    $query->execute();
    $data = $query->fetchAll();


    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['nama']);
        $email = htmlentities($_POST['email']);
        $alamat = htmlentities($_POST['alamat']);
        $hp = htmlentities($_POST['hp']);
        $id = htmlentities($_GET['id']);

        $crud->Update($nama, $email, $alamat, $hp, $id);
    }
?>

<!DOCTYPE html>  
<html>  
    <head>
        <meta charset="utf-8">
        <title>Edit Biodata</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php foreach ($data as $value): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 centered">
                    <h1>Edit Data</h1>
                    <form method="post" class="form-horizontal">
                        <div class="form-group" >
                            <label>Nama:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo "$value[nama]"; ?>" required>
                        </div>
                        <div class="form-group" >
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo "$value[email]"; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat:</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo "$value[alamat]"; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>No. HP:</label>
                            <input type="text" class="form-control" name="hp" placeholder="Nomor Handphone" value="<?php echo "$value[hp]"; ?>" required>
                        </div>
                        <div class="form-group">
                            <a href="index.php" type="button" name="back" class="btn btn-warning pull-left"><< Kembali</a>
                            <input type="submit" name="submit" value="Simpan" class="btn btn-primary pull-right">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </body>
</html> 
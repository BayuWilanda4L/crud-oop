<?php 
	try {
		$db_conn = new PDO("mysql:host=localhost;dbname=latihan-pdo;",'root', '');
	} catch (PDOException $e) {
		die("Koneksi error : ".$e->getMessage());
	}

include "crud_class.php";
$crud = new CRUD($db_conn);

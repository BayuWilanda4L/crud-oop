<?php 
	class CRUD {
		
		function __construct($db_conn) {
			$this->db=$db_conn;
		}

		public function Create($nama, $email, $alamat, $hp) {
			$query = $this->db->prepare("INSERT INTO tb_biodata (nama, email, alamat, hp) VALUES (:nama, :email, :alamat, :hp)");
	        $query->bindParam(":nama", $nama);
	        $query->bindParam(":email", $email);
	        $query->bindParam(":alamat", $alamat);
	        $query->bindParam(":hp", $hp);

	        $query ->execute();
			echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php'</script>";
		}

		public function Read() {
			$query = $this->db->prepare("SELECT * FROM tb_biodata");
			$query->execute();

			return $query;
		}

		public function Update($nama, $email, $alamat, $hp, $id) {
			$query = $this->db->prepare("UPDATE tb_biodata SET nama=:nama, email=:email, alamat=:alamat, hp=:hp WHERE id=:id");
	        $query->bindParam(":nama", $nama);
	        $query->bindParam(":email", $email);
	        $query->bindParam(":alamat", $alamat);
	        $query->bindParam(":hp", $hp);
	        $query->bindParam(":id", $id);

	        $query->execute();
	        echo "<script>alert('Data berhasil disimpan'); window.location='index.php'</script>";
		}

		public function Delete($id) {
			$query = $this->db->prepare("DELETE FROM tb_biodata WHERE id=:id");
			$query->bindParam(":id", $id);
			$query->execute();

			header("location:index.php");
		}
	}

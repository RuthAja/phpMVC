<?php 
class Mahasiswa_model{
	private $dbh, // database handler
			$stmt;

	public function __construct(){
		// data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		// Koneksi ke database menggunakan PDO
		try {
			$this->dbh = new PDO($dsn, 'root', 'mysql');
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	// * menampilkan data mahasiswa secara manual
	// private $mhs = [
	// 	[
	// 		"nama" => "Ruth Aja",
	// 		"nim" => "1601530070",
	// 		"email" => "ruthajalah1@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "ion Aja",
	// 		"nim" => "1601530071",
	// 		"email" => "ionaja00@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[			
	// 		"nama" => "Eve",
	// 		"nim" => "1601530072",
	// 		"email" => "eveaja@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	]
	// ];

	public function getAllMahasiswa(){ 
		// return $this->mhs;

		$this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>
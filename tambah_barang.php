<?php  
	//import file koneksi.php
	require_once('config/koneksi.php');	
		
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		//get variabel
		$nm_brng = $_POST['nama-brng'];
		$kt_brng = $_POST['kat-brng'];
		$ket     = $_POST['keterangan'];

		if ($nm_brng=='' && $kt_brng=='' && $ket=='') {
			echo "Data Masih Kosong";
		}else {
			//syntax SQL
			$sql = "INSERT INTO barang (nama_barang, kat_barang, keterangan) VALUES ('$nm_brng', '$kt_brng', '$ket')";
			
			//eksekusi query
			if (mysqli_query($conn, $sql)) {
				echo "Data Berhasil Ditambah";
			}else {
				echo "Data Gagal Ditambah";
			}
		}
		mysqli_close($conn);
	}

?>
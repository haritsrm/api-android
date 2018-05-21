<?php  
	//import file koneksi.php
	require_once('config/koneksi.php');	
		
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		//get variabel
		$id		 = $_POST['id'];
		$nm_brng = $_POST['nama-brng'];
		$kt_brng = $_POST['kat-brng'];
		$ket     = $_POST['keterangan'];
		
		if ($id=='' && $nm_brng=='' && $kt_brng=='' && $ket=='') {
			echo "Data Gagal Ditambah";
		}else {
			//syntax SQL
			$sql = "UPDATE barang SET nama_barang = '$nm_brng', 
									  kat_barang  = '$kt_brng', 
									  keterangan  = '$ket' 
					WHERE id = $id;";
		
			//eksekusi query
			if (mysqli_query($conn, $sql)) {
				echo "Data Berhasil Update";
			}else {
				echo "Data Gagal Update";
			}
		}
		mysqli_close($conn);
	}
?>
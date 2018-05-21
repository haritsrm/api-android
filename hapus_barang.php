<?php  
	//import file koneksi.php
	require_once('config/koneksi.php');	
	
	$id = $_GET['id'];
	$sql = "DELETE FROM barang WHERE id = $id;";

	if (mysqli_query($conn, $sql)) {
		echo "Data Berhasil Dihapus";
	}else {
		echo "Data Gagal Dihapus";
	}
	mysqli_close($conn);
?>
<?php  	
	//import file koneksi.php
	require_once('config/koneksi.php');			

	$id = $_GET['id'];

	$sql = "SELECT * FROM barang WHERE id = $id"; //query
	$res = mysqli_query($conn, $sql); //get hasil

	$result = array(); //membuat variabel array
	$row = mysqli_fetch_array($res);
		//memasukan field tb kedalam array
		array_push($result, array(
			"id" 		=>	$row['id'], 
			"nama-brng"	=>	$row['nama_barang'], //nama field tb
			"kat-brng"	=>	$row['kat_barang'],
			"keterangan"=>	$row['keterangan']
		));
		//menampikan dalam format JSON
		echo json_encode(array('result' => $result)); //(array($result));
	mysqli_close($conn);
?>
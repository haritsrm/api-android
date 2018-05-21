<?php  
	#ipcom -> http://192.168.43.173/android/belajarCRUD/......php	
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'crud_android');

	$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die('Unable to Connect');
?>
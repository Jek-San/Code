<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "penjualan";


	$conn = mysqli_connect($host, $user, $pass, $db);
	if (!$conn) {
		die("Koneksi gagal: " . mysqli_connect_error());
	}
	echo "Koneksi berhasil";
	mysqli_close($conn);

?>
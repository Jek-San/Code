<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_tokosp";

	$conn = mysqli_connect($host, $user, $pass);
	if ($conn) {
		$dbselect = mysql_select_db($db, $conn) or die("Tidak terhubung ke Database.");
	}

	include"fungsi_flash.php";
?>
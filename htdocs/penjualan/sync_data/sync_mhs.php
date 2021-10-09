<?php
	include"conn.php";

	$q = mysqli_query($conn, "SELECT * FROM mahasiswa 
		WHERE gelombang = '$_GET[gel]' AND angkatan = '$_GET[ta]' AND jur = '$_GET[jur]'");

	if ($q) {
		$po = array();
		if (mysqli_num_rows($q)) {
			while ($p = mysqli_fetch_assoc($q)) {
				$po[] = $p;
			}
		}

		echo json_encode(array('mhs' => $po));
		//echo $po;
	}

?>
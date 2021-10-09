<?php
	include"conn.php";

	$q = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'");

	if ($q) {
		$po = array();
		if (mysqli_num_rows($q)) {
			$p = mysqli_fetch_assoc($q);
			foreach ($p as $key => $value) {
				$po[$key] = $value;

			}
			
		}

		//echo json_encode(array('mhs' => $po));
		echo json_encode($po);
	}

?>
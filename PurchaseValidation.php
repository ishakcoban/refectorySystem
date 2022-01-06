<?php include './DBconnect.php'; session_start(); 
// en yakin successi ve dateini bul
$sql = "SELECT Res_ID, Res_DATE,C_ID,REF_ID FROM Reservation ORDER BY Res_DATE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
		

		$resulttl = mysqli_query($conn,"select count(1) FROM payment");
		$resultl = mysqli_query($conn,"select RES_ID FROM payment");
		
		$roww = mysqli_fetch_array($resulttl);
		$thenearestSuccess = 0;
		$total = $roww[0];

		$cont = 0;

		while ($cont < $total and $rowp = mysqli_fetch_array($resultl)) {
			if ($row["C_ID"] == $_SESSION['id']) {
				

				if ($rowp['RES_ID'] == $row["Res_ID"]) {
					
					$thenearestSuccess = $row["Res_DATE"];
					break;
				}}
				$cont++;
			}
			if ($thenearestSuccess != 0 ) {
				break;
				// code...
			}

			$count = 0;
		}
	} else {
		echo "0 results";
	}
// en iyisini parcalara ayir

	if ($thenearestSuccess != 0) {
		echo $thenearestSuccess;
	//$year = $dateA[0] .''. $dateA[1].''.$dateA[2].''.$dateA[3];

		$yearSUCCESS = $thenearestSuccess[0] .''. $thenearestSuccess[1].''.$thenearestSuccess[2].''.$thenearestSuccess[3];
		global $yearSUCCESS;
	//$month = $dateA[5] .''. $dateA[6];
		$monthSUCCESS = $thenearestSuccess[5] .''. $thenearestSuccess[6];
	//$day = $dateA[8] .''. $dateA[9];
		$daySUCCESS = $thenearestSuccess[8] .''. $thenearestSuccess[9];

	//$hour = $dateA[11] .''. $dateA[12];
		$hourSUCCESS = $thenearestSuccess[11] .''. $thenearestSuccess[12];
	//$minute = $dateA[14] .''. $dateA[15];
		$minuteSUCCESS = $thenearestSuccess[14] .''. $thenearestSuccess[15];
	}


	?>

<?php
include './DBconnect.php';
if (isset($_POST['controll'])) {

	$checkbox = $_POST['ariza'];


	$result = mysqli_query($conn,"select count(1) FROM meal");
	$result1 = mysqli_query($conn,"select MEAL_ID,MEAL_PRICE FROM meal");
	$toplam = 0;
	foreach ($checkbox as $values) {

		while($R = mysqli_fetch_array($result1) ){
			if($values == $R['MEAL_ID'] ){
				$toplam += $R['MEAL_PRICE'];
				break;
			}
		}



						// code...
	}

	echo "Toplam Ucret: "."$toplam ";


}


?>
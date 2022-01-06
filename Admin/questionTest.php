<?php
include './DBconnect.php'; 
session_start();
$r1 = mysqli_query($conn,"select count(1) FROM customer");
$r2 = mysqli_query($conn,"select C_ID FROM customer");
$row = mysqli_fetch_array($r1);

$total = $row[0];
$count = 0;
$times = [];
$countTIMES = 0;
$wantedRes = [];
$MEALids = [];
while ($count < $total and $row1 = mysqli_fetch_array($r2)) {

	$r3 = mysqli_query($conn,"select count(1) FROM reservation");
	$r4 = mysqli_query($conn,"select RES_ID,C_ID FROM reservation");
	$row5 = mysqli_fetch_array($r3);

	$total2 = $row5[0];
	$count1 = 0;
	
	while ($count1 < $total2 and $row2 = mysqli_fetch_array($r4)) {

		if ($row1['C_ID'] == $row2['C_ID']) {

			$countTIMES++;

		}

		$count1++;

	}


	array_push($wantedRes,$row1['C_ID']);
	array_push($times,$countTIMES);

	$countTIMES = 0;
	$count++;
}
$max = max($times);
$maxKey = array_search($max, $times);

$champion = $wantedRes[$maxKey ];
/*************************************************************************/

$r9 = mysqli_query($conn,"select count(1) FROM reservation");
$r10 = mysqli_query($conn,"select RES_ID,C_ID FROM reservation");
$row10 = mysqli_fetch_array($r9);

$total3 = $row10[0];
$count2 = 0;

while ($count2 < $total3 and $row6 = mysqli_fetch_array($r10)) {


	if ($row6['C_ID'] == $champion ) {

		$r11 = mysqli_query($conn,"select count(1) FROM reservation_meal");
		$r12 = mysqli_query($conn,"select RES_ID,MEAL_ID FROM reservation_meal");
		$row15 = mysqli_fetch_array($r11);

		$total4 = $row15[0];
		$count3 = 0;

		while ($count3 < $total4 and $row7 = mysqli_fetch_array($r12)) {


			if ($row6['RES_ID'] == $row7['RES_ID']) {

				array_push($MEALids,$row7['MEAL_ID']);



			}


			$count3++;
		}



		$count2++;

	}

}


$unique = array_unique($MEALids);
$timesmeal = [];

for ($i=0; $i < count($unique); $i++) { 
	$ct = 0;
	for ($j=0; $j < count($MEALids); $j++) { 
		if (!empty($MEALids[$j]) and !empty($unique[$i])) {
			// code...

			if ($unique[$i] == $MEALids[$j]) {
				$ct++;


			}
		}

	}
	array_push($timesmeal,$ct);
}

$cmd = 0;
$meal = "";

$max = max($timesmeal);
		$maxKey = array_search($max, $timesmeal);

		echo $MEALids[$maxKey];

		
$_SESSION['MAX'] = $max;
?>
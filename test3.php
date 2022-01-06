
<?php

$date10 = date('d-m-Y h:i:s A');
$dayNOW = $date10[0]. "".$date10[1];
$monthNOW = $date10[3]. "".$date10[4];
$yearNOW = $date10[6]. "".$date10[7]. "".$date10[8]. "".$date10[9];




if ($thenearestSuccess != 0) {
										$year = $dateA[0] .''. $dateA[1].''.$dateA[2].''.$dateA[3];
										//$yearSUCCESS = $dateB[0] .''. $dateB[1].''.$dateB[2].''.$dateB[3];
										$month = $dateA[5] .''. $dateA[6];
										//$monthSUCCESS = $dateB[5] .''. $dateB[6];
										$day = $dateA[8] .''. $dateA[9];
										//$daySUCCESS = $dateB[8] .''. $dateB[9];

										$hour = $dateA[11] .''. $dateA[12];
										//$hourSUCCESS = $dateB[11] .''. $dateB[12];
										$minute = $dateA[14] .''. $dateA[15];
										//$minuteSUCCESS = $dateB[14] .''. $dateB[15];
										if ($yearSUCCESS > $year ) {
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>

											<?php  

										}elseif (($yearSUCCESS ==  $year and $monthSUCCESS > $month) or ($yearNOW >  $year and $monthNOW > $month)) {
											
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >
											TIME EXCEEDED!</p>
											<?php  
										}elseif (($yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS > $day) or ($yearNOW ==  $year and $monthNOW == $month AND $dayNOW > $day)) {
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
											<?php 
										}elseif ($yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS == $day and $hourSUCCESS > $hour) {
											
											?>

											


											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
											<?php 

										}elseif ($yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS == $day and $hourSUCCESS == $hour and $minuteSUCCESS > $minute) {

											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
										<?php }	else{
											?>

											<button style="font-size: 70%;" class=" btn btn-danger fw-bold " type="submit" name="<?php echo $row1['RES_ID'];?>" >Delete</button>

											<button style="margin-left:4%;font-size: 70%;" class=" btn btn-primary fw-bold " type="submit" name="J<?php echo $row1['RES_ID'];?>" >Choose Meal</button>

											<?php 
											
										}	


									}
/*
include './DBconnect.php'; 

$mealID = [];
$times = [];
$z = [];
for ($l=1; $l < 13; $l++) { 
	$YEAR = '2020';
	$month = $l;
	$day = '';

	$result3 = mysqli_query($conn,"select count(1) FROM reservation");
	$result4 = mysqli_query($conn,"select RES_ID,RES_DATE FROM reservation");
	$row2 = mysqli_fetch_array($result3);

	$total2 = $row2[0];
	$countt = 0;
	$ctt = 0;
	
	while($countt < $total2 and $row3 = mysqli_fetch_array($result4)){
		$date = $row3['RES_DATE'];
		$resid = $row3['RES_ID'];
		$result = mysqli_query($conn,"select count(1) FROM reservation_meal");
		$result11 = mysqli_query($conn,"select RES_ID,MEAL_ID FROM reservation_meal WHERE RES_ID =$resid ");
		$row22 = mysqli_fetch_array($result);

		$total12 = $row22[0];
		$c1 = 0;

		
while($c1 < $total12 and $row4 = mysqli_fetch_array($result11)){
echo $row4['MEAL_ID'];

$c1++;
}

		break;

		$countt++;		
	}
	break;
}





				/*$t =$z;
				$newArray = array_unique($z);
				$size = count($newArray);
				$countarray =[];
				$cmt = 0;
				for ($i=0; $i <$size ; $i++) { 
					for ($j=0; $j < count($t) ; $j++) { 
						if (!empty($newArray[$i])) {

							if ($newArray[$i] == $t[$j]) {
								$cmt++;
				// code...
							}
			// code...
						}

					}

					array_push($countarray,$cmt);
					$cmt = 0;
				}


				$max = max($countarray);
				$maxKey = array_search($max, $countarray);
				$timestamp = strtotime('2020-'. $l. '-'.$newArray[$maxKey]);

				$day = date('D', $timestamp);
				echo $day;
				echo "Day ".$newArray[$maxKey]."-duplictae->" .$max;
				echo "<br>";*/


				/* --------------------*/


				?>



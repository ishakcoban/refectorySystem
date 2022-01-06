<?php
session_start();
include_once 'DBconnect.php';

$result = mysqli_query($conn,"select count(1) FROM reservation");
$row = mysqli_fetch_array($result);

$total = $row[0];

$id = $_SESSION['id'];
$result1 = mysqli_query($conn,"select RES_ID ,C_ID ,RES_DATE,REF_ID FROM reservation");


$count = 0;


while($count <$total and $row2 = mysqli_fetch_array($result1)){


if(isset($_POST[$row2['RES_ID']]))
{ 


	
	$RES = $row2['RES_ID'];
	$sql = "DELETE FROM reservation WHERE RES_ID=$RES";

	if ($conn->query($sql) === TRUE) {
		header("Location:../screens/MyReservationScreen.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}
elseif (isset($_POST['banr']))
{ 
	header("Location:../screens/RefectoryScreen.php");
}

elseif (isset($_POST['J'.$row2['RES_ID']]))// choose meal
{ 

	$ghb = $row2['RES_ID'];
	$_SESSION['RES_IDd'] = $ghb;// RESID ELIMDE
	echo $ghb;
	header("Location:../screens/MealScreen.php");
}elseif (isset($_POST['D'.$row2['RES_ID']]))// choose meal
{ 

	$ghb = $row2['RES_ID'];
	$_SESSION['RES_IDd'] = $ghb;// RESID ELIMDE
	echo $ghb;
	header("Location:./screens/BillScreen.php");
}

$count++;
}



?>
<?php
include_once 'DBconnect.php';
session_start();
if(isset($_POST['update'])){

	if(!empty($_POST['SEX'])) {
		$ent2 = $_POST['SEX'];
		global $ent2;
	} 
$mm = $_SESSION['id'];

	
	$ent1 = $_POST['NN'];

	$ent3 = $_POST['addr'];
	$ent4 = $_POST['pass1'];
	
	
	
	$sql = "UPDATE Customer SET   C_NAME='$ent1' , C_PASSWORD='$ent4',C_SEX='$ent2',C_ADDRESS='$ent3'  WHERE C_ID='$mm'";

	if ($conn->query($sql) === TRUE) {
		
		
	header("Location:./screens/UpdateConfirmScreen.php");
		
	} else {
		echo "Error updating record: " . $conn->error;
	}






	

	
	

	/*$result1 = mysqli_query($conn,"select C_ID, C_NAME , C_SEX,C_ADDRESS,C_PASSWORD FROM customer WHERE C_ID =$mm ");

	$count = 0;
	$row1 = mysqli_fetch_array($result1);
	$row1['C_NAME'] = $ent1;
	$row1['C_SEX'] = $ent2;
	$row1['C_ADDRESS'] = $ent3;
	$row1['C_PASSWORD'] = $ent4;*/

	

}


?>
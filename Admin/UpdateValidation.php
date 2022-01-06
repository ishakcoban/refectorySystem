<?php
include_once 'DBconnect.php';
session_start();
if(isset($_POST['updateA'])){

	$ent1 = $_POST['UID'];
	$ent2 = $_POST['UNAME'];
	$ent3 = $_POST['UPASSWORD'];
	
	$mm = $_SESSION['Adminid'];
	$_SESSION['adminNAME'] = $ent2;
	$_SESSION['Adminid'] = $ent1;
	$sql = "UPDATE Admin SET Admin_ID='$ent1' , Admin_NAME='$ent2' , Admin_PASSWORD='$ent3'  WHERE Admin_ID='$mm'";

	if ($conn->query($sql) === TRUE) {
		echo $_SESSION['adminNAME'];
		
	header("Location:./screens/UpdateConfirmScreen.php");
		
	} else {
		echo "Error updating record: " . $conn->error;
	}

	

}


?>
<?php
include '../DBconnect.php';
session_start();
if(isset($_POST['Q1'])){
	header("Location:./screens/q1Screen.php");
	

}elseif(isset($_POST['Q2'])){

	header("Location:./screens/q2Screen.php");

}elseif(isset($_POST['Q3'])){
	header("Location:./screens/q3Screen.php");

}elseif(isset($_POST['Q4'])){

	header("Location:./screens/q4Screen.php");

}elseif(isset($_POST['Q5'])){

	header("Location:./screens/q5Screen.php");
}elseif(isset($_POST['Q6'])){

	header("Location:./screens/q6Screen.php");
}elseif(isset($_POST['Q7'])){

	header("Location:./screens/q7Screen.php");
}elseif(isset($_POST['Q8'])){

	header("Location:./screens/q8Screen.php");
}




?>
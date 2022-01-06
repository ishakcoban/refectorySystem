<?php
include '../DBconnect.php';

if(isset($_POST['customers'])){
	header("Location:./screens/AllCustomerScreen.php");

}elseif(isset($_POST['reservations'])){

	header("Location:./screens/AllReservationScreen.php");

}elseif(isset($_POST['chefs'])){
	header("Location:./screens/AllChefScreen.php");

}elseif(isset($_POST['meals'])){

	header("Location:./screens/AllMealScreen.php");

}elseif(isset($_POST['refectories'])){

	header("Location:./screens/AllRefectoryScreen.php");
}




?>
<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['gthm']))
{  
header("Location:./screens/HomePageScreen.php");

}elseif(isset($_POST['banrr']))
{  

header("Location:./screens/RefectoryScreen.php");
}
?>

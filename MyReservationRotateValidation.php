<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['homr']))
{  
header("Location:./screens/HomePageScreen.php");

}elseif(isset($_POST['banrrr']))
{  

header("Location:./screens/RefectoryScreen.php");
}
?>
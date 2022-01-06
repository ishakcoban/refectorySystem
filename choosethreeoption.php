<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['SELECTEDREF']))
{  

  header("Location:./screens/ViewRefScreen.php");

}if(isset($_POST['SELECTEDMEAL']))
{  
header("Location:./screens/ViewMealScreen.php");
}if(isset($_POST['SELECTEDRES']))
{  
header("Location:../screens/RefectoryScreen.php");
}



?>

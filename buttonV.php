<?php
session_start();
include'./DBconnect.php';


$result = mysqli_query($conn,"select count(1) FROM refectory");
$result1 = mysqli_query($conn,"select NAME,REF_ID,ADDRESS FROM refectory");

$row = mysqli_fetch_array($result);

$total = $row[0];

$count = 0;

while ($count < $total and $row1 = mysqli_fetch_array($result1)) {
 if(isset($_POST['SELECTED'.$count]))
 {  

   $_SESSION['ref'] = $row1['REF_ID'];
   $_SESSION['refname'] = $row1['NAME'];
  // 

 }
 $count++;
}



  header("Location:../screens/DateScreen.php");




?>

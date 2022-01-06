<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['insert']))
{  

  $ent = $_POST['enteredID'];
  $pass =$_POST['enteredPASS'];

  $result = mysqli_query($conn,"select count(1) FROM customer");
  $result1 = mysqli_query($conn,"select C_ID,C_PASSWORD FROM customer");
  $row1 = mysqli_fetch_array($result);

  $total = $row1[0];

  $count = 0;
  while ($count < $total and $row = mysqli_fetch_array($result1)) {

    if($row['C_ID'] == $ent and $row['C_PASSWORD'] == $pass){
      $_SESSION['id'] =$ent; 
      header("Location:./screens/HomePageScreen.php");
      exit();
      break;
    }
    $count++;
    
  }
  header("Location:./screens/loginScreen.php?error=ID or Password incorrect");
  echo "Invalid Email ID/Password";
  
}
?>

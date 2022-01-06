<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['insertADMIN']))
{  

  $ent = $_POST['enteredIDADMIN'];
  $pass =$_POST['enteredPASSADMIN'];

  $result = mysqli_query($conn,"select count(1) FROM Admin");
  $result1 = mysqli_query($conn,"select Admin_ID,Admin_PASSWORD,Admin_NAME FROM Admin");
  $row1 = mysqli_fetch_array($result);

  $total = $row1[0];

  $count = 0;
  while ($count < $total and $row = mysqli_fetch_array($result1)) {

    if($row['Admin_ID'] == $ent and $row['Admin_PASSWORD'] == $pass){
      $_SESSION['Adminid'] =$ent; 
      $_SESSION['AdminNAME1'] =$row['Admin_NAME']; 
      header("Location:./screens/AdminHomePageScreen.php");
      exit();
      break;
    }
    $count++;
    
  }
  header("Location:./screens/AdminLoginScreen.php?error=ID or Password incorrect");
  echo "Invalid Email ID/Password";
  
}
?>

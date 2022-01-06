<?php 
include_once 'DBconnect.php';

if(isset($_POST['SELECTED']))
{  

    $ent = $_POST['nm'];
    $pass = md5($_POST['pass']);


    extract($_POST);
    
    $sql=mysqli_query($conn,"SELECT * FROM Customer where id='$ent' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
       
        header("Location:./screens/RefectoryScreen.php");
        exit();
    }
    else
    {
      


      header("Location:./screens/loginScreen.php?error=ID or Password incorrect");
        echo "Invalid Email ID/Password";
    
    }

  /*
   $ent = $_POST['nm'];
   $pass = $_POST['pass'];
   
   $sql = "INSERT INTO Customer (name,password)
   VALUES ('$ent','$pass')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
   } else {
    echo "Error: " . $sql . "
  " . mysqli_error($conn);
   }
   mysqli_close($conn);*/
}





?>
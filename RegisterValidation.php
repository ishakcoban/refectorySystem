<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['insertt']))
{  
    if(!empty($_POST['SEX'])) {
        $ent2 = $_POST['SEX'];
        global $ent2;
    } 

    $ent1 = $_POST['nm1'];
    
    $ent3 = $_POST['addr'];
    $ent4 = $_POST['pass1'];

    
    $result = mysqli_query($conn,"select count(1) FROM customer");
    $result1 = mysqli_query($conn,"select C_ID FROM customer");
    $row1 = mysqli_fetch_array($result);

    $total = $row1[0];

    $count = 0;



    $count1=0;

    while ($count < $total and $row2 = mysqli_fetch_array($result1)) {

        $ent = rand(100000000,999999999);

        if($ent == $row2['C_ID']){
            $count1++;


        }

        $count++;

    }

    if($count1 == 0){
        $_SESSION['id'] = $ent;
        


        $sql = "INSERT INTO Customer (C_ID,C_NAME,C_SEX,C_ADDRESS,C_PASSWORD)
        VALUES ('$ent','$ent1','$ent2','$ent3','$ent4')";

        if ($conn->query($sql) === TRUE) {
            header("Location:../screens/idScreen.php");
          echo "New record created successfully";
          exit();
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      

  }
  else{
    header("Location:./RegisterValidation.php");
}


}
?>

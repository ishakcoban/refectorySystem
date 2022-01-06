<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['inserttRADMIN']))
{  


    $ent1 = $_POST['nm1ADMIN'];
    $_SESSION['adminNAME'] = $ent1;

    $ent2 = $_POST['pass1ADMIN'];

    
    $result = mysqli_query($conn,"select count(1) FROM admin");
    $result1 = mysqli_query($conn,"select Admin_ID FROM admin");
    $row1 = mysqli_fetch_array($result);

    $total = $row1[0];

    $count = 0;



    $count1=0;
    if ($total == 0 ) {
        $ent = rand(100000000,999999999);

        $_SESSION['Adminid'] = $ent;
        $sql = "INSERT INTO admin (Admin_ID,Admin_NAME,Admin_PASSWORD)
        VALUES ('$ent','$ent1','$ent2')";

        if ($conn->query($sql) === TRUE) {
            header("Location:../screens/AdminIDScreen.php");
          echo "New record created successfully";
          exit();
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }else{
    while ($count < $total and $row2 = mysqli_fetch_array($result1)) {

        $ent = rand(100000000,999999999);

        if($ent == $row2['Admin_ID']){
            $count1++;


        }

        $count++;

    }

    if($count1 == 0){
        $_SESSION['Adminid'] = $ent;
        


        $sql = "INSERT INTO admin (Admin_ID,Admin_NAME,Admin_PASSWORD)
        VALUES ('$ent','$ent1','$ent2')";

        if ($conn->query($sql) === TRUE) {
           header("Location:screens/AdminIDScreen.php");
          echo "New record created successfully";
          exit();
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      

  }
  else{
    header("Location:./AdminRegistrationValidation.php");
}
}

}
?>

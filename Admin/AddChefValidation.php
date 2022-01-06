<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['insertchef']))
{  


    $ent1 = $_POST['cname'];
    $ent2 = $_POST['csalary'];
    $ent3 = $_POST['csince'];
    $ent4 = $_POST['cREF_ID'];
    

    $result = mysqli_query($conn,"select count(1) FROM refectory");
    $result1 = mysqli_query($conn,"select REF_ID FROM refectory");

    $row = mysqli_fetch_array($result);

    $total = $row[0];

    $count = 0;
    $count1 = 0;
    while ($count < $total and $row1 = mysqli_fetch_array($result1)) {
        if ($row1['REF_ID'] == $ent4) {
            $count1++;
            break;
        }
        $count++;
    }

    if ($count1 == 0) {

        header("Location:./screens/ChefRegistrationScreen.php?errorC=REF_ID does not exist on the system!");
    }else{

    
    $sql = "INSERT INTO chef (CHEF_ID,CHEF_NAME,SALARY,SINCE,REF_ID)
    VALUES (NULL,'$ent1','$ent2','$ent3','$ent4')";

    if ($conn->query($sql) === TRUE) {
        header("Location:./screens/AddedChefConfirmScreen.php");
        
        exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
}


?>

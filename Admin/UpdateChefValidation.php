<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['updatechef']))
{  

    $chefid = $_SESSION['chefid'];
    $ent1 = $_POST['uname'];
    $ent2 = $_POST['usalary'];
    $ent3 = $_POST['usince'];
    $ent4 = $_POST['uREF_ID'];
    

    $result = mysqli_query($conn,"select count(1) FROM chef");
    $result1 = mysqli_query($conn,"SELECT REF_ID FROM REFECTORY");

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

        header("Location:./screens/ChefUpdateScreen.php?errorX=REF_ID does not exist on the system!");
    }else{

    
    $sql = "UPDATE chef SET  CHEF_NAME='$ent1' , SALARY='$ent2' , SALARY='$ent3' , REF_ID='$ent4'  WHERE chef_ID='$chefid'";

    if ($conn->query($sql) === TRUE) {
        
        
    header("Location:./screens/UpdateConfirmScreen.php");
        
    } else {
        echo "Error updating record: " . $conn->error;
    }

}
}


?>

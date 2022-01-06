<?php
session_start();
include_once 'DBconnect.php';


$result = mysqli_query($conn,"select count(1) FROM reservation");
$row = mysqli_fetch_array($result);

$total = $row[0];

$result9 = mysqli_query($conn,"select RES_ID ,RES_DATE ,C_ID,REF_ID FROM reservation");
$count = 0;

while($count < $total AND $rowc = mysqli_fetch_array($result9) ){


    if(isset($_POST['B'.$rowc['RES_ID']]))
    { 


        $_SESSION['rezZ'] = $rowc['RES_ID'];

        
        header("Location:./screens/billScreen.php");
        


    }
$count++;

}

?>

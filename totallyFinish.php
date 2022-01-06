<?php 

session_start();
include 'DBconnect.php';
if(isset($_POST['totalV']))
{  

        $res = $_SESSION['RES_IDd'];
        $t = $_SESSION['total'];
        $mealarray = $_SESSION['MEALID'];

        $_SESSION['nowRESID'] = $res;

         $sql = "INSERT INTO Payment (Bill_ID,RES_ID,Bill)
        VALUES (NUll,$res,$t)";

        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
            
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }

      

foreach ($mealarray as $value) {
          $sql = "INSERT INTO Reservation_Meal (RES_ID,Meal_ID)
        VALUES ($res,$value)";

        if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
            continue;
    } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

    header("Location:./screens/ConfirmScreen.php");
    exit();
}



?>
<?php

include 'DBconnect.php';


$r1 = mysqli_query($conn,"select count(1) FROM payment");

$r2 = mysqli_query($conn,"select RES_ID FROM payment");
$row1 = mysqli_fetch_array($r1);

$t1 = $row1[0];

$count1 = 0;

while($count1 < $t1 and $row2 = mysqli_fetch_array($r2)){
  $RES = $row2['RES_ID'];
$randomNum = rand(1,11);

for ($i=0; $i <$randomNum ; $i++) { 

 $r3 = mysqli_query($conn,"select count(1) FROM reservation_meal");

  $r4 = mysqli_query($conn,"select RES_ID,MEAL_ID FROM reservation_meal");
  $row3 = mysqli_fetch_array($r3);

  $t2 = $row3[0];
  $count2 = 0;


$sql = "INSERT INTO Reservation_Meal (RES_ID,MEAL_ID)
    VALUES ($RES,NULL)";

    if ($conn->query($sql) === TRUE) {

      echo "New record created successfully";
     
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }



}

 
 /* while($count2 < $t2 and $row4 = mysqli_fetch_array($r4)){

    
    if ($row2['RES_ID'] == $row4['RES_ID']) {

      $r5 = mysqli_query($conn,"select count(1) FROM meal");

      $r6 = mysqli_query($conn,"select MEAL_ID,MEAL_PRICE FROM meal");
      $row5 = mysqli_fetch_array($r5);

      $t3 = $row5[0];
      $count3 = 0;
      while($count2 < $total2 and $row6 = mysqli_fetch_array($r6)){

        if ($row2['MEAL_ID'] == $row3['MEAL_ID']) {
          $sum += $row3['MEAL_PRICE'];
        }
        $count2++;   
      }



    }

    $RES = $row1['RES_ID'];
    $sql = "INSERT INTO payment (BILL_ID,RES_ID,BILL)
    VALUES (NULL,'$RES','$sum')";

    if ($conn->query($sql) === TRUE) {

      echo "New record created successfully";
     
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sum = 0;


    $count1++;

  }

  $count++;*/

}

?>

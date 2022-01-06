<?php
session_start();
include_once 'DBconnect.php';
if(isset($_POST['dateV']))
{  


  $date = "'".date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['meeting-time'])))."'";
  $id = $_SESSION['id'];

  $result = mysqli_query($conn,"select count(1) FROM reservation");
  $result1 = mysqli_query($conn,"select C_ID,RES_ID,RES_DATE FROM reservation");
  $row = mysqli_fetch_array($result);

  $total = $row[0];



  $count1 = 0;
  $ctt = 0;
  while($count1 < $total and $row1 = mysqli_fetch_array($result1)){
    $year = $row1['RES_DATE'][0] .''. $row1['RES_DATE'][1].''.$row1['RES_DATE'][2].''.$row1['RES_DATE'][3];
    $yearSUCCESS = $_POST['meeting-time'][0] .''. $_POST['meeting-time'][1].''.$_POST['meeting-time'][2].''.$_POST['meeting-time'][3];
    
    $month = $row1['RES_DATE'][5] .''. $row1['RES_DATE'][6];
    $monthSUCCESS = $_POST['meeting-time'][5] .''. $_POST['meeting-time'][6];
    $day = $row1['RES_DATE'][8] .''. $row1['RES_DATE'][9];
    $daySUCCESS = $_POST['meeting-time'][8] .''. $_POST['meeting-time'][9];

    $hour = $row1['RES_DATE'][11] .''. $row1['RES_DATE'][12];
    $hourSUCCESS = $_POST['meeting-time'][11] .''. $_POST['meeting-time'][12];
    $minute = $row1['RES_DATE'][14] .''. $row1['RES_DATE'][15];
    $minuteSUCCESS = $_POST['meeting-time'][14] .''.$_POST['meeting-time'][15];
    if ($row1['C_ID'] == $id and  $yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS == $day and $hourSUCCESS == $hour and $minuteSUCCESS == $minute) {

      $ctt++;
    }

    $count1++;

  }

  if ($ctt != 0) {

header("Location:./screens/DateScreen.php?errorR=You cannot choose the date you chose before!");
exit();
    
    
  }


  
  $S = $_SESSION['id'];
  $M = $_SESSION['ref'];
  echo $date;echo "<br>";
  $k1 = "10:00:00'";
  $k2 = "10:30:00'";
  $k3 = "11:00:00'";
  $k4 = "11:30:00'";
  $k5 = "12:00:00'";
  $k6 = "12:30:00'";
  $k7 = "13:00:00'";
  $k8 = "13:30:00'";
  $k9 = "14:00:00'";
  $k10 = "14:30:00'";
  $k11 = "15:00:00'";
  $k12 = "15:30:00'";
  $k13 = "16:00:00'";
  $k14 = "16:30:00'";
  $k15 = "17:00:00'";
  $k16 = "17:30:00'";
  $k17 = "18:00:00'";
  $k18 = "18:30:00'";
  $k19 = "19:00:00'";
  $y = mb_substr($date, 12);
  $cart = array();
  array_push($cart, $k1,$k2,$k3,$k4,$k5,$k6,$k7,$k8,$k9,$k10,$k11,$k13,$k14,$k15,$k16,$k17,$k18,$k19);
  $count = 0;
  foreach ($cart as $value) {
    if ($y == $value) {
      $count++;
    }
  }

  
  if( $count == 0){
    header("Location:./screens/DateScreen.php?error=wrong date");
    exit();
  }



  $sql = "INSERT INTO Reservation (RES_ID,RES_DATE,C_ID,REF_ID)
  VALUES (NULL,$date,$S,$M)";

  if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header("Location:../screens/MyReservationScreen.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
?>

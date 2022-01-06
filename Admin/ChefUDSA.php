<?php
session_start();
include_once 'DBconnect.php';


$result = mysqli_query($conn,"select count(1) FROM chef");
$row = mysqli_fetch_array($result);

$total = $row[0];

$id = $_SESSION['Adminid'];
$result9 = mysqli_query($conn,"select CHEF_ID ,CHEF_NAME ,REF_ID,SINCE,SALARY FROM chef");
$count = 0;
while($count < $total AND $rowc = mysqli_fetch_array($result9) ){



    if(isset($_POST[$rowc['CHEF_ID']]))
    { 
        $CHEF = $rowc['CHEF_ID'];


        $result3 = mysqli_query($conn,"SELECT CHEF_ID,CHEF_NAME,SALARY,SINCE,REF_ID FROM CHEF WHERE CHEF_ID='$CHEF'" );
        $row5 = mysqli_fetch_array($result3);

        


        $_SESSION['chefid'] = $row5['CHEF_ID'];
        $_SESSION['chefname'] = $row5['CHEF_NAME'];

        $_SESSION['chefsalary'] = $row5['SALARY'];

        $_SESSION['chefsince'] = $row5['SINCE'];
        $_SESSION['chefrefid'] = $row5['REF_ID'];


        
        header("Location:./screens/ChefUpdateScreen.php");
        


}elseif (isset($_POST['M'.$rowc['CHEF_ID']])) {//delete 
    $CHEF = $rowc['CHEF_ID'];
    $sql = "DELETE FROM CHEF WHERE CHEF_ID=$CHEF";

    if ($conn->query($sql) === TRUE) {
        header("Location:./screens/AllChefScreen.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}



}

?>

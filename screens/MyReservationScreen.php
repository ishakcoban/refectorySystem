<?php include '../DBconnect.php'; session_start(); 
// en yakin successi ve dateini bul
$sql = "SELECT Res_ID, Res_DATE,C_ID,REF_ID FROM Reservation ORDER BY Res_DATE DESC";
$result = $conn->query($sql);
$date10 = date('d-m-Y h:i:s A');
$dayNOW = $date10[0]. "".$date10[1];
$monthNOW = $date10[3]. "".$date10[4];
$yearNOW = $date10[6]. "".$date10[7]. "".$date10[8]. "".$date10[9];
if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
		

		$resulttl = mysqli_query($conn,"select count(1) FROM payment");
		$resultl = mysqli_query($conn,"select RES_ID FROM payment");
		
		$roww = mysqli_fetch_array($resulttl);
		$thenearestSuccess = 0;
		$total = $roww[0];

		$cont = 0;

		while ($cont < $total and $rowp = mysqli_fetch_array($resultl)) {
			if ($row["C_ID"] == $_SESSION['id']) {
				

				if ($rowp['RES_ID'] == $row["Res_ID"]) {
					
					$thenearestSuccess = $row["Res_DATE"];
					break;
				}}
				$cont++;
			}
			if ($thenearestSuccess != 0 ) {
				break;
				// code...
			}

			$count = 0;
		}
	} else {
		$thenearestSuccess = 0;
	}
// en iyisini parcalara ayir

	if ($thenearestSuccess != 0) {
		
	//$year = $dateA[0] .''. $dateA[1].''.$dateA[2].''.$dateA[3];

		$yearSUCCESS = $thenearestSuccess[0] .''. $thenearestSuccess[1].''.$thenearestSuccess[2].''.$thenearestSuccess[3];
		global $yearSUCCESS;
	//$month = $dateA[5] .''. $dateA[6];
		$monthSUCCESS = $thenearestSuccess[5] .''. $thenearestSuccess[6];
	//$day = $dateA[8] .''. $dateA[9];
		$daySUCCESS = $thenearestSuccess[8] .''. $thenearestSuccess[9];

	//$hour = $dateA[11] .''. $dateA[12];
		$hourSUCCESS = $thenearestSuccess[11] .''. $thenearestSuccess[12];
	//$minute = $dateA[14] .''. $dateA[15];
		$minuteSUCCESS = $thenearestSuccess[14] .''. $thenearestSuccess[15];
	}


	?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="sign in or register" />
		<meta name="keywords" content="sign in" />
		<meta name="author" content="İshak Çoban" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/css/bootstrap.css" />
		<title>My Reservation</title>
		<style>
		.yourid{

			font-weight: bold;
			margin-top: -32%;
			font-size: 150%;

		}

		img{
			width: 55%;
		}
		.regist{
			margin-top: 9%;
			font-size: 3em;
			margin-left: 5%;
			color: green;
		}

		.y{
			margin-top: 17%;
			margin-left: 73%;
		}

		.tyy{

			color: red;
			margin-top: 1%;
			margin-left: 33%;
		}

		.btnn{
			padding-top: 120%;
			width: 100%;
			height: 25%;
			background-color: black;

		}
		.in{
			border-color:white;
			justify-content: center;
		}
		.inputs{

			width: 55%;
			opacity: 1;
			margin-top: 3%;
			border-radius: 25%;
			align-items: center;
			justify-content: center;
			margin-left: 22%;

		}
		.round {
			width: 100%;
			height: 10%;
			background-color: black;
			opacity: 0.7;
			z-index: 1;
		}
		.section {
			position: relative;
			width: 100%;
			height: 100vh;
			display: flex;
			overflow-x: hidden;
		}
		.section h1 {
			font-size: 5rem;
			font-family: "Cookie";
			z-index: 1;
			opacity: 0.7;
			font-weight: 10%;
		}
		.video-container {
			position: absolute;

			top: 0;
			left: 0;
		}
		.ss{
			margin-left: 15%;
			margin-top: 9%;
		}
		.x{
			margin-left: 35%;
		}
		.ym{
			margin-left: 4%;
		}
		.cong{
			font-size: 140%;
			margin-top: 5%;
			color: green;

		}
		.sign{
			margin-top: 5%;
			font-size: 120%;

			color: skyblue;

		}
		.descp{
			font-size: 100%;

			color: #FFFFFF;

		}
		html, body
		{
			height: 100%;
		}

		body
		{
			margin: 0;
			background-color: #292929;
			overflow: hidden;
		}

		nav
		{
			position: absolute;
			top: 4%;
			right: 0;
			left: 70%;
			width: 319px;
			display: table;
			margin: 0 auto;
			transform: translateY(-50%);
		}

		nav a
		{
			position: relative;
			width: 33.333%;
			display: table-cell;
			text-align: center;
			color: #949494;
			text-decoration: none;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
			font-weight: bold;
			padding: 10px 20px;
			transition: 0.2s ease color;
		}

		nav a:before, nav a:after
		{
			content: "";
			position: absolute;
			border-radius: 50%;
			transform: scale(0);
			transition: 0.2s ease transform;
		}

		nav a:before
		{
			top: 0;
			left: 10px;
			width: 6px;
			height: 6px;
		}

		nav a:after
		{
			top: 5px;
			left: 18px;
			width: 4px;
			height: 4px
		}

		nav a:nth-child(1):before
		{
			background-color: yellow;
		}

		nav a:nth-child(1):after
		{
			background-color: red;
		}

		nav a:nth-child(2):before
		{
			background-color: #00e2ff;
		}

		nav a:nth-child(2):after
		{
			background-color: #89ff00;
		}

		nav a:nth-child(3):before
		{
			background-color: purple;
		}

		nav a:nth-child(3):after
		{
			background-color: palevioletred;
		}



		#indicator
		{
			position: absolute;
			left: 5%;
			bottom: 0;
			width: 30px;
			height: 3px;
			background-color: #fff;
			border-radius: 5px;
			transition: 0.2s ease left;
		}

		nav a:hover
		{
			color: #fff;
		}

		nav a:hover:before, nav a:hover:after
		{
			transform: scale(1);
		}

		nav a:nth-child(1):hover ~ #indicator
		{
			left: 12%;
			background: linear-gradient(130deg, yellow, red);
		}

		nav a:nth-child(2):hover ~ #indicator
		{
			left: 52%;
			background: linear-gradient(130deg, #00e2ff, #89ff00);
		}

		nav a:nth-child(3):hover ~ #indicator
		{
			left: 85%;
			background: linear-gradient(130deg, purple, palevioletred);
		}

		#ytd-url {
			display: block;
			position: fixed;
			right: 0;
			bottom: 0;
			padding: 10px 14px;
			margin: 20px;
			color: #fff;
			font-family: Arial;
			font-size: 14px;
			text-decoration: none;
			background-color: #000;
			border-radius: 4px;
			box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.3);
			z-index: 125;
		}
		.FirstC{
			width: 4%;
			background-color: red;
			opacity: 1;
			z-index: 1;
			border-radius: 48%;

		}

		.ttt{
			opacity: 1;
			margin-left: 10%;
			margin-top: 0.2%;

		}
		.round1{

			margin-left: -62%;
			margin-top: 8%;
			width: 20%;
			height: 35%;
			z-index: 1;

			border-radius: 50%;
			opacity: 0.7;

		}

		.round5{

			margin-left: -53%;
			margin-top: 10%;
			width: 90%;

			z-index: 1;
			background-color: black;

			opacity: 0.7;

		}
		.tryy{
			margin-top: 25%;
			z-index: 1;
		}
		.ima{
			margin-top: 5%;
			width: 75%;
		}
		.line11{
			opacity: 1;
			color: skyblue;
		}
		.bttt{


		}

		.infos{


			width: 20%;
			margin-left: 10%;
			color: skyblue;




		}

		.infos1{

			margin-left: 3%;
			width: 20%;

			color: skyblue;






		}

		.infos2{


			width: 20%;

			color: skyblue;




		}
		.infos3{


			width: 20%;

			color: skyblue;





		}
		.infos4{


			width: 20%;

			color: skyblue;





		}

	</style>

</head>

<body>

	<div class="section">

		<div class="round">
			
			<form  class="d-flex flex-row" action="../MyReservationRotateValidation.php" method="POST">
				<button style="margin-left:5%;background-color:green;color: white;" class=" btn  bttt mt-2" type="submit" name="homr" >Go to <b>HOME</b> Page</button>

				<button style="margin-left:1%;background-color:#0275d8;color: white;" class=" btn bttt mt-2" type="submit" name="banrrr" >Books A New Reservation</button></form>


				
				<div class="d-flex flex-row  ">
				</div>
				<nav>

					<a href="./MyAccountScreen.php">My Account</a>
					<a href="./MyReservationScreen.php">My Reservations</a>
					<a href="../LogOut.php">Log Out</a>

					<div id="indicator"></div>
				</nav>

			</div>
			

			<div class="round1">
				<form action="../RefValidation.php" method="POST">
					<div class="d-flex flex-column inputs text-center ">
						



					</div>


				</form>

			</div>

			<?php 

			$result = mysqli_query($conn,"select count(1) FROM reservation");
			$row = mysqli_fetch_array($result);

			$total = $row[0];

			$id = $_SESSION['id'];
			$result1 = mysqli_query($conn,"select RES_ID ,C_ID ,RES_DATE,REF_ID FROM reservation");

			$count = 0;
			$row1 = mysqli_fetch_array($result1);



			$count1= 0;
			while ($count < $total and $row1 = mysqli_fetch_array($result1)){

				if($row1['C_ID']== $id){
					$count1++;
				}

				$count++;
			}

			?>

			<div class="round5" style="height:<?php echo $count1*13 + 18;?>%;">
				
				<form action="../DeleteValid.php" method="POST">
					

					<div class="d-flex flex-row "><p style="color: skyblue; margin-left: 15%;" ><b>RESERVATION ID</b></p>
						<p style="color: skyblue; margin-left:15%" ><b>DATE</b></p>
						<p style="color: skyblue; margin-left: 15%" ><b>REFECTORY</b></p>
						<p style="color: skyblue; margin-left: 15%" ><b>OPERATION</b></p>
					</div>


					<hr style="margin-top: -1% ;" class="line11" >

					<?php 

					$result = mysqli_query($conn,"select count(1) FROM reservation");
					$row = mysqli_fetch_array($result);
					
					$total = $row[0];

					$id = $_SESSION['id'];
					$result1 = mysqli_query($conn,"select RES_ID ,C_ID ,RES_DATE,REF_ID FROM reservation ORDER BY Res_DATE ASC");
					

					$count = 0;
					


					$ct = 0;
					while ($count < $total and $row1 = mysqli_fetch_array($result1)){

						if($row1['C_ID']== $id){
							$ct++;
							$J = $row1['REF_ID'];
							$resID = $row1['RES_ID'];

							?>

							<div class="d-flex flex-row">


								<?php   
								$result12 = mysqli_query($conn,"select count(1) FROM payment");
								$row9 = mysqli_fetch_array($result12);

								$total35 = $row9[0];


								$result20 = mysqli_query($conn,"select RES_ID FROM payment");


								$counttt = 0;
								$countt1 = 0;
								while ($counttt < $total35 and $row30 = mysqli_fetch_array($result20) ) {

									if ($row1['RES_ID'] == $row30['RES_ID']) {
										$countt1++;
										break;
									}
									$counttt++;
								}


								$dateA = $row1['RES_DATE'];
								if($countt1 != 0){
									

									?>

									<div style="margin-right:-6.2%">
										<button style="font-size: 70%;" class=" btn btn-primary fw-bold " type="submit" name="D<?php echo $row1['RES_ID']; ?>" >DETAILS</button></div>

										<?php  


									}?>
									
									<div class="infos"><p  class="text-center "><?php echo $row1['RES_ID'];?></p></div>
									<div class="infos1"><p class="text-center "><?php echo $row1['RES_DATE'];?></p></div>
									<div class="infos2"><p class="text-center "><?php
									$resultt1 = mysqli_query($conn,"select count(1) FROM refectory");
									$result2t2 = mysqli_query($conn,"select NAME,REF_ID FROM refectory");
									$row99 = mysqli_fetch_array($resultt1);

									$total21 = $row99[0];
									$ctn = 0;
									while($ctn < $total21 and $row20 = mysqli_fetch_array($result2t2) ){
										if ($row20['REF_ID'] == $row1['REF_ID']) {
											echo $row20['NAME'];
										}

									}


								?></p></div>
								
								<?php   
								$result12 = mysqli_query($conn,"select count(1) FROM payment");
								$row9 = mysqli_fetch_array($result12);

								$total35 = $row9[0];


								$result20 = mysqli_query($conn,"select RES_ID FROM payment");


								$counttt = 0;
								$countt1 = 0;
								while ($counttt < $total35 and $row30 = mysqli_fetch_array($result20) ) {

									if ($row1['RES_ID'] == $row30['RES_ID']) {
										$countt1++;
										break;
									}
									$counttt++;
								}


								$dateA = $row1['RES_DATE'];
								if($countt1 != 0){
									

									?>

									<p style="margin-left:10%;font-size: 110%;"  class="text-success fw-bold text-center" >DONE!</p>

									<?php  
									

								}
								else{

									

									
									if ($thenearestSuccess != 0) {
										$year = $dateA[0] .''. $dateA[1].''.$dateA[2].''.$dateA[3];
										//$yearSUCCESS = $dateB[0] .''. $dateB[1].''.$dateB[2].''.$dateB[3];
										$month = $dateA[5] .''. $dateA[6];
										//$monthSUCCESS = $dateB[5] .''. $dateB[6];
										$day = $dateA[8] .''. $dateA[9];
										//$daySUCCESS = $dateB[8] .''. $dateB[9];

										$hour = $dateA[11] .''. $dateA[12];
										//$hourSUCCESS = $dateB[11] .''. $dateB[12];
										$minute = $dateA[14] .''. $dateA[15];
										//$minuteSUCCESS = $dateB[14] .''. $dateB[15];
										if (($yearSUCCESS > $year) or ($yearNOW > $year )) {
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>

											<?php  

										}elseif (($yearSUCCESS ==  $year and $monthSUCCESS > $month) or ($yearNOW ==  $year and $monthNOW > $month)) {
											
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >
											TIME EXCEEDED!</p>
											<?php  
										}elseif (($yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS > $day) or ($yearNOW ==  $year and $monthNOW == $month AND $dayNOW > $day)) {
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
											<?php 
										}elseif ($yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS == $day and $hourSUCCESS > $hour) {
											
											?>

											


											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
											<?php 

										}elseif ($yearSUCCESS ==  $year and $monthSUCCESS == $month and $daySUCCESS == $day and $hourSUCCESS == $hour and $minuteSUCCESS > $minute) {

											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
										<?php }	else{
											?>

											<button style="font-size: 70%;" class=" btn btn-danger fw-bold " type="submit" name="<?php echo $row1['RES_ID'];?>" >Delete</button>

											<button style="margin-left:4%;font-size: 70%;" class=" btn btn-primary fw-bold " type="submit" name="J<?php echo $row1['RES_ID'];?>" >Choose Meal</button>

											<?php 
											
										}	


									}else{



										$year = $dateA[0] .''. $dateA[1].''.$dateA[2].''.$dateA[3];
										//$yearSUCCESS = $dateB[0] .''. $dateB[1].''.$dateB[2].''.$dateB[3];
										$month = $dateA[5] .''. $dateA[6];
										//$monthSUCCESS = $dateB[5] .''. $dateB[6];
										$day = $dateA[8] .''. $dateA[9];
										//$daySUCCESS = $dateB[8] .''. $dateB[9];

										$hour = $dateA[11] .''. $dateA[12];
										//$hourSUCCESS = $dateB[11] .''. $dateB[12];
										$minute = $dateA[14] .''. $dateA[15];
										//$minuteSUCCESS = $dateB[14] .''. $dateB[15];
										if (($yearNOW > $year )) {
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>

											<?php  

										}elseif (($yearNOW ==  $year and $monthNOW > $month)) {
											
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >
											TIME EXCEEDED!</p>
											<?php  
										}elseif (($yearNOW ==  $year and $monthNOW == $month AND $dayNOW > $day)) {
											?>



											<p style="margin-left:10%;font-size: 110%;"  class="text-danger fw-bold text-center" >TIME EXCEEDED!</p>
											<?php 
										}else{
											


											?>

											<button style="margin-left:5%;font-size: 70%;" class=" btn btn-danger fw-bold " type="submit" name="<?php echo $row1['RES_ID'];?>" >Delete</button>


											<button style="margin-left:4%;font-size: 70%;" class=" btn btn-primary fw-bold " type="submit" name="J<?php echo $row1['RES_ID'];?>" >Choose Meal</button>
											<?php 										
										}						}
									}

									
									?>
								</div>
								<br>
								<?php

								$count++;
							}
						}

						if ($ct == 0) {
							?>

							<div class=" text-center text-danger" style="font-size: 2em;background-color: black;"><p class="text-center "><b><?php echo "You don't have any reservation!";?></b></p>
							
						</div>


							<?php
						}


					?>				</form>
				</div>



			</div>

			<div class="video-container">

				<div class="color-overlay"></div>
				<video autoplay loop muted>

					<source src="/bgvideo/bg.mp4" type="video/mp4" />
				</video>
			</div>

		</div>

	</body>
	</html>

<?php include '../DBconnect.php'; session_start(); 


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
		overflow-y: scroll;
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

			<div class="round5" style="height:5%;">

				<form action="../DeleteValid.php" method="POST">


					<div class="d-flex flex-row "><p style="color: skyblue; margin-left: 15%;" ><b>MEAL ID</b></p>
						<p style="color: skyblue; margin-left:23%" ><b>NAME</b></p>
						<p style="color: skyblue; margin-left: 24%" ><b>PRICE</b></p>

					</div>


					<hr style="margin-top: -1% ;" class="line11" >

					<?php 
					$result = mysqli_query($conn,"select count(1) FROM meal");
					$row = mysqli_fetch_array($result);

					$total = $row[0];
					$id = $_SESSION['id'];
					$result1 = mysqli_query($conn,"select MEAL_ID,MEAL_NAME,MEAL_PRICE FROM meal");

					$count = 0;
					$CN = 0;


					if (isset($_POST['refm'])) {

						$enteredval = strtolower( trim($_POST['refm'] ));
						while ($count < $total AND $row1 = mysqli_fetch_array($result1)) {

							


							if ((strtolower(trim($row1['MEAL_NAME']))) == $enteredval ) {

								$CN++;
								?>

								<div class="d-flex flex-row" style="background-color: black;">

									<p style="color:skyblue;margin-left: 15.3%;"><?php echo $row1['MEAL_ID']  ?></p>
									<p style="color:skyblue;margin-left: 22.5%;"><?php echo $row1['MEAL_NAME']  ?></p>




								</div>
								<p style="color:skyblue;margin-top: -3.5%;margin-left: 72%;"><?php echo $row1['MEAL_PRICE']  ?> TL</p>
								<br>


								<?php 
							}elseif((strtolower($row1['MEAL_PRICE'])) == $enteredval ) {
								$CN++;
								?>
								<div class="d-flex flex-row" style="background-color: black;">

										<p style="color:skyblue;margin-left: 15.3%;"><?php echo $row1['MEAL_ID']  ?></p>
									<p style="color:skyblue;margin-left: 22.5%;"><?php echo $row1['MEAL_NAME']  ?></p>




								</div>
								<p style="color:skyblue;margin-top: -3.5%;margin-left: 72%;"><?php echo $row1['MEAL_PRICE']  ?> TL</p>
								<br>

								<?php



							}elseif((strtolower(trim($row1['MEAL_ID']))) == $enteredval ) {
								$CN++;
								?>
								<div class="d-flex flex-row" style="background-color: black;">

										<p style="color:skyblue;margin-left: 15.3%;"><?php echo $row1['MEAL_ID']  ?></p>
									<p style="color:skyblue;margin-left: 22.5%;"><?php echo $row1['MEAL_NAME']  ?></p>




								</div>
								<p style="color:skyblue;margin-top: -3.5%;margin-left: 72%;"><?php echo $row1['MEAL_PRICE']  ?> TL</p>
								<br>

								<?php



								


							}
							$count++;
						}
					}



					
					if ($CN == 0) {

						?>

						<h2 class="d-flex justify-content-center" style="color:red;background-color: black;">NOT FOUND ANY VALUE</h2>
						<?php
					}

					?>

				</form>
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

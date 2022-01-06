<?php include '../DBconnect.php'; session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="sign in or register" />
	<meta name="keywords" content="sign in" />
	<meta name="author" content="İshak Çoban" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<title>Log In</title>
	<style>
	.yourid{

		font-weight: bold;
		margin-top: -32%;
		font-size: 150%;

	}

	img{
		width: 25%;
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
		font-size: 110%;

		color: #FFFFFF;

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

		margin-left: -95%;
		margin-top: 5%;
		width: 90%;
		height:250%;
		z-index: 1;
		background-color: black;
		
		opacity: 0.7;

	}
	.tryy{
		margin-top: 25%;
		z-index: 1;
	}
	.line11{
		padding-top: 0.3;
		width: 110%;
		background-color: skyblue;
		opacity: 1;
	}

</style>

</head>

<body>
	<?php 

	$result = mysqli_query($conn,"select count(1) FROM payment");

	$result1 = mysqli_query($conn,"select RES_ID,BILL_ID,BILL FROM payment");
	$row = mysqli_fetch_array($result);

	$total2 = $row[0];


	$res = $_SESSION['rezZ'];
	$count = 0;
	$bill=0;
	$billID = 0;
	while ($count < $total2 AND $row1 = mysqli_fetch_array($result1)) {

		if ($row1['RES_ID'] == $res) {
			?>

			<?php
			$bill = $row1['BILL'];
			$billID = $row1['BILL_ID'];
		}

		$count++;
	}
	?>
	<div class="section">

		<div class="round">

			<div class="d-flex flex-row  ">
				
				<h2 class="ttt "  ></h2></div>
				

			</div>

			<div class="round1">
				<form action="../RefValidation.php" method="POST">
					<div class="d-flex flex-column inputs text-center ">
						<p style="color: skyblue;font-size: 2em;margin-top:8%"><?php echo $bill; ?> TL</p>
						<img style="margin-top: -18.4%;" src="../images/circle.png">
						
						<hr class="line11">

						<p style="color: green;font-weight: bold;">BILL ID: <?php echo $billID; ?></p>


						<?php

						$result44 = mysqli_query($conn,"select count(1) FROM reservation_meal");

						$result33 = mysqli_query($conn,"select RES_ID,MEAL_ID FROM reservation_meal");
						$row12 = mysqli_fetch_array($result44);

						$total = $row12[0];
						$count1 = 0;
						while ($count1 < $total  AND $rowW = mysqli_fetch_array($result33)) {

							if ($rowW['RES_ID'] == $res ) {


								$result55 = mysqli_query($conn,"select count(1) FROM meal");

								$result11 = mysqli_query($conn,"select MEAL_ID,MEAL_NAME,MEAL_PRICE FROM meal");
								$row22 = mysqli_fetch_array($result55);

								$total4 = $row22[0];
								$count2 = 0;
								while ($count2 < $total4 and $ro = mysqli_fetch_array($result11)) {

									if ($ro['MEAL_ID'] == $rowW['MEAL_ID']) {
										
										?>

										<p style="color:skyblue"><?php echo $ro['MEAL_NAME']."  =  ".$ro['MEAL_PRICE']; ?> TL</p>

										<?php
									}
									$count2++;
								}
								
							}
							$count1++;
						}

						?>
					</div>
					
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

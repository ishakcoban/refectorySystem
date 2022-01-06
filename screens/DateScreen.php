<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="sign in or register" />
	<meta name="keywords" content="sign in" />
	<meta name="author" content="İshak Çoban" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<title>Date Screen</title>
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
		margin-top: 3%;
		margin-left: 27%;

	}
	.tyy1{

		color: white;
		margin-top: 3%;
		margin-left: 40.5%;
	}
	.tyy2{

		color: green;
		
		margin-left: 43.5%;
	}
	.tyy3{

		color: red;
		margin-top: 3%;
		margin-left: 43.5%;
	}

	.tyy4{

		color: red;
		margin-top: 3%;
		margin-left: 41%;
	}

	.btnn{

		margin-left: 38%;
		margin-top: 5%;
		width: 25%;
		height: 25%;
		
		

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
		margin-top: 25%;
		color: green;

	}
	.sign{
		font-size: 110%;

		color: #FFFFFF;

	}
	.descp{
		font-size: 90%;

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
		color: whitesmoke;
		font-family: Arial, Helvetica, sans-serif;
		margin-top: -3%;
		margin-left: 40%;
	}
	.round1{
		border-radius: 10%;
		margin-left: -77%;
		margin-top: 8%;
		width: 55%;
		height: 75%;
		z-index: 1;
		background-color: black;
		opacity: 0.7;

	}
	.tryy{
		margin-top: 25%;
		z-index: 1;
	}
	.dateimg{
		width: 27%;
		margin-left: 36.3%;
		margin-top: 5%;
	}

	label {
		display: block;
		font: 1rem 'Fira Sans', sans-serif;
	}

	input,
	label {
		margin: .4rem 0;
	}
	.dateC{
		width: 35%;
		margin-left: 33%;
		margin-top: 5%;
	}


</style>

</head>

<body>

	<div class="section">

		<div class="round">
			<form action="./HomePageScreen.php" method="POST">
				<button style="margin-left:5%;background-color:green;color: white;" class=" btn bttt mt-2" type="submit" name="banr" >Go to <b>HOME</b> Page</button></form>
				<div class="d-flex flex-row  ">
					
					<h2 class="ttt">Choose A Date</h2></div>
					<nav>

						<a href="./MyAccountScreen.php">My Account</a>
						<a href="./MyReservationScreen.php">My Reservations</a>
						<a href="../LogOut.php">Log Out</a>

						<div id="indicator"></div>
					</nav>

				</div>


				<div class="round1 ">
					
					<form method="POST" class = " d-flex justify-content-center d-flex flex-column" action="../DateValidation.php" method="POST">
						<img class ="dateimg " src="../images/reservation-icon-54.png">
						
						<input required="required" class="form-control dateC" type="datetime-local"  name="meeting-time" min="2021-06-14T00:00"
						>

						

						<button class="btnn btn btn-primary " type="submit" name="dateV">Confirm</button>

						<?php if (isset($_GET['errorR'])) { ?>
							
							<p class="error tyy" >You cannot choose the date you chose before!</p>
							
							
							
						<?php } ?>

						<?php if (isset($_GET['error'])) { ?>
							
							<p class="error tyy4" >⬇Invalid Date!⬇</p>
							
							
						<?php } ?>

						<?php if (isset($_GET['error'])) { ?>
							<div style="background-color: black; margin-top:11%">
								
								<p class="error tyy1" >Appropriate times:</p><p class="error tyy2" >10:00:00 AM<br>10:30:00 AM<br>11:00:00 AM<br>11:30:00 AM<br>12:00:00 PM<br>12:30:00 PM<br>01:00:00 PM<br>01:30:00 PM<br>02:00:00 PM<br>02:30:00 PM<br>03:00:00 PM<br>03:30:00 PM<br>04:00:00 PM<br>04:30:00 PM<br>05:00:00 PM<br>05:30:00 PM<br>06:00:00 PM<br>06:30:00 PM<br>07:00:00 PM<br> </p></div>
							<?php } ?>
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

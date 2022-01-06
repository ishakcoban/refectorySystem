
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="sign in or register" />
	<meta name="keywords" content="sign in" />
	<meta name="author" content="İshak Çoban" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<title>Stats Screen</title>
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
		left: 13%;
		background: linear-gradient(130deg, yellow, red);
	}

	nav a:nth-child(2):hover ~ #indicator
	{
		left: 47%;
		background: linear-gradient(130deg, #00e2ff, #89ff00);
	}

	nav a:nth-child(3):hover ~ #indicator
	{
		left: 79%;
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
		margin-top: 5%;
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
		
		color: skyblue;
		



	}

	.infos1{

		
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

	.grd{
		
		margin-left: 10%;
		font-weight: bold;
		font-size: 150%;
		margin-top: -60%;
		
	}

	.mlk{
		margin-left: 38%;
		margin-top: -32%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.bigLine{
		color: whitesmoke;
		width: 90%;
		padding-top: 5%;
		margin-top: 7%;
		
		margin-left: 5%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.tt{
		margin-left: 74%;
		margin-top: 15%;
		font-weight: bold;
		color: whitesmoke;
		font-size: 2em;

	}

	.imgg{
		margin-left: 44%;
		margin-top: 2%;
		width: 10%;
	}

</style>

</head>

<body>

	<div class="section">

		<div class="round">

			<p style="font-size:200%;margin-left: 5%;color: whitesmoke;">S T A T I S T I C S</p>
			<nav>

				<a href="./MyAccountAdminScreen.php">My Account</a>
				<a href="./StatsScreen.php">User Stats</a>
				<a href="../LogOut.php">Log Out</a>

				<div id="indicator"></div>
			</nav>

		</div>


		<div class="round1">
			

		</div>


		<div class="round5 " style="height:<?php echo $total2*13 + 18;?>%;">
			
			<form  action="../questionRotation.php" method="POST">



				<img class="imgg" src="../images/profile.png">
				<p class="tt">

					<br>    </p>

					<div class="mlk">

					</div>

					<div class="bigLine d-flex justify-content-center"><p class="text-center" style="font-size:3em">
						
						<?php include '../DBconnect.php'; 

							$result = mysqli_query($conn,"select count(1) FROM chef");
							
							$result2 = mysqli_query($conn,"select CHEF_ID,CHEF_NAME,salary,since,ref_ID FROM chef ORDER BY since ASC");

							$roww = mysqli_fetch_array($result);

							$total = $roww[0];

							$cont = 0;

							while($total > $cont and $row22 = mysqli_fetch_array($result2)){

							?>

						</p>
						<p style="margin-left:-4%;margin-top:-5.5%;font-weight:bold">CHEF_ID</p>
						<p style="margin-left:15%;margin-top:-5.5%;font-weight:bold">NAME</p>
						<p style="margin-left:10%;margin-top:-5.5%;font-weight:bold">SALARY</p>
						<p style="margin-left:10%;margin-top:-5.5%;font-weight:bold">SINCE</p>
						<p style="margin-left:10%;margin-top:-5.5%;font-weight:bold">REFECTORY ID</p>
					</div>
					<hr style="color:black;padding-top: 0.2%;margin-top: -4%;width: 90%;margin-left: 5%;">
					<div class="d-flex flex-row" style="margin-top: -1%;color: white;">

						<p style="margin-left:14.2%"><?php echo $row22['CHEF_ID']; ?></p>
						<p style="margin-left:14.6%"><?php echo $row22['CHEF_NAME'];  ?></p>
						<p style="margin-left:10%"><?php echo $row22['salary'];  ?></p>
						<p style="margin-left:10.5%;color: blue;font-weight: bold"><?php echo $row22['since'];  ?></p>
						<p style="margin-left:11.8%"><?php echo $row22['ref_ID'];  ?></p>
					</div>

					<p style="margin-left:44.8%;color: whitesmoke;font-weight: bold;font-size: 2em;margin-top: -21%"><?php echo $row22['CHEF_NAME'];  ?></p>
					<?php

						break;
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

<?php     session_start();        ?>


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
		background-color: #7D96B0;
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

	.header{
		opacity: 1;
		margin-left: 5%;
		margin-top: 0.5%;
		

	}
	.round1{

		margin-left: -100%;
		margin-top: 10%;
		width: 95%;
		
		z-index: 1;
		
		opacity: 0.7;

	}
	.round2{

		
		
		width: 25%;
		
		z-index: 1;
		
		opacity: 0.7;

	}
	.round3{

		
		
		width: 50%;
		margin-left: 28%;
		z-index: 1;
		
		opacity: 0.7;

	}
	.btnn{

		padding-top: 120%;

		width: 100%;
		height: 25%;
		border-radius: 30px;
		background-color: #404040;



	}
	.btnn1{

		padding-top: 120%;

		width: 100%;
		height: 25%;
		
		background-color: black;

	}
	.btnn2{

		padding-top: 120%;

		width: 100%;
		height: 25%;
		
		background-color: black;


	}
	.btnn3{

		padding-top: 120%;

		width: 100%;
		height: 25%;
		
		


	}
	.tryy{
		margin-top: 25%;
		z-index: 1;
	}

	.pdd{

		padding-top: 18%;
	}
	.pdd1{

		padding-top: 1%;

	}
	.pdd2{

		padding-top: 1%;
	}
	.imagesss{
		border-radius: 30px;
		margin-top: -170%;
	}
	.nameee{
		margin-top: -35%;

		font-family: "fantasy;";
		font-weight: bolder;
		font-style: italic;
	}
	.adminNAME{
		width: 25%;
		border-width: 20px;
		margin-top: 0.5%;
		margin-left: 2%;
		border-radius: 5px;
		border-color: red;
		opacity: 1;
		

	}
	.adminNAME1{
		width: 50%;
		border-width: 20px;
		margin-top: 0.5%;
		margin-left: 2%;
		border-radius: 5px;
		border-color: red;
		
		opacity: 1;
		border-width:1px;
border: 2px
	}
	.adminIMG{

		width: 13%;
	}
	.nameA{
		font-size: 120%;
		
		color: black;

	}
	.logo{
		width: 4.2%;
		border-radius: 25%;
		margin-top: 0.2%;
		margin-left: 10%;
	}

</style>

</head>

<body>

	<div class="section">

		<div class="round">

			<div class="d-flex flex-row  ">
				<div class="adminNAME d-flex flex-row">
					<img class="adminIMG"  src="../images/admin.png"   >
					

				</div>
				<p class="nameA" ><?php echo $_SESSION['adminNAME']?></p>
				<img class="logo"  src="../images/rrsms1.png"   >
				<h2 class="header"  >RRSMS</h2></div>
				<nav>

					<a href="./MyAccountAdminScreen.php">My Account</a>
					<a href="./MyReservationScreen.php">User Stats</a>
					<a href="../LogOut.php">Log Out</a>

					<div id="indicator"></div>
				</nav>

			</div>

			<div class="round1">

			

				<form action="../buttonV.php" method="POST">

					
					<?php 

						 //selectedin numarasina gore ogerenebilirsin ref id yi
					include '../DBconnect.php';

					$result = mysqli_query($conn,"select count(1) FROM refectory");
					$result1 = mysqli_query($conn,"select NAME,REF_ID,ADDRESS FROM refectory");

					$row = mysqli_fetch_array($result);

					$total = $row[0];

					$count = 0;

					while ($count < $total) {
						?>
						<br>

						<div class="d-flex flex-row" >
							<?php
							while($row1 = mysqli_fetch_array($result1)){


								?>

								<button class="btnn btn btn-danger ms-5 pdd text-warning" type="submit" NAME="SELECTED<?php echo $count; ?>" ><img class="img-fluid w-100 imagesss" src="../images/<?php echo $count+1;  ?>.png"> <br> <h5 class="nameee"><?php echo $row1['NAME']?> </h5> <br> <h5 class="ADR"><?php echo "(".$row1['ADDRESS'].")"?> </h5> </button>

								<?php 
								if($count % 5 == 4){
									echo "<br>";
									$count++;
									break;
								}
								$count++;

							}

							?>
						</div>
						<?php

					}

					?>


					



					<br>
					<br>

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

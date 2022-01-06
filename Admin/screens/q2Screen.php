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
		margin-top: 5%;
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

	
	
	.bigLine1{

		color: whitesmoke;
		width: 30%;
		padding-top: 2%;
		margin-top: 5%;
		
		margin-left: 5%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}
	.bigLine2{
		color: whitesmoke;
		width: 30%;
		padding-top: 2%;
		margin-top: 3%;
		
		margin-left: 5%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine3{
		color: whitesmoke;
		width: 30%;
		padding-top: 2%;
		margin-top: 3%;
		
		margin-left: 5%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine4{
		color: whitesmoke;
		width: 30%;
		padding-top: 2%;
		margin-top: 3%;
		margin-left: 5%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}
	.bigLine5{
		color: whitesmoke;
		width: 30%;
		padding-top: -1%;
		margin-top: 3%;
		margin-left: 5%;

		background-color: whitesmoke;
	}





	.tt{
		margin-left: 74%;
		margin-top: 15%;
		font-weight: bold;
		color: whitesmoke;
		font-size: 2em;

	}


	.mlk{
		margin-left: 45%;
		margin-top: 170%;
		padding-top: 10%;
		width: 12%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}

	.mlk1{
		margin-left: 2%;
		margin-top: 15%;
		padding-top: 10%;
		width: 12%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}

	.mlk2{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 10%;
		width: 12%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk3{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 10%;
		width: 12%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}

	.months{

		color: whitesmoke;
		font-weight: bolder;

	}

	.circleLine{
		color: black;
		padding-top: 0.2%;
		opacity: 1;
		width: 8%;
		margin-left: 36%;
		margin-top: -21%;
		border-radius: 10px;
	}

	.circleLine1{
		color: black;
		padding-top: 0.2%;
		opacity: 1;
		width: 15%;
		margin-left: 36%;
		margin-top: 6%;
		border-radius: 10px;
	}

	.circleLine2{
		color: black;
		padding-top: 0.25%;
		opacity: 1;
		width: 25%;
		margin-left: 36%;
		margin-top: 6%;
		border-radius: 10px;
	}

	.circleLine3{
		color: black;
		padding-top: 0.25%;
		opacity: 1;
		width: 35%;
		margin-left: 36%;
		margin-top: 6.5%;
		border-radius: 10px;
	}

	.circleLine4{
		transform: rotate(-40deg);
		margin-top: -23.3%;
		margin-left: 43%;
		color: black;
		padding-top: 0.2%;
		opacity: 1;
		width: 8%;
		border-radius: 10px;
	}

	.circleLine5{
		transform: rotate(-43deg);
		color: black;
		margin-left: 48.5%;
		padding-top: 0.2%;
		opacity: 1;
		width: 17%;
		border-radius: 10px;
		margin-top: 2.9%;
	}

	.circleLine6{
		transform: rotate(-45deg);
		
		margin-left: 57.6%;
		color: black;
		padding-top: 0.2%;
		opacity: 1;
		width: 24%;
		border-radius: 10px;
		margin-top: 3.1%;
	}

	.circleLine7{
		transform: rotate(-47deg);
		margin-top: 2.9%;
		margin-left: 66%;
		color: black;
		padding-top: 0.2%;
		opacity: 1;
		width: 33%;
		border-radius: 10px;
	}

	.circleLine8{
		color: black;
		padding-top: 2%;
		opacity: 1;
		width: 2%;
		border-radius: 20px;
		margin-top: -9.5%;
		margin-left: 43%;
	}

	.circleLine9{
		color: black;
		padding-top: 2%;
		opacity: 1;
		width: 2%;
		border-radius: 20px;
		margin-top: 4.3%;
		margin-left: 49.5%;
	}

	.circleLine10{
		color: black;
		padding-top: 2%;
		opacity: 1;
		width: 2%;
		border-radius: 20px;
		margin-top: 4.3%;
		margin-left: 59.6%;
	}

	.circleLine11{
		color: black;
		padding-top: 2%;
		opacity: 1;
		width: 2%;
		border-radius: 20px;
		margin-top: 4.5%;
		margin-left: 70%;
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


		<div class="round5 " style="height:550%;">
			
			<div class="d-flex flex-row circles">
				<div style="margin-top:3%" class="mlk"></div>
				<div style="margin-top:3%" class="mlk1"></div>
				<div style="margin-top:3%" class="mlk2"></div>
				<div style="margin-top:3%"  class="mlk3"></div>
				

				
			</div>
			<div class="bigLine1 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<div class="bigLine2 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<div class="bigLine3 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<div class="bigLine4 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<hr class="circleLine">
			<hr class="circleLine1">
			<hr class="circleLine2">
			<hr class="circleLine3">
			<hr class="circleLine4">
			<hr class="circleLine5">
			<hr class="circleLine6">
			<hr class="circleLine7">
			<hr class="circleLine8">
			<hr class="circleLine9">
			<hr class="circleLine10">
			<hr class="circleLine11">


			<div class="d-flex flex-row">
				<h4 class="months" style="margin-top:-34.5%;margin-left:47.3%" >YEARLY</h4>
				<h4 class="months" style="margin-top: -34.5%;margin-left:5.1%">MONTHLY</h4>
				<h4 class="months" style="margin-top: -34.5%;margin-left:5%">WEEKLY</h4>
				<h4 class="months" style="margin-top: -34.5%;margin-left:6.8%">DAILY</h4>

			</div>
			<div class="bigLine13 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>
			<div class="bigLine14 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<div class="bigLine15 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<div class="bigLine16 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>

			<div class="bigLine17 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


			</div>
			<?php 
			include '../DBconnect.php'; 

			$result = mysqli_query($conn, 'SELECT SUM(Bill) AS Bill FROM payment'); 
			$row = mysqli_fetch_assoc($result); 
			$sum = $row['Bill'];


			$sum1 = $sum;
			?>

			<p style="color:whitesmoke;font-weight:bold;margin-top: -29.6%;margin-left: 7%;" >The Average Revenue:    <?php
			$str =	strrev ( $sum);
			$len = strlen($sum);
			if($len > 3){
				$strr="";
				for ($i=0; $i < $len; $i++) {


					$strr .= $str[$i];
					if($i % 3 == 2) {
						$strr .= ".";
					}
				}
				$sttr = strrev ( $strr);

if ($sttr[0]==".") {
	$mn = "";

for ($i=1; $i < strlen($sttr); $i++) { 
	$mn .= $sttr[$i];
}

	echo $mn;
	// code...
}else{
	
echo $sttr;

}

			


			}else

			echo strrev ( $sum);  ?> TL</p>
			<p style="color:whitesmoke;font-weight:bold;margin-top: 4.2%;margin-left: 7%;">The Average Revenue: 
				<?php
				$str =	strrev ( intval($sum/12));
				$len = strlen(intval($sum/12));
				if($len > 3){
					$strr="";
					for ($i=0; $i < $len; $i++) {


						$strr .= $str[$i];
						if($i % 3 == 2) {
							$strr .= ".";
						}
					}

					echo strrev ( $strr);

				}else

				echo strrev ( $sum);  ?>


			TL</p>
			<p style="color:whitesmoke;font-weight:bold;margin-top: 4.3%;margin-left: 7%;">The Average Revenue: <?php
			$str =	strrev(intval($sum/48));
			$len = strlen(intval($sum/48));
			if($len > 3){
				$strr="";
				for ($i=0; $i < $len; $i++) {


					$strr .= $str[$i];
					if($i % 3 == 2) {
						$strr .= ".";
					}
				}

				echo strrev ( $strr);

			}else

			echo strrev ( $sum);  ?> TL</p>
			<p style="color:whitesmoke;font-weight:bold;margin-top: 4.3%;margin-left: 7%;">The Average Revenue:  <?php
			$str =	strrev( intval($sum/365));
			$len = strlen(intval($sum/365));
			if($len > 3){
				$strr="";
				for ($i=0; $i < $len; $i++) {


					$strr .= $str[$i];
					if($i % 3 == 2) {
						$strr .= ".";
					}
				}

				echo strrev($strr);

			}else

			echo intval($sum/365);  ?> TL</p>




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

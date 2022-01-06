
<?php

	
	include '../DBconnect.php'; 
	$DAYNAMES=[];
	$times=[];
	$DAYS=[];

	for ($l=1; $l < 13; $l++) { 
		$YEAR = '2020';
		$month = $l;
		$day = '';

		$result3 = mysqli_query($conn,"select count(1) FROM reservation");
		$result4 = mysqli_query($conn,"select RES_ID,RES_DATE FROM reservation");
		$row2 = mysqli_fetch_array($result3);

		$total2 = $row2[0];
		$countt = 0;
		$ctt = 0;
		$z = [];
		while($countt < $total2 and $row3 = mysqli_fetch_array($result4)){

			$date = $row3['RES_DATE'];


			$YEAR1 = $date[0] ."".$date[1]."".$date[2]."".$date[3];
			$month1 = $date[5] ."".$date[6];
			$day1 = $date[8] ."".$date[9];

			if($YEAR == $YEAR1 and $month == $month1 ){

				array_push($z,$day1);

				$ctt++;

			}



			$countt++;

		}
		$t =$z;
		$newArray = array_unique($z);
		$size = count($newArray);
		$countarray =[];
		$cmt = 0;
		for ($i=0; $i <$size ; $i++) { 
			for ($j=0; $j < count($t) ; $j++) { 
				if (!empty($newArray[$i])) {

					if ($newArray[$i] == $t[$j]) {
						$cmt++;
						// code...
					}
					// code...
				}

			}

			array_push($countarray,$cmt);
			$cmt = 0;
		}

		$max = max($countarray);
		$maxKey = array_search($max, $countarray);
		$timestamp = strtotime('2020-'. $l. '-'.$newArray[$maxKey]);

		$day = date('D', $timestamp);
		array_push($DAYNAMES,$day);
		array_push($times,$max);
		array_push($DAYS,$newArray[$maxKey]);


	}
	/* --------------------*/

	
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

	
	
	.bigLine1{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: -267%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}
	.bigLine2{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine3{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 15%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine4{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14.6%;
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine5{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14.6%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine6{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14.6%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine7{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14.6%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine8{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14.6%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine9{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14.6%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine10{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 15%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine11{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 15%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}

	.bigLine12{
		color: whitesmoke;
		width: 60%;
		padding-top: 7%;
		margin-top: 14%;
		
		margin-left: 28%;

		background: linear-gradient(130deg, #009FFF, #ec2F4B);
	}
	.bigLine13{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: -259.25%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine14{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 20.8%;
		
		margin-left: 80%;

		background-color: black;
	}
	.bigLine15{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.76%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine16{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		
		margin-top: 21.45%;
		margin-left: 80%;

		background-color: black;
	}

	.bigLine17{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.38%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine18{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.38%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine19{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.40%;
		
		margin-left: 80%;

		background-color: black;
	}
	.bigLine20{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.40%;
		
		margin-left: 80%;

		background-color: black;
	}
	.bigLine21{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.40%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine22{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.8%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine23{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 21.8%;
		
		margin-left: 80%;

		background-color: black;
	}

	.bigLine24{
		color: whitesmoke;
		width: 8%;
		padding-top: 0.2%;
		margin-top: 20.8%;
		
		margin-left: 80%;

		background-color: black;
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

	.mlk{
		margin-left: 2%;
		margin-top: 170%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}

	.mlk1{
		margin-left: 2%;
		margin-top: 15%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}

	.mlk2{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk3{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk4{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk5{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk6{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk7{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk8{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk9{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk10{
		margin-left: 2%;
		margin-top: -46%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}
	.mlk11{
		margin-left: 2%;
		margin-top: 500%;
		padding-top: 20%;
		width: 22%;
		border-radius: 50%;
		background: linear-gradient(130deg, #009FFF, #ec2F4B);
		z-index: -1;
	}

	.months{

		color: whitesmoke;
		font-weight: bolder;

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
			
			<div>
				<div style="margin-top:3%" class="mlk"></div>

				<div style="margin-top:3%" class="mlk1"></div>
				<div style="margin-top:3%" class="mlk2"></div>
				<div style="margin-top:3%"  class="mlk3"></div>
				<div style="margin-top:3%"  class="mlk4"></div>
				<div style="margin-top:3%"  class="mlk5"></div>
				<div style="margin-top:3%"  class="mlk6"></div>
				<div style="margin-top:3%"  class="mlk7"></div>
				<div style="margin-top:3%"  class="mlk8"></div>
				<div style="margin-top:3%"  class="mlk9"></div>
				<div style="margin-top:3%"  class="mlk10"></div>
				<div style="margin-top:3%"  class="mlk11"></div>
				<div class="mlk12"></div>
			<!--<div class="bigLine d-flex justify-content-center"><p class="text-center" style="font-size:3em"></div>
			<div class="mlk1"></div>
			<div class="mlk2"></div>
			<div class="mlk3"></div>
			<div class="mlk4"></div>
			<div class="mlk5"></div>
			<div class="mlk6"></div>
			<div class="mlk7"></div>
			<div class="mlk8"></div>
			<div class="mlk9"></div>
			<div class="mlk10"></div>
			<div class="mlk11"></div>
			



				<p style = "font-size: 3em;margin-left: 44.3%;color:whitesmoke;margin-top: 3%;">2020</p>
				<p style = "font-size: 3em;margin-left: 43.4%;color: whitesmoke;">-JUN-</p>
				<p class="tt">

					<br>    </p>-->

					

					

					


				</div>
				<div class="bigLine1 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine2 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine3 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine4 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine5 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine6 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine7 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine8 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine9 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine10 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine11 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine12 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>



				<h2 class="months" style="margin-top:-259%;margin-left:6.5%" >JANUARY</h2>
				<h2 class="months" style="margin-top: 20%;margin-left:5.8%">FEBRUARY</h2>
				<h2 class="months" style="margin-top: 19%;margin-left:8%">MARCH</h2>
				<h2 class="months" style="margin-top: 20%;margin-left:9%">APRIL</h2>
				<h2 class="months" style="margin-top: 20%;margin-left:10%">MAY</h2>
				<h2 class="months" style="margin-top: 19%;margin-left:10%">JUN</h2>
				<h2 class="months" style="margin-top: 20%;margin-left:10%">JULY</h2>
				<h2 class="months" style="margin-top: 19%;margin-left:7.5%">AUGUST</h2>
				<h2  class="months"style="margin-top: 20%;margin-left:5.5%">SEPTEMBER</h2>
				<h2  class="months"style="margin-top: 20%;margin-left:6.5%">OCTOBER</h2>
				<h2 class="months" style="margin-top: 19%;margin-left:6%">NOVEMBER</h2>
				<h2 class="months"style="margin-top: 20%;margin-left:5.8%" >DECEMBER</h2>

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

				<div class="bigLine18 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine19 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine20 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine21 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>

				<div class="bigLine22 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine23 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				<div class="bigLine24 d-flex justify-content-center"><p class="text-center" style="font-size:3em">


				</div>
				

				<!--                 -->
				<h5 class="months" style="margin-top:-255.1%;margin-left:82%;color: skyblue;" >2020</h5>
				<h5 class="months" style="margin-top: 20.3%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 21.2%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 21.1%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 20.8%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 20.8%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 20.9%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 20.8%;margin-left:82%;color: skyblue;">2020</h5>
				<h5  class="months"style="margin-top: 20.9%;margin-left:82%;color: skyblue;">2020</h5>
				<h5  class="months"style="margin-top: 21.3%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months" style="margin-top: 21.5%;margin-left:82%;color: skyblue;">2020</h5>
				<h5 class="months"style="margin-top: 20.2%;margin-left:82%;color: skyblue;" >2020</h5>

				<!--********************************************************************************--> 

				<h2 class="months"style="margin-top:-253.1%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
					$DAYS[0]; ?>  -  <?php echo $DAYNAMES[0]; ?> - <?php echo 
						$times[0]; ?> TIMES</h2>
						<h2 class="months"style="margin-top: 19%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
							$DAYS[1]; ?>  -  <?php echo $DAYNAMES[1]; ?> - <?php echo 
								$times[1]; ?> TIMES</h2>
								<h2 class="months"style="margin-top: 20.2%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
									$DAYS[2]; ?>  -  <?php echo $DAYNAMES[2]; ?> - <?php echo 
										$times[2]; ?> TIMES</h2>
										<h2 class="months"style="margin-top: 20%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
											$DAYS[3]; ?>  -  <?php echo $DAYNAMES[3]; ?> - <?php echo 
												$times[3]; ?> TIMES</h2>
												<h2 class="months"style="margin-top: 19.6%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
													$DAYS[4]; ?>  -  <?php echo $DAYNAMES[4]; ?> - <?php echo 
														$times[4]; ?> TIMES</h2>
														<h2 class="months"style="margin-top: 19.6%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
															$DAYS[5]; ?>  -  <?php echo $DAYNAMES[5]; ?> - <?php echo 
																$times[5]; ?> TIMES</h2>
																<h2 class="months"style="margin-top: 19.6%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
																	$DAYS[6]; ?>  -  <?php echo $DAYNAMES[6]; ?> - <?php echo 
																		$times[6]; ?> TIMES</h2>
																		<h2 class="months"style="margin-top: 19.6%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
																			$DAYS[7]; ?>  -  <?php echo $DAYNAMES[7]; ?> - <?php echo 
																				$times[7]; ?> TIMES</h2>
																				<h2 class="months"style="margin-top: 19.6%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
																					$DAYS[8]; ?>  -  <?php echo $DAYNAMES[8]; ?> - <?php echo 
																						$times[8]; ?> TIMES</h2>
																						<h2 class="months"style="margin-top: 20%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
																							$DAYS[9]; ?>  -  <?php echo $DAYNAMES[9]; ?> - <?php echo 
																								$times[9]; ?> TIMES</h2>
																								<h2 class="months"style="margin-top: 20%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
																									$DAYS[10]; ?>  -  <?php echo $DAYNAMES[10]; ?> - <?php echo 
																										$times[10]; ?> TIMES</h2>
																										<h2 class="months"style="margin-top: 19.6%;margin-left:33%;color: BLACK;" >DAY  <?php echo 
																											$DAYS[11]; ?>  -  <?php echo $DAYNAMES[11]; ?> - <?php echo 
																												$times[11]; ?> TIMES</h2>
																												<!--********************************************************************************-->

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

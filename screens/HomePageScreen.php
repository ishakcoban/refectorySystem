<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="sign in or register" />
	<meta name="keywords" content="sign in" />
	<meta name="author" content="İshak Çoban" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<title>HOME Page</title>
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

		width: 100%;
		margin-left:30%;
		margin-top: 12%;

	}
	.in{
		border-color:white;
		justify-content: center;
	}
	.inputs{
		
		width: 50%;
		opacity: 1;
		
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

		overflow: visible;
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
		margin-top: 8%;
		width: 90%;
		height: 80%;
		z-index: 1;
		
		border-radius: 5%;
		opacity: 0.7;

	}
	.tryy{
		margin-top: 25%;
		z-index: 1;
	}


		.btnn12{
			padding-top: 2%;
			width: 30%;

			
			background-color: #404040;
		}

		.pat11{
			width: 30%;
			height: 10%;
			opacity: 1;
			margin-left: 33.6%;
		}

		
			.pat22{
			width: 30%;
			height: 10%;
			opacity: 1;
			margin-left: 33.6%;
		
		}

		.ADR{
			font-weight: bold;
			font-family: sans-serif;
		}
</style>

</head>

<body>

	<div class="section">

		<div class="round">

			<div class="d-flex flex-row  ">
				<form class="d-flex flex-row" action="./newsScreen.php" method="POST">

					<!--	<button style="background-color:green;color:white" class="btnn btn" type="submit" name="insert">NEWS</button>-->
					<!--	<button style="background-color:#0275d8;color:white" class="btnn btn" type="submit" name="insert">HOME</button>-->


				</form>
				</div>
				<nav>

					<a href="./MyAccountScreen.php">My Account</a>
					<a href="./MyReservationScreen.php">My Reservations</a>
					<a href="../LogOut.php">Log Out</a>

					<div id="indicator"></div>
				</nav>

			</div>

			<div class="round1">
				<form action="../choosethreeoption.php" method="POST">
					<img class="pat11" src="../images/pat11.png">
					<div class="d-flex flex-row inputs text-center ">
					
					<button class="btnn12 btn btn-danger ms-5 pdd text-warning mb-4 " type="submit" NAME="SELECTEDREF" ><img class="img-fluid w-100 imagesss" src="../images/ref.jpg"> <br> <br><br> <p class="ADR">View Our Refectories</p> </button>
					<button class="btnn12 btn btn-success ms-5 pdd text-warning mb-4 " type="submit" NAME="SELECTEDMEAL" ><img class="img-fluid w-100 imagesss" src="../images/meal.jpg"> <br>  <br><br> <p class="ADR">View Refectory Meal</p> </button>
					<button class="btnn12 btn btn-primary ms-5 pdd text-warning mb-4 " type="submit" NAME="SELECTEDRES" ><img class="img-fluid w-100 imagesss" src="../images/ress.png"> <br>  <br><br> <p class="ADR">Books A Reservation</p> </button>
					

				</div>
<img class="pat22" src="../images/pat22.png">
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

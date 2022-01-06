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

	.btnn{

		
		width: 45%;
		text-align: "center;";


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
		margin-left: 22%;
		margin-top: 4%;
		width: 55%;
		height: 85%;
		background-color: #7D96B0;
		opacity: 0.7;
		z-index: 1;
		border-radius: 10%;
	}
	.section {
		position: relative;
		width: 100%;
		height: 100vh;
		display: flex;

		overflow: hidden;
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

color: black;

	}
	.descp{
font-size: 90%;

color: black;

	}
</style>

</head>

<body>

	<div class="section">

		<div class="round" method="POST">

			<form  action="./AdminHomePageScreen.php" method="POST">

				<div class="d-flex flex-column inputs text-center ">
					<img src="../images/circle.png">
					<p class="yourid text-dark" ><?php session_start(); echo $_SESSION['Adminid'];  ?> </p>
					<p class="cong" >Congratulations!</p>
					<p class="sign" >You have been signed up.</p>
					<p class="descp" >The thing shown above is your <b>ID</b> to sign in on our system.<br>Don't forget to your <b>ID</b>.<br> Also, you can access this on <b>My Account</b> bar. </p>

					<button class="btnn btn btn-primary " type="submit" name="inserthome">Go to <b>HOME</b> page!</button>

				</div>
				<?php if (isset($_GET['error'])) { ?>
					<img src="./images/wrong.png">
					<div class="d-flex flex-row">	<p class="error tyy" ><?php echo $_GET['error']; ?> </p>
						<a class="ms-4 mt-2" href="RegistrationScreen.php">Create Account!</a></div>
					<?php } ?>

				</form>

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

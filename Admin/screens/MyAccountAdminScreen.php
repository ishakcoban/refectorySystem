<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="sign in or register" />
	<meta name="keywords" content="sign in" />
	<meta name="author" content="İshak Çoban" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<title>My Account</title>
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
		margin-top: 8%;
		width: 20%;
		height: 35%;
		z-index: 1;
		background-color: black;
		border-radius: 50%;
		opacity: 0.7;

	}

	.round5{

		margin-left: -35%;
		margin-top: 30%;
		width: 50%;
		height: 16%;
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
		
		color: skyblue;
		margin-left: 3%;



	}

	.infos1{

		
		width: 20%;
margin-left: 15.4%;
		color: skyblue;
		
		




	}

	.infos2{

		margin-left: 10.5%;
		width: 20%;
		
		color: skyblue;




	}
	

</style>

</head>

<body>

	<div class="section">

		<div class="round">
<form  class="d-flex flex-row" action="./AdminHomePageScreen.php" method="POST">
				<button style="margin-left:5%;background-color:green;color: white;" class=" btn  bttt mt-2" type="submit" name="homr" >Go to <b>HOME</b> Page</button>
				 
				</form>
			<div class="d-flex flex-row  ">
				
				<h2 class="ttt "  ></h2></div>
				<nav>

					<a href="./MyAccountAdminScreen.php">My Account</a>
					<a href="./StatsScreen.php">User Stats</a>
					<a href="../AdminLogOut.php">Log Out</a>

					<div id="indicator"></div>
				</nav>

			</div>
			<?php include '../DBconnect.php';

			$mm = $_SESSION['Adminid'];

			$result1 = mysqli_query($conn,"select Admin_ID, Admin_NAME FROM Admin WHERE Admin_ID =$mm ");

			
			$row1 = mysqli_fetch_array($result1);

			?>

			<div class="round1">
				
				<div class="d-flex flex-column inputs text-center ">
					<img class="ima" src="../images/Admin.png">
					<p class="sign" >Hello <?php echo $row1['Admin_NAME'];?></p>



				</div>


				

			</div>

			<div class="round5">
				<form action="./AdminUpdateScreen.php" method="POST">
					<div class="d-flex flex-row fw-bold"><p style="color: skyblue;margin-left: 12%;" >ID</p>
						<p style="color: skyblue;margin-left: 30%;" >NAME</p>
						
						
						<p style="color: skyblue;margin-left: 20%;" >PASSWORD</p></div>




						<hr style="margin-top: -1% ;" class="line11" >


						<div class="d-flex flex-row">
							<div class="infos"><p class="text-center "><?php echo $row1['Admin_ID'];?></p></div>
							<div class="infos1"><p class="text-center "><?php echo $row1['Admin_NAME'];?></p></div>

							<div class="infos2"><p class="text-center ">*********</p></div>

						</div>


						

						


						<button style="margin-left:45%;margin-top: 5%;" class=" btn btn-danger bttt " type="submit" name="btt" >Update</button>
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

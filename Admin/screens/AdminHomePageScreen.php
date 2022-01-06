<?php     
include '../DBconnect.php';

  $result = mysqli_query($conn,"select count(1) FROM customer");
    $result1 = mysqli_query($conn,"select C_ID FROM customer");
    $row1 = mysqli_fetch_array($result);

    $total = $row1[0];

    /* */

    $result3 = mysqli_query($conn,"select count(1) FROM reservation");
    $result4 = mysqli_query($conn,"select RES_ID FROM reservation");
    $row2 = mysqli_fetch_array($result3);

    $total2 = $row2[0];
 /* */

    $result5 = mysqli_query($conn,"select count(1) FROM CHEF");
    $result6 = mysqli_query($conn,"select CHEF_ID FROM CHEF");
    $row3 = mysqli_fetch_array($result5);

    $total3 = $row3[0];
 /* */

    $result7 = mysqli_query($conn,"select count(1) FROM MEAL");
    $result8 = mysqli_query($conn,"select MEAL_ID FROM MEAL");
    $row4 = mysqli_fetch_array($result7);

    $total4 = $row4[0];

     /* */

    $result9 = mysqli_query($conn,"select count(1) FROM REFECTORY");
    $result10 = mysqli_query($conn,"select REF_ID FROM REFECTORY");
    $row5 = mysqli_fetch_array($result9);

    $total5 = $row5[0];

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
	<title>Home</title>
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
	.name1{

		font-family: "fantasy;";
		font-weight: bolder;
		font-style: italic;
	}

	.s12{

		

		width: 50%;
		z-index: 1;
	}
	.circled{
		width: 6%;
		padding-top: 1%;
		
		border-radius: 50%;
		background-color: #0275d8;
		color: white;

	}
	.heg{
		height: 55%;
	}

</style>

</head>

<body>

	<div class="section">

		<div class="round">


			<nav>

				<a href="./MyAccountAdminScreen.php">My Account</a>
				<a href="./StatsScreen.php">User Stats</a>
				<a href="../AdminLogOut.php">Log Out</a>

				<div id="indicator"></div>
			</nav>

		</div>

		<div class="round1">

			

			<form  action="../HomeRotation.php" method="POST">



				<div class="d-flex flex-row" >


					<button class="btnn btn btn-primary ms-5 pdd text-light mt-3" type="submit" NAME="customers" ><img  class="img-fluid w-100 imagesss bg-light" src="../images/customer.png"> <br> <h5 class="nameee">All</h5> <br> <h5 class="name1">Customers</h5> </button>


					<button class="btnn btn btn-primary ms-5 pdd text-light mt-3" type="submit" NAME="reservations" ><img class="img-fluid w-100 imagesss bg-light" src="../images/reservation.png"> <br> <h5 class="nameee">All</h5> <br> <h5 class="name1">Reservations</h5> </button>

					<button class="btnn btn btn-primary ms-5 pdd text-light mt-3" type="submit" NAME="chefs" ><img class="img-fluid w-100 imagesss" src="../images/chef.png"> <br> <h5 class="nameee">All</h5> <br> <h5 class="name1">Chefs</h5> </button>

					<button class="btnn btn btn-primary ms-5 pdd text-light mt-3 " type="submit" NAME="meals" ><img class="img-fluid w-100 imagesss bg-light" src="../images/meal.png"> <br> <h5 class="nameee">All</h5> <br> <h5 class="name1">Meal</h5> </button>

					<button class="btnn btn btn-primary ms-5 pdd text-light mt-3" type="submit" NAME="refectories" ><img class="img-fluid w-100 imagesss" src="../images/refec.jpg"> <br> <h5 class="nameee">All</h5> <br> <h5 class="name1">Refectories</h5> </button>



				</div>
				<br><br>
				<div class="d-flex flex-row text-center heg " >

					<div class="circled" style="margin-left:9.2%;font-weight: bold;"><p><?php echo $total;?></p></div>

					<div class="circled" style="margin-left:14%;font-weight: bold;"><p><?php echo $total2;?></p></div>

					<div class="circled" style="margin-left:14.2%;font-weight: bold;"><p><?php echo $total3;?></p></div>

					<div class="circled" style="margin-left:14.2%;font-weight: bold;"><p><?php echo $total4;?></p></div>

					<div class="circled" style="margin-left:14.2%;font-weight: bold;"><p><?php echo $total5;?></p></div>


				</div>

				<hr style="color:#0275d8;padding-top: 0.2%;opacity: 1;margin-top: -2.4%;padding-right: 5%;width: 80%;margin-left: 15%;">

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

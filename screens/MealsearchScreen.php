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
	
	
	<title>Meal Screen</title>
	<style>

	

	
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
		margin-top: 0.7%;
		margin-left: 40%;

	}
	.round1{

		margin-left: -95%;
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

		margin-left: 40%;
		

		width: 20%;
		height: 25%;
		z-index: 1;
		

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

		margin-top: -170%;
	}
	.nameee{
		margin-top: -35%;

		font-family: "fantasy;";
		font-weight: bolder;
		font-style: italic;
	}
	.checked{

		opacity: 1;
		font-family: "Arial";
		font-weight: bolder;
		font-size: 130%;
		
		
	}



	.upgrade-btn {
		margin-left: 15%;

		display: block;
		margin: 30px auto;
		width: 200px;
		padding: 10px 20px;
		border: 2px solid #50bcf2;
		border-radius: 50px;
		color: #f5f5f5;
		font-size: 18px;
		font-weight: 600;
		text-decoration: none;
		transition: .3s ease;
	}

	.upgrade-btn:hover {
		background-color: #50bcf2;
	}

	.blue-color {
		color: #50bcf2;
	}

	.gray-color {
		color: #555;
	}

	.social i:before {
		width: 14px;
		height: 14px;
		position: fixed;
		color: #fff;
		background: #0077B5;
		padding: 10px;
		border-radius: 50%;
		top:5px;
		right:5px;
	}

	@keyframes slidein {
		from {
			margin-top: 100%;
			width: 300%;
		}

		to {
			margin: 0%;
			width: 100%;
		}
	}

	.parp{

		font-weight: bolder;
		font-family: cursive;
	}
	.fixed{
		background-color: black;
		position: fixed;
		margin-top: 32%;
		border-radius: 3%;

		width: 88%;
		opacity: 1;
		z-index: 1;


	}

	.imag{
		width: 30%;

	}
</style>

</head>

<body>

	<div class="section">

		<div class="round  ps-2">

			
			
				<div>

					<h2 class="ttt text">Choose Meal</h2></div>
					<nav >

						<a href="./MyAccountScreen.php">My Account</a>
						<a href="./MyReservationScreen.php">My Reservations</a>
						<a href="../LogOut.php">Log Out</a>

						<div id="indicator"></div>
					</nav>

				</div>

				<div class="round1" >

					<form  method="POST" action="./PurchaseScreen.php">

						<div class="fixed"><button class="btnn btn btn-primary " type="submit" name="controll">Continue!</button></div>

						<?php 
						include '../DBconnect.php';



						$result = mysqli_query($conn,"select count(1) FROM meal");
						$result1 = mysqli_query($conn,"select MEAL_ID,MEAL_NAME,MEAL_PRICE FROM meal");
						$row = mysqli_fetch_array($result);
						$total = $row[0];
						$count = 1;

						$countt=0;

						?>


						<?php
						$topUnit = 18.75;
						$top = 21.5;
					$left = 20;// 20 37 53.9 70.8 87.6
					$leftUnit = 17;
					while($countt <$total AND $row = mysqli_fetch_array($result1)){

						if ($count == 1) {
							$left = 20.3;

						}elseif ($count == 2) {
							$left = 37.2;

						}elseif ($count == 3) {
							$left = 54.1;

						}elseif ($count == 4) {
							$left = 71;
						}elseif ($count == 5) {
							$left = 87.9;
						} 

						$myfile = fopen( $countt.".css", "w") or die("Unable to open file!");
						$txt = "#check".$countt. " {position: absolute;right: 70vw;top: ".$top ."vw;z-index: 1;
						left: ".
						$left."vw ;}#check".$countt. " + .check".$countt . "{--i: \nvar(--check, 1);--j: calc(1 - var(--i));position: relative;width: \n10.25em;height: 10.25em;box-shadow: inset 0 0 0 4px #5ca8ff;color: \nblack;\n
							text-align: center;\n
							text-transform: capitalize;\n
							--rect: inset(calc(var(--i)*.5px));\n
							-webkit-clip-path: var(--rect);\n
							clip-path: var(--rect);\n
							mix-blend-mode: var(--check, screen);\n

							transition: 0.35s;\n
							}#check".$countt ."+ .check".$countt.":before, #check".$countt." + .check".$countt.":after {\n
								position: absolute;\n
								top: 0;\n
								bottom: 0;\n
								right: 0;\n
								left: 0;\n
								opacity: var(--i);\n
								background: #5ca8ff;\n
								transition: inherit;\n
								content: 'Selected';\n
								}\n
	#check".$countt." + .check".$countt.":after {\n
								left: 17.5%;\n
								background: linear-gradient(90deg, #000 50%, transparent 0) calc(var(--j)*100%)/ 200%;\n
								--poly: polygon(0 30%, 35% 60%, 100% 0, 100% 25%, 35% 85%, 0 55%);\n
								-webkit-clip-path: var(--poly);\n
								clip-path: var(--poly);\n
								transition: opacity 0.35s, background-position 0.7s 0.35s;\n
								}\n
	#check".$countt.":not(:checked) + .check".$countt ."{\n
								--i: 0;\n
								}\n
								";



								fwrite($myfile, $txt);
								fclose($myfile);



								$left += $leftUnit;


								?>
								<link rel="stylesheet" href="./<?php echo $countt;?>.css" />
								<?php ?>

								<input type="checkbox" name="ariza[]" value="<?php echo $row['MEAL_ID']?>" id="check<?php echo $countt;?>"/>

								<label class="check<?php echo $countt;?> ms-5 parp " for="check"><br><br><?php echo $row['MEAL_NAME']?><br><br><?php echo $row['MEAL_PRICE']." TL"?></label>

								<?php
								if ($count % 5 ==0 ) {
									$top = $top + $topUnit; 
									$left = 20;
									$count=0;
									?>
									<div style="margin-top: 6.35%;"></div>
									<?php 
								}
								$count++;
								$countt++;
							}

							?>








							
							
							<br>
							
						</form>




						<div class="round3">
							<div class="d-flex flex-row" >

							</div>
						</div>
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
		<?php




	?>
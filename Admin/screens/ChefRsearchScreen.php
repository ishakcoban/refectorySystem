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

</style>

</head>

<body>

	<div class="section">

		<div class="round">

			<form action="./ChefRsearchScreen.php" method="POST">
				
			</form>
			<nav>

				<a href="./MyAccountAdminScreen.php">My Account</a>
				<a href="./StatsScreen.php">User Stats</a>
				<a href="../AdminLogOut.php">Log Out</a>

				<div id="indicator"></div>
			</nav>

		</div>


		<div class="round1">
			<form action="../RefValidation.php" method="POST">








			</form>

		</div>

		<?php include '../DBconnect.php';
		if (isset($_POST['chefsearch'])) {

			$ent = strtolower(trim($_POST['chefsearch'])) ;
			
			$result = mysqli_query($conn,"select count(1) FROM chef");
			$row = mysqli_fetch_array($result);

			$total = $row[0];

			$result9 = mysqli_query($conn,"select CHEF_ID ,CHEF_NAME ,SALARY,SINCE,REF_ID FROM chef");

			$count = 0;

			$c1 = 0;
			$c2 = 0;
			$c3 = 0;
			$c4 = 0;
			$c5 = 0;
			while ($count < $total and $row1 = mysqli_fetch_array($result9)) {
				if ($ent == strtolower(trim($row1['CHEF_ID']) ) ) {
					$c1++;
				}elseif ($ent == strtolower(trim($row1['CHEF_NAME']) )) {
					$c2++;
				}elseif ($ent == strtolower(trim($row1['SALARY']) )) {
					$c3++;
				}elseif ($ent == strtolower(trim($row1['SINCE']) )) {
					$c4++;
				}elseif ($ent == strtolower(trim($row1['REF_ID']) )) {
					$c5++;
				}

				$count++;

			}
			?>

			<div class="round5" style="height:<?php if ($c1 != 0) {

				echo $c1*10 + 18;
			} 

			elseif ($c2 != 0) {
				echo $c2*10 + 18;
			}
			elseif ($c3 != 0) {
				echo $c3*10 + 18;
			}elseif ($c4 != 0) {
				echo $c4*10 + 18;
			}elseif ($c5 != 0) {
				echo $c5*10 + 18;
			}else{
				echo 18;
			}


		?>%;"><form  action="./ChefRegistrationScreen.php" method="POST">
			<p style="color:black;background-color: skyblue;">Total Value: <?php if ($c1 != 0) {

				echo $c1;
			} 

			elseif ($c2 != 0) {
				echo $c2;
			}
			elseif ($c3 != 0) {
				echo $c3;
			}elseif ($c4 != 0) {
				echo $c4;
			}elseif ($c5 != 0) {
				echo $c5;
			}else{
				echo 0;
			};?></p>
		</form>
		<form  action="../ChefUDSA.php" method="POST">
			<div class="d-flex flex-row "><p style="color: skyblue; margin-left: 7.5%;" ><b>CHEF ID</b></p>
				<p style="color: skyblue; margin-left:15.2%" ><b>NAME</b></p>
				<p style="color: skyblue; margin-left:14%" ><b>REFECTORY</b></p>
				<p style="color: skyblue; margin-left:14.2%" ><b>SINCE</b></p>
				<p style="color: skyblue; margin-left: 15.2%" ><b>SALARY</b></p>

			</div>


			<hr style="margin-top: -1% ;" class="line11" >

			<?php include '../DBconnect.php';

			$result = mysqli_query($conn,"select count(1) FROM chef");
			$row = mysqli_fetch_array($result);

			$total = $row[0];
			$ctn = 0;
			$result9 = mysqli_query($conn,"select chef.CHEF_ID ,chef.CHEF_NAME ,REFECTORY.NAME,chef.SINCE,chef.SALARY FROM chef INNER JOIN REFECTORY on chef.REF_ID =REFECTORY.REF_ID ORDER BY RAND()");


$count= 0 ;

			while ($count < $total and $rowchef = mysqli_fetch_array($result9)){

				if ($ent == strtolower(trim($rowchef['CHEF_ID'])) ) {
					$ctn++;


					?>

					<div class="d-flex flex-row">
						<div class="infos"><p  class="text-center "><?php echo $rowchef['CHEF_ID'];?></p></div>
						<div class="infos1"><p class="text-center "><?php echo $rowchef['CHEF_NAME'];?></p></div>
						<div class="infos2"><p class="text-center "><?php echo $rowchef['NAME']; ?></p></div>
						<div class="infos3"><p class="text-center "><?php echo $rowchef['SINCE'];?></p></div>
						<div class="infos4"><p class="text-center "><?php echo $rowchef['SALARY']; ?> TL</p></div>




					</div>

					<?php
				}elseif($ent == strtolower(trim($rowchef['CHEF_NAME'])) ) {
					$ctn++;


					?>

					<div class="d-flex flex-row">
						<div class="infos"><p  class="text-center "><?php echo $rowchef['CHEF_ID'];?></p></div>
						<div class="infos1"><p class="text-center "><?php echo $rowchef['CHEF_NAME'];?></p></div>
						<div class="infos2"><p class="text-center "><?php echo $rowchef['NAME']; ?></p></div>
						<div class="infos3"><p class="text-center "><?php echo $rowchef['SINCE'];?></p></div>
						<div class="infos4"><p class="text-center "><?php echo $rowchef['SALARY']; ?> TL</p></div>




					</div>

					<?php
				}elseif ($ent == strtolower(trim($rowchef['SALARY'])) ) {
					$ctn++;


					?>

					<div class="d-flex flex-row">
						<div class="infos"><p  class="text-center "><?php echo $rowchef['CHEF_ID'];?></p></div>
						<div class="infos1"><p class="text-center "><?php echo $rowchef['CHEF_NAME'];?></p></div>
						<div class="infos2"><p class="text-center "><?php echo $rowchef['NAME']; ?></p></div>
						<div class="infos3"><p class="text-center "><?php echo $rowchef['SINCE'];?></p></div>
						<div class="infos4"><p class="text-center "><?php echo $rowchef['SALARY']; ?> TL</p></div>




					</div>

					<?php
				}elseif($ent == strtolower(trim($rowchef['SINCE'])) ) {
					$ctn++;


					?>

					<div class="d-flex flex-row">
						<div class="infos"><p  class="text-center "><?php echo $rowchef['CHEF_ID'];?></p></div>
						<div class="infos1"><p class="text-center "><?php echo $rowchef['CHEF_NAME'];?></p></div>
						<div class="infos2"><p class="text-center "><?php echo $rowchef['NAME']; ?></p></div>
						<div class="infos3"><p class="text-center "><?php echo $rowchef['SINCE'];?></p></div>
						<div class="infos4"><p class="text-center "><?php echo $rowchef['SALARY']; ?> TL</p></div>




					</div>

					<?php
				}
					// code...
				}
				$count++;
			if ($ctn == 0) {
				?>
				<h2 class="d-flex justify-content-center" style="color:red;background-color: black;">NOT FOUND ANY VALUE</h2>

				<?php	
			}
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

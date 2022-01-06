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
		justify-content: center;
	}
	img{
		width: 14%;
		height: 7%;
		margin-top: 9%;
		margin-left: 15%;
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
		margin-top: 5%;
		width: 60%;
		opacity: 1;
		border-radius: 25%;
		align-items: center;
		justify-content: center;
		margin-left: 19%;

	}
	.round {
		margin-left: 30%;
		margin-top: 4%;
		width: 40%;
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
      /*  .color-overlay {
          position: absolute;
          top: 0;
          left: 0;
          background-color: lightblue;
          width: 100%;
          height: 100vh;
          opacity: 0.5;
          }*/
        </style>
      </head>

      <body>

      	<div class="section">
      		
      		<div class="round" method="POST">
      			<div class="d-flex flex-row"><img style="border-radius: 10%;"  src="../images/chef.jpg"   >
      				<p class="regist">Registration</p></div>


      				<form  action="../AddChefValidation.php" method="POST">
      					<div class="d-flex flex-column inputs text-center ">
      						<input class="form-control text-center" required name="cname" placeholder="NAME" type=" text" />
<input class="form-control text-center mt-4" required name="csalary" placeholder="SALARY" type=" text" />
<input class="form-control text-center mt-4" required name="csince" placeholder="SINCE" type=" text" />
      						<input class="form-control text-center mt-4" name="cREF_ID" placeholder="REF_ID" required type="password" />

<?php if (isset($_GET['errorC'])) { ?>
      					<!--<img src="../images/wrong.png">  -->
      				<p class="tyy" ><?php echo $_GET['errorC']; ?> </p>
								
      				<?php } ?>
      						<button class="btnn btn btn-primary mt-2" type="submit" name="insertchef">Register</button>

      					</div>
      					


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
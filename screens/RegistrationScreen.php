<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="sign in or register" />
	<meta name="keywords" content="sign in" />
	<meta name="author" content="İshak Çoban" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<title>Register</title>
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
		margin-left: 33%;
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
		background-color: black;
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
      			<div class="d-flex flex-row"><img  src="../images/regist.png"   >
      				<p class="regist">Registration</p></div>


      				<form  action="../RegisterValidation.php" method="POST">
      					<div class="d-flex flex-column inputs text-center ">
      						<input class="form-control text-center" required name="nm1" placeholder="NAME" type=" text" />

      						<select name="SEX" required="required" class="form-control text-center mt-4">
      							
      							<option label="Select Your Sex▼" value=""></option>
      							<option name="s1" value="MALE">MALE</option>
      							<option name="s2" value="FEMALE">FEMALE</option>
      							

      						</select>

      						<input class="form-control text-center mt-4" required name="addr" placeholder="ADDRESS(CITY)" type=" text" />
      						<input class="form-control text-center mt-4" name="pass1" placeholder="PASSWORD" required type="password" />

      						<button class="btnn btn btn-primary mt-5" type="submit" name="insertt">Register</button>

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

<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

?>

<html>
	<head>

		<title>Login to MyDiary</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJ	fDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<?php require_once('fade.php');?>

	</head>

	<body id="container" onload="checkFade()">

		<?php require_once('navbar.php');?>



		<div class="container" style="margin-top: 15%;">

			<div class="card">

				<div class="card-block">

					<h4 class="card-title">Login</h4>
					<?php 

						if(isset($_SESSION['message'])){

							echo "

							<div class='alert alert-warning' role='alert'>

							<strong>Warning! </strong>"  .$_SESSION['message']. "

							</div>

							";

						}

					?>
					<form action="loginScript.php" method="post">

						<div class="form-group">

							<div class="form-group">

								<label for="Username">Username</label>

								<input type="text" class="form-control" autofocus placeholder="Enter username" name="Username">

							</div>

							<div class="form-group">

								<label for="Password">Password</label>

								<input type="password" class="form-control" placeholder="Enter super secret password" name="Password" >

							</div>

							<button type="submit" class="btn btn-primary btn-lg" style="float: right;">Login</button>

						</div>

					</form>

				</div>

			</div>

		</div>



	</body>

</html>
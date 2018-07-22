<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

?>

<html>

	<head>

		<title>MyDiary | Sign Up</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<?php require_once('fade.php');?>

	</head>

	<body id="container">

		

		<?php require_once('navbar.php'); ?>



		<div class="container" style="margin-top: 8%;">

			<div class="card" style="background-color: #ECEEEF;">

				<div class="card-block">

					<h4 class="card-title">Sign Up</h4>

					

					<form action="registerScript.php" method="post">

						<div class="form-group" id="firstNameDiv">

							<label for="FirstName" id="firstNameLabel">First Name</label>

							<input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="Enter first name" onkeyup="checkFirstName(this.value)" onfocus="checkFirstName(this.value)">

							<div class="form-control-feedback" id="firstNameError"></div>

						</div>

						<div class="form-group" id="lastNameDiv">

							<label for="LastName" id="lastNameLabel">Last Name</label>

							<input type="text" name="LastName" id="LastName" class="form-control" placeholder="Enter last name" onkeyup="checkLastName(this.value)" onfocus="checkLastName(this.value)">

							<div class="form-control-feedback" id="lastNameError"></div>

						</div>

						<div class="form-group" id="usernameDiv">

							<label id="usernameLabel" for="Username">Username</label>

							<input id="Username" type="text" class="form-control" placeholder="Enter username" name="Username" onkeyup="checkUsername(this.value)" onfocus="checkUsername(this.value)">

							<div class="form-control-feedback" id="usernameError">

								<?php

								if(isset($_SESSION['usernameError'])){

									echo $_SESSION['usernameError'];

								}

								?>

							</div>

						</div>

						<div class="form-group" id="passwordDiv">

							<label for="Password">Password</label>

							<input id="Password" type="password" class="form-control" placeholder="Enter super secret password" name="Password" onkeyup="checkPassword(this.value)">

							<div class="form-control-feedback" id="passwordError"></div>

						</div>

						<div class="form-group" id="cPasswordDiv">

							<label for="ConfirmPassword">Confirm Password</label>

							<input class="form-control" id="cPassword" type="password" name="ConfirmPassword" placeholder="Confirm super secret password" onkeyup="confirmPassword(this.value)">

							<div class="form-control-feedback" id="cPasswordError"></div>

						</div>

						<div class="form-group" id="emailDiv">

							<label id="emailLabel" for="Email">Email</label>

							<input id="Email" type="text" class="form-control" placeholder="Enter email" name="Email" onkeyup="checkEmail(this.value)">

							<div class="form-control-feedback" id="emailError"></div>

						</div>

						<button type="submit" class="btn btn-primary btn-lg" style="float: right;">Register</button>

					</form>

				</div>

			</div>

		</div>



		<script src="./js/registerScript.js"></script>		



	</body>

</html>
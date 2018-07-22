<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

?>

<html>

	<head>

		<title>MyDiary Profile</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<style>
			#container{
				transition-duration: 0.5s;
				-webkit-transition-duration: 0.5s;
				-moz-transition-duration: 0.5s;
			}
		</style>
	</head>
	
	<?php require_once('fade.php'); ?>
	<?php require_once('connection.php');?>

	<?php
		$sql = "SELECT * FROM users WHERE UserID = " . $_SESSION['UserID'];
	?>

	<body id="container" onload="checkPassword('')">

		<?php

			require_once('loggedNavbar.php');

			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					$row = mysqli_fetch_array($result);
					$first_name = $row['FirstName'];
					$last_name = $row['LastName'];
					$email = $row['Email'];
					$password = $row['Password'];
				}else{
					header("location: login.php");
					Exit();
				}
			}else{
				echo "Could not execute sql statement: $sql";
			}

		?>
		
		<div class="container-fluid">
			<div class="row" style="margin-top: 9vh;">
				<div class="col-lg-3 col-md-3 col-sm-3 sidebar" style="background-color: #292b2c; color: white; display: flex; align-items: center; justify-content: center;" id="list">
					<ul class="list-group" style="margin-top: 10vh; height: 100vh; width: 80%;">
						<a href="#" onclick="showPersonal()" class="list-group-item list-group-item-action" style="margin-top: 1%;">Personal Details</a>
						<a href="#" onclick="showTechnical()" class="list-group-item list-group-item-action" style="margin-top: 1%;">Technical Details</a>
					</ul>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9">
					<div class="container-fluid" style="margin-top: 3%;" id="personalDetails">
						<form action="profileUpdateScript.php" method="post">
							<div class="card">
								<div class="card-header">
									<h1>Your Personal Details</h1>
								</div>
								<div class="card-block">
									<ul class="list-group list-group-flush">
										<h4>Your Name</h4>
										<div class="form-group" id="firstNameDiv">
											<li class="list-group-item">
												<p style="width: 100%;">
													First Name: 
													<input 
													name="first_name" 
													id="FirstName"
													type="text" 
													onfocus="checkFirstName(this.value)"
													onkeyup="checkFirstName(this.value)"
													class="form-control" 
													style="float: right; margin-top: 1%;" 
													value="<?php 
													if (isset($first_name)){
														echo $first_name;
													}
													?>"
													></input>
												</p>
												<div class="form-control-feedback" id="firstNameError"></div>
											</li>
										</div>
										<div class="form-group" id="lastNameDiv">
											<li class="list-group-item">
												<p style="width: 100%;">Last Name: <input 
													name="last_name" 
													id="LastName"
													type="text" 
													onfocus="checkLastName(this.value)"
													onkeyup="checkLastName(this.value)"
													class="form-control" 
													style="float: right; margin-top: 1%;" 
													value="<?php
													 if(isset($last_name)){
													 	echo $last_name;
													 }
													 ?>"
													></input></p>
													<div class="form-control-feedback" id="lastNameError"></div>
												</li>
										</div>
									</ul>
									<ul class="list-group list-group-flush" style="margin-top: 2.5%;">
										<h4>Your Password</h4>
										<li class="list-group-item">
											<p style="width: 100%;">Previous Password: <input class="form-control" type="password" style="float: right; margin-top: 1%;" value="<?php
											 if(isset($password)){
											 	echo $password;
											 } 
											 ?>"></input></p>
										</li>
										<div class="form-group" id="passwordDiv">
											<li class="list-group-item">
												<p style="width: 100%;">New Password: <input 
													name="password"
													id="Password"
													class="form-control" 
													onfocus="checkPassword(this.value)"
													onkeyup="checkPassword(this.value)"
													type="password" 
													style="float: right; margin-top: 1%;"
													></input></p>
													<div class="form-control-feedback" id="passwordError"></div>
												</li>
										</div>
										<div class="form-group" id="cPasswordDiv">
												<li class="list-group-item">
													<p style="width: 100%;">Confirm Password: <input 
														class="form-control"
														id="cPassword"
														onfocus="confirmPassword(this.value)"
														onkeyup="confirmPassword(this.value)"
														type="password" 
														style="float: right; margin-top: 1%;"
														></input></p>
														<div class="form-control-feedback" id="cPasswordError"></div>
													</li>
												</div>
									</ul>
									<p style="width: 100%;"><button class="btn btn-lg btn-primary" id="updateButton" style="float: right; margin-top: 1%;">Update</button></p>
								</div>
							</div>
						</form>
					</div>
					<div class="container-fluid" style="margin-top: 3.5%;" id="technicalDetails">
						<form action="emailUpdateScript.php" method="post">
							<div class="card">
								<div class="card-header">
									<h1>Your Technical Details</h1>
								</div>
								<div class="card-block">
									<ul class="list-group list-group-flush">
										<h4>Your Email</h4>
										<li class="list-group-item">
											<p style="width: 100%;">Current Email: <input type="text" class="form-control" style="float: right; margin-top: 1%;" value="<?php
											 if(isset($email)){
											 	echo $email;
											 }
											 ?>"></input></p>
										</li>
										<li class="list-group-item">
											<p style="width: 100%;">New Email: <input type="text" name="email" class="form-control" style="float: right; margin-top: 1%;"></input></p>
										</li>
										<li class="list-group-item">
											<p style="width: 100%;">Confirm Email: <input type="text" class="form-control" style="float: right; margin-top: 1%;"></input></p>
										</li>
										<p style="width: 100%;"><button class="btn btn-lg btn-primary" style="float: right; margin-top: 1%;">Update</button></p>
									</ul>

								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="js/profileScript.js"></script>
	</body>

</html>
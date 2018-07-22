<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }
	require_once('connection.php');



	$first_name = mysqli_real_escape_string($link, $_REQUEST['FirstName']);

	$last_name = mysqli_real_escape_string($link, $_REQUEST['LastName']);

	$username = mysqli_real_escape_string($link, $_REQUEST['Username']);

	$password = mysqli_real_escape_string($link, $_REQUEST['Password']);

	$email = mysqli_real_escape_string($link, $_REQUEST['Email']);



	$sql = "SELECT * FROM users WHERE Username = '" . $username . "';";

	$sql2 = "INSERT INTO users(Username, Password, Email, FirstName, LastName) VALUES('" .$username. "', '" .$password. "', '" .$email. "', '" .$first_name. "', '" .$last_name. "')";



	if($result = mysqli_query($link, $sql)){

		if(mysqli_num_rows($result) <= 0){

			mysqli_query($link, $sql2);

			header("Location: login.php");

			exit();

		}else{

			$_SESSION['usernameError'] = "Looks like someone has stolen your username.";

			header("Location: register.php");

			exit();

		}

	}else{

		echo "Could not execute $sql. " . mysqli_error($link);

	}

?>
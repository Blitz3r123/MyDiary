<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

	require_once('connection.php');

	if(isset($_SESSION['message'])){
		unset($_SESSION['message']);
	}

	$username = mysqli_real_escape_string($link, $_REQUEST['Username']);

	$password = mysqli_real_escape_string($link, $_REQUEST['Password']);



	$sql = "SELECT * FROM users WHERE username = '" .$username. "' AND password = '" .$password. "'; ";



	if($result = mysqli_query($link, $sql)){

		if(mysqli_num_rows($result) <= 0){

			$_SESSION['message'] = "Couldn't find you in my database, did you miss out a letter in your password?";

			Header("Location: login.php");

			Exit();

		}else{

			$row = mysqli_fetch_array($result);

			$_SESSION['UserID'] = $row['UserId'];

			$_SESSION['FirstName'] = $row['FirstName'];

			Header("Location: hub.php");
			Exit();

		}

	}else{

		echo mysqli_error($link);

	}

?>
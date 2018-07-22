<?php

	//Session stuff
	if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

	require_once('connection.php');

	$email = mysqli_real_escape_string($link, $_REQUEST['email']);

	if(isset($_SESSION['UserID'])){
		$UserID = $_SESSION['UserID'];
	}else{
		$UserID = "";
		Header("Location: login.php");
		Exit();
	}

	$sql = "UPDATE users SET Email = '" .$email. "' WHERE UserID = " . $UserID;

	if(mysqli_query($link, $sql)){
		Header("Location: profile.php");
		Exit();
	}else{
		echo "An error occured";
	}

?>
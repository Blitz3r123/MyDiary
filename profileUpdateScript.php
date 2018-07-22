<?php

	//Session stuff
	if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

	require_once('connection.php');

	//Set variables
	$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
	$password = mysqli_real_escape_string($link, $_REQUEST['password']);
	

	//Check for session variable
	if(isset($_SESSION['UserID'])){
		$UserID = $_SESSION['UserID'];
	}else{
		$UserID = "";
		Header("Location: login.php");
		Exit();
	}

	//sql query
	$sql = "UPDATE users SET FirstName = '" .$first_name. "', LastName = '" .$last_name. "', Password = '" .$password. "' WHERE UserID = " .$UserID;

	

	if(mysqli_query($link, $sql)){
		Header("Location: profile.php");
		Exit();
	}else{
		echo "An error occured";
	}

?>
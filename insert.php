<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

	require_once('connection.php');

	if (isset($_SESSION['user_id'])){
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = "";
	}

	$entrance_title = mysqli_real_escape_string($link, $_REQUEST['entranceTitle']);

	// // $entrance_date = date('Y-m-d', strtotime($_POST['entranceDate'])) ;		
	// $entrance_date = $_POST['entranceDate'];
	// echo $entrance_date;

	//$entrance_date = date('Y-m-d H:i:s', $entrance_date);

	$entrance_text = mysqli_real_escape_string($link, $_REQUEST['entranceText']);

	$entrance_text = str_replace('\r\n', '<br>', $entrance_text);

	$sql = "INSERT INTO diary(UserID, EntranceTitle, EntranceDate, EntranceText) VALUES(" .$_SESSION['UserID']. ", '" .$entrance_title. "', '" .$entrance_date. "' , '" .$entrance_text. "');";


	if(mysqli_query($link, $sql)){

		header("Location: hub.php");

		exit();

	}else{

		echo "Could not execute $sql. " . mysqli_error($link);

	}



	mysqli_close($link);

?>
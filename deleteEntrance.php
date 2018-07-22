<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

	require_once('connection.php');	



	$sql = "DELETE FROM diary WHERE EntranceID = " . $_GET['id'];



	if(mysqli_query($link, $sql)){

		Header("Location: hub.php");

		exit();

	}else{

		echo "ERROR: Could not execute $sql";

	}



?>
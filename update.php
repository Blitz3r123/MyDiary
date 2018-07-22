<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }
	require_once('connection.php');

	$entrance_text = mysqli_real_escape_string($link, $_REQUEST['entranceText']);

	$entrance_text = str_replace('\r\n', '<br>', $entrance_text);

	$sql = "UPDATE diary SET EntranceTitle = '" .$_POST['entranceTitle']. "', EntranceDate = '" .$_POST['entranceDate']. "', EntranceText = '" .$entrance_text. "' WHERE EntranceID = " .$_SESSION['EntranceId']. ";";



	if(mysqli_query($link, $sql)){

		Header("Location: hub.php");

		exit();

	}else{

		echo  "ERROR executing $sql statement.";

	}



?>
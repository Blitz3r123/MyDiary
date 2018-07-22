<?php

$db_server = "localhost";

$db_name = "root";

$db_password = "1234";

$db_table = "mydiary";



$link = mysqli_connect($db_server, $db_name, $db_password, $db_table);



if($link === false){

	die("ERROR: Could not connect. " . mysqli_connect_error());

}



?>
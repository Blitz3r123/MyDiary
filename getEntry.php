<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

require_once('connection.php');	



$q = mysqli_escape_string($link, $_GET['q']);

if($q != ''){
	$sql = "SELECT * FROM diary WHERE (EntranceTitle LIKE '%" .$q. "%' OR EntranceText LIKE '%".$q."%') AND UserID = " . $_SESSION['UserID'];
}else{
	$sql = "SELECT * FROM diary WHERE 1 = 0";
}


if($result = mysqli_query($link, $sql)){

	if(mysqli_num_rows($result) > 0){

		echo "<div><h4>What I found: </h4>";

		while($row  = mysqli_fetch_array($result)){

			echo "
			<div class='card' style='margin-bottom: 2%;'>

			<div class='card-block'>

			<p>

			<h4 class='card-title'>" .$row['EntranceTitle']. "</h4>

			<a class='btn btn-danger' style='float: right; margin-top: -4.85%; width: 7.5%;' href='deleteEntrance.php?id=" .$row['EntranceID']. "'>

			Delete

			</a>

			<a class='btn btn-success' style='float: right; width: 7.5%; margin-top: -4.85%; margin-right: 9%;' href='editEntrance.php?id=" .$row['EntranceID']. "'>

			Edit

			</a>

			</p>

			<h6 class='card-subtitle mb-2 text-muted'>" .$row['EntranceDate']. "</h6>

			<p class='card-text'>

			" .$row['EntranceText']. "

			</p>

			</div>

			</div>

			";

		}

	}else{

		echo "";

	}

}else{
	echo "";
}



mysqli_close($link);

?>
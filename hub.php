<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

?>

<html>

	<head>

		<title>Your Enterance Hub</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		<style>

			#searchBar{

				transition-duration: 0.3s !important;

				-moz-transition-duration: 0.3s !important;

				-webkit-transition-duration: 0.3s !important;

				width: 60%;

				margin-left: 20%;

				margin-right: 20%;

			}

			#searchBar:focus{

				transition: all;

				padding: 20px;

			}

		</style>

		<script src="js/hubScript.js"></script>

		<script>

			function showEntry(str){

				//console.log("Button Top: " + document.getElementById('buttonParagraph').top);

				if(str == ""){

					if(window.XMLHttpRequest){

						xmlhttp = new XMLHttpRequest();

					}else{

						xmlhttp = new ActiveObject("Microsoft.XMLHTTP");

					};



					xmlhttp.onreadystatechange = function(){

						if(this.readyState == 4 && this.status == 200){

							document.getElementById("searchEntrance").innerHTML = this.responseText;

						}

					};



					xmlhttp.open("GET", "getEntry.php?q="+str, true);

					xmlhttp.send();

				}else{

					if(window.XMLHttpRequest){

						xmlhttp = new XMLHttpRequest();

					}else{

						xmlhttp = new ActiveObject("Microsoft.XMLHTTP");

					};



					xmlhttp.onreadystatechange = function(){

						if(this.readyState == 4 && this.status == 200){

							document.getElementById("searchEntrance").innerHTML = this.responseText;

						}

					};



					xmlhttp.open("GET", "getEntry.php?q="+str, true);

					xmlhttp.send();

				}	

			}

			function checkFade(){
				var path = window.location.pathname;
				var page = path.split("/").pop();
				console.log( page );
			}

		</script>

		<?php require_once('fade.php');?>

	</head>

	<?php

	require_once('connection.php');



	$sql = "SELECT * FROM diary WHERE UserID = " . $_SESSION['UserID'];

	?>

	<body style="background-color: #eceeef" id="container">

		<?php require_once('loggedNavbar.php');?>

		<div class="container" style="margin-top: 5%;">

			<h1 class="text" id="text"><?php

			    if(isset($_SESSION['FirstName'])){

			        echo "Welcome " . $_SESSION['FirstName'];

			    }else{

			        echo "Welcome";

			    }

			?></h1>

			<p>

				<div class="input-group">

					<input type="text" class="form-control" placeholder="Search for an entry" id="searchBar" onkeyup="showEntry(this.value)">

				</div>

			</p>

			<p id="buttonParagraph"><a href="createNewEntrance.php" style="width: 40%; margin-left: 30%;" class="btn btn-primary btn-lg">Create New Entrance</a></p>

			<div id="searchEntrance"></div>

		</div>
		<div class="container">			

			<?php

			if($result = mysqli_query($link, $sql)){

				if(mysqli_num_rows($result) > 0){

					echo "<div class='text'><h4 id='hText'>Here are your diary entries: </h4></div>";

					while($row  = mysqli_fetch_array($result)){

						echo "
							
							<div class='card' style='margin-bottom: 2%;'>

								<div class='card-block'>

									<p>

										<h4 class='card-title'>" .$row['EntranceTitle']. "</h4>

											<a class='btn btn-danger' style='float: right; margin-top: -4.85%; width: 10vw;' href='deleteEntrance.php?id=" .$row['EntranceID']. "'>

												Delete

											</a>

											<a class='btn btn-success' style='float: right; width: 7.5vw; margin-top: -4.85%; margin-right: 12vw;' href='editEntrance.php?id=" .$row['EntranceID']. "'>

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

					echo "

						<div class='container'>

							<div class='jumbotron'>

								<h1 class='display-3'>There seems to be an error...</h1>

								<p class='lead'>You don't have any diary entries</p>

								<p class='lead'><a href='createNewEntrance.php' class='btn btn-primary btn-lg'>Create an entry</a></p>

							</div>

						</div>

					";

				}

			}

			?>

		</div>

	</body>

</html>
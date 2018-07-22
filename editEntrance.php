<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <title>

      MyDiary Edit Entrance

    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <?php require_once('fade.php');?>

  </head>



  <?php

    $_SESSION['EntranceId'] = $_GET['id'];

    require_once('connection.php'); 



    $sql = "SELECT * FROM diary WHERE EntranceID = " . $_GET['id'];



    if($result = mysqli_query($link, $sql)){

      if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

          $title = $row['EntranceTitle'];

          $date = $row['EntranceDate'];

          $text = $row['EntranceText'];

        }

      }else{
        Header("Location: hub.php");
        Exit(); 
      }

    }else{
      Header("Location: hub.php");
      Exit();
    }

  ?>

  

  <body id="container">

    <?php

      if($_SESSION['UserID'] <= 0){

        require_once('navbar.php');  

      }else{

        require_once('loggedNavbar.php');

      }

    ?>

    <div class="container" style="margin-top: 10%;">

      <h1>Edit Diary Entrance</h1>

      <p></p>

      <form action="update.php" method="post">

        <div class="form-group">

          <label for="entranceTitle">Title:</label>

          <input type="text" name="entranceTitle" id="entranceTitle" onkeyup="validateInput('entranceTitle')" class="form-control" value="<?php echo $title; ?>">

        </div>

        <div class="form-group">

          <label for="entranceDate">Date:</label>

          <input type="date" name="entranceDate" class="form-control" value="<?php echo $date; ?>">

        </div>

        <div class="form-group">

          <label for="entranceText">Entrance Text:</label>

          <textarea class="form-control" name="entranceText" onkeyup="validateInput('inputText')" id="inputText" onkeydown="breakLine(event.keyCode)" rows="5">

            <?php echo $text; ?>

          </textarea>

        </div>

        <div class="errorMessage lead" style="padding-left: 1vw; padding-right: 1vw; color: red;">
          <p id="errorMessageText"></p>
        </div>

        <div class="form-group">

          <input type="submit" id="editButton" value="Edit" class="btn btn-primary btn-lg" style="float: right;">

        </div>

      </form>

    </div>

  </body>
  <script>
    // function breakLine(keyCode){
    //   if (keyCode == 13){
    //     document.getElementById('inputText').value += '<br>';
    //   }else if(keyCode == 222){
    //     document.getElementById('inputText').value += "'";
    //   }
    // }

    function validateInput(elementName){
      input = document.getElementById(elementName).value;
      if(input.length <= 0){
        if(elementName == 'entranceTitle'){
          document.getElementById('errorMessageText').innerHTML = "Come on. You can't leave your title empty...";
          document.getElementById('editButton').style.visibility = "hidden";
        }else if(elementName == 'inputText'){
          document.getElementById('errorMessageText').innerHTML = "Come on. You can't leave your entry empty...";
          document.getElementById('editButton').style.visibility = "hidden";
        }
      }else{
        document.getElementById('errorMessageText').innerHTML = '';
        document.getElementById('editButton').style.visibility = "visible";
      }
    }
  </script>
</html>


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

      MyDiary Create Entrance

    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><?php    require_once('fade.php');?>
    <style>
      br{
        visibility: none;
      }
    </style>
  </head>

  <body id="container" onload="">

    <?php

      if(!isset($_SESSION['UserID'])){

        require_once('navbar.php');  

      }else{

        require_once('loggedNavbar.php');

      }

    ?>

    <div class="container" style="margin-top: 10%;">

      <h1 id="text">Add a Diary Entrance</h1>

      <p></p>

      <form action="insert.php" method="post">

        <div class="form-group">

          <label for="entranceTitle" id="ltext1">Title:</label>

          <input type="text" name="entranceTitle" class="form-control" id="entranceTitle" onkeyup="validateInput('entranceTitle')" onfocus="validateInput('entranceTitle')" autofocus placeholder="Epic Scrabble Winning Strategy">

        </div>

        <div class="form-group">

          <label for="entranceDate" id="ltext2">Date:</label>

          <input type="date" disabled  name="entranceDate" id="inputDate" class="form-control" value="<?php 
          echo date('Y-m-d')
          ;?>" placeholder="<?php echo date('d') . '/' . date('m') .'/' . date('Y') ?>">

        </div>

        <div class="form-group">

          <label for="entranceText" id="ltext3">Entrance Text:</label>

          <textarea class="form-control" name="entranceText" id="inputText" onkeyup="validateInput('inputText')" onfocus="validateInput('inputText')" onkeydown="breakLine(event.keyCode)" rows="5"></textarea>

        </div>

        <div class="errorMessage lead" style="padding-left: 1vw; padding-right: 1vw; color: red;">
          <p id="errorMessageText"></p>
        </div>

        <div class="form-group">

          <input type="submit" id="editButton" name="submit" value="Add" class="btn btn-primary btn-lg" style="float: right;">

          <!-- Implement following button where entrance is added and user is directed to same form page -->
          <!-- <input type="submit" id="editButton" value="Save and Add Another" class="btn btn-primary btn-lg" style="float: right;"> -->

        </div>

      </form>

    </div>
    <?php require_once('fade.php');?>
  </body>
  <script>
    // function breakLine(keyCode){
    //   if(keyCode == 13){
    //     document.getElementById("inputText").value += "<br>";
    //   }else if(keyCode == 222){
    //     console.log("HELLO");
    //   }
    // }

    function setDate(){

      today = new Date();
      year = today.getFullYear();
      month = today.getMonth();
      day = today.getDate();

      if(month < 10){
        month = '0' + month;
      }

      if(day < 10){
        day = '0' + day;
      }

      formattedDate = year + "-" + month + "-" + day;

      document.getElementById('inputDate').value = formattedDate;
      console.log(formattedDate);
    }

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


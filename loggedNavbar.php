<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }
?>

<script>$(function(){$('[data-toggle="popover"]').popover()})</script>

<style>
  #nav{
    transition-duration: 0.5s;
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
  }
  #nameButton{
    transition-duration: 0.5s;
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
  }
</style>

<nav class="navbar navbar-toggleable-lg fixed-top navbar-inverse bg-inverse" id="nav">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <a href="index.php" class="navbar-brand">MyDiary</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">

        <a href="index.php" class="nav-link">Home</a>

      </li>

      <li class="nav-item">

        <a href="hub.php" class="nav-link">Hub</a>

      </li>

    </ul>

    <ul class="nav navbar-nav navbar-right">      
      <li class="nav-item">
        <a href="#" class="nav-link">

          <button
          id="nameButton" 
          type="button" 
          class="btn btn-default btn-sm" 
          data-container="body" 
          data-toggle="popover" 
          data-placement="bottom"
          data-content="

          <p>

            <a href='profile.php' style='width: 100%; background-color: #292b2c;' class='btn btn-primary'>Profile</a>

          </p>

          <p>

            <a href='hub.php' style='width: 100%; background-color: #292b2c;' class='btn btn-primary'>Hub</a>

          </p>

          <p>

            <a href='createNewEntrance.php' style='width: 100%; background-color: #292b2c;' class='btn btn-primary'>Add Entry</a>

          </p>

          " 
          data-html="true">

          <?php

          if(isset($_SESSION['FirstName'])){

              echo "Hi " . $_SESSION['FirstName'];

          }else{

              echo "Hi!";

          }?>

        </button>

        </a>

      </li>

      <li class="nav-item">
        <a href="#" class="nav-link" onClick="toggleTheme()" id="toggle">Toggle</a>
      </li>

      <li class="nav-item">

        <a class="nav-link" href="logoutScript.php">Logout</a>

      </li>

    </ul>

  </div>

</nav>

<!-- END OF NAVIGATION BAR -->


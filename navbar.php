<?php

    if (session_status() == PHP_SESSION_NONE) {

        session_start();

    }

?>

<nav class="navbar navbar-toggleable-lg fixed-top navbar-inverse bg-inverse">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <a href="index.php" class="navbar-brand">MyDiary</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">

        <a href="index.php" class="nav-link">Home</a>

      </li>
    </ul>
    <ul class="navbar-nav navbar-right mr-auto w-100 justify-content-end">
      <li class="nav-item">

        <a href="login.php" class="nav-link">Login</a>

      </li>

      <li class="nav-item">

        <a href="register.php" class="nav-link">Sign Up</a>

      </li>

    </ul>

  </div>

</nav>

<!-- END OF NAVIGATION BAR -->


<?php

  session_start();

if(isset($_SESSION['UserID'])){
  if(!($_SESSION['UserID'] <= 0)){
    Header('Location: hub.php');
    Exit();
  }
}else{
  require_once('navbar.php');
}

?>
<html>

  <head>

    <title>MyDiary Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/indexStyle.css">

    <?php require_once('fade.php');?>

  </head>

  <?php

    require_once('connection.php');



    $sql = "SELECT * FROM diary";

   ?> 

  <body id="container">

    <!-- END OF NAVIGATION BAR -->



    <div class="container" style="margin-top: 12%;">

      <div class="jumbotron">

        <h1 class="display-3">Welcome to MyDiary</h1>

        <p class="lead">This is an online diary where you can keep all your memories, notes and epic winning strategies for Monopoly.</p>

        <hr class="my-4">

        <p>It's very easy to get started just press the button below to start a new diary entrance.</p>

        <p class="lead">

          <a href="register.php" class="btn btn-primary btn-lg">Sign Up Now</a>

        </p>

      </div>

      <!-- END OF JUMBOTRON -->



      <div class="container marketing" style="margin-top: 8%;">

        <div class="row">

          <h1 class="text-center" style="color: #84E0ED;">Creating a Diary Entry is as easy as...</h1>

        </div>

        <!-- Three columns of text below the carousel -->

        <div class="row">

          <div class="col-lg-4">

            <img class="rounded-circle" src="./images/sign-up.png" alt="Generic placeholder image" width="140" height="140">

            <h2 style="color: #0275D8;">Sign Up</h2>

            <p>Just press sign up at the top on the nagivation bar and you will be redirected to a page where just have to enter in your details to make an account with us.</p>

          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">

            <img class="rounded-circle" src="./images/write.png" alt="Generic placeholder image" width="140" height="140">

            <h2 style="color: #0275D8;">Write up your entry</h2>

            <p>Type up anthing you want, how your day was, how to win Monopoly or even how you got rid of the body. Once you are happy with what you have entered just end it with a period/full stop.</p>

          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">

            <img class="rounded-circle" src="./images/button.png" alt="Generic placeholder image" width="140" height="140">

            <h2 style="color: #0275D8;">Click the big blue add button</h2>

            <p>Now all that is left is for you to click the big blue button...and that's it....you have just made your first diary enterance.</p>

          </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->





        <!-- START THE FEATURETTES -->



        <!-- <hr class="featurette-divider">



        <div class="row featurette">

          <div class="col-md-7">

            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>

          </div>

          <div class="col-md-5">

            <img class="featurette-image img-fluid mx-auto" data-src="./images/image.jpg" alt="Generic placeholder image">

          </div>

        </div>



        <hr class="featurette-divider">



        <div class="row featurette">

          <div class="col-md-7 push-md-5">

            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>

          </div>

          <div class="col-md-5 pull-md-7">

            <img class="featurette-image img-fluid mx-auto" data-src="./images/image.jpg" alt="Generic placeholder image">

          </div>

        </div>



        <hr class="featurette-divider">



        <div class="row featurette">

          <div class="col-md-7">

            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>

            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>

          </div>

          <div class="col-md-5">

            <img class="featurette-image img-fluid mx-auto" data-src="./images/image.jpg" alt="Generic placeholder image">

          </div>

        </div>



        <hr class="featurette-divider"> -->



        <!-- /END THE FEATURETTES -->

      </div>

    </div>

  </body>

</html>


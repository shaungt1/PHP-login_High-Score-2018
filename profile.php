<?php
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $score = $_SESSION['score'];
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <?php include 'css/css.html'; ?>
</head>

<body>
  <div class="form text-white bg-dark">
          <h1>Welcome</h1>
          <p>
          <?php
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          ?>
          </p>
          <?php
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div>';
          }
          ?>
            <div class= ""text-white bg-dark>
                <h6 align="center">User Profile:</h6>
                    <h2><?php echo $first_name.' '.$last_name; ?></h2>
                    <p><h6>Email:</h6> <?= $email ?></p>
                    <p><h6 align="left">Status:</h6><?= $active ?> <h6>Score:</h6><?= $score ?> </p>
            </div>
          <a href="http://site21.yaacotu.com/highScores/scores.php"><button class=" btn btn-secondary btn-lg activebutton button-block" name="play"/>Play High Scores</button></a>
          
          <br/>
          <br/>

          <a href="logout.php"><button class="btn btn-secondary btn-lg active button button-block" name="logout"/>Log Out</button></a>
    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>

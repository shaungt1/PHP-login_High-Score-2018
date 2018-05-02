<?php
session_start();
?>
<html>
<head>
  <title>Error</title>
  <?php include 'css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1>Error</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];
    else:
        header( "location: http://site21.yaacotu.com/highScores/scores.php" );
    endif;
    ?>
    </p>
    <a href="http://site21.yaacotu.com"><button class="button button-block"/>Home</button></a>
</div>
</body>
</html>

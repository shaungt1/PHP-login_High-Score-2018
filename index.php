<?php
session_start();
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>

<script type="text/javascript">
    document.getElementById("login").onclick = function () {
      window.location = "http://site21.yaacotu.com/highScores/scores.php";
    };
</script>

</head>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in
        require ' login.php';
    }
    elseif (isset($_POST['register'])) { //user registering
        require 'register.php';
    }
}
?>

<body>
  <div class=" text-white bg-dark md-form form">
      <ul class="tab-group">
        <li class="tab  "><a href="#signup">Sign Up</a></li>
        <li class="tab active "><a href="#login">Log In</a></li>
      </ul>
      <div class="tab-content">
         <div id="login">
          <h1>Welcome Back!</h1>

          <form action="profile.php" method="post" autocomplete="off">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input  class=""type="email" required autocomplete="off" name="email"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input class="" type="password" required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          <a href="login.php"><button id="login" type="click" class="btn btn-secondary btn-lg active button button-block btn-floating btn-large waves-effect waves-light" name="login" />Log In</button><a/>
          </form>
        </div>


        <div id="signup">
          <h2>Sign Up 2 Play High Scores</h2>
          <form action="index.php" method="post" autocomplete="off">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input class="" type="text" required autocomplete="off" name='firstname' />
            </div>
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input class="" type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input class="" type="email"required autocomplete="off" name='email' />
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input class="" type="password"required autocomplete="off" name='password'/>
          </div>
          
          <a href="register.php"><button id ="reg" type="submit" class=" btn btn-secondary btn-lg active button button-block" name="register" />Register</button></a>
          </form>
        </div>
      </div><!-- tab-content -->
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

<!--Redirect to  the game
/*<script>
window.location = 'http://site21.yaacotu.com/highScores/scores.php';
</script>*/-->

</body>
</html>

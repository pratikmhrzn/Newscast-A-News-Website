<?php
require_once "database.php";

if(!isset($_SESSION['user_id'])) {
  $_SESSION["message"] = "You must be logged in to register a new user.";
  header("Location: login.php");
}

?>
<!DOCTYPE html>
  <html>
    <head>
        <title>Welcome to Newscast</title>
        <link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">
    </head>
     <body>
     <div class="form">
     <h1 style="color:white;text-align: center;">Newscast</h1>
        <?php if(isset($_SESSION["message"])): //isset = empty cha ki chaina check garne?>
         <p style="color:white;text-align: center;">
          <?php 
            echo $_SESSION["message"]; 
            unset($_SESSION["message"]);
          ?>
        </p>
        <?php endif; ?>
      <ul class="tab-group">
        <li class="tab active" ><a href="#signup">Sign Up</a></li>
      </ul>
      <div>
        <div id="signup">   
          <h1>Register into Newscast</h1>
          <form action="register.php" method="post">
          <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required/>
          </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required/>
          </div>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          <button type="submit" class="button button-block"/>Get Started</button>
          </form>
        </div>
      </div><!-- tab-content -->
</div> <!-- /form -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/loginpage.js"></script>
    </body>
  </html>
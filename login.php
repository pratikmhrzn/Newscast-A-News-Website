<?php
require_once "database.php";
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
            session_unset();
          ?>
        </p>
        <?php endif; ?>
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      <div>
        <div id="login">
          <h1>Welcome Back!</h1>
          <form action="trylogin.php" method="post">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->
          <button class="button button-block"/>Log In</button>
          </form>
        </div>
      </div><!-- tab-content -->
</div> <!-- /form -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/loginpage.js"></script>
    </body>
  </html>
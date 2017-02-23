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
        <li class="tab "><a href="#signup">Sign Up</a></li>
      </ul>
      <div class="tab-content">
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
        <script type="text/javascript" src="assests/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="assests/js/loginpage.js"></script>
    </body>
  </html>
<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    
    if(isset($_SESSION['status']))
    {
    ?>
       <div class="alert alert-warning" role="alert">
        INVALID LOGIN PLEASE: <a href="#" class="alert-link"> CHECK USERNAME AND PASSWORD
        </div>

    <?php
        unset($_SESSION['status']);
    }
    ?>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form method="post" action="db.php">
        <div class="field">
          <input type="text" name="username" required>
          <label>User name</label>
        </div>
        <div class="field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="reg.php">Signup now</a></div>
      </form>
    </div>
  </body>
</html>

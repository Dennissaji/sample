<?php // checking user logged in or not
 session_start();
 $user=$_SESSION['user'];
 if($user==true)
 {

 }
 else
 {
  header('location:login.php'); 
 }

?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
 <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
 <link href="style.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   </head>
   <body onunload="logout()">
   <h style='color:black'> welcome to home screen <?php echo $_SESSION['user']?></h>
   <a href="pending.php"> Messages</a>
   <a href="logout.php">Log Out </a>
  </body>
  </html>
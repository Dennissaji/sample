<!DOCTYPE html>
<html>
<body>
<?php
session_start();
include("connect.php"); //database connection

$name=$_POST['username'];//recieving username and password from login
$pass=$_POST['password'];

  if($conn)
  { 
    $sql="SELECT * FROM `users` where username='$name' && `password`='$pass' && `status`='approved' ";
    $res = $conn->query($sql);
    $num=mysqli_num_rows($res);
    if($num==1) // user valid redirect to home
    {   $_SESSION['user']=$name;
        $_SESSION['status']="login successful";
        echo '<script>alert ("login succesful")</script> ';
        header("location:home.php"); 
    }
    else // login failed redirect to login
    {   $_SESSION['status']="invalid user name or password";
        header("location:login.php");
        
    
  }
}
  else{
    echo "connection failed ";
  }
?>
</body>
<script>
function delay(){
  location.href="http://localhost/mini%20project/login.php"
}
setTimeout(delay,1);
</script>
</html>
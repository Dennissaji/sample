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
    $row=mysqli_fetch_array($res);
    if($num==1) // user valid redirect to home
    {   $_SESSION['user']=$name;
        $_SESSION['status']="login successful";
        echo '<script>alert ("login succesful")</script> ';
        if($row['role']=="admin")
        { $_SESSION['role']="admin";
          header("location:.\home screen\adminhome.php");
        }
       else
       {
        $_SESSION['role']="user";
        header("location:.\home screen\userhome.php");
       }
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
  location.href="C:\xampp\htdocs\project\login\login.php"
}
setTimeout(delay,1);
</script>
</html>
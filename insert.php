<?php
 session_start();
  $server="localhost:3325";
  $username="root";
  $password="dennis";
  $dbname="mini project";

  $email=$_POST['email'];
  $name=$_POST['username'];
  $pass=$_POST['password'];
  $dsgn=$_POST['dsgn'];
  $role=$_POST['role'];
  $num=$_POST['num'];
 

  $conn = mysqli_connect($server,$username,$password,$dbname);

  if($conn)
  { $sql="INSERT INTO `users` (email,username,`password`,designation,`role`,phone) values ('$email','$name','$pass','$dsgn','$role','$num')";
    $result=mysqli_query($conn,$sql);
    if($result)
    { $_SESSION['msg']="User Data Entered Successfully";
      if(isset($_SESSION['msg']))
       header('location:reg.php');
       
    }
}
?>
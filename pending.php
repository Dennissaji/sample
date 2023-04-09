<?php
 include('connect.php');
 $query="select * from `users` where status='pending'";
 $result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="pendingstyle.css?v=<?php echo time(); ?>">
<script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
<script  src="pendingajax.js"></script>

</head>

<body>
<h> Pending User requests </h>
<table id="users">
    <tr>
        <th> email address </th>
        <th> user name</th>
        <th> designation </th>
        <th> role </th>
        <th> Actions </th>

    </tr>
    
     <?php
      if(!mysqli_num_rows($result))
      {?> <td> No Pending Requests </td>
      <?php }
      else
    {
     // LOOP TILL END OF DATA
     while($row=$result->fetch_assoc())
     { $email=$row['email'];
 ?>
    <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['role'];?></td>
                <td> <form method="post" action="pending.php">
                    <input type="hidden" name="id" value="<?php echo $row['email'];?>"/>
                    <input type="submit" name="approve" id="approve" value="accept">
                    <button name="reject" id="reject" class="reject" data-email='<?php echo "$email"; ?>' >REJECT</button></td>
            </tr>
            <?php
                }
            }
            ?>




</table>

</body>
<?php
    if(isset($_POST['approve']))
    {
        include('connect.php');
        $id=$_POST['id'];
        $query="update `users` set status='approved' where email='$id' ";
        $result=mysqli_query($conn,$query);
        

    }
    
    ?>
</html>
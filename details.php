<?php require 'partials/_dbconnect.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$id=$_GET['u_id'];
//echo $id;

$sql="SELECT *FROM `user`  WHERE u_id='$id'";
$result=mysqli_query($conn,$sql);
?>
<ul>
<p><a href="user.php">BACK TO USER</a></p>

<?php
if(mysqli_num_rows($result)>0)
{
while($user=mysqli_fetch_assoc($result)){
    ?>
    <li><strong>ID:</strong> <?php echo $user['u_id'];?></li>
    <li><strong>USERNAME:</strong> <?php echo $user['username'];?></li>
    <li><strong>EMAILID:</strong> <?php echo $user['email'];?></li>

<?php
}
}
else{
    echo '0 results';
}
?>
</ul>
    
</body>
</html>
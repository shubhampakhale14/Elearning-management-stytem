<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="updatecss.css">

</head>
<body>
    
</body>
</html>





<?php

require 'partials/_dbconnect.php';
$id=$_GET['u_id'];
//$sql12="DELETE FROM user WHERE u_id=`$id`";
$sql12="DELETE FROM `user` WHERE `user`.`u_id` = '$id'";
if(mysqli_query($conn,$sql12))
{
    header('Location:user.php');
}
else{
    echo "Error deleting record:".mysqli_error($conn);
}

?>
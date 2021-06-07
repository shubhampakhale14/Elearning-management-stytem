<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    
    $username = $_POST["username"];
    $email=$_POST["email"];
    //$existsql1="INSERT INTO user('username','email') values ('$username','$email')";
      $existsql1="INSERT INTO `user` (`username`, `password`,`email`, `date`) VALUES ( '$username','$password','$email',current_timestamp())";
    if(mysqli_query($conn,$existsql1))
    {
        echo "New record created sucessfully";
    }
    else{
        echo "Error:" .$existsql1. "<br>".mysqli_error($conn);

    }
}
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="updatecss.css">
</head>

<body>

<!-- <img src="img/admin.jpg" height="400" width= "1400" > -->

<form action="" METHOD="post">
<table>
<tr>
<td>USERNAME</td>
<td><input type="text" name="username" required></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit"></td>
<tr>

</table>
</form> 
<p><a href="user.php">user</a></p>




</body>
</html>
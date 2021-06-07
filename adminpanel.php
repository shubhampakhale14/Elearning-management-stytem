<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    include 'partials/_dbconnect.php';
    $adminname = $_POST["adminname"];
    $adminpassword = $_POST["adminpassword"];
	//$existsql="SELECT *FROM `admin` where adminname=`$adminname`"; 
	//$existsql="SELECT *FROM `admin` WHERE adminname='$adminname',adminpassword=`$adminpassword`";
	$existsql="SELECT adminname,adminpassword FROM `admin` WHERE adminname='$adminname'and adminpassword='$adminpassword'";
    $result=mysqli_query($conn,$existsql);
    $numexistrows=mysqli_num_rows($result);
    if($numexistrows>0)
    {

		
       header("location:newadminpanel.php");
	}

    else{
        echo 'error';
	}
	
}
	


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="adminlogin.css">
	<title>Login Page</title>
	<!DOCTYPE html>
<html>

	
	


<body>
<!-- php require 'partials/_nav.php' -->

<form action="/project/adminpanel.php" METHOD="POST">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="adminname"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="adminpassword"
						name="adminpassword" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</body>

</html>

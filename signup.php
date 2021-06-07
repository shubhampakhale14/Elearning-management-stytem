<!-- INSERT INTO `user` (`u_id`, `username`, `password`, `cpassword`, `email`, `date`) VALUES ('1', 'shubhamp', 'shub14', 'shub14', 'shubham@gmail.com', 'current_timestamp()'); -->
<?php
$showAlert = false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email=$_POST["email"];
    $exists=false;
    $existsql="SELECT *FROM `user` where username='$username'";
    $result=mysqli_query($conn,$existsql);
    $numexistrows=mysqli_num_rows($result);
    if($numexistrows>0)
    {
       // $exists=true;
        $showError="username already exists";
    }
    else{
        //$exists=false;
    
    if(($password == $cpassword) && $exists==false){
        //$hash=password_hash($password,PASSWORD_DEFAULT);
        $hash = password_hash($password,PASSWORD_DEFAULT); 
        $sql="INSERT INTO `user` (`username`, `password`, `email`, `date`) VALUES ( '$username','$hash','$email',current_timestamp())";
        //$sql = "INSERT INTO 'user' ( 'username','password','cpassword','email','date') VALUES ('$username','$password','$cpassword','$email',current_timestamp())";
        $result = mysqli_query($conn,$sql);
        if ($result){
            $showAlert = true;
        }
    } 
    else{
        $showError="password do not match ";
    }
}

}

    
?>



<head>

    <!doctype html>
    <html lang="en">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>SignUp</title>
        <!-- <style>
        div{
        
            background-image:url("/project/img/signup.jpg")
        }
        
            </style> -->
            

    </head>

<body>
    <?php require 'partials/_nav.php' ?>
     <!-- <img src="/project/img/signup.JPG" alt="" width="600" height="620" style="float:right"> 
   -->


    <?php
    if($showAlert)
    {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>';
    }
    


     if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> '; 
    }
    ?>


    <div class="container">
    <!-- <img src="/project/img/card-6.jpg"> -->
    

        <h1 class="text-center">Signup to our website</h1>
        <form action="/project/signup.php" METHOD="POST">
            <div class="form-group col-md-6">
                <i class="fa fa-user" aria-hidden="true"></i>
                <label for="username">username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group col-md-6">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group col-md-6">
            <i class="fa fa-lock" aria-hidden="true"></i>
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
            </div>

            <div class="form-group col-md-6 ">
            <i class="fa fa-envelope" aria-hidden="true"></i>
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            

            <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
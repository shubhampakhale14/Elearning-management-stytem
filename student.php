<?php require 'partials/_dbconnect.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">INFORMATION</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">STUDENTINFORMATION</a></li>
                        


                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading">courses list</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>u_id</th>
                            <th>username</th>
                            
                        </tr>
                        <?php
                    $sql="SELECT * FROM `user`";
                        
                        
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
{
while($user=mysqli_fetch_assoc($result)){
    ?>

                        <tr>
                            <td><?php echo $user['u_id'];?></td>
                            <td><?php echo $user['username'];?></td>
                            
                            


                        </tr>
                        <?php

}
}
else{
    echo '0 results';
}
    ?>
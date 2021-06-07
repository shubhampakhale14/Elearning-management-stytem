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
                    <div class="panel-heading">ENROLLED</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">ENROLLED</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading">ENROLLED COURSE</div>
                    <div class="panel-body">
                        <form action="" method="POST">
                        <div class="form-group">
                                <input type="text" class="form-control input-sm" name="u_id" placeholder="u_id" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="course_id" placeholder="course_id" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="mobileno" placeholder="mobileno" required>
                            </div>
                            
                            <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-success" value="enrolled" name="enrolled">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
if(isset($_POST['enrolled']))
{
    $u_id=$_POST['u_id'];
    $course_id=$_POST['course_id'];
    $mobileno=$_POST['mobileno'];
    $sql="INSERT INTO `enrolled` (`u_id`, `course_id`, `mobileno`) VALUES ( '$u_id','$course_id','$mobileno')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert(' enrolled successfully');</script>";
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
}
?>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
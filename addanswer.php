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
                    <div class="panel-heading">courses</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="addanswer.php">ADD ANSWER</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading">Add answer</div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="a_id" placeholder="a_id" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="answer" placeholder="answer" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" name="ans_id" placeholder="ans_id" required>
                            </div>
                            <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-success" value="addanswer" name="addanswer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
if(isset($_POST['addanswer']))
{
    $a_id=$_POST['a_id'];
    $answer=$_POST['answer'];
    $ans_id=$_POST['ans_id'];
    $sql="INSERT INTO answers(a_id,answer,ans_id) values('$a_id','$answer','$ans_id')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('New course added successfully');</script>";
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
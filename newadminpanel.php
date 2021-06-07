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
                        <li class="list-group-item"><a href="addcourse.php">ADD NEW COURSE</a></li>
                        <li class="list-group-item"><a href="studentdetails.php">View Student Information</a></li>
                        <li class="list-group-item"><a href="newtrigger.php">Old_course</a></li>


                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading">courses list</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>course_id</th>
                            <th>course_name</th>
                            <th>Details</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                    $sql="SELECT * FROM `courses`";
                        
                        
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
{
while($courses=mysqli_fetch_assoc($result)){
    ?>

                        <tr>
                            <td><?php echo $courses['course_id'];?></td>
                            <td><?php echo $courses['course_name'];?></td>
                            <!-- <td><a href="#" class="btn btn-block btn-xs btn-info">Details</a></td> -->
                            <td><a href="newcourseupdate.php" class="btn btn-block btn-xs btn-warning">Edit</a></td>
                            <td><a href="coursedelete.php" class="btn btn-block btn-xs btn-danger">Delete</a></td>

                        </tr>
                        <?php

}
}
else{
    echo '0 results';
}
    ?>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">courses</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="addquestion.php">ADD QUESTION</a></li>


                    </ul>
                </div>
            </div>


            <div class="col-lg-9 col-md-9">
                <div class="panel panel-default">

                    <div class="panel-heading">question list</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>Q_id</th>
                            <th>Course_id</th>
                            <th>Question</th>

                           <!--  <th>Edit</th>
                            <th>Delete</th> -->
                        </tr>
                        <?php
                    $sql="SELECT * FROM `questions`";
                        
                        
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
{
while($questions=mysqli_fetch_assoc($result)){
    ?>

                        <tr>
                            <td><?php echo $questions['q_id'];?></td>
                            <td><?php echo $questions['course_id'];?></td>
                            <td><?php echo $questions['question'];?></td>

                            <!-- <td><a href="#" class="btn btn-block btn-xs btn-info">Details</a></td> -->
                            <!-- <td><a href="#" class="btn btn-block btn-xs btn-warning">Edit</a></td>
                            <td><a href="#" class="btn btn-block btn-xs btn-danger">Delete</a></td> -->

                        </tr>
                        <?php

}
}
else{
    echo '0 results';
}
    ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
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

                    <div class="panel-heading">courses list</div>
                    <table class="table table-bordered">
                        <tr>
                            <th>aid</th>
                            <th>answer</th>
                            <th>Ans_id</th>
                            <!-- <th>Edit</th>
                            <th>Delete</th> -->
                        </tr>
                        <?php
                    $sql="SELECT * FROM `answers`";
                        
                        
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
{
while($answers=mysqli_fetch_assoc($result)){
    ?>

                        <tr>
                            <td><?php echo $answers['a_id'];?></td>
                            <td><?php echo $answers['answer'];?></td>
                            <td><?php echo $answers['ans_id'];?></td>

                            <!-- <td><a href="#" class="btn btn-block btn-xs btn-warning">Edit</a></td>
                            <td><a href="#" class="btn btn-block btn-xs btn-danger">Delete</a></td>
 -->
                        </tr>
                        <?php

}
}
else{
    echo '0 results';
}
    ?>
                    </table>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
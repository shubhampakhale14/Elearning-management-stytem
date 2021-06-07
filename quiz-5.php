<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>welcome</title>
</head>

<body>
    <?php require 'partials/_dbconnect.php' ?>
    <div class="container">
        <br>
        <h1 class="text-center text-primary">Welcome to Quiz section</h1></br>
        <h2 class="text-center text-primary">welcome </h2><br>
        <div class="col-lg-8 m-auto d-block">

            <div class="card">
                <h3 class="text-center card-header">welcome,you to select only one out of 4,Best of luck :)</h3>
            </div><br>
            <form action="result-5.php" method="post">
                <?php
                for($i=21;$i<26;$i++)
                {
   //$sql="select *from 'questions' where q_id=$i and course_id=1";
   $sql="SELECT * FROM `questions` WHERE q_id=$i";
   $query=mysqli_query($conn,$sql);
   while($rows=mysqli_fetch_array($query) ){
     ?>
                <div class="card">
                    <h5 class="card-header"><?php echo $rows['question']?> </h5>
                    <?php
    // $sql="select *from answers where ans_id=$i";
    $sql="SELECT * FROM `answers` where ans_id=$i";
    $query=mysqli_query($conn,$sql);
    while($rows=mysqli_fetch_array($query) ){ 

     ?>
                    <div class="card-body">
                        <input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['a_id'];?>">
                        <?php echo $rows['answer'];?>

                    </div>
                    <?php

    }
  }
}
   
   ?>
                    <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">

            </form>
        </div>
    </div><br><br>

    <div>
        <a href="logout.php" class="btn btn-primary m-auto d-block">logout<a>
    </div><br>
    <div>
    <h5 class="text-center">©2020Elearning</h5>
    </div><br><br>
    

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
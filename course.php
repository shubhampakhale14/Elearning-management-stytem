<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>courses</title>
</head>

<body>
    <?php  require 'partials/_nav.php' ?>
    <?php require 'partials/_dbconnect.php' ?>
    

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="slider1.jpg" alt="First slide">
            </div>
            <!-- <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/1600x300/?programmer" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/1600x300/?coding" alt="Third slide">
            </div> -->
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> -->
        <!-- <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </div>
    <div class="container my-4">
        <h2 class="text-center-my-4">welcome to Elearning-system</h2>
        <div class="row my-4">
        <!-- fetch all the course -->
        <?php
        //$sql="SELECT * FROM `courses' where course_id in(1,2)";
        $sql="SELECT * FROM `courses`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result))
        {
          //echo $row['course_id'];
          //echo $row['course_name'];
          $id=$row['course_id'];
          $course=$row['course_name'];
          $desc=$row['course_description'];

        
           echo' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="img/card-'.$id. '.jpg" class="card-img-top">
                
                    <div class="card-body">
              
                    <a href="enroll.php" class="btn btn-success">Enrolled</a>
                        <p class="card-text">'.$desc.'</p>
                        <a href="courses/course-'.$id. '.php" class="btn btn-primary">Go TO TUTORAIL</a>
                        
                          
                    </div>
                </div>

            </div>';
        }
      
      ?>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>


</body>

</html>
<!-- <h5 class="card-title"><a href="/project/quiz-'.$id.'.php"> '.$course.'</a></h5>  -->
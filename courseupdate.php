<?php require 'partials/_dbconnect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="updatecss.css">
</head>

<body>

    <?php
$cid=$_GET['course_id'];
//echo $id;

$sql="SELECT *FROM `courses`  WHERE course_id='$cid'";
//$sql="SELECT *FROM `user`  WHERE u_id='$id'";
$result=mysqli_query($conn,$sql);
?>

    <p><a href="user.php">BACK TO USER</a></p>
    <form action="" METHOD="post">

        <?php
if(mysqli_num_rows($result)>0)
{
while($courses=mysqli_fetch_assoc($result)){
    ?>

        <table>
            
            <tr>
                <td>COURSE_NAME</td>
                <td><input type="text" name="course_name" value="<?php echo $courses['course_name'];?>" required></td>
            </tr>
            <tr>
                <td>COURSE_DESCRIPTION</td>
                <td><input type="text" name="course_description" value="<?php echo $courses['course_description'];?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"></td>
            <tr>

        </table>

        <?php
}
}
else{
    echo '0 results';
}
?>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        //$course_id = $_POST["course_id"];
        $course_name=$_POST["course_name"];
        $course_description=$_POST["course_description"];

        //$existsql1="UPDATE USER SET username='$username',email='$email' WHERE u_id='$id'";
        $existsql1="UPDATE courses SET course_name = '$course_name',course_description ='$course_description' WHERE course_id = '$cid'";
          //$existsql1="UPDATE SET courses course_name='$course_name',course_description='$course_description' WHERE u_id='$cid'";
          //$existsql1="UPDATE `COURSES` SET course_name = '$course_name', course_description = '$course_description` where   `courses`.`course_id`= `$cid`";
          if(mysqli_query($conn,$existsql1))
    {
        header('location:user.php');
    }
    else{
        echo "Error:" .$existsql1. "<br>".mysqli_error($conn);

    }
        
    }
        




    ?>


</body>

</html>

<?php
require 'partials/_dbconnect.php';
$cid=$_GET['course_id'];
$sql13="DELETE FROM `courses` WHERE `courses`.`course_id` = '$cid'";
if(mysqli_query($conn,$sql13))
{
    header('Location:newadminpanel.php');
    
}
else{
    echo "Error deleting record:".mysqli_error($conn);
}
?>


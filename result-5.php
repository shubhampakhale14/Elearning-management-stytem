<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'partials/_dbconnect.php';
if(isset($_POST['submit']))
{
    if(!empty($_POST['quizcheck']))
    {
        $count=count($_POST['quizcheck']);
        
        echo "<h2>out of 5,you have selected </h2> ".$count. " options";
    
        $result=0;

        $i=21;
        $selected=$_POST['quizcheck'];
        print_r($selected);
        $sql="select *from questions where q_id between 21 and 25";
        $query=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($query))
        {
            print_r($rows['ans_id']);
            $checked=$rows['ans_id']==$selected[$i];
            if($checked)
            {
                $result++;
            }
            $i++;
            
        }
        
        echo "<h2><br> ur total score is</h2>".$result;
        
    }
}

?>
</body>
</html>

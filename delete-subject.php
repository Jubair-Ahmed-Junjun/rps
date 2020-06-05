<?php
if(isset($_GET['id']));
{
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','rps_db');
    $sql="DELETE FROM subjects WHERE id = $id";
    $result = mysqli_query($con,$sql);
    if($result==TRUE)
    {
        header('location:view-subject.php');
    }
    else{
        echo "Error :".mysqli_error($con);
    }
}
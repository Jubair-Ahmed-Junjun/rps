<?php
$message='';

if(isset($_POST['update']))
{
    echo "<pre>";
    print_r($_POST);
    $id=$_POST['id'];
    $subject_name=$_POST['subject_name'];
    $code=$_POST['code'];
    $credit=$_POST['credit'];
    $semester_id=$_POST['semester_id'];
    $con=mysqli_connect('localhost','root','','rps_db');
    $sql="UPDATE subjects SET subjects_name='$subject_name',code='$code',credit='$credit',semester_id=$semester_id WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result===TRUE)
    {
        header('location:view-subject.php');
    }
    else{
        echo "Error :".mysqli_error($con);
    }

}
if(isset($_POST['cancel'])){
    header('location:view-subject.php');
}

?>
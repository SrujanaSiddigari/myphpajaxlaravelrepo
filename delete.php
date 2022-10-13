<?php
include 'dbconnect.php';
$id = $_GET['delete_id'];
// echo $id;
$query = "DELETE from `student` where id = $id";
$res = mysqli_query($con,$query);
if($res){
    header('location:display.php');
}
else {
    die(mysqli_error($con));
}
?>

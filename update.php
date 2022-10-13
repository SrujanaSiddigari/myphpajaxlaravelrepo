//this is update operation
<?php
include 'dbconnect.php';
$id= $_GET['updted_id'];
// echo $id;
$query = "SELECT * from `student` where id = $id";
$ew = mysqli_query($con,$query);
$ews = mysqli_fetch_assoc($ew);
$name = $ews['name'];
$email = $ews['email'];
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email = $_POST['email'];
$query = "UPDATE student set name ='$name', email = '$email' where id= $id";
$sql = mysqli_query($con,$query);
if($sql){
    header('location:display.php');
}else{
    die(mysqli_error($con));
}

}

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
<div class="container mt-5">
<form method="POST">
            <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="name@example.com" name="email" value="<?php echo $email?>">
            </div>
            <div class="text-center">
            <button class="btn btn-primary mb-3" name="submit">Add Student</button>
            </div>
        </form>
</div>
</body>
</html>
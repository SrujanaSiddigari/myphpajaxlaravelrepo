<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
       <div class="container mt-5">
       <!--another way -->
        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            if(empty($_POST['name'])){$errors[] ="Name is required<br>";}
            if(empty($_POST['email'])){$errors[] ="Email is required";}
        //if empty fields are submitted in form
        if(!empty($errors)){
            echo "<div class='alert alert-danger'>";
            foreach($errors as $err){
                echo $err;
            }
            echo "</div>";
        }
         //if values are filled in form
            if(empty($errors)){
                $query = "INSERT into `student`(name,email) VALUES('$name','$email')";
                $sql = mysqli_query($con, $query);
                $message = "Student Saved Successfully";
                echo "<div class='alert alert-success'>" .$message. "</div>";
                header('location:display.php');
            }
        }
        ?>
       <form method="POST">
            <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="name@example.com"name="email">
            </div>
            <div class="text-center">
            <button class="btn btn-primary mb-3" name="submit">Add Student</button>
            </div>
        </form>
       </div>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
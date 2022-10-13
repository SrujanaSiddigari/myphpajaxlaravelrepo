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
    <div class="container-fluid">
        <button class="btn btn-primary mt-5"><a href="create_student.php" class="text-light">add Student</a></button>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $query = "SELECT * from `student`";
                  $res = mysqli_query($con,$query);
                  while($row = mysqli_fetch_assoc($res)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    echo '<tr class="table-light">
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td><button class="btn btn-primary"><a href="update.php?updted_id='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?delete_id='.$id.'" class="text-light">Delete</a></button></td>
                    ';
                  }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
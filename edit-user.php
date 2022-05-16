<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM contacts WHERE id='$id' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add member page</title>
    <!--- Bootstrap --->
    <link href="botstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="h2 text-center alert-success md-4 mt-4 " role="alert"> Edit user </div>

    <form method="POST" action="update-user.php">
        <label>Id:</label>
        <input type="text" name="user_id" class="form-control mb-3" readonly value="<?=$row['id']?>" >
        <label>Name:</label>
        <input type="text" name="fname" class="form-control mb-3" value="<?=$row['fname']?>" >
        <label>Lastname:</label>
        <input type="text" name="lname"  class="form-control mb-3" value="<?=$row['lname']?>"  >
        <label>Phone number:</label>
        <input type="number" name="phoneNumber" class="form-control mb-3"  value="<?=$row['phoneNumber']?>" >
        <input type="submit" value="Update" class="btn btn-success" >
        <a href="Show-all-users.php" class="btn btn-danger"> Cancel </a>
    </form>
    </div>
</body>
</html>
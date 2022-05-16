<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All users page</title>
    <!--- Bootstrap --->
    <link href="botstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body></body>
    <div class="container">
    <div class="h2 text-center alert-success md-4 mt-4 " role="alert">Users infor</div>

    <a href="contact.php" class="btn btn-info mb-2">Add+</a>
<table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>phoneNumber</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $sql = "SELECT * FROM contacts";
        $result = mysqli_query($conn,$sql);
        while($row =mysqli_fetch_array($result)){
        ?>
            <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["fname"]?></td>
            <td><?=$row["lname"]?></td>
            <td><?=$row["phoneNumber"]?></td>
            <td> <a href="edit-user.php?id=<?=$row["id"]?>" class="btn btn-warning mb-2">Edit</a> </td>
            <td> <a href="delete-user.php?id=<?=$row["id"]?>" class="btn btn-danger " onclick="Del(this.href);return false;">Delete</a> </td>

        </tr>
            <?php
        }
        mysqli_close($conn);  //Close connection from db
            ?>
    </table>
    </div>
</body>
</html>

<script>
    function Del(mypage){
        let agree = confirm("Are you sure to delete this user?");
        if(true){
            window.location=mypage;
        }
    }
</script>
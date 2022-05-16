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
    <div class="h2 text-center alert-success md-4 mt-4 " role="alert"> Add user name</div>

    <form method="POST" action="add-user.php">
        <label>Name:</label>
        <input type="text" name="fname" class="form-control mb-3" placeholder="Surname" required >
        <label>Lastname:</label>
        <input type="text" name="lname"  class="form-control mb-3" placeholder="Lastname" required >
        <label>Phone number:</label>
        <input type="number" name="phoneNumber" class="form-control mb-3" placeholder="Telephone number" required >
        <input type="submit" value="submit" class="btn btn-success" >
        <a href="Show-all-users.php" class="btn btn-danger"> Cancel </a>
    </form>
    </div>
</body>
</html>
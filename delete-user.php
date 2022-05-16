<?php
include 'connect.php';

$ids=$_GET['id'];
$sql="DELETE FROM contacts WHERE id='$ids' ";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('User has deleted');</script>";
    echo "<script>window.location='Show-all-users.php';</script>";
}else{
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('Something wrong, please try agin!');</script>";
}
mysqli_close($conn);
?>


// Delete page do not finish yet, I need to check the btn-delete again //
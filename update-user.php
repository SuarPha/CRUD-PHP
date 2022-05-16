<?php
include 'connect.php';

$id = $_POST['user_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$telephone = $_POST['phoneNumber'];

$sql = "UPDATE contacts set fname='$fname', lname= '$lname', phoneNumber='$telephone' WHERE id='$id' ";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('User has been updated successfuly!');</script>";
    echo "<script>window.location='Show-all-users.php';</script>";
}else{
    echo "<script>alert('Something wrong, please try agin!');</script>";
}
mysqli_close($conn);
?>
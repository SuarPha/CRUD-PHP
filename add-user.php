<?php

require_once 'connect.php';

$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$phone = $_POST['phoneNumber'];


$sql = "INSERT INTO contacts(fname, lname, phoneNumber) VALUES ('$f_name','$l_name','$phone') ";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Insert user done');</script>";
    echo "<script>window.location='Show-all-users.php';</script>";
}else{
    echo "<script>alert('Something wrong, please try agin!');</script>";
}
mysqli_close($conn);
?>
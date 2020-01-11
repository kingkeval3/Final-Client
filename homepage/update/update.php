<?php
include "../../Database.php";
$db=new Database();
$con=$db->open_connection();
session_start();
$sess = $_SESSION['useremail'];
//$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "update logsignup set email='$email', password='$password', c_password='$password' where uname = '$sess'";
$result = $con->query($sql);
if($result) {
    echo "<script>alert('Your Profile has been Updated!');
        window.location.href='update.html';</script>";
}else {
    echo "<script>alert('Something went wrong. Try again');
    window.location.href='update.html';</script>";
}

?>
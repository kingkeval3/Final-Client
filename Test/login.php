<?php
session_start();
include "../utilities/Database.php";
$db=new Database();
$con=$db->open_connection();
$useremail = $_GET['useremail'];
$password = $_GET['password'];
$_SESSION['useremail'] = $useremail;
$query="select * from member where email='$useremail' and password='$password'";
$result=$con->query($query);
$row = $result->fetch_row();
if($row){
    header("Location:../views/Home.php");
}
    else
    header("Location:../views/signup.php");
?>
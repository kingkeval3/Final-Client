<?php
//session_start();
include "../Database.php";
$db=new Database();
$con=$db->open_connection();
$uname = $_POST['uname'];
$pass = $_POST['pass'];
//$_SESSION['useremail'] = $useremail;


//$query="select * from logsignup where uname='$uname' and password='$pass'";


$query="CALL LoginProcedure('$uname','$pass')";


$result=$con->query($query);
//$row = $result->fetch_row();
if($result->num_rows>0){
    session_start();
    $_SESSION['useremail'] = $uname;
    header("Location:../homepage/index.php");
}
    else
    header("Location:login.html");
?>
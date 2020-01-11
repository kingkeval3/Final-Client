<?php
//session_start();
include "../Database.php";
$db=new Database();
$con=$db->open_connection();
$uname = $_POST['uname'];
$pass = $_POST['pwd'];
//$_SESSION['useremail'] = $useremail;
$query="select * from admin where uname='$uname' and pwd='$pass'";
$result=$con->query($query);
$row = $result->fetch_row();
if($row){

    session_start();
    $_SESSION['admin'] = $uname;

    echo "<script type='text/javascript'>alert('Welcome Admin! You have all the backdoor access to all the Client Information');
    window.location='../admin panel/panel.php';
    </script>";
}
    else
    echo "<script type='text/javascript'>alert('Try Again...');
    window.location='admin.html';
    </script>";
?>

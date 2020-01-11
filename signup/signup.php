<?php
    include "../Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
  //  $cpass = $_POST['cpass'];
  //  $date = date('Y-m-d');


    $query="insert into logsignup values('$uname','$email','$pass');";
    $result = $con->query($query);
    if($result){

      echo "<script type='text/javascript'>alert('Hello there, Welcome to MP Studio...');
      window.location='../homepage/index.php';
      </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('Try Again with proper Credentials...');
      window.location='signup.html';
      </script>";
    
    }

?>
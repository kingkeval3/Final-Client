<?php
    include "../Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
  //  $date = date('Y-m-d');
   
    $query="insert into pedit values('$name','$email','$msg');";
    $result = $con->query($query);
    if($result){
        echo "<script type='text/javascript'>alert('Thanks, We will try our best with your photo and send it back to your mail...');
        window.location='pedit.html';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>alert('OOPS...Something Went Wrong, Please Try Again...!');
        window.location='pedit.html';
        </script>";
    }

?>
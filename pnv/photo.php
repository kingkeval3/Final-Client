<?php
    include "../Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $type = $_POST['type'];
  //  $date = date('Y-m-d');
   
    $query="insert into photo values('$name','$email','$date','$type');";
    $result = $con->query($query);
    if($result){
        echo "<script type='text/javascript'>alert('Photo Session Almost Booked! We will send you a confirmation Email regarding this...');
        window.location='photo.html';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>alert('OOPS...Something Went Wrong, Please Try Again...!');
        window.location='photo.html';
        </script>";
    }

?>
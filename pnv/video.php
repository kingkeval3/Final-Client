<?php
    include "../Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $name = $_GET['name'];
    $email = $_GET['email'];
    //$date = $_POST['date'];
    $type = $_GET['type'];
   $date = date('Y-m-d');
   
    $query="insert into video values('$name','$email','$date','$type');";
    $result = $con->query($query);
    if($result){
        echo "<script type='text/javascript'>alert('Video Session Almost Booked! We will send you a confirmation Email regarding this...');
        window.location='video.html';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>alert('OOPS...Something Went Wrong, Please Try Again...!');
        window.location='video.html';
        </script>";
    }

?>
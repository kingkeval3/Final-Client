<?php
    include "../Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $num = $_POST['num'];
    $plc = $_POST['plc'];
  //  $date = date('Y-m-d');
   
    $query="insert into contact values('$name','$name','$email','$num','$plc');";
    $result = $con->query($query);
    if($result){
      echo "<script type='text/javascript'>alert('Thanks for the Info, We will get back to you ASAP!');
        window.location='sreg.html';
        </script>";
    }
    else{
      echo "<script type='text/javascript'>alert('OOPS! Try Again...');
      window.location='sreg.html';
      </script>";
    }

?>
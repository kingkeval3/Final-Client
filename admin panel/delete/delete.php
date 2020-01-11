<?php

// session_start();
// include "../../Database.php";
// $db=new Database();
// $con=$db->open_connection();
// $email = $_POST['email'];
// $del="DELETE FROM logsignup WHERE email = ?";
// $delete = $con->prepare($del);
// $delete->bind_param('i', $email);
// $delete->execute();
// if($delete->affected_rows>0) {
//     echo "<script>alert('User Account Deleted Successfully!');
//         window.location.href='delete.html';</script>";
// }else {
//     echo "<script>alert('Failed! Please Try Again');
//             window.location.href='delete.html';</script>";
// }

include "../../Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $uname = $_POST['uname'];
  //  $date = date('Y-m-d');


    $query="DELETE FROM logsignup WHERE uname='$uname'";
    $result = $con->query($query);
    if($result){

      echo "<script type='text/javascript'>alert('User Account Deleted Successfully');
      window.location='delete.html';
      </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('OOPS! Please Try Again...');
      window.location='delete.html';
      </script>";
    
    }

?>

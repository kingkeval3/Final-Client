<?php

$USN = $_POST['USN'];
$password = $_POST['password'];

if($USN == null || $password == null) {
    $message = "Please enter Username and Password";
    echo "<script> 
            alert('$message');
            window.location.href='../view/login.php';
          </script>";
    exit();
}

// encrypt password.
$encryptedPassword = md5($password);
// sql to fetch the user.
$validateUserSql = "SELECT * FROM appusers WHERE USN = '$USN' and password = '$encryptedPassword'";

$dbConnection = mysqli_connect('localhost', 'root', '', 'feedback');
$objAppuser = $dbConnection->query($validateUserSql);
if($objAppuser)
{
    $objAppusersDb = $objAppuser->fetch_assoc();
}

if($objAppusersDb){
    // Put all the required values into session.
    session_start();
    $_SESSION['UserId'] = $objAppusersDb['UserId'];
    $_SESSION['UserName'] = $objAppusersDb['FirstName']." ".$objAppusersDb['LastName'];
    $_SESSION['BranchId'] = $objAppusersDb['BranchId'];
    $_SESSION['AccessLevelId'] = $objAppusersDb['AccessLevel'];

    // Redirect to
    header("Location: ../view/feedback.php");
    exit();
}
else{
    $message = "Incorrect Username or Password";
    echo "<script> 
            alert('$message');
            window.location.href='../view/login.php';
          </script>";
    exit();
}
?>
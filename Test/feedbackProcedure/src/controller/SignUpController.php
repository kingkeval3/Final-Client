<?php
/**
 * Created by PhpStorm.
 * User: Harshith
 * Date: 3/10/2018
 * Time: 8:08 PM
 */

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobileNumber'];
$branchId = $_POST['branchId'];
$USN = $_POST['usn'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// check if the password matching
if($password !== $confirmPassword)
{
    $message = "Passwords are not matching";
    echo "<script> 
            alert('$message');
            window.location.href='../view/signUp.php';
          </script>";
    exit();
}

$dbConnection = mysqli_connect('localhost', 'root', '', 'feedback');
$fetchByUSNSql = "SELECT * FROM appusers WHERE USN = '$USN'";

$objAppuser = $dbConnection->query($fetchByUSNSql);
if($objAppuser->num_rows > 0)
{
    $message = "USN already exists in the system";
    echo "<script> 
            alert('$message');
            window.location.href='../view/signUp.php';
          </script>";
    exit();
}

// Save the user if username doesnot exist
// encrypt the password.
$encryptedPassword = md5($password);

// sql to insert user.
$insertUserSql = "INSERT INTO appusers (USN, FirstName, LastName, PhoneNumber, Email, Password, BranchId) VALUES ('$USN', '$firstName', '$lastName', '$mobileNumber', '$email', '$encryptedPassword', '$branchId')";

$registerUserResult = $dbConnection->query($insertUserSql);

if($registerUserResult)
{
    // Redirect to login
    header("Location: ../view/login.php");
    exit();
}
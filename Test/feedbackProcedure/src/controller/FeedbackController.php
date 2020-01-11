<?php
/**
 * Created by PhpStorm.
 * User: Harshith
 * Date: 3/10/2018
 * Time: 8:34 PM
 */

$feedback = $_POST['feedback'];
$staffId = $_POST['StaffId'];

session_start();
$userId = $_SESSION['UserId'];
$branchId = $_SESSION['BranchId'];

// Insert feedback query
$insertFeedbackSql = "INSERT INTO appfeedback (UserId, FeedbackNotes, BranchId, StaffId) VALUES ('$userId', '$feedback', '$branchId', '$staffId')";

$dbConnection = mysqli_connect('localhost', 'root', '', 'feedback');
$feedbackInsertResult = $dbConnection->query($insertFeedbackSql);

if($feedbackInsertResult){
    session_destroy();
    $message = "Your feedback saved successfully, Thank You";
    echo "<script> 
            alert('$message');
            window.location.href='../view/login.php';
          </script>";
    exit();
}else{
    $message = "Failed to save your feedback, please retry";
    echo "<script> 
            alert('$message');
            window.location.href='../view/feedback.php';
          </script>";
    exit();
}
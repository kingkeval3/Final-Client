<?php
/**
 * Created by PhpStorm.
 * User: subramanyakashyap
 * Date: 16-11-2019
 * Time: 11:51
 */

session_start();
include "../utilities/Database.php";
$db=new Database();
$con=$db->open_connection();
$ordno = $_GET['ordno'];
$del="DELETE FROM order_detail WHERE ordno = ?";
$delete = $con->prepare($del);
$delete->bind_param('i', $ordno);
$delete->execute();
if($delete->affected_rows>0) {
    echo "<script>alert('Order Deleted Successfully!');
        window.location.href='../views/Home.php';</script>";
}else {
    echo "<script>alert('Failed! try again after sometime');
            window.location.href='../views/Home.php';</script>";
}

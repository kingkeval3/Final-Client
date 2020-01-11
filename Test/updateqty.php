<?php
/**
 * Created by PhpStorm.
 * User: sukru
 * Date: 17-11-2019
 * Time: 01:52
 */

include "../utilities/Database.php";
$db=new Database();
$con=$db->open_connection();
session_start();
$ordno = $_SESSION['ordno'];
$qty = $_GET['qty'];
$sql = "update order_detail set qty='$qty' where ordno = '$ordno'";
$result = $con->query($sql);
if($result) {
    echo "<script>alert('Quantity updated Successfully!');
        window.location.href='myorders.php';</script>";
}else {
    echo "<script>alert('Something went wrong. Try again Later');
    window.location.href='myorders.php';</script>";
}
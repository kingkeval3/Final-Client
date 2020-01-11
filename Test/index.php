<?php
$host="localhost";
$user="root";
$pass="";
$database="keval";
$result =  mysqli_connect($host,$user,$pass,$database);
if($result) {
    echo "connected";
}
else {
    echo "Not connected";
}
?>
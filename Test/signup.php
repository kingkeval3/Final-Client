<?php
    include "../utilities/Database.php";
    $db=new Database();
    $con=$db->open_connection();
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $date = date('Y-m-d');
    $phone = $_GET['phone'];
    $country = $_GET['country'];
    $pin = $_GET['pin'];
    $state = $_GET['state'];
    $city = $_GET['city'];
    $address = $_GET['address'];
    $query="insert into member values('$name','$email','$password','$date','$phone','$country','$pin','$state','$city','$address');";
    $result = $con->query($query);
    if($result){
        header("Location:../views/Login.php");
    }
    else{
        echo "<script>alert('Please enter the correct values');</script>";
        header("Location:../views/signup.php");
    }

?>
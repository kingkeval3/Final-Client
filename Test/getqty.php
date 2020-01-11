<?php
/**
 * Created by PhpStorm.
 * User: subramanyakashyap
 * Date: 17-11-2019
 * Time: 01:01
 */
session_start();

$_SESSION['ordno'] = $_GET['ordno'];

echo "<head><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'></head>

<form action='updateqty.php' method='get'>
<center><br>
<h3>Quantity:</h3><br> <input type='number'  class='form-group' name='qty' min='1'/><br><br>
<input type='submit' class='btn btn-primary'>
</center>
</form>";


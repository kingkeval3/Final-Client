<?php
session_start();
if($_SESSION['username']!=1) {
    header("Location: index.html");
}

$sql = "SELECT * FROM contact2";
$con=mysqli_connect("localhost","codebots_root","00000000","codebots_contact");

$result = mysqli_query($con,$sql)or die(mysqli_error());
echo "<head>
<link rel='icon' class='i' href='slash.jpg'>
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no' />
<title>Contact Form Database</title><head>";
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>E-Mail</th><th>Website</th><th>Wordpress</th><th>Date</th></tr>";

while($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
	$website = $row['website'];
	$wordpress = $row['wordpress'];
	$date = $row['date'];
    echo "<tr><td style='width: 200px;'>".$id."</td><td style='width: 200px;'>".$name."</td><td style='width: 500px;'>".$email."</td><td style='width: 200px;'>".$website."</td><td style='width: 200px;'>".$wordpress."</td><td style='width: 200px;'>".$date."</td></tr>";
} 

echo "</table>";
echo "<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child() {
  background-color: #dddddd;
}
</style>";
mysqli_close($con) ;
session_destroy();
?>
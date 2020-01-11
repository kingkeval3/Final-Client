<?php
			//session_start();
			// if($_SESSION['username']!=1) {
			// 	header("Location: index.html");
			// }
			
			$sql = "SELECT * FROM video";
			$con=mysqli_connect("localhost","root","","photoraphy");
			
            $result = mysqli_query($con,$sql)or die(mysqli_error());
            
            echo "<body background='w4.jpg' style='background-size:cover;'>";
			echo "<head>
			<link rel='icon' class='i' href='slash.jpg'>
			<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no' />
			<title>Booked Videography Sessions</title><head>";
			echo "<table>";
			echo "<tr><th>Name</th><th>E-mail</th><th>Date</th><th>Type</th></tr>";
			
			while($row = mysqli_fetch_array($result)) {
				$name = $row['name'];
				$email = $row['email'];
				$date = $row['date'];
				$type = $row['type'];
				// $wordpress = $row['wordpress'];
				// $date = $row['date'];
				echo "<tr><td style='width: 200px;'>".$name."</td><td style='width: 200px;'>".$email."</td><td style='width: 500px;'>".$date."</td><td style='width: 200px;'>".$type."</td></tr>";
			} 
			
            echo "</table> <br> <br>";
            
echo "<center><a href='panel.php'>Back</a></center>";

            echo "<style>
        
            table {
              border-collapse: collapse;
              width: 100%;
              color: white;
            }
            
            th, td {
              padding: 8px;
              text-align: left;
              border-bottom: 1px solid grey;
            }
            
            tr:hover {background-color:grey;}

            a:link, a:visited {
                background-color: grey;
    
                color: white;
                padding: 5px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
              }
              
              a:hover, a:active {
                background-color: black;
              }


            </style>";
			mysqli_close($con) ;
			//session_destroy();
			?>


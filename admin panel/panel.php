
<?php 

session_start();
if(!isset($_SESSION['admin'])){

	header("Location:../admin/admin.html");
}
?>



<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Admin Panel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="index.html">J.K Admin Personnel</a></strong>Only</h1>
				<nav id="nav">
					<ul>
						<li><a href="panel.html">Home</a></li>
						<li><a href="../logout.php">Logout</a></li>
						<!-- <li><a href="generic.html">Generic</a></li>
						<li><a href="elements.html">Elements</a></li> -->
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>Admin Panel</h2>



				<p style="color: red;">WARNING:<br /> Delete the User's Account, Once Deleted not irreversible.</p>

				<ul class="actions">
					<li><a href="delete/delete.html" class="button special big">Delete Data</a></li>
					<!-- <li><a href="update.html" class="button special big">Update Data</a></li> -->
				</ul>



				<p>The following options is to retrieve<br /> all the client/customer information.</p>
				<ul class="actions">
					<li><a href="photor.php" class="button special big">Photoshoot Bookings</a></li>
					<li><a href="videor.php" class="button special big">Videography Bookings</a></li>
					<li><a href="photoshopr.php" class="button special big">Photoshop Requests</a></li>
					<li><a href="contactr.php" class="button special big">Customer Contacts</a></li>
				</ul>

			</section>





		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<!-- <li><a href="#" class="icon fa-twitter"></a></li> -->
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; M.P</li>
						<li>JK<a href="http://templated.co">Studios</a></li>
						<li>Contact <a href="http://unsplash.com">Info</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
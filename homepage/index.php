
<?php 

session_start();
if(!isset($_SESSION['useremail'])){

	header("Location:../login/login.html");
}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>html {
		scroll-behavior: smooth;
	  }</style>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-md-push-5 text-center">
							<div id="colorlib-logo"><a href="index.html"><i class="icon-camera4"></i>J.K Studios</a></div>
						</div>
						<div class="col-md-5 col-md-pull-2 text-right menu-1">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="#gallerys">Gallery</a>      <!--gallery.html--> 
									<!-- <ul class="dropdown">
										<li><a href="#">Gallery 1</a></li>
										<li><a href="#">Gallery 2</a></li>
										<li><a href="#">Gallery 3</a></li>
										<li><a href="#">Gallery 4</a></li>
									</ul> -->
								</li>
								<li><a href="#">Services</a></li>    <!--services.html-->
							</ul>
						</div>
						<div class="col-md-5 text-left menu-1">
							<ul>
								     <!--#-->
								<li><a href="update/update.html">Update Profile</a></li>          <!--about.html-->
								<li><a href="#colorlib-footer">Contact</a></li>         <!--contact.html-->
								<li><a href="../logout.php">Logout</a></li>    
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 800px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=Yz5-mrDBbxU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="animate-box">
								<h1 class="holder"><span>Madan's Photoshoot</span></h1>
								<h2>Classy Rebel Fashion Photoshoot</h2>
								<p>Hello Book one of the following...</p>
					<p><a href="../pnv/photo.html" class="btn btn-primary btn-custom">Photoshoot</a></p>
								<p><a href="../pnv/video.html" class="btn btn-primary btn-custom">Videography</a></p>
								<p><a href="../p_edit/pedit.html" class="btn btn-primary btn-custom">Photo Editing</a></p>
								<p><a href="../sreg/sreg.html" class="btn btn-primary btn-custom">Contact M.P for other services</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-camera4"></i>
							</span>
							<div class="desc">
								<h3>Photography</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-image2"></i>
							</span>
							<div class="desc">
								<h3>Image Processing</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-video3"></i>
							</span>
							<div class="desc">
								<h3>Videography</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-about-flex">
			<div class="col-half about-flex-img animate-box" style="background-image: url(images/about.jpg);"></div>
			<div class="col-half">
				<div class="row">
					<div class="col-md-12 col-md-pull-2 animate-box">
						<div class="about-desc">
							<h2>We Are Madan Photography Studio</h2>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-gallery" id="gallerys">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Gallery</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 no-gutters">
						<a href="images/gallery-1.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-1.jpg" alt="">
							<div class="desc text-center">
								<h2>Studio Clicks</h2>
								<p class="category"><span>Fashion</span></p>
							</div>
						</a>
						<a href="images/gallery-2.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-2.jpg" alt="">
							<div class="desc text-center">
								<h2>Fashion be like</h2>
								<p class="category"><span>Jacket</span> <span>Woman</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-3 no-gutters">
						<a href="images/gallery-3.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-3.jpg" alt="">
							<div class="desc text-center">
								<h2>Authentic ones</h2>
								<p class="category"><span>Jacket</span> <span>Male</span></p>
							</div>
						</a>
						<a href="images/gallery-4.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-4.jpg" alt="">
							<div class="desc text-center">
								<h2>JK defined fashion</h2>
								<p class="category"><span>Fashion</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-3 no-gutters">
						<a href="images/gallery-5.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-5.jpg" alt="">
							<div class="desc text-center">
								<h2>Be cool Do cool</h2>
								<p class="category"><span>Fashion</span></p>
							</div>
						</a>
						<a href="images/gallery-6.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-6.jpg" alt="">
							<div class="desc text-center">
								<h2>Peace</h2>
								<p class="category"><span>Fashion</span></p>
							</div>
						</a>
					</div>
					<div class="col-md-3 no-gutters">
						<a href="images/gallery-7.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-7.jpg" alt="">
							<div class="desc text-center">
								<h2>Madan Photoshoots</h2>
								<p class="category"><span>Fashion</span></p>
							</div>
						</a>
						<a href="images/gallery-8.jpg" class="gallery-img image-popup-link animate-box"><img class="img-responsive" src="images/gallery-8.jpg" alt="">
							<div class="desc text-center">
								<h2>Fashion be like</h2>
								<p class="category"><span>Fashion</span></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Recent Blog</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="#" class="blog-img" style="background-image: url(images/blog-1.jpg);"></a>
							<div class="desc">
								<h2><a href="#">Photoshoot Technique</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
							<div class="admin">
								<p><span><i class="icon-user2"></i> by: Mark Harris</span> <span class="day"><i class="icon-calendar"></i> 30 March 2018</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="#" class="blog-img" style="background-image: url(images/blog-2.jpg);"></a>
							<div class="desc">
								<h2><a href="#">Some tricks in Photoshop for your photo</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
							<div class="admin">
								<p><span><i class="icon-user2"></i> by: Mark Harris</span> <span class="day"><i class="icon-calendar"></i> 30 March 2018</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
							</div>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article class="article-entry">
							<a href="#" class="blog-img" style="background-image: url(images/blog-3.jpg);"></a>
							<div class="desc">
								<h2><a href="#">50 Effects in Photoshop</a></h2>
								<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							</div>
							<div class="admin">
								<p><span><i class="icon-user2"></i> by: Mark Harris</span> <span class="day"><i class="icon-calendar"></i> 30 March 2018</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span></p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div> -->

		<div id="colorlib-instagram">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 colorlib-heading text-center animate-box">
					<h2><i class="icon-instagram"></i> Instagram</h2>
				</div>
			</div>
			<div class="row">
				<div class="instagram-entry animate-box">
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-1.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-2.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-3.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-4.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-5.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-6.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-7.jpg);">
					</a>
					<a href="#" class="instagram text-center" style="background-image: url(images/insta-8.jpg);">
					</a>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About JK Photography</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Home</a></li>
								<li><a href="#"><i class="icon-check"></i> Gallery</a></li>
								<li><a href="#"><i class="icon-check"></i> About</a></li>
								<li><a href="#"><i class="icon-check"></i> Blog</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
								<li><a href="#"><i class="icon-check"></i> Privacy</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Recent Blog</h4>
						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(images/blog-1.jpg);">
							</a>
							<div class="desc">
								<h2><a href="#">Photoshoot Technique</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
<!--blog.html-->						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(images/blog-2.jpg);">
							</a>
							<div class="desc">
								<h2><a href="#">Camera Lens Shoot</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
						<div class="f-blog">
							<a href="#" class="blog-img" style="background-image: url(images/blog-3.jpg);">
							</a>
							<div class="desc">
								<h2><a href="#">Imahe the biggest photography studio</a></h2>
								<p class="admin"><span>30 March 2018</span></p>
							</div>
						</div>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>SDM Institute of Technology<br> Ujire, 574240</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i>+91 7996547615</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> johnKmjclicks@hotmail.com</a></li>
							<li><a href="#"><i class="icon-location4"></i>www.johnKevalStudios.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small><br> 
								<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>, <a href="http://pexels.com/" target="_blank">Pexels</a></small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


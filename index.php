<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Website is Underconstruction</title>
    <link rel="stylesheet" href="style.css" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>
<?php $baseUrl = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>
<body style="background-image: url('<?php echo $imgSrc = $baseUrl."images/bg".(rand(1,7)).".jpg"; ?>');"> 
	<div class="container">
		<header>
			<div class="branding">
				<div class="logo">
					<a href="#">shefer</a>
				</div><!-- .logo -->
				<div class="navigation">
					<ul>
						<li><a href="#modal">Contact</a></li>
						<li><a href="">WP Themes/Plugins</a></li>
						<li class="active"><a href="">Home</a></li>
					</ul>
				</div><!-- .navigation -->
			</div><!-- .branding -->
		</header>
		<div class="page">
			<div class="hero">
				<div class="hero-title">
					We're Creative Wordpress Studio from Bukidnon <a href="#openmap" class="map">locate us</a>
				</div><!-- .hero-title -->
				<div class="hero-desc">
					<p>Our website is under construction. We'll be here soon with our new and amazing site. Click 'Update me' to get notified.</p>
				</div><!-- .hero-desc -->
				<div class="hero-buttons">
					<a href="#modal" class="button large transparent">Update Me</a>
					<a href="#modal" class="button large transparent">Learn More</a>
				</div><!-- .hero-buttons -->
			</div><!-- .hero -->
		</div><!-- .page -->
		<footer>
			<div class="copyright">
				&copy fershe - All rights reserved
			</div><!-- .copyright -->
			<div class="footer-social">
				<a class="wp" ref=""><i class="fa fa-wordpress"></i></a>
				<a class="fb" href=""><i class="fa fa-facebook"></i></a>
				<a class="tw" href=""><i class="fa fa-twitter"></i></a>
				<a class="gp" href=""><i class="fa fa-google-plus"></i></a>
				<a class="pi" href=""><i class="fa fa-pinterest"></i></a>
			</div><!-- .footer-social -->
		</footer>
	</div><!-- .container -->
	<div id="modal" class="modal box">
		<h1>Contact Us</h1>
		<p>Reply varies differently on timezone.</p>
		<form action="">
			<input type="email" placeholder="Enter your email address" />
			<input type="submit" />
		</form>
		<a href="#close" class="closed">close</a>
	</div><!-- .modal box -->
</body>

</html>

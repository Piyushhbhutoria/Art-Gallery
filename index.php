<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>ARIES ART GALLERY</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/theme.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		<i class="fa fa-bars"></i>
		</button>
		<a class="navbar-brand page-scroll" href="index.php">
		ARIES ART GALLERY </a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<?php include ('menu.php') ?>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Intro Header -->
<header class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="brand-heading">THIS IS ARIES</h1>
				<p class="intro-text">
				WELCOME TO THE ART GALLERY
				</p>
				<a href="#about" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</header>
<!-- About Section -->
<section id="about">
<div class="container content-section text-center">
	<div class="row">
		<h2>ABOUT THE GALLERY</h2>
		<div class="col-lg-8 col-lg-offset-2">
			<p>
				The gallery consists of many arts both modern and vintage. Depending on peoples likings of various arts.<a href="#"></a>
			</p>
		</div>
	</div>
</div>
<?php include('portfolio.php'); ?>
<!-- Contact Section -->
<section id="contact">
<div class="container content-section text-center">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h2>FOLLOW US</h2>
			<p>
				 We Welcome All Comments and Suggestions!
			</p>
			<p>
				<i><a href="artgallery@gmail@gmail.com" style="border-bottom:1px dashed #ccc;">artgallery@gmail.com</a></i>
			</p>
			<ul class="list-inline banner-social-buttons">
				<li>
				<a href="" class="btn btnghost btn-lg"><i class="fa fa-twitter fa-fw"></i><span class="network-name">Twitter</span></a>
				</li>
				<li>
				<a href="" class="btn btnghost btn-lg"><i class="fa fa-facebook fa-fw"></i><span class="network-name">Facebook</span></a>
				</li>
				<li>
				<a href="" class="btn btnghost btn-lg"><i class="fa fa-google-plus fa-fw"></i><span class="network-name">Google+</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>
</section>
<!-- Footer -->
<footer>
<div class="container text-center">
	<p class="credits">
		Copyright &copy;<br/>
		"Art Gallery"
	</p>
</div>
</footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>
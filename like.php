<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ARIES</title>
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
                    <h1 class="brand-heading">Give Likes to your favourite</h1>
                    <p class="intro-text">
                        *WELCOME*
                    </p>
                    <a href="#contact" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Search Section -->
<section id="contact">
    <div class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Select your Entry</h2>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="likeartist.php" class="btn btnghost btn-lg"><i class="fa fa-envelope"></i><span class="network-name">Like Artist</span></a>
                    </li>
                    <li>
                        <a href="likeartwork.php" class="btn btnghost btn-lg"><i class="fa fa-envelope"></i><span class="network-name">Like Artwork</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Footer -->
<?php include('footer.php'); ?>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Contact JavaScript -->
<script src="js/validate.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>
<?php include('config.php') ?>
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
    <style>
        th
        {
            height: 30px;
            width: 500px;
            text-align: center;
        }
        td
        {
            height: 30px;
            width: 500px;
            text-align: center;
        }
        option
        {
            height: 30px;
            width: 500px;
            text-align: center;
        }
    </style>
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
                    <h1 class="brand-heading">Add Piece of Artwork</h1>
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
    <div class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="done">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Thank you!
                    </div>
                </div>
                <form method="post" action="addpieceofartwork.php" id="contactform">
                    <div class="form">
                        <table width="auto" align="center">
                            <tr>
                                <td>
                                    <input type="text" name="wonc" placeholder="WONC">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="poet" placeholder="Poetess">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    $res = mysqli_query($con,"SELECT * FROM artwork")
                                    ?>
                                    <select name="title">
                                        <option value="0"> Select Artist Title</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($res)) {
                                            ?>

                                            <option value="<?php echo $row['Title'] ?>"><?php echo $row['Title'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" id="submit" class="clearfix btn" value="Add">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('chooseentry.php'); ?>

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
<?php include('config.php') ?>

<?php
$title = $_POST['title'];
$name = $_POST['cname'];
$res = mysqli_query($con,"INSERT INTO like_artist(AR_Title,C_Name) VALUES ('$title','name')") or die (mysqli_error());
?>
<?php include('config.php') ?>

<?php
$aid = $_POST['aid'];
$name = $_POST['cname'];
$res = mysqli_query($con,"INSERT INTO like_artist(C_ID,C_Name) VALUES ('$aid','name')") or die (mysqli_error());
?>
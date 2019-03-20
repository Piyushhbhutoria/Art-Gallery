<?php
include ('config.php');
$wonc = $_POST['wonc'];
$poet = $_POST['poet'];
$title = $_POST['title'];
$res = mysqli_query($con,"INSERT INTO piece_of_artwork(WONC, Poetess, AR_Title) VALUES ('wonc','poet','title')") or die (mysqli_error());
?>
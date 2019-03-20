<?php
include ('config.php');
$name = $_POST['name'];
$addr = $_POST['addr'];
$tads = $_POST['tads'];
$gname = $_POST['gname'];
$res = mysqli_query($con,"INSERT INTO customers(Name, Address, TADS, G_Name) VALUES ('$name','$addr','$tads','$gname')") or die (mysqli_error());
?>
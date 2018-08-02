<?php include ('config.php') ?>

<?php
$name = $_POST['name'];
$place = $_POST['place'];
$res = mysqli_query($con,"INSERT INTO gallery(Name, Place) VALUES ('$name','place')") or die (mysqli_error());

?>
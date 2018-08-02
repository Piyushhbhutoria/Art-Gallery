<?php include ('config.php') ?>

<?php
$id = $_POST['id'];
$gnd = $_POST['gnd'];
$birthp = $_POST['birthp'];
$style = $_POST['style'];
$age = $_POST['age'];
$name = $_POST['name'];
$gname = $_POST['gname'];
$res = mysqli_query($con,"INSERT INTO artist (Artist_ID, Gender, Birthplace, Style_Of_Art, Age, Name, G_Name) VALUES ('$id','$gnd','$birthp','$style','$age','$name','$gname')") or die(mysqli_error());

?>
<?php include ('config.php') ?>

<?php
$title = $_POST['title'];
$type = $_POST['type'];
$price = $_POST['price'];
$yiwm = $_POST['yiwm'];
$gname = $_POST['gname'];
$aid = $_POST['aid'];
$res = mysqli_query($con,"INSERT INTO artwork (Title, Type_Of_Art, Prices, YIWM, G_Name, A_ID) VALUES('$title','$type','$price','$yiwm','$gname','aid')") or die (mysqli_error());

?>
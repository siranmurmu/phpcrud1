<?php
$con=mysqli_connect("localhost","root","","phpcrud1");
$id=$_GET['id'];

$del="DELETE FROM users WHERE id='$id'";
$con->query($del);
header("location:view.php");
?>
<?php
$con=mysqli_connect("localhost","root","","phpcrud1");

if(isset($_POST['reg'])){

	$n=$_POST['name'];
	$e=$_POST['email'];
	$p=$_POST['phone'];
	$g=$_POST['gen'];
	if(isset($_POST['subject'])){
	$sub=implode(",", $_POST['subject']);
     }
     else{
     	$sub="";
     }

$fn=$_FILES['pimg']['name'];
$buf=$_FILES['pimg']['tmp_name'];
move_uploaded_file($buf, "profile/".$fn);

$ins="INSERT INTO users SET name='$n',email='$e',phone='$p',gender='$g',subject='$sub',propic='$fn'";
$con->query($ins);

header("location:view.php");
}

?>
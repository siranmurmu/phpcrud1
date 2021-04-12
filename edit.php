<h1>Registration</h1>
<?php
      $id=$_GET['id'];
      $con=mysqli_connect("localhost","root","","phpcrud1");
      $sel="SELECT * FROM users WHERE id='$id'";
      $rs=$con->query($sel);

     while($row=$rs->fetch_assoc()){
    ?>
<form action="update.php" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<p>Name</p>
	<p><input type="text" name="name" value="<?php echo $row['name']; ?>"></p>
	<p>Email</p>
	<p><input type="email" name="email" value="<?php echo $row['email']; ?>"></p>
    <p>Phone</p>
	<p><input type="number" name="phone" value="<?php echo $row['phone']; ?>"></p>
	<p>Gender</p>

	<p><input <?php if($row['gender']=="male"){ echo "checked"; }?> type="radio" name="gen" value="male"> Male</p>

	<p><input <?php if($row['gender']=="female"){ echo "checked"; }?>  type="radio" name="gen" value="female"> Female</p>

	<p>Subject</p>
	<p><input type="checkbox" name="subject[]" value="C">C</p>
	<p><input type="checkbox" name="subject[]" value="C++">C++</p>
	<p><input type="checkbox" name="subject[]" value="Java">Java</p>
	
	<p>Profile pic</p>
	<p><input type="file" name="pimg"></p>

    
	<p><input type="submit" name="reg" value="Edit"></p>
</form>

<?php  } ?>
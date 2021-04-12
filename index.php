<h1>Registration</h1>

<form action="process.php" method="post" enctype="multipart/form-data" >
	<p>Name</p>
	<p><input type="text" name="name"></p>
	<p>Email</p>
	<p><input type="email" name="email"></p>
    <p>Phone</p>
	<p><input type="number" name="phone"></p>
	<p>Gender</p>
	<p><input type="radio" name="gen" value="male"> Male</p>
	<p><input type="radio" name="gen" value="female"> Female</p>
	<p>Subject</p>
	<p><input type="checkbox" name="subject[]" value="C">C</p>
	<p><input type="checkbox" name="subject[]" value="C++">C++</p>
	<p><input type="checkbox" name="subject[]" value="Java">Java</p>
	<p>Profile pic</p>
	<p><input type="file" name="pimg"></p>

    
	<p><input type="submit" name="reg" value="Register"></p>
</form>
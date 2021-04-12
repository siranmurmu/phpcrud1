<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Users</h2>
  <p>
    <a href="index.php" class="btn btn-primary">Add new</a>
  </p>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Subject</th>
         <th>Image</th>
         <th>Delete</th>
         <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $con=mysqli_connect("localhost","root","","phpcrud1");
      $sel="SELECT * FROM users";
      $rs=$con->query($sel);

     while($row=$rs->fetch_assoc()){
    ?>
      <tr>
        <td><?php  echo $row['name'];?></td>
        <td><?php  echo $row['email'];?></td>
        <td><?php  echo $row['phone'];?></td>
        <td><?php  echo $row['gender'];?></td>
         <td><?php  echo $row['subject'];?></td>
         <td><img src="profile/<?php  echo $row['propic'];?>" style="width:50px; height:50px"/></td>

         <td><a onclick="return confirm('Are you sure?')" href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
         <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
      </tr>

    <?php  } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
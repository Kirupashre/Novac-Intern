<?php
require_once('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Filled Details</h2>
            
  <table class="table table-bordered">
    <thead>
    <tr>
    
    <th>Name</th>
    <th>Email ID</th>
    <th>Gender</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
    </thead>
    <tr>
<tbody>

<?php

$query= "select * from crud";
$result= mysqli_query($con, $query);
if($result){
 
  while($row=mysqli_fetch_assoc($result)){
    $id= $row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $gender= $row['gender'];

    echo ' <tr>
    
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$gender.'</td>
    <td> <a href="edit.php?editid='.$id.'" class="btn btn-primary">Edit</a> </td>
    <td> <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a> </td>
  </tr>';
  }
}

?>

</table>
  </table>
  <form method="post" action="form.php">
<button type="submit" name="submit" class="btn btn-success">Fill New</button> 
</form>
</div>
</body>
</html>

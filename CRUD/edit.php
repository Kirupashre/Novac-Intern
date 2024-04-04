<?php
require_once('config/db.php');
$id=$_GET['editid'];
$sql= "SELECT * FROM crud WHERE id=$id";
$result=mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);
$id= $row['id'];
$name=$row['name'];
$email=$row['email'];
$gender= $row['gender'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $sql= "UPDATE crud SET id=$id, name='$name', email='$email', gender='$gender' WHERE id=$id";
    $results=mysqli_query($con,$sql);
    if($results){
        //include 'update.php';
        header("Location: update.php");
        //echo "Updated Successfully!";
    }else{
        die(mysqli_connect_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.error {color: #FF0000;}
</style>
</head>
<body>

<div class="container">
  <h2>CRUD FORM</h2>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-5">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name;?>">
        <span class="error">* </span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email ID:</label>
      <div class="col-sm-5">          
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>">
        <span class="error">* </span>
      </div>
    </div>
    
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Gender:</label>
      <div class="col-sm-5">          
      <label class="radio-inline"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male</label>
    <label class="radio-inline"><input type="radio"name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female</label>
    <label class="radio-inline"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Others</label>
    <span class="error">* </span>
      </div>
    </div>
    

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-warning">Update</button>
        
      </div>
    </div>
  </form>
  
</div>
</body>
</html>
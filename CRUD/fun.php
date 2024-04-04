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
.form-groupl {
  padding-right: 65px;
}
</style>
</head>

<?php
require_once('config/db.php');

// define variables and set to empty values
// $servername="localhost";
// $username="root";
// $password="";
// $database_name= "form1";

// $conn=mysqli_connect($servername, $username, $password, $database_name);
// if(!$conn){ //phpmyadmin connect of localhost
//     die("Connection Failed:" . mysqli_connect_error()); //die is used to stop in the place where error occurs
// }
//
// define variables and set to empty values
$nameErr = $emailErr = $genderErr  = "";
$name = $email = $gender  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {   
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  // if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  // }
  $email =$_POST["email"] ;
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email = test_input($_POST["email"]);
} else {
    $emailErr = "Invalid email";
}
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

if ((!empty($_POST["name"])) && (!empty($_POST["email"])) && (!empty($_POST["gender"]) )){
    
        
        // $name= $_POST['name'];
        // $email= $_POST['email'];
        // $gender= $_POST['gender'];
    
        $sql_query= "INSERT INTO crud(name, email, gender) 
        VALUES ('$name', '$email', '$gender')";
    
        if(mysqli_query($con, $sql_query)){
            
           // echo "THANK YOU ! <br> New details entry inserted successfully !";
            //include "submit.php";
            header("Location: submit.php");
            echo "<br>";
            
        }
        else {
            echo "Error" . $sql . "" .mysqli_error($conn);
        }
        mysqli_close($conn);
    }





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<body>

<div class="container">
  <h2>CRUD FORM</h2>
  <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-5">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email ID:</label>
      <div class="col-sm-5">          
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
      </div>
    </div>
    
        <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Gender:</label>
      <div class="col-sm-5">          
      <label class="radio-inline"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male</label>
    <label class="radio-inline"><input type="radio"name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female</label>
    <label class="radio-inline"><input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Others</label>
    <span class="error">* <?php echo $genderErr;?></span>
      </div>
    </div>
    

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
  <div class="form-groupl">        
      <div class="col-sm-offset-2 col-sm-10">
      <form method="post" action="view.php">
<button type="submit" name="submit" class="btn btn-info">View Filled Details</button> 
</form>
      </div>
    </div>       
</div>


</body>
</html>

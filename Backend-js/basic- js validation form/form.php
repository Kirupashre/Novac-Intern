<!DOCTYPE html>
<html>
  <title>Form Validation</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<style>
  


</style>
<?php
require_once('cong/db.php');
$name =$phone = $email = $password  =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if ((!empty($_POST["name"])) && (!empty($_POST["phone"])) && (!empty($_POST["email"])) && (!empty($_POST["password"]) )){
    if(isset($_POST['submit'])) //POST wont show anything in the url bar
    {  $name= $_POST['name'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $password= $_POST['password'];
    
        $sql_query= "INSERT INTO fullform(name, phone, email, password) 
        VALUES ('$name', '$phone', '$email', '$password')";
    
        if(mysqli_query($con, $sql_query)){
            
          //  echo "THANK YOU ! <br> New details entry inserted successfully !";
            //include "submit.php";
            header("Location: submit.php");
           
        }
        else {
            echo "Error" . $sql . "" .mysqli_error($con);
        }
        mysqli_close($con);
    }
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


<body>



  <div class="container" >
       <h2>Basic Form Validation In JS</h2>
       <br>
       <form class="form-horizontal" method="post" action="" id="form" name="form">
       <div class="form-group">
           <label class="control-label col-sm-2" for="pwd">Full Name:</label>
           <div class="col-sm-5">          
             <input type="text" class="form-control" id="name" onkeyup="validateName()" placeholder="Enter name" name="name" value="<?php echo $name;?>">
             <span id="nameErr" style="color: red;"> </span>
           </div>
         </div>
         <br>
         
         
         <div class="form-group">
           <label class="control-label col-sm-2" for="pwd">Phone Numer:</label>
           <div class="col-sm-5">          
             <input type="tel" class="form-control" id="phone" onkeyup="validatePhone()" placeholder="Enter phone number" name="phone" value="<?php echo $phone;?>">
             <span id="phoneErr" style="color: red;"> </span>
           </div>
         </div>
         <br>
         <div class="form-group">
           <label class="control-label col-sm-2" for="email">Email:</label>
           <div class="col-sm-5">
             <input type="email" class="form-control" id="email" onkeyup="validateEmail()" placeholder="Enter email" name="email" value="<?php echo $email;?>">
             <span id="emailErr" style="color: red;"> </span>
           </div>
         </div>
         <br>
         <div class="form-group">
           <label class="control-label col-sm-2" for="pwd">Password:</label>
           <div class="col-sm-5">          
             <input type="password" class="form-control" id="password" onkeyup="validatePassword()" placeholder="Enter password" name="password" value="<?php echo $password;?>">
             <span id="passwordErr" style="color: red;"> </span>
           </div>
         </div>
         <br>
         <div class="form-group">        
           <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" name="submit" class="btn btn-success">Submit</button>
           </div>
         </div>
       </form>
     

  </div>









     
  </form>
 

<script src="valid.js"></script>
</body>
</html>
<?php

//echo "THANK YOU ! <br> <br> New details entry inserted successfully !";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Submit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">

<h2>Field Updated successfully !</h2>
<br>
<form method="post" action="view.php">
<button type="submit" name="submit" class="btn btn-info">View Filled Details</button> 
</form>

<form method="post" action="form.php">
<button type="submit" name="submit" class="btn btn-success">Fill New</button> 
</form>

</div>

</body>
</html>
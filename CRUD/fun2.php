<!DOCTYPE html>
<html>
<body>

<?php
// Variable to check
$email = "john.doe@example";

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>

</body>
</html>
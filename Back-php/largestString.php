<!DOCTYPE html>
<html>
<body>
<?php
$food = array("apple", "orange", "lemon"); 
$countf= count($food); //3
$lar=strlen($food[0]); //5
$larf= $food[0]; //apple


for($i=0; $i <= $countf; $i++){
	$length= strlen($food[$i]); 
    if($lar < $length){  
    	$lar= $length;
  		$a = $food[$i]; 	
   }	
}
print_r($a);
?>
</body>
</html>
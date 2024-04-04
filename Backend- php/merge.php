
<!DOCTYPE html>
<html>
<body>
<?php
$arr1 = array(1,2,3,4,5);
$arr2 = array(6,7,8,9,10);
$mearr= array_merge($arr1,$arr2);

for($i=0; $i<= count($mearr); $i++){
  if($mearr[$i]%2==0){
  	$rearr[$i]= $mearr[$i];
  }
  else{
  	$rearr[$i]="' ' ";
  }
}
print_r($rearr);

?>

</body>
</html>
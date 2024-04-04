<!DOCTYPE html>
<html>
<body>

<?php
$arr = array(1,1,2,4,5,7,3);
$counta= count($arr);

for($i=0; $i<=$counta; $i++){
if($arr[$i]%2!=0){
$newarr[]= $arr[$i];
}
}


/*echo "Odd Number from the array:";
foreach ($newarr as $x) {
  echo "$x ";
} */

echo "Odd Number from the array:";
$countn= count($newarr);
for($i=0; $i<=$countn; $i++){
echo $newarr[$i];
}


/*echo "Greatest number from the odd array is: ";
echo(max($newarr));
echo "<br>";
echo "odd space:";
echo $newarr[2];*/


//1157
echo "<br>";
$countn= count($newarr); //4
$lar=$newarr[0];
for($j=0; $j<=$countn; $j++){
if($lar < $newarr[$j] )
$lar= $newarr[$j];
}
echo "Greatest number from the odd array is: ";
echo $lar; 
echo "<br>";
echo $newarr[5];


?>
</body>
</html>



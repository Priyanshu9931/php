<?php

$original_array = array( '1', '2', '3', '4', '5' );
echo 'Original array : ';
foreach ($original_array as $x)
{
echo "$x ";
}

echo "\n";

$inserted_value = '$';

$position = 3;

array_splice( $original_array, $position, 0, $inserted_value );

echo "After inserting $ in the array is : ";
foreach ($original_array as $x)
{
echo "$x ";
}
?><br><br><br>





<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of seven highest temperatures :";
for ($i=($temp_array_length-7); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?><br><br><br>



<?php
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
?>




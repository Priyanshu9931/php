<!DOCTYPE html>
<html lang="en">
<body>

   <?php
   echo "Welcome to the PHP World";
    ?><br><br>



    <?php
    $x = 115;  
    $y = 69;

    echo $x + $y;
    ?><br><br>





    <?php  
    $x = 5;
 
    while($x <= 15) {
     echo "The number is: $x <br>";
  $x++;
    } 
    ?><br>


<?php
if ($marks>=60)
{
	$grade = "First Division";
}
else if($marks>=45)
{
	$grade = "Second Division";
}
else if($marks>=33)
{
	$grade = "Third Division";
}
else
{
	$grade = "Fail";
}

echo "Student grade: $grade";
?><br><br>



<?php
$message_1 = "Hii!!";

$message_2 = "I'm Priyanshu!";

echo $message_1." ". $message_2;
?><br><br>

<?php
$day = "1";

switch ($day) {
 case "1":
 echo "It is Monday!";
 break;
 case "2":
 echo "It is tuesday!";
 break;
 case "3":
 echo "It is Wednesday!";
 break;
 case "4":
 echo "It is Thursday!";
 break;
 case "5":
 echo "It is Friday!";
 break;
 case "6":
 echo "It is Saturday!";
 break;
 case "7":
 echo "It is Sunday!";
 break;
 default:
 echo "Invalid number!";
}
?><br><br>

<?php
$num = 5;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}
echo "The factorial of $num is $factorial";
?><br>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP program using nested for loop that creates a chess board </h2>
    <table width = "270px" cellspacing="0px" cellpadding="0px" border="2px">


    <?php
      for($row=1;$row<=8;$row++)
	  {
        echo "<tr>";
        for($col=1;$col<=8;$col++)
		{
        $total=$row+$col;
        if($total%2==0)
		{
        echo "<td height=30px width=30px bgcolor=#120101></td>";
        }
		else
		{
        echo "<td height=30px width=30px bgcolor=	#FFFFFF></td>";
        }
        }
        echo "</tr>";
     }
        ?>
  </table>
  </body>
  </html>
</body>
</html>
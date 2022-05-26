
<html>  
<body>  
<form method = "post">   
Length of rectangle: <input type="number" name="length"> mtr  
<br><br>   
Width of rectangle: <input type="number" name="width"> mtr <br>   
<input type = "submit" name = "submit" value="Calculate Area & Perimeter">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
$width = $_POST['width'];   
$length = $_POST['length'];   
$area = $width * $length; 
$perimeter = 2*($width + $length); 
echo "Area is $area" ."<br>";
echo "Perimeter is $perimeter";
}   
?> 
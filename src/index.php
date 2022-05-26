<!DOCTYPE html>

<head>
	<title>Simple calculator in PHP</title>
</head>
<?php
 $first_num = $_POST['first_num'];
 $second_num = $_POST['second_num'];
 $operator = $_POST['operator'];
 $result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
  switch ($operator){
    case "+":
    $result = $first_num + $second_num;
    break;
    case "-":
    $result = $first_num - $second_num;
    break;
    case "/":
    $result = $first_num / $second_num;
    break;
    case "*":
    $result = $first_num * $second_num;
    break;
    }
  }
?>
<body>
  <div id= "page-warp">
    <h1> calculator</h1>
    <form action = "" method = "post" id = "form">
    <p><input type = "" name = "first_num" required = "required" value = "<?php echo $first_num; ?>" /> 
    <b>Number 1 </b>
</p>
  <p><input type = "" name = "second_num" required = "required" value = "<?php echo $second_num; ?>" />
  <b>Number 2 </b>
</p>
  <p><input readonly  = "readonly" name = "result" value = "<?php echo $result?>" />
  <b> result </b>
<input type = "submit" name = "operator" value="+" />
<input type = "submit" name = "operator" value = "-" />
<input type = "submit" name = "operator" value = "/" />
<input type = "submit" name = "operator" value = "*" />
</form>
</div>
</html>





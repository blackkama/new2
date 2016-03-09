<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Сложение</title>
</head>
 
<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <input type="text" name="s1" id="" /> &nbsp;
    
    <input type="text" name="s2" id="" /> &nbsp;
 
    <input type="submit" name="sum" id="sum" value="Сложить" />
</p>
 
</form>
 
<?php
$a = $_POST['s1'];
$b = $_POST['s2'];
$c = $a+$b;
echo "Сумма: $c <br>";
?>
 
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>variables</title>
</head>
<body>
<?php
echo '<b>Variables are: </b><br> $a <br> $_c <br> $tot1 <br>';
$a=20;$_c=40.5;
$tot1=$a+$_c;
echo '<br> Sum is ',$tot1;
echo '<br> <b>var_dump($a)</b> ';
var_dump($a);
echo '<b>print_r($_c) </b>';
print_r($_c);
$bvalue=true;
echo '<br><br><b> gettype($bvalue) </b> ',gettype($bvalue);
echo '<br><br><b> gettype($tot1) </b>',gettype($tot1);
$tot1="total";
${$tot1}="$a+$_c";
echo "<br><br> Dynamic Naming ",' $total ',$total,'<br>';
unset($a);
echo gettype($a);
define("cat",3); 
echo "<br><br>Constant cat has value 3";
echo "<br><br>cat=", cat;
?>
</body>
</html>

<html>
<head>
<Title>variables</Title>
</head>
<body>
<?php
echo '<b>Variables are: </b><br> $a <br> $c <br> $tot1 <br>';
$a=8;$_c=23.5;
$tot1=$a+$_c;
echo '<br> Sum is ',$tot1;
echo '<br> <b>var_dump($a)</b> ';
var_dump($a);
echo '<b><br>print_r($_c) </b>';
print_r($_c);
$bvalue=true;
echo '<br><br><b> gettype($bvalue) </b> ',gettype($bvalue);
echo '<br><br><b> gettype($tot1) </b>',gettype($tot1);
$tot1="total";
${$tot1}="$a+$_c";
echo "<br><br> Dynamic Naming ",' $total ',$total,'<br>';
unset($a);
echo gettype($a);
define("Pi",3.141592); 
echo "<br><br>Constant Pi has value 3.141592";
echo "<br><br>Pi=", Pi;
?>
</body>
</html>
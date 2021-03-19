<html>
<head>
<Title>
PHP NUMERIC FUNCTIONS
</Title>
</head>
<body>
<h1>PHP NUMERIC FUNCTIONS</h1>
<?php
if(!isset($_POST["submit"])) {
?><b>
<Form method="POST"action="#">
Enter an integer Number: <input type="text"name="intnum" /><br><br>
Enter a floating point value: <input type="text" name="floatnum"/><br><br>
<input type="submit" name="submit" value="calculate">
</Form></b>
<?php
}
else{
$num=$_POST['intnum'];
$f=$_POST['floatnum'];
echo"<table border=1><tr><th>Operations</th><th>Result</th></tr><tr><td> <b> ";
echo " ceil($f) :</b></td><td>", ceil($f);
echo"</td></tr><tr><td> <b> floor($f) : </b></td><td>", floor($f);
echo"</td></tr><tr><td> <b> absolute($f):</b></td><td>", abs($f);
echo"</td></tr><tr><td> <b> Round of $f to 3 :</b></td><td>", round($f,3);
echo"</td></tr><tr><td> <b> log value of $num :</b></td><td>", log($f);
echo"</td></tr><tr><td> <b> log value of $num base 2:</b></td><td>", log($f,2);
echo"</td></tr><tr><td> <b> exponent value of $num :</b></td><td>", exp($f);
echo"</td></tr><tr><td> <b> Binary value of $num:</b></td><td>", decbin($num);
echo"</td></tr><tr><td> <b> octal value of $num :</b></td><td>", decoct($num);
echo"</td></tr><tr><td> hexadecimal value of $num : </td><td>", dechex($num);
echo"</td></tr><tr><td> <b> Power($num,3) :</b></td><td>", pow($num,3);
echo"</td></tr><tr><td> <b> Performing random functions within the range(-$num,$num): ";
echo "</b></td><td>", rand(-$num,$num);
echo"</td></tr><tr><td> Formatting number : </td><td>", number_Format($f,2,':',',');
echo "</td></tr></table>";
}
?>
</body>
</html>

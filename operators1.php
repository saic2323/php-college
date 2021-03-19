<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
if( !isset($_POST["submit"]) )
{
?>
<Form method="POST"action="operators.php"><br>
<b>
Enter a number1 : <input type="text"name="t1" /> <br><br>
Enter a number 2: <input type="text"name="t2"/><br><br>
<input name="submit" type="submit" value="submit" />
</b>
</Form>
<?php
}
else
{
$n1=$_POST['t1']; $n2=$_POST['t2'];
echo '<center><br><br><b>Arithmetic operations </b></center>';
echo "<br> <b> $n1+$n2 = </b> ",$n1+$n2;
echo "<br> <b> $n1-$n2 = </b>",$n1-$n2;
echo "<br> <b> $n1*$n2 = </b>",$n1*$n2;
echo "<br> <b> $n1/$n2 = </b>",$n1/$n2;
echo '<center><br><b>Relational operations </b></center>';
echo "<br> <b> $n1<$n2 = </b>", $n1<$n2 ? "true":"false";
echo "<br> <b> $n1>$n2 = </b>", $n1>$n2 ? "true":"false";
echo "<br> <b> $n1<=$n2 = </b>", $n1<=$n2 ? "true":"false";
echo "<br> <b> $n1>=$n2 = </b>", $n1>=$n2 ? "true":"false";
echo "<br> <b> $n1===$n2 = </b>",$n1===$n2? "true":"false";
echo "<br> <b> $n1!==$n2 = </b>",$n1!==$n2 ? "true":"false";
echo "<br> <b> $n1==$n2 = </b>", $n1==$n2 ? "true":"false";
echo "<center><br><br><b>Incremental && Decremental operations </b></center>";
echo '<br> <b> ++$n1 = </b>', ++$n1;
echo '<br> <b> $n2-- = </b>', $n2--;
echo '<center><br><br><b>Assignment operations </b></center>';
echo "<br> <b> $n1+=$n2 = </b>", $n1+=$n2;
echo "<br> <b> $n1-=$n2 = </b>", $n1-=$n2;
echo "<br> <b> $n1*=$n2 = </b>", $n1*=$n2;
echo "<br> <b> $n1/=$n2 = </b>", $n1/=$n2;
}
?>
<body>
</body>
</html>

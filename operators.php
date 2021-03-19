<html>
<head>
<Title>operators</Title>
</head>
<body>
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
echo '<br><br><b>Arithmetic operations </b>';
echo "<br> <b> $n1+$n2 = </b> ",$n1+$n2;
echo "<br> <b> $n1-$n2 = </b>",$n1-$n2;
echo "<br> <b> $n1*$n2 = </b>",$n1*$n2;
echo "<br> <b> $n1/$n2 = </b>",$n1/$n2,'<br>';
echo '<br><b>Relational operations </b>';
echo "<br> <b> $n1<$n2 = </b>", $n1<$n2 ? "true":"false";
echo "<br> <b> $n1>$n2 = </b>", $n1>$n2 ? "true":"false";
echo "<br> <b> $n1<=$n2 = </b>", $n1<=$n2 ? "true":"false";
echo "<br> <b> $n1>=$n2 = </b>", $n1>=$n2 ? "true":"false";
echo "<br> <b> $n1===$n2 = </b>",$n1===$n2? "true":"false";
echo "<br> <b> $n1!==$n2 = </b>",$n1!==$n2 ? "true":"false";
echo "<br> <b> $n1==$n2 = </b>", $n1==$n2 ? "true":"false";
echo "<br><br><b>Incremental && Decremental operations </b>";
echo '<br> <b> ++$n1 = </b>', ++$n1;
echo '<br> <b> $n2-- = </b>', $n2--;
echo '<br><br><b>Assignment operations </b>';
echo "<br> <b> $n1+=$n2 = </b>", $n1+=$n2;
echo "<br> <b> $n1-=$n2 = </b>", $n1-=$n2;
echo "<br> <b> $n1*=$n2 = </b>", $n1*=$n2;
echo "<br> <b> $n1/=$n2 = </b>", $n1/=$n2;
}
?>
</body>
</html>
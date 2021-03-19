<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<Form method="post" action="#">
Enter Number: <input type="text" name="t1">*To Find Factorial<br><br>
Enter a String: <input type="text" name="t2"><br><br>
Enter Number: <input type="text" name="t3"><br><br>
<input type="submit" name="submit" value="submit">
</Form>
<?php
if(isset($_POST['submit'])){
$n1=$_POST['t1']; $s=$_POST['t2']; $n2=$_POST['t3'];
?>
<table border="1"><tr><th>FOR LOOP</th><th>While Loop</th><th>DO While Loop</th></tr><tr><td>
<?Php
echo "<b>Factorial</b>"; $f=1;
for($i=2;$i<=$n1;$i++)
$f*=$i;
echo "<br> {$n1}! = $f";
?>
</td><td>
<?php
echo"<b>Checking Whether It is a palindrome</b>";
$i=0;
$j=strlen($s)-1;
while(($i<$j) && $s{$i}==$s{$j}){
$i++;$j--;
}
if($i>=$j)
echo "<br>$s is a palindrome";
else
echo "<br>$s is not a palindrome";
?>
11
</td><td>
<?php
echo"<b>Sum of Digits</b>";
$sum=0;
do{
$rem=$n2%10;
$n2/=10;
$sum+=$rem;
} while($n2>0);
echo "<br> sum = $sum";
}
?>
</td></tr></table>
</body>
</html>

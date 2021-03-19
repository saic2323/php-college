<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<b>I Will Tell Whether a given number is ODD or EVEN ...</b><br><br>
<Form method="post" action="#">
Enter The Number:<input type="number" name="num"><br><br>
<input type ="submit" name ="submit" value="submit"><br><br>
</Form>
<?php
if(isset($_POST['submit'])){
$num=$_POST['num'];
if($num%2==0)
$t="Even Number";
else
$t="Odd Number";
echo "<b> $t </b>";
}
?>
</body>
</html>

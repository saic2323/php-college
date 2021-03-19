<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h2>PHP STRING FUNCTION</h2>
<?php
if(!isset($_POST["submit"])){
?>
<Form method="POST"action="string.php"> <b>
ENTER STRING 1: <input type="text"name="str1" size="30"/><br><br>
ENTER STRING 2: <input type="text"name="str2" size="30" /> <br><br>
<input name="submit" type="submit" value=" submit " /> </b>
</Form>
<?php
}
else{
$s1=$_POST['str1']; $s2=$_POST['str2'];
echo "<br><br> <b> string:</b>"; echo ' ',$s1;
echo "<br><br> <b> length($s1):</b>"; echo ' ',strlen($s1);
echo "<br><br> <b> reverse($s2):</b>"; echo ' ',strrev($s1);
echo "<br><br> <b> substring ($s1,1,4):</b>"; echo ' ',substr($s1,1,4);
echo "<br><br> <b> compare string $s1,$s2:</b>"; echo ' ',strcmp($s1,$s2);
echo "<br><br> <b> word count ($s2):</b>"; echo ' ',str_word_count($s2);
echo "<br><br> <b> replace('a','c',$s1):</b>"; echo ' ',str_replace('a','c',$s1);
echo "<br><br> <b> Trimming of $s2 :</b>"; echo ' ',trim($s2);
echo "<br><br> <b> LCASE($s1):</b>"; echo ' ',strtolower($s1);
echo "<br><br> <b> Ucase($s1):</b>"; echo ' ',strtoupper($s1);
echo "<br><br> <b> Init cap($s2):</b>"; echo ' ',ucfirst($s2);
echo "<br><br> <b> Word specification($s2):</b>";echo ' ',ucwords($s2);
echo "<br><br> <b> Adding Slashes($s2):</b>"; echo ' ',addslashes($s2);
} ?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<b>I Will Tell Fact of child's life based on birth day...<br><br></b>
<Form method="post" action="#">
Enter The Number:
<input name="num" type="number" autofocus placeholder="0" max="7" min="0"><br><br>
<input type="submit" name ="submit" value="submit">
</Form>
<?php
if(isset($_POST['submit'])) {
$d=$_POST['num'];
switch ($d) {
case 1: echo 'Sunday\'s child is Shine of face.'; break;
case 2: echo 'Monday\'s child is fair of face.'; break;
case 3: echo 'Tuesday\'s child is full of grace.'; break;
case 4: echo 'Wednesday\'s child is full of woe.'; break;
case 5: echo 'Thursday\'s child has far to go.'; break;
case 6: echo 'Friday\'s child is loving and giving.'; break;
case 7: echo 'Saturday\'s child works hard for a living.'; break;
default: echo 'No information available for that day'; break;
}
}
?>

</body>
</html>

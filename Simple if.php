<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<b>Positive Results Only will be announced.... <br><br></b>
<Form method="post" action="#">
Enter Your Science Mark : <input type="number" name="mark"> <br><br>
<input type="submit" name ="submit" value="submit">
</Form>
<?php
if(isset($_POST['submit'])) {
$mark=$_POST['mark'];
if($mark>40){
echo "<b> You have passed the science Examination </b>";
}
}
?>
</body>
</html>

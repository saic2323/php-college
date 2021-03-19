<html>
<head>
<Title>Marksheet</Title>
</head>
<body><hr><center>MARKSHEET</center><hr>
<?php
include 'css.php'; if(!isset($_POST['submit'])){
?>
<Form action="#" method="post">
<Table><caption> Personal InFormation</caption>
<tr><td>REGISTER NO</td><td>:<input name="regno" type="text" required="required" size="17" ></td></tr>
<tr><td>ENTER YOUR NAME</td><td>:
<input name="name" type="text" required="required" size="17"/></td></tr>
<tr><td>DOB </td><td>:
<input name="dob" type="date" required="required"></td></tr>
<tr><td>COURSE</td><td>:
<select name="course" required >
<option selected="selected" value="bsc">BSC</option>
<option value="BCA">BCA</option>
</select></td></tr>
<tr><td>GENDER</td><td>:
<input type="radio" name="gender" value="male" checked="checked">male
<input type="radio" name="gender" value="female">female</td></tr>
</Table><br><br>
45
<Table width="276"> <caption> Marks Details</caption>
<tr><td>Mark 1</td><td>:<input name="m[]" type="number" required="required" ></td></tr>
<tr><td>Mark 2</td><td>:<input name="m[]" type="number" required="required" ></td></tr>
<tr><td>Mark 3</td><td>:<input name="m[]" type="number" required="required" ></td></tr>
</table><br>
<input type="submit" class="a" name="submit" value="Insert Record"></Form><hr>
<?php
}
else
{
$regno=$_POST['regno']; $name=$_POST['name']; $gender=$_POST['gender'];
$dob=$_POST['dob']; $course=$_POST['course']; $tot=0;
foreach($_POST['m'] as $a){
$m[]=$a;
$tot+=$a;
}
$avg=$tot/3;
error_reporting(0);
$conn=new mysqli("localhost","root","","record_work");
//creating table
if(mysqli_connect_error())
die("<b>*Connection Failed. Due To...</b>". mysqli_connect_error());
$sql="CREATE TABLE IF NOT EXISTS student(Rollno int(6),Name varchar(20),Course
varchar(20),Dob varchar(15),Gender varchar(10),M1 int(3),M2 int(3),M3 int(3),Tot
int(4),Avg numeric(5,2));";
if($conn->query($sql)===true)
echo"Table created/Prepared To invoke successfully<br>";
else
echo"Error while creating table...",$conn->error;
//inserting records into table
$sql="INSERT INTO student VALUES
($regno,'$name','$course','$dob','$gender',$m[0],$m[1],$m[2],$tot,$avg);";
if($conn->query($sql)===true)
echo"<br> New record added successfully";
else
echo "Error While Inserting Data",$conn->error;
//displaying records from table
$sql="SELECT * FROM student;";
$result=$conn->query($sql);
if($result->num_rows>0) {
?>
<table border=1 cellspacing=2 cellpadding=3><tr>
<th>REG NO</th>
<th>NAME</th>
<th>COURSE</th>
<th>DOB</th>
<th>GENDER </th>
<th>M1</th>
<th>M2</th>
<th>M3</th>
<th>TOTAL</th>
<th>AVG</th></tr>
<?php
while($row=$result->fetch_array()){
echo "<tr>";
for($j=0;$j<=9;$j++)
echo "<td>$row[$j]</td>";
echo "</tr>";
}
echo"</table>";
}
else
echo "No rows selected";
$conn->close();
echo "<br><br><a href=markk.php> INSERT NEW RECORDS</a>";
}
?>
</body>
</html>
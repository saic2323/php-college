<html>
<head>
<Title>MARKSHEET</Title>
</head>
<body>
<Form action="#" method="post">
ENRER YOUR NAME: <input type="text" name="name"/><br><br>
REGISTER NO: <input type="number" name="regno" ><br><br>
DOB: <input name="dob" type="date" ><br><br>
COURSE: <select name="course">
<option value="BCA">BCA</option>
<option value="BSC">BSC</option>
<option value="BA">BA</option>
<option value="BCOM">BCOM</option>
</select><br><br>
ACTIVITIES:
<input type="checkbox" name="activity[]" value="NCC">NCC
<input type="checkbox" name="activity[]" value="NSS">NSS
<input type="checkbox" name="activity[]" value="RoadTrack" >RoadTrack<br><br>
GENDER:
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<br><br>
<b>Enter Subject and Marks<br><br></b>
<input name="s[]" type="text" >&nbsp;:&nbsp;
<input name="m[]" type="number" ><br><br>
<input name="s[]" type="text" >&nbsp;:&nbsp;
<input type="number" name="m[]" ><br><br>
<input type="text" name="s[]" >&nbsp;:&nbsp;
<input type="number" name="m[]" ><br><br>
<input type="text" name="s[]">&nbsp;:&nbsp;
<input type="number" name="m[]"><br><br>
<input type="submit" name="submit" >
</Form>
<?php
if(isset($_POST['submit'])) {
echo "<b> D G Vaisnav college <br>Arumbakkam </b>";
echo "<br><br>Regno=",$_POST['regno'],"&nbsp;&nbsp; ";
echo "Name=",$_POST['gender']=='male'?'Mr. ':'Ms. ', $_POST['name'];
echo "<br><br>Date of birth:",$_POST['dob'];
echo "<br><br>course:",$_POST['course'];
echo "Activities <ul>";
foreach($_POST['activity'] as $a)
echo "<li> $a </li>";
echo "</ul>";
foreach($_POST['m'] as $a){
$m[]=$a;
}
foreach($_POST['s'] as $b){
$s[]=$b;
}
$tot=0;
echo "<strong>Marks:</strong><br><br>";
for($i=0;$i<4;$i++){
echo $s[$i],"=",$m[$i],"<br><br>";
$tot+=$m[$i];
}
$avg=$tot/4;
echo "Total:",$tot;
echo "<br><br>Average:",$avg;
if($m[0]<40 && $m[1]<40 && $m[2]<40 && $m[3]<40)
$g='D';
else{
if($avg>80)
$g='A';
elseif($avg>60)
$g='B';
elseif($avg>40)
$g='C';
}
echo "<br><br>Grade:",$g;
}
?>
</body>
</html>
<html><head>
<Title>
PHP FUNCTIONS
</Title>
</head><body>
<Form action="#" method="post">
Enter Length: <input type="text" name="n1" value="0">* Radius for Circle<br><br>
Enter Breadth: <input type="text" name="n2" value="0"><br><br>
Enter Height: <input type="text" name="n3" value="0"><br><br>
<input type="hidden" name="h1">
<input type="submit" name="s1" value="circle Area" onClick="h1.value=1">&nbsp;
<input type="submit" name="s2" value="Rectangle Area" onClick="h1.value=2">&nbsp;
<input type="submit" name="s3" value="Rectangle Volume" onClick="h1.value=3">&nbsp;
<input type="submit" name="s4" value="Sum & Average" onClick="h1.value=4">&nbsp;<br>
</Form>
<?php if(isset($_POST['h1'])) {
function carea(){
global $n1;
return pi()*pow($n1,2);
}
function Rectangle($l,$b,$h=1){
Return $l*$b*$h;
}
function dfun(){
$array=func_get_args();
$count=func_num_args();
$sum=array_sum($array);
echo "<br>Sum of $count numbers is ",$sum,"\n";
echo "<br>Average of $count numbers is ",$sum/$count;
}
$c=$_POST['h1']; $n1=$_POST['n1'];
$n2=$_POST['n2']; $n3=$_POST['n3'];
switch($c){
case 1: echo "Area of circle with Radius $n1 is ",carea();
break;
case 2: echo "Area of Rectangle with length $n1 and Breath $n2 is ",Rectangle($n1,$n2);
break;
case 3: echo "Volume of Rectangle length $n1 and Breath $n2 height $n3 is ",Rectangle($n1,$n2,$n3);
break;
case 4: dfun($n1,$n2,$n3);echo "<br>";dfun($n1,$n2,$n3);
break;
}}
?>
</body>
</html>

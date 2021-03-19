<html>
<head><Title>Session</Title>
<?php
session_start()
?>
</head>
<body>
<h2>SESSION</h2><br/><hr>
<Form method="post" action="#">
Enter name of The SESSION Variable&nbsp; :&nbsp;
<input name="sname" type="text" ><br><br>
Enter value of The SESSION Variable&nbsp; :&nbsp;
<input name="svalue" type="`text" ><br><br>
choose:
<input type="hidden" name="h1" >
<input type="submit" name="create" value="Create" onClick=" h1.value=1" >&nbsp;&nbsp;
<input type="submit" name="update" value="Update" onClick=" h1.value=2" >&nbsp;&nbsp;
<input type="submit" name="display" value="Display" onClick="h1.value=3" >&nbsp;&nbsp;
<input type="submit" name="delete" value="Delete" onClick=" h1.value=4" >&nbsp;&nbsp;
</Form><hr>
<?php
if(isset($_POST['h1'])){
$sname=$_POST['sname'];$svalue=$_POST['svalue'];
$c=$_POST['h1'];
$bool=isset($_SESSION["$sname"]);
switch($c){
case 1: if($bool)
echo "Already Session $sname Exist";
else{ $_SESSION[$sname]=$svalue;
echo "Session $sname was created with value $svalue sucessfully";
}break;
case 2: if(!$bool)
echo "Session $sname has not been set";
else{ $_SESSION[$sname]=$svalue;
echo "Session $sname was updated with value $svalue sucessfully";
}break;
case 3: if(count($_SESSION)==0)
echo "No SESSIONS has been set";
else
foreach($_SESSION as $a=>$b)
echo "SESSION $a has been set with value $b <br>";
break;
case 4:if($sname==""){
session_unset();
echo " All Session variables of this site are deleted successfully";
}
else{
unset($_SESSION[$sname]);
echo "Session $sname was deleted successfully";
}break;
}
}
?>
</body>
</html>
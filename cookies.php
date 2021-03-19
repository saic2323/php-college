<html>
<head><Title>cookies</Title></head>
<body>
<h2>COOKIES</h2><br/><hr>
<Form method="post" action="#">
Enter name of cookie:<input name="cname" type="text" ><br><br>
Enter value of cookie: <input name="cvalue" type="text" ><br><br>
choose:
<input type="hidden" name="h1" >
<input type="submit" name="create" value="Create" onClick=" h1.value=1" >&nbsp;&nbsp;
<input type="submit" name="update" value="Update" onClick=" h1.value=2" >&nbsp;&nbsp;
<input type="submit" name="delete" value="Delete" onClick=" h1.value=3" >&nbsp;&nbsp;
<input type="submit" name="display" value="Display" onClick="h1.value=4" >&nbsp;&nbsp; </Form><hr>
<?php
if(isset($_POST['h1'])){
$cname=$_POST['cname']; $cvalue=$_POST['cvalue']; $c=$_POST['h1'];
$bool=isset($_COOKIE["$cname"]);
switch($c){
case 1: if($bool)
echo "Already cookie $cname Exist";
else{ setcookie($cname,$cvalue,time()+3600);
echo "cookie $cname was created with value $cvalue sucessfully";
}break;
case 2: if(!$bool)
echo "cookie $cname has not been set";
else{ setcookie($cname,$cvalue,time()+3600);
echo "cookie $cname was updated with value $cvalue sucessfully";
}break;
case 3: if(!$bool)
echo "cookie $cname has not been set";
else{ setcookie($cname,$cvalue,time()-3600);
echo "cookie $cname was deleted sucessfully";
}break;
case 4:if(count($_COOKIE)==0)
echo "No cookies has been set";
else foreach($_COOKIE as $a=>$b)
echo "cookie $a has been set with value $b <br>";
break;
}
}
?>
</body>
</html>
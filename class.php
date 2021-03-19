<?php
class vehicle{
public $speed;
public $clr;
public $comp;
function __construct($s=0,$c="red",$cmp="honda"){
$this->speed=$s;
$this->comp=$cmp;
$this->clr=$c;
echo "<br><b>Welcome to drive simulator</b><br>";
echo "company of the vehicle is &nbsp;",$this->comp,"<br>";
echo "color of the vehicle is &nbsp;",$this->clr,"<br>";
}
function __destruct(){
echo"<b>***Thanks for visiting***</b><br>";
}
public function acclerate(){
$this->speed=$this->speed+10;
echo "***accelerating the vehicle...";
echo "Speed is &nbsp;",$this->speed,"<br>";
}
public function brake(){
$this->speed=$this->speed-10;
echo"***applying brake...";
echo"speed is &nbsp;", $this->speed,"<br>";
}
}
class two_wheeler extends vehicle{
public $gear;
function __construct($s=20,$c="grey",$cmp="honda",$g=0){
parent::__construct($s,$c,$cmp);
$this->gear=$g;
echo $this->gear?"with gear":"without gear";
echo"<br>Bike starting at initial speed of &nbsp;", $this->speed;
echo"<br>";
}
}
$d = new two_wheeler(40,"blue","hero",1);
$d->acclerate();
$d->acclerate();
$d->brake();
echo"Bike1 is stopped<br>";
unset($d);
$e=new two_wheeler;
$e->acclerate();
$e->acclerate();
$e->brake();
echo"Bike2 is stopped<br>";
?>
<?php
echo "<h2>DATE & TIME FUNCTIONS </h2>";
echo "<b> mktime</b>"; echo "<br>",mktime(10,35,44,12,3,2018),"<br>";
$dt=getdate();
echo "<b> <h3>Get Date & Time </h3></b>";
echo' <b> Time:</b>',$dt['hours'],':',$dt['minutes'],':',$dt['seconds'];
echo '<br><b> Date </b>',$dt['mday'],'/',$dt['month'],'/',$dt['year'];
echo '<br><b> Day </b> ',$dt['weekday'];
echo '<br> <b> <h3>Get Date & Time Formatting</h3></b>';
echo date('d-D-M-Y h:i:s A');
echo '<br> <br> <b><h3> STRING TO TIME </h3></b>';
echo '<b> Now :</b> ',date('d-D-M-Y h:i:s A',strtotime('now'));
echo "<br> <b> Yesterday :</b>",date('d-D-M-Y h:i:s A',strtotime("yesterday"));
echo '<br> <b> 3 Days ago :</b>',date('d-D-M-Y h:i:s A',strtotime("3 Days ago"));
echo '<br> <b> next monday : </b>',date('d-D-M-Y h:i:s A',strtotime("next monday"));
echo '<br><br> <b> Checking The Date (29/2/2020) Whether it is Present: </b>';
echo checkdate(2,30,2018)?'TRUE':'FALSE';
?>

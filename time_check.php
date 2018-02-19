<?php
$time = date("H:i:s");
$startwork = "17:37:00";
$timelatefordiff="00:00:59";
$timex=new DateTime($time);
$timey=new DateTime($startwork);



$timelate= strtotime($time) > strtotime($startwork) ? ($timey->diff($timex)->format('%H:%i:%s')) : '00:00:00';

echo "Check-in Time (Time Late): ".$timelate;

$mtime = strtotime($time) - strtotime($startwork);
echo "<br/><br/>Late in Second: ".$mtime;

if($mtime < 60)
{
echo "<br/><br/>You are Not Late";
$timelate ='00:00:00';
echo $timelate;
}
 
echo "<br /> You are late: ";
echo $timelate;

?>

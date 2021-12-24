<?php

include_once 'jdf.php';
//$dataw = jdate_words( array('ss'=>1390,'mm'=>5,'rr'=>20) );
$data = jgetdate( '' , '' , '' , 'en' );
$seconds = $data["seconds"];
$minutes = $data["minutes"];
$hours = $data["hours"];
$year = $data["year"];
$weekday = $data["weekday"];
$month = $data["month"];
$mon = $data["mon"];
$mday = $data["mday"];
$dataw = jdate_words( array('ss'=>$year,'mm'=>$mon,'rr'=>$mday) );
$ss = $dataw["ss"];
$mm = $dataw["mm"];
$rr = $dataw["rr"];


if( $hours <= 11 ) $mood = "صبح"; else if( $hours <= 15 ) $mood = "ظهر"; else if( $hours <= 22 ) $mood = "شب";
$data = "
🪴سلام $mood $weekday شما بخیر
📅تاریخ : $rr $mm سال  $ss  

⏰ساعت : $hours:$minutes:$seconds";
?>

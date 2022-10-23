<?php
$year=gmdate("y"); $mon=gmdate("m"); $day=gmdate("d");
$hour=gmdate("g"); $min=gmdate("i"); $sec=gmdate("s");

$seconds=mktime($hour,$min,$sec,$mon,$day,$year);
//print "seconds? ".$seconds ."<br>";

$seoul=getdate(mktime($hour+9,$min,$sec,$mon,$day,$year));
print("서울 시간: ".
    $seoul['year']."년 ".$seoul['mon']."월 ".$seoul['mday']."일 ".
    $seoul['hours']."시 ".$seoul['minutes']."분 ".$seoul['seconds']."초<br>");

$seoul=getdate(mktime($hour-5,$min,$sec,$mon,$day,$year));
print("뉴욕 시간: ".
    $seoul['year']."년 ".$seoul['mon']."월 ".$seoul['mday']."일 ".
    $seoul['hours']."시 ".$seoul['minutes']."분 ".$seoul['seconds']."초<br>");

$seoul=getdate(mktime($hour+1,$min,$sec,$mon,$day,$year));
print("파리 시간: ".
    $seoul['year']."년 ".$seoul['mon']."월 ".$seoul['mday']."일 ".
    $seoul['hours']."시 ".$seoul['minutes']."분 ".$seoul['seconds']."초<br>");
?>
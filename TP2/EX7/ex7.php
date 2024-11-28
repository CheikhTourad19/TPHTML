<?php
$prog=$_POST['noteprog'];
$stat=$_POST['notestat'];
$base=$_POST['notebase'];
$gpao=$_POST['notegpao'];
$logic=$_POST['notelogic'];


$moy=($prog*3+$stat+$logic+$gpao*2+$base*2)/9;


echo "<h1>Moyenne : $moy</h1>"
?>

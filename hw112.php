<?php
$a=$_POST['a'];
$b=$_POST['b'];
$res=$_POST['res'];
if (($a*$b)==$res) echo "you are a little genius";
else echo "oh... no. correct answer is ".$res=$a*$b.'<br>';
?>
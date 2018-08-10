<html>
<body>
<form method="GET">
    Math:<input type="number" name="m"<br/><br/>
    Physics:<input type="number" name="ph"><br/>
    History:<input type="number" name="h"><br/>
    Logic:<input type="number" name="l"><br/>
    Chemistry:<input type="number" name="c"><br/>
    <input type="submit" value="send">
</form>
<?php
$m=$_GET['m'];
$ph=$_GET['ph'];
$h=$_GET['h'];
$l=$_GET['l'];
$c=$_GET['c'];
$average=($m+$ph+$h+$l+$c)/5;
if ($average <=30) echo "get off";
elseif ($average<=60) echo "not checked";
elseif ($average<=74) echo "checked";
elseif ($average<=89) echo "good";
else echo "exellent";
?>
</body>
</html>
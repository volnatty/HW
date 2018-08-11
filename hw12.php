<html>
<body>
<form method="GET">
    X=: <input type="number" name="x">
    Y=: <input type="number" name="y">
    <input type="submit" value="send">
</form>
<?php
$x=$_GET['x'];
$y=$_GET['y'];
if ($x>0 & $y>0) echo "I quater";
elseif ($x>0 & $y<0) echo "II quater";
elseif ($x<0 & $y>0) echo "III quater";
elseif ($x<0 & $y<0) echo "IV quater";
//elseif ($x==12) echo "winter";
else echo "<br/> on the line))";


?>
</body>
</html>
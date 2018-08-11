<html>
<body>
<form method="GET">
    Side a:<input type="number" name="a">
    Side b:<input type="number" name="b">
    Side c:<input type="number" name="c">
    Side d:<input type="number" name="d">
    <input type="submit" name="check">
</form>
</body>
</html>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
if ( $a==$c & $b==$d & $a==$b) echo "rhombus";
elseif ($a==$c & $b==$d)echo "parallelepiped";
else echo "smth";
?>
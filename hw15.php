<html>
<body>
<form method="POST">
    Side A:<input type="number" name="a">
    Square S:<input type="number" name="b">
    <input type="submit" name="send">
</form>
</body>
</html>
<?php
$a=$_POST['a'];
$s=$_POST['b'];
$sqr=(pow($a,2));
if ($s==$sqr) echo "exists".'<br>';
else echo "NO".'<br>';
?>
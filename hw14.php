<html>
<body>
<form method="POST">
    Side A:<input type="number" name="a">
    Radius R:<input type="number" name="b">
    <input type="submit" name="send">
</form>
</body>
</html>
<?php
$a=$_POST['a'];
$r=$_POST['b'];
$rad_s=(sqrt((pow($a,2))));
if ($r==$rad_s) echo "done".'<br>';
    else echo "NO".'<br>';
?>
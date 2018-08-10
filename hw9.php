
<html>
<body>
<form method="POST">
    Year: <input type="number" name="a">
    <input type="submit" value="send">
</form>
<?php
$a=$_POST['a'];
if (($a%4)==0 and !($a%100)==0) echo "YES))";
elseif (($a%400)==0 ) echo "YES";
else echo "<br/>NO ";
?>
</body>
</html>
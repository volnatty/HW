<html>
<body>
<form method="POST">
    Number: <input type="number" name="a">
    <input type="submit" value="send">
</form>
<?php
$a=$_POST['a'];
if (($a%2)==0) $even="even";
else $even="not even";
if (!((int)($a/100))==0) $digit="three digital";
elseif (!((int)($a/10))==0) $digit="two digital";
else $digit="one digital";
echo $a." is ".$even." ".$digit." number".'<br>';

?>
</body>
</html>
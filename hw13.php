<html>
<body>
<form method="POST">
    First number A:<input type="number" name="a">
    to do:<input type="text" name="s">
    Second number B:<input type="number" name="b">
    <input type="submit" name="send">
</form>
</body>
</html>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$sign=$_POST['s'];
if ($sign=="/") echo "$a / $b = ".$res=$a/$b.'<br>';
if ($sign=="*") echo "$a * $b = ".$res=$a*$b.'<br>';
if ($sign=="+") echo "$a + $b = ".$res=$a+$b.'<br>';
if ($sign=="-") echo "$a - $b = ".$res=$a-$b.'<br>';
?>